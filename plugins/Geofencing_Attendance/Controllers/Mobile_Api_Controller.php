<?php

namespace Geofencing_Attendance\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Mobile_Api_Controller extends ResourceController
{
    use ResponseTrait;

    protected $format = 'json';
    protected $geofencing_model;
    protected $current_user;

    public function __construct()
    {
        $this->geofencing_model = model('Geofencing_Attendance\Models\Geofencing_model');
        helper('jwt');

        // Validate JWT token for all mobile API endpoints
        $is_valid_token = validateToken();
        if ($is_valid_token['status'] == false) {
            $message = [
                'status' => false,
                'message' => $is_valid_token['message'] ?? "Authentication required"
            ];
            echo json_encode($message);
            die;
        }

        $this->current_user = $is_valid_token['data'];
    }

    /**
     * Register device for staff member
     * POST /api/geofencing/register_device
     */
    public function register_device()
    {
        $request = service('request');

        $device_data = [
            'device_id' => $request->getPost('device_id'),
            'device_name' => $request->getPost('device_name'),
            'device_type' => $request->getPost('device_type') ?: 'android',
            'device_model' => $request->getPost('device_model'),
            'os_version' => $request->getPost('os_version'),
            'app_version' => $request->getPost('app_version'),
            'push_token' => $request->getPost('push_token')
        ];

        if (!$device_data['device_id']) {
            return $this->respond([
                'status' => false,
                'message' => 'Device ID is required'
            ], 400);
        }

        $result = $this->geofencing_model->register_staff_device(
            $this->current_user->user_id,
            $device_data
        );

        if ($result) {
            return $this->respond([
                'status' => true,
                'message' => 'Device registered successfully',
                'device_data' => $device_data
            ]);
        } else {
            return $this->respond([
                'status' => false,
                'message' => 'Failed to register device'
            ], 500);
        }
    }

    /**
     * Get geofences assigned to current user
     * GET /api/geofencing/geofences
     */
    public function get_geofences()
    {
        $geofences = $this->geofencing_model->get_geofences([
            'active_only' => true,
            'staff_id' => $this->current_user->user_id
        ]);

        return $this->respond([
            'status' => true,
            'data' => $geofences,
            'count' => count($geofences)
        ]);
    }

    /**
     * Get nearby geofences based on current location
     * GET /api/geofencing/geofences/nearby?lat=28.6139&lng=77.2090&radius=5
     */
    public function get_nearby_geofences()
    {
        $request = service('request');
        $lat = $request->getGet('lat');
        $lng = $request->getGet('lng');
        $radius = $request->getGet('radius') ?: 5; // default 5km

        if (!$lat || !$lng) {
            return $this->respond([
                'status' => false,
                'message' => 'Latitude and longitude are required'
            ], 400);
        }

        $geofences = $this->geofencing_model->get_nearby_geofences($lat, $lng, $radius);

        return $this->respond([
            'status' => true,
            'data' => $geofences,
            'count' => count($geofences)
        ]);
    }

    /**
     * Check if current location is within any assigned geofence
     * POST /api/geofencing/check_location
     */
    public function check_location()
    {
        $request = service('request');
        $lat = $request->getPost('latitude');
        $lng = $request->getPost('longitude');
        $accuracy = $request->getPost('accuracy') ?: 10;

        if (!$lat || !$lng) {
            return $this->respond([
                'status' => false,
                'message' => 'Latitude and longitude are required'
            ], 400);
        }

        // Log the location
        $this->geofencing_model->log_location_history([
            'staff_id' => $this->current_user->user_id,
            'latitude' => $lat,
            'longitude' => $lng,
            'accuracy' => $accuracy,
            'recorded_at' => date('Y-m-d H:i:s')
        ]);

        // Check if location is within any assigned geofence
        $geofence_status = $this->geofencing_model->check_location_in_geofence(
            $this->current_user->user_id,
            $lat,
            $lng
        );

        return $this->respond([
            'status' => true,
            'data' => $geofence_status
        ]);
    }

    /**
     * Staff check-in
     * POST /api/geofencing/checkin
     */
    public function checkin()
    {
        $request = service('request');

        $checkin_data = [
            'latitude' => $request->getPost('latitude'),
            'longitude' => $request->getPost('longitude'),
            'accuracy' => $request->getPost('accuracy') ?: 10,
            'geofence_id' => $request->getPost('geofence_id'),
            'photo' => $request->getFile('photo'),
            'notes' => $request->getPost('notes')
        ];

        if (!$checkin_data['latitude'] || !$checkin_data['longitude']) {
            return $this->respond([
                'status' => false,
                'message' => 'Location coordinates are required'
            ], 400);
        }

        // Check if already checked in
        $current_session = $this->geofencing_model->get_active_attendance_session($this->current_user->user_id);
        if ($current_session) {
            return $this->respond([
                'status' => false,
                'message' => 'You are already checked in',
                'current_session' => $current_session
            ], 400);
        }

        // Verify location is within geofence if geofence_id provided
        if ($checkin_data['geofence_id']) {
            $is_valid_location = $this->geofencing_model->validate_location_in_geofence(
                $checkin_data['geofence_id'],
                $checkin_data['latitude'],
                $checkin_data['longitude']
            );

            if (!$is_valid_location) {
                return $this->respond([
                    'status' => false,
                    'message' => 'You are not within the required geofence area'
                ], 400);
            }
        }

        // Handle photo upload
        $photo_path = null;
        if ($checkin_data['photo'] && $checkin_data['photo']->isValid()) {
            $photo_path = $this->_handle_photo_upload($checkin_data['photo'], 'checkin');
        }

        // Create attendance session
        $session_data = [
            'staff_id' => $this->current_user->user_id,
            'geofence_id' => $checkin_data['geofence_id'],
            'checkin_time' => date('Y-m-d H:i:s'),
            'checkin_latitude' => $checkin_data['latitude'],
            'checkin_longitude' => $checkin_data['longitude'],
            'checkin_accuracy' => $checkin_data['accuracy'],
            'checkin_photo' => $photo_path,
            'checkin_notes' => $checkin_data['notes'],
            'status' => 'active'
        ];

        $session_id = $this->geofencing_model->create_attendance_session($session_data);

        if ($session_id) {
            // Log location
            $this->geofencing_model->log_location_history([
                'staff_id' => $this->current_user->user_id,
                'latitude' => $checkin_data['latitude'],
                'longitude' => $checkin_data['longitude'],
                'accuracy' => $checkin_data['accuracy'],
                'recorded_at' => date('Y-m-d H:i:s'),
                'session_id' => $session_id,
                'event_type' => 'checkin'
            ]);

            return $this->respond([
                'status' => true,
                'message' => 'Check-in successful',
                'session_id' => $session_id,
                'checkin_time' => $session_data['checkin_time']
            ]);
        } else {
            return $this->respond([
                'status' => false,
                'message' => 'Failed to create attendance session'
            ], 500);
        }
    }

    /**
     * Staff check-out
     * POST /api/geofencing/checkout
     */
    public function checkout()
    {
        $request = service('request');

        $checkout_data = [
            'latitude' => $request->getPost('latitude'),
            'longitude' => $request->getPost('longitude'),
            'accuracy' => $request->getPost('accuracy') ?: 10,
            'photo' => $request->getFile('photo'),
            'notes' => $request->getPost('notes')
        ];

        if (!$checkout_data['latitude'] || !$checkout_data['longitude']) {
            return $this->respond([
                'status' => false,
                'message' => 'Location coordinates are required'
            ], 400);
        }

        // Get active session
        $current_session = $this->geofencing_model->get_active_attendance_session($this->current_user->user_id);
        if (!$current_session) {
            return $this->respond([
                'status' => false,
                'message' => 'No active check-in session found'
            ], 400);
        }

        // Handle photo upload
        $photo_path = null;
        if ($checkout_data['photo'] && $checkout_data['photo']->isValid()) {
            $photo_path = $this->_handle_photo_upload($checkout_data['photo'], 'checkout');
        }

        // Update attendance session with checkout data
        $update_data = [
            'checkout_time' => date('Y-m-d H:i:s'),
            'checkout_latitude' => $checkout_data['latitude'],
            'checkout_longitude' => $checkout_data['longitude'],
            'checkout_accuracy' => $checkout_data['accuracy'],
            'checkout_photo' => $photo_path,
            'checkout_notes' => $checkout_data['notes'],
            'status' => 'completed'
        ];

        // Calculate work duration
        $checkin_time = strtotime($current_session['checkin_time']);
        $checkout_time = time();
        $work_duration = $checkout_time - $checkin_time;
        $update_data['work_duration'] = $work_duration;

        $result = $this->geofencing_model->update_attendance_session($current_session['id'], $update_data);

        if ($result) {
            // Log location
            $this->geofencing_model->log_location_history([
                'staff_id' => $this->current_user->user_id,
                'latitude' => $checkout_data['latitude'],
                'longitude' => $checkout_data['longitude'],
                'accuracy' => $checkout_data['accuracy'],
                'recorded_at' => date('Y-m-d H:i:s'),
                'session_id' => $current_session['id'],
                'event_type' => 'checkout'
            ]);

            return $this->respond([
                'status' => true,
                'message' => 'Check-out successful',
                'session_id' => $current_session['id'],
                'checkout_time' => $update_data['checkout_time'],
                'work_duration' => $this->_format_duration($work_duration)
            ]);
        } else {
            return $this->respond([
                'status' => false,
                'message' => 'Failed to update attendance session'
            ], 500);
        }
    }

    /**
     * Update location during active session
     * POST /api/geofencing/update_location
     */
    public function update_location()
    {
        $request = service('request');

        $location_data = [
            'latitude' => $request->getPost('latitude'),
            'longitude' => $request->getPost('longitude'),
            'accuracy' => $request->getPost('accuracy') ?: 10
        ];

        if (!$location_data['latitude'] || !$location_data['longitude']) {
            return $this->respond([
                'status' => false,
                'message' => 'Location coordinates are required'
            ], 400);
        }

        // Check if there's an active session
        $current_session = $this->geofencing_model->get_active_attendance_session($this->current_user->user_id);

        // Log location
        $location_log = [
            'staff_id' => $this->current_user->user_id,
            'latitude' => $location_data['latitude'],
            'longitude' => $location_data['longitude'],
            'accuracy' => $location_data['accuracy'],
            'recorded_at' => date('Y-m-d H:i:s'),
            'session_id' => $current_session ? $current_session['id'] : null,
            'event_type' => 'location_update'
        ];

        $log_id = $this->geofencing_model->log_location_history($location_log);

        if ($log_id) {
            return $this->respond([
                'status' => true,
                'message' => 'Location updated successfully',
                'has_active_session' => $current_session ? true : false
            ]);
        } else {
            return $this->respond([
                'status' => false,
                'message' => 'Failed to update location'
            ], 500);
        }
    }

    /**
     * Start break
     * POST /api/geofencing/start_break
     */
    public function start_break()
    {
        $request = service('request');

        $break_data = [
            'break_type' => $request->getPost('break_type') ?: 'regular',
            'notes' => $request->getPost('notes')
        ];

        // Check for active session
        $current_session = $this->geofencing_model->get_active_attendance_session($this->current_user->user_id);
        if (!$current_session) {
            return $this->respond([
                'status' => false,
                'message' => 'No active attendance session found'
            ], 400);
        }

        // Check if already on break
        $active_break = $this->geofencing_model->get_active_break_session($current_session['id']);
        if ($active_break) {
            return $this->respond([
                'status' => false,
                'message' => 'Break is already active',
                'active_break' => $active_break
            ], 400);
        }

        $break_session_data = [
            'attendance_session_id' => $current_session['id'],
            'staff_id' => $this->current_user->user_id,
            'break_type' => $break_data['break_type'],
            'start_time' => date('Y-m-d H:i:s'),
            'notes' => $break_data['notes'],
            'status' => 'active'
        ];

        $break_id = $this->geofencing_model->create_break_session($break_session_data);

        if ($break_id) {
            return $this->respond([
                'status' => true,
                'message' => 'Break started successfully',
                'break_id' => $break_id,
                'start_time' => $break_session_data['start_time']
            ]);
        } else {
            return $this->respond([
                'status' => false,
                'message' => 'Failed to start break'
            ], 500);
        }
    }

    /**
     * End break
     * POST /api/geofencing/end_break
     */
    public function end_break()
    {
        $request = service('request');

        // Check for active session
        $current_session = $this->geofencing_model->get_active_attendance_session($this->current_user->user_id);
        if (!$current_session) {
            return $this->respond([
                'status' => false,
                'message' => 'No active attendance session found'
            ], 400);
        }

        // Get active break
        $active_break = $this->geofencing_model->get_active_break_session($current_session['id']);
        if (!$active_break) {
            return $this->respond([
                'status' => false,
                'message' => 'No active break found'
            ], 400);
        }

        // Calculate break duration
        $start_time = strtotime($active_break['start_time']);
        $end_time = time();
        $break_duration = $end_time - $start_time;

        $update_data = [
            'end_time' => date('Y-m-d H:i:s'),
            'duration' => $break_duration,
            'status' => 'completed'
        ];

        $result = $this->geofencing_model->update_break_session($active_break['id'], $update_data);

        if ($result) {
            return $this->respond([
                'status' => true,
                'message' => 'Break ended successfully',
                'break_id' => $active_break['id'],
                'end_time' => $update_data['end_time'],
                'duration' => $this->_format_duration($break_duration)
            ]);
        } else {
            return $this->respond([
                'status' => false,
                'message' => 'Failed to end break'
            ], 500);
        }
    }

    /**
     * Get attendance history
     * GET /api/geofencing/attendance_history?date_from=2024-01-01&date_to=2024-01-31
     */
    public function get_attendance_history()
    {
        $request = service('request');

        $filters = [
            'staff_id' => $this->current_user->user_id,
            'date_from' => $request->getGet('date_from') ?: date('Y-m-01'), // First day of current month
            'date_to' => $request->getGet('date_to') ?: date('Y-m-t'), // Last day of current month
            'limit' => $request->getGet('limit') ?: 50,
            'offset' => $request->getGet('offset') ?: 0
        ];

        $attendance_history = $this->geofencing_model->get_attendance_sessions($filters);
        $total_count = $this->geofencing_model->count_attendance_sessions($filters);

        return $this->respond([
            'status' => true,
            'data' => $attendance_history,
            'pagination' => [
                'total' => $total_count,
                'limit' => $filters['limit'],
                'offset' => $filters['offset'],
                'has_more' => ($filters['offset'] + $filters['limit']) < $total_count
            ]
        ]);
    }

    /**
     * Get daily attendance report
     * GET /api/geofencing/daily_report?date=2024-01-15
     */
    public function get_daily_report()
    {
        $request = service('request');
        $date = $request->getGet('date') ?: date('Y-m-d');

        $report = $this->geofencing_model->get_daily_attendance_report($this->current_user->user_id, $date);

        return $this->respond([
            'status' => true,
            'date' => $date,
            'data' => $report
        ]);
    }

    /**
     * Get weekly attendance report
     * GET /api/geofencing/weekly_report?week_start=2024-01-15
     */
    public function get_weekly_report()
    {
        $request = service('request');
        $week_start = $request->getGet('week_start') ?: date('Y-m-d', strtotime('monday this week'));

        $report = $this->geofencing_model->get_weekly_attendance_report($this->current_user->user_id, $week_start);

        return $this->respond([
            'status' => true,
            'week_start' => $week_start,
            'data' => $report
        ]);
    }

    /**
     * Get monthly attendance report
     * GET /api/geofencing/monthly_report?month=2024-01
     */
    public function get_monthly_report()
    {
        $request = service('request');
        $month = $request->getGet('month') ?: date('Y-m');

        $report = $this->geofencing_model->get_monthly_attendance_report($this->current_user->user_id, $month);

        return $this->respond([
            'status' => true,
            'month' => $month,
            'data' => $report
        ]);
    }

    /**
     * Get current status (active session, breaks, etc.)
     * GET /api/geofencing/status
     */
    public function get_status()
    {
        $current_session = $this->geofencing_model->get_active_attendance_session($this->current_user->user_id);
        $active_break = null;

        if ($current_session) {
            $active_break = $this->geofencing_model->get_active_break_session($current_session['id']);
        }

        $status_data = [
            'is_checked_in' => $current_session ? true : false,
            'current_session' => $current_session,
            'is_on_break' => $active_break ? true : false,
            'active_break' => $active_break,
            'user_info' => [
                'user_id' => $this->current_user->user_id,
                'first_name' => $this->current_user->first_name,
                'last_name' => $this->current_user->last_name
            ]
        ];

        return $this->respond([
            'status' => true,
            'data' => $status_data
        ]);
    }

    /**
     * Handle photo upload for check-in/check-out
     */
    private function _handle_photo_upload($photo, $type = 'checkin')
    {
        if (!$photo->isValid()) {
            return null;
        }

        $upload_path = WRITEPATH . 'uploads/attendance_photos/';
        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0755, true);
        }

        $filename = $type . '_' . $this->current_user->user_id . '_' . date('YmdHis') . '_' . $photo->getRandomName();

        if ($photo->move($upload_path, $filename)) {
            return 'attendance_photos/' . $filename;
        }

        return null;
    }

    /**
     * Format duration in seconds to readable format
     */
    private function _format_duration($seconds)
    {
        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds % 3600) / 60);
        $seconds = $seconds % 60;

        return sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
    }
}
