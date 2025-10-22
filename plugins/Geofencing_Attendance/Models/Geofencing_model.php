<?php

namespace Geofencing_Attendance\Models;

use App\Models\Crud_model;

class Geofencing_model extends Crud_model
{
    function __construct()
    {
        parent::__construct();
        $this->table = 'rise_geofences';
    }

    /**
     * Get all active geofences
     * @param array $options
     * @return array
     */
    public function get_geofences($options = [])
    {
        $db = \Config\Database::connect();
        $builder = $db->table('rise_geofences');

        $builder->select('*');
        $builder->where('deleted', 0);

        if (isset($options['active_only']) && $options['active_only']) {
            $builder->where('is_active', 1);
        }

        if (isset($options['type']) && $options['type']) {
            $builder->where('geofence_type', $options['type']);
        }

        if (isset($options['staff_id']) && $options['staff_id']) {
            $builder->join('rise_geofence_staff gs', 'gs.geofence_id = rise_geofences.id');
            $builder->where('gs.staff_id', $options['staff_id']);
            $builder->where('gs.is_active', 1);
        }

        $builder->orderBy('name', 'ASC');
        return $builder->get()->getResultArray();
    }

    /**
     * Get geofences near a location using Haversine formula
     * @param float $latitude
     * @param float $longitude
     * @param int $radius_km
     * @return array
     */
    public function get_nearby_geofences($latitude, $longitude, $radius_km = 10)
    {
        // Use Haversine formula to find nearby geofences
        $sql = "SELECT *,
                (6371 * acos(cos(radians(?)) * cos(radians(latitude)) *
                cos(radians(longitude) - radians(?)) + sin(radians(?)) *
                sin(radians(latitude)))) AS distance
                FROM rise_geofences
                WHERE deleted = 0 AND is_active = 1
                HAVING distance < ?
                ORDER BY distance";

        $db = \Config\Database::connect();
        $query = $db->query($sql, [$latitude, $longitude, $latitude, $radius_km]);
        return $query->getResultArray();
    }

    /**
     * Check if location is within a specific geofence
     * @param int $geofence_id
     * @param float $latitude
     * @param float $longitude
     * @return bool
     */
    public function validate_location_in_geofence($geofence_id, $latitude, $longitude)
    {
        $geofence = $this->get_one($geofence_id);
        if (!$geofence) {
            return false;
        }

        $distance = $this->calculate_distance(
            $latitude,
            $longitude,
            $geofence->latitude,
            $geofence->longitude
        );

        return $distance <= $geofence->radius;
    }

    /**
     * Check if staff location is within any assigned geofence
     * @param int $staff_id
     * @param float $latitude
     * @param float $longitude
     * @return array
     */
    public function check_location_in_geofence($staff_id, $latitude, $longitude)
    {
        $geofences = $this->get_geofences([
            'active_only' => true,
            'staff_id' => $staff_id
        ]);

        $result = [
            'is_inside_geofence' => false,
            'geofence_data' => null,
            'distance_to_nearest' => null,
            'location' => [
                'latitude' => $latitude,
                'longitude' => $longitude
            ]
        ];

        $nearest_distance = PHP_INT_MAX;
        $nearest_geofence = null;

        foreach ($geofences as $geofence) {
            $distance = $this->calculate_distance(
                $latitude,
                $longitude,
                $geofence['latitude'],
                $geofence['longitude']
            );

            if ($distance < $nearest_distance) {
                $nearest_distance = $distance;
                $nearest_geofence = $geofence;
            }

            if ($distance <= $geofence['radius']) {
                $result['is_inside_geofence'] = true;
                $result['geofence_data'] = $geofence;
                break;
            }
        }

        if (!$result['is_inside_geofence'] && $nearest_geofence) {
            $result['distance_to_nearest'] = round($nearest_distance, 2);
            $result['nearest_geofence'] = $nearest_geofence;
        }

        return $result;
    }

    /**
     * Calculate distance between two coordinates using Haversine formula
     * @param float $lat1
     * @param float $lng1
     * @param float $lat2
     * @param float $lng2
     * @return float Distance in meters
     */
    public function calculate_distance($lat1, $lng1, $lat2, $lng2)
    {
        $earth_radius = 6371000; // Earth radius in meters

        $lat1_rad = deg2rad($lat1);
        $lat2_rad = deg2rad($lat2);
        $delta_lat = deg2rad($lat2 - $lat1);
        $delta_lng = deg2rad($lng2 - $lng1);

        $a = sin($delta_lat / 2) * sin($delta_lat / 2) +
             cos($lat1_rad) * cos($lat2_rad) *
             sin($delta_lng / 2) * sin($delta_lng / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        return $earth_radius * $c;
    }

    /**
     * Register or update staff device
     * @param int $staff_id
     * @param array $device_data
     * @return bool
     */
    public function register_staff_device($staff_id, $device_data)
    {
        $db = \Config\Database::connect();
        $existing = $db->table('rise_staff_devices')
            ->where('staff_id', $staff_id)
            ->where('device_id', $device_data['device_id'])
            ->get()
            ->getRow();

        $data = array_merge($device_data, [
            'staff_id' => $staff_id,
            'last_seen' => date('Y-m-d H:i:s'),
            'is_active' => 1
        ]);

        if ($existing) {
            return $db->table('rise_staff_devices')
                ->where('id', $existing->id)
                ->update($data);
        } else {
            $data['created_at'] = date('Y-m-d H:i:s');
            return $db->table('rise_staff_devices')->insert($data);
        }
    }

    /**
     * Get active attendance session for staff
     * @param int $staff_id
     * @return array|null
     */
    public function get_active_attendance_session($staff_id)
    {
        $db = \Config\Database::connect();
        return $db->table('rise_attendance_sessions')
            ->where('staff_id', $staff_id)
            ->where('status', 'active')
            ->where('checkout_time IS NULL')
            ->orderBy('checkin_time', 'DESC')
            ->limit(1)
            ->get()
            ->getRowArray();
    }

    /**
     * Create new attendance session
     * @param array $session_data
     * @return int|false
     */
    public function create_attendance_session($session_data)
    {
        $session_data['created_at'] = date('Y-m-d H:i:s');
        $db = \Config\Database::connect();

        if ($db->table('rise_attendance_sessions')->insert($session_data)) {
            return $db->insertID();
        }
        return false;
    }

    /**
     * Update attendance session
     * @param int $session_id
     * @param array $update_data
     * @return bool
     */
    public function update_attendance_session($session_id, $update_data)
    {
        $db = \Config\Database::connect();
        return $db->table('rise_attendance_sessions')
            ->where('id', $session_id)
            ->update($update_data);
    }

    /**
     * Log location history
     * @param array $location_data
     * @return int|false
     */
    public function log_location_history($location_data)
    {
        $db = \Config\Database::connect();
        if ($db->table('rise_location_history')->insert($location_data)) {
            return $db->insertID();
        }
        return false;
    }

    /**
     * Get active break session
     * @param int $attendance_session_id
     * @return array|null
     */
    public function get_active_break_session($attendance_session_id)
    {
        $db = \Config\Database::connect();
        return $db->table('rise_break_sessions')
            ->where('attendance_session_id', $attendance_session_id)
            ->where('status', 'active')
            ->where('end_time IS NULL')
            ->orderBy('start_time', 'DESC')
            ->limit(1)
            ->get()
            ->getRowArray();
    }

    /**
     * Create break session
     * @param array $break_data
     * @return int|false
     */
    public function create_break_session($break_data)
    {
        $break_data['created_at'] = date('Y-m-d H:i:s');
        $db = \Config\Database::connect();

        if ($db->table('rise_break_sessions')->insert($break_data)) {
            return $db->insertID();
        }
        return false;
    }

    /**
     * Update break session
     * @param int $break_id
     * @param array $update_data
     * @return bool
     */
    public function update_break_session($break_id, $update_data)
    {
        $db = \Config\Database::connect();
        return $db->table('rise_break_sessions')
            ->where('id', $break_id)
            ->update($update_data);
    }

    /**
     * Get attendance sessions with filters
     * @param array $filters
     * @return array
     */
    public function get_attendance_sessions($filters = [])
    {
        $db = \Config\Database::connect();
        $builder = $db->table('rise_attendance_sessions as as')
            ->select('as.*, g.name as geofence_name, g.geofence_type')
            ->join('rise_geofences g', 'g.id = as.check_in_geofence_id', 'left');

        if (!empty($filters['staff_id'])) {
            $builder->where('as.staff_id', $filters['staff_id']);
        }

        if (!empty($filters['date_from'])) {
            $builder->where('as.check_in_time >=', $filters['date_from'] . ' 00:00:00');
        }

        if (!empty($filters['date_to'])) {
            $builder->where('as.check_in_time <=', $filters['date_to'] . ' 23:59:59');
        }

        if (!empty($filters['status'])) {
            $builder->where('as.status', $filters['status']);
        }

        $builder->orderBy('as.check_in_time', 'DESC');

        if (!empty($filters['limit'])) {
            $builder->limit($filters['limit'], $filters['offset'] ?? 0);
        }

        return $builder->get()->getResultArray();
    }

    /**
     * Count attendance sessions with filters
     * @param array $filters
     * @return int
     */
    public function count_attendance_sessions($filters = [])
    {
        $db = \Config\Database::connect();
        $builder = $db->table('rise_attendance_sessions as as');

        if (!empty($filters['staff_id'])) {
            $builder->where('as.staff_id', $filters['staff_id']);
        }

        if (!empty($filters['date_from'])) {
            $builder->where('as.check_in_time >=', $filters['date_from'] . ' 00:00:00');
        }

        if (!empty($filters['date_to'])) {
            $builder->where('as.check_in_time <=', $filters['date_to'] . ' 23:59:59');
        }

        if (!empty($filters['status'])) {
            $builder->where('as.status', $filters['status']);
        }

        return $builder->countAllResults();
    }

    /**
     * Get daily attendance report
     * @param int $staff_id
     * @param string $date
     * @return array
     */
    public function get_daily_attendance_report($staff_id, $date)
    {
        $db = \Config\Database::connect();

        // Get attendance session for the day
        $session = $db->table('rise_attendance_sessions as as')
            ->select('as.*, g.name as geofence_name')
            ->join('rise_geofences g', 'g.id = as.check_in_geofence_id', 'left')
            ->where('as.staff_id', $staff_id)
            ->where('as.check_in_time >=', $date . ' 00:00:00')
            ->where('as.check_in_time <=', $date . ' 23:59:59')
            ->get()
            ->getRowArray();

        // Get break sessions for the day
        $breaks = [];
        if ($session) {
            $breaks = $db->table('rise_break_sessions')
                ->where('attendance_session_id', $session['id'])
                ->orderBy('start_time', 'ASC')
                ->get()
                ->getResultArray();
        }

        $report = [
            'session' => $session,
            'breaks' => $breaks,
            'summary' => [
                'is_present' => $session ? true : false,
                'check_in_time' => $session['check_in_time'] ?? null,
                'check_out_time' => $session['check_out_time'] ?? null,
                'work_duration' => $session['total_hours'] ?? null,
                'total_break_duration' => 0,
                'status' => $session['status'] ?? 'absent'
            ]
        ];

        // Calculate total break duration
        foreach ($breaks as $break) {
            if ($break['duration']) {
                $report['summary']['total_break_duration'] += $break['duration'];
            }
        }

        return $report;
    }

    /**
     * Get weekly attendance report
     * @param int $staff_id
     * @param string $week_start
     * @return array
     */
    public function get_weekly_attendance_report($staff_id, $week_start)
    {
        $db = \Config\Database::connect();
        $week_end = date('Y-m-d', strtotime($week_start . ' +6 days'));

        $sessions = $db->table('rise_attendance_sessions as as')
            ->select('as.*, g.name as geofence_name, DATE(as.check_in_time) as work_date')
            ->join('rise_geofences g', 'g.id = as.check_in_geofence_id', 'left')
            ->where('as.staff_id', $staff_id)
            ->where('as.check_in_time >=', $week_start . ' 00:00:00')
            ->where('as.check_in_time <=', $week_end . ' 23:59:59')
            ->orderBy('as.check_in_time', 'ASC')
            ->get()
            ->getResultArray();

        $report = [
            'week_period' => ['start' => $week_start, 'end' => $week_end],
            'sessions' => $sessions,
            'summary' => [
                'total_days_worked' => count($sessions),
                'total_work_duration' => 0,
                'average_work_duration' => 0
            ]
        ];

        foreach ($sessions as $session) {
            if ($session['total_hours']) {
                $report['summary']['total_work_duration'] += $session['total_hours'] * 3600; // Convert hours to seconds
            }
        }

        if ($report['summary']['total_days_worked'] > 0) {
            $report['summary']['average_work_duration'] =
                $report['summary']['total_work_duration'] / $report['summary']['total_days_worked'];
        }

        return $report;
    }

    /**
     * Get monthly attendance report
     * @param int $staff_id
     * @param string $month (Y-m format)
     * @return array
     */
    public function get_monthly_attendance_report($staff_id, $month)
    {
        $db = \Config\Database::connect();
        $month_start = $month . '-01';
        $month_end = date('Y-m-t', strtotime($month_start));

        $sessions = $db->table('rise_attendance_sessions as as')
            ->select('as.*, g.name as geofence_name, DATE(as.check_in_time) as work_date')
            ->join('rise_geofences g', 'g.id = as.check_in_geofence_id', 'left')
            ->where('as.staff_id', $staff_id)
            ->where('as.check_in_time >=', $month_start . ' 00:00:00')
            ->where('as.check_in_time <=', $month_end . ' 23:59:59')
            ->orderBy('as.check_in_time', 'ASC')
            ->get()
            ->getResultArray();

        $total_days_in_month = cal_days_in_month(CAL_GREGORIAN,
            date('m', strtotime($month_start)),
            date('Y', strtotime($month_start)));

        $report = [
            'month_period' => ['start' => $month_start, 'end' => $month_end],
            'sessions' => $sessions,
            'summary' => [
                'total_days_in_month' => $total_days_in_month,
                'total_days_worked' => count($sessions),
                'total_work_duration' => 0,
                'attendance_percentage' => 0
            ]
        ];

        foreach ($sessions as $session) {
            if ($session['total_hours']) {
                $report['summary']['total_work_duration'] += $session['total_hours'] * 3600; // Convert hours to seconds
            }
        }

        // Calculate attendance percentage (assuming weekdays only)
        $weekdays_in_month = $this->count_weekdays_in_month($month_start, $month_end);
        if ($weekdays_in_month > 0) {
            $report['summary']['attendance_percentage'] =
                ($report['summary']['total_days_worked'] / $weekdays_in_month) * 100;
        }

        return $report;
    }

    /**
     * Count weekdays in a month (Monday to Friday)
     * @param string $start_date
     * @param string $end_date
     * @return int
     */
    private function count_weekdays_in_month($start_date, $end_date)
    {
        $weekdays = 0;
        $current = strtotime($start_date);
        $end = strtotime($end_date);

        while ($current <= $end) {
            $day_of_week = date('N', $current);
            if ($day_of_week >= 1 && $day_of_week <= 5) { // Monday to Friday
                $weekdays++;
            }
            $current = strtotime('+1 day', $current);
        }

        return $weekdays;
    }

    /**
     * Get geofencing settings
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function get_setting($key, $default = null)
    {
        $db = \Config\Database::connect();
        $result = $db->table('rise_geofencing_settings')
            ->where('setting_key', $key)
            ->get()
            ->getRow();

        return $result ? $result->setting_value : $default;
    }

    /**
     * Save geofencing setting
     * @param string $key
     * @param mixed $value
     * @return bool
     */
    public function save_setting($key, $value)
    {
        $db = \Config\Database::connect();
        $existing = $db->table('rise_geofencing_settings')
            ->where('setting_key', $key)
            ->get()
            ->getRow();

        $data = [
            'setting_key' => $key,
            'setting_value' => $value,
            'updated_at' => date('Y-m-d H:i:s')
        ];

        if ($existing) {
            return $db->table('rise_geofencing_settings')
                ->where('setting_key', $key)
                ->update($data);
        } else {
            $data['created_at'] = date('Y-m-d H:i:s');
            return $db->table('rise_geofencing_settings')->insert($data);
        }
    }

    /**
     * Auto-checkout staff who have been checked in for too long
     * @param int $hours
     * @return int Number of auto-checkouts performed
     */
    public function auto_checkout_overdue_sessions($hours = 12)
    {
        $db = \Config\Database::connect();
        $cutoff_time = date('Y-m-d H:i:s', strtotime("-{$hours} hours"));

        $overdue_sessions = $db->table('rise_attendance_sessions')
            ->where('status', 'active')
            ->where('check_out_time IS NULL')
            ->where('check_in_time <', $cutoff_time)
            ->get()
            ->getResultArray();

        $auto_checkout_count = 0;

        foreach ($overdue_sessions as $session) {
            $update_data = [
                'check_out_time' => date('Y-m-d H:i:s'),
                'notes' => 'Auto-checkout after ' . $hours . ' hours',
                'status' => 'completed',
                'total_hours' => round((strtotime(date('Y-m-d H:i:s')) - strtotime($session['check_in_time'])) / 3600, 2)
            ];

            if ($this->update_attendance_session($session['id'], $update_data)) {
                $auto_checkout_count++;
            }
        }

        return $auto_checkout_count;
    }
}
