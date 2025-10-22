<?php

namespace Geofencing_Attendance\Controllers;

use App\Controllers\Security_Controller;

class Geofencing_Controller extends Security_Controller
{
    protected $geofencing_model;
    protected $Users_model;

    public function __construct()
    {
        parent::__construct();
        $this->geofencing_model = model('Geofencing_Attendance\Models\Geofencing_model');
        $this->Users_model = model('App\Models\Users_model');

        // Check if user has permission for geofencing management
        $this->access_only_admin_or_settings_admin();
    }

    /**
     * Main geofencing dashboard
     */
    public function index()
    {
        // Get staff count using proper CodeIgniter 4 method
        $total_staff = $this->Users_model->where('user_type', 'staff')
                                        ->where('status', 'active')
                                        ->where('deleted', 0)
                                        ->countAllResults();

        $view_data = [
            'page_title' => app_lang('geofencing_attendance'),
            'active_geofences' => count($this->geofencing_model->get_geofences(['active_only' => true])),
            'total_staff' => $total_staff,
            'today_sessions' => $this->get_today_attendance_stats()
        ];

        return $this->template->rander("Geofencing_Attendance\Views\dashboard", $view_data);
    }

    /**
     * Geofences management page
     */
    public function geofences()
    {
        $view_data = [
            'page_title' => app_lang('manage_geofences'),
            'geofences' => $this->geofencing_model->get_geofences(),
            'geofence_types' => [
                'office' => 'Office',
                'client_site' => 'Client Site',
                'field_area' => 'Field Area',
                'custom' => 'Custom'
            ]
        ];

        return $this->template->rander("Geofencing_Attendance\Views\geofences\index", $view_data);
    }

    /**
     * Create/Edit geofence form
     */
    public function geofence_form($id = 0)
    {
        $geofence = new \stdClass();
        $geofence->id = 0;
        $geofence->name = "";
        $geofence->description = "";
        $geofence->latitude = "";
        $geofence->longitude = "";
        $geofence->radius = 500;
        $geofence->address = "";
        $geofence->geofence_type = "office";
        $geofence->is_active = 1;
        $geofence->allow_field_work = 0;

        if ($id) {
            $geofence_data = $this->geofencing_model->get_one($id);
            if (!$geofence_data) {
                show_404();
            }
            foreach ($geofence_data as $key => $value) {
                $geofence->$key = $value;
            }
        }

        $view_data = [
            'model_info' => $geofence,
            'geofence_types' => [
                'office' => 'Office',
                'client_site' => 'Client Site',
                'field_area' => 'Field Area',
                'custom' => 'Custom'
            ]
        ];

        return $this->template->rander("Geofencing_Attendance\Views\geofences\form", $view_data);
    }

    /**
     * Save geofence (create or update)
     */
    public function save_geofence()
    {
        $id = $this->request->getPost('id');

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'latitude' => (float)$this->request->getPost('latitude'),
            'longitude' => (float)$this->request->getPost('longitude'),
            'radius' => (int)$this->request->getPost('radius'),
            'address' => $this->request->getPost('address'),
            'geofence_type' => $this->request->getPost('geofence_type'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
            'allow_field_work' => $this->request->getPost('allow_field_work') ? 1 : 0
        ];

        // Validation
        if (empty($data['name']) || !$data['latitude'] || !$data['longitude']) {
            echo json_encode(['success' => false, 'message' => 'Name, latitude and longitude are required']);
            return;
        }

        if ($data['radius'] < 10 || $data['radius'] > 5000) {
            echo json_encode(['success' => false, 'message' => 'Radius must be between 10m and 5000m']);
            return;
        }

        try {
            if ($id) {
                $data['updated_at'] = date('Y-m-d H:i:s');
                $result = $this->geofencing_model->ci_save($data, $id);
            } else {
                $data['created_by'] = $this->login_user->id;
                $data['created_at'] = date('Y-m-d H:i:s');
                $result = $this->geofencing_model->ci_save($data);
                $id = $result;
            }

            if ($result) {
                echo json_encode([
                    'success' => true,
                    'message' => $id ? 'Geofence updated successfully' : 'Geofence created successfully',
                    'id' => $id
                ]);
            } else {
                echo json_encode(['success' => false, 'message' => 'Failed to save geofence']);
            }
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
        }
    }

    /**
     * Delete geofence
     */
    public function delete_geofence()
    {
        $id = $this->request->getPost('id');

        if (!$id) {
            echo json_encode(['success' => false, 'message' => 'Invalid geofence ID']);
            return;
        }

        // Check if geofence has active sessions
        $active_sessions = $this->db->table('rise_attendance_sessions')
            ->where('geofence_id', $id)
            ->where('status', 'active')
            ->countAllResults();

        if ($active_sessions > 0) {
            echo json_encode(['success' => false, 'message' => 'Cannot delete geofence with active attendance sessions']);
            return;
        }

        $result = $this->geofencing_model->delete_permanently($id);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Geofence deleted successfully']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to delete geofence']);
        }
    }

    /**
     * Staff assignment page for a geofence
     */
    public function geofence_staff($geofence_id)
    {
        $geofence = $this->geofencing_model->get_one($geofence_id);
        if (!$geofence) {
            show_404();
        }

        // Get all active staff members
        $all_staff = $this->Users_model->get_all_where([
            'user_type' => 'staff',
            'status' => 'active',
            'deleted' => 0
        ])->getResult();

        // Get currently assigned staff
        $assigned_staff = $this->db->table('rise_geofence_staff gs')
            ->select('gs.*, u.first_name, u.last_name, u.email, u.job_title')
            ->join('rise_users u', 'u.id = gs.staff_id')
            ->where('gs.geofence_id', $geofence_id)
            ->where('gs.is_active', 1)
            ->get()
            ->getResult();

        $view_data = [
            'page_title' => 'Staff Assignment - ' . $geofence->name,
            'geofence' => $geofence,
            'all_staff' => $all_staff,
            'assigned_staff' => $assigned_staff
        ];

        return $this->template->rander("Geofencing_Attendance\Views\geofences\staff_assignment", $view_data);
    }

    /**
     * Save staff assignments for geofence
     */
    public function save_geofence_staff()
    {
        $geofence_id = $this->request->getPost('geofence_id');
        $staff_ids = $this->request->getPost('staff_ids');

        if (!$geofence_id) {
            echo json_encode(['success' => false, 'message' => 'Invalid geofence ID']);
            return;
        }

        if (!is_array($staff_ids)) {
            $staff_ids = [];
        }

        try {
            $this->db->transStart();

            // Remove existing assignments
            $this->db->table('rise_geofence_staff')
                ->where('geofence_id', $geofence_id)
                ->delete();

            // Add new assignments
            foreach ($staff_ids as $staff_id) {
                $assignment_data = [
                    'geofence_id' => $geofence_id,
                    'staff_id' => $staff_id,
                    'assigned_by' => $this->login_user->id,
                    'assigned_at' => date('Y-m-d H:i:s'),
                    'is_active' => 1
                ];

                $this->db->table('rise_geofence_staff')->insert($assignment_data);
            }

            $this->db->transComplete();

            if ($this->db->transStatus()) {
                echo json_encode(['success' => true, 'message' => 'Staff assignments updated successfully']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Failed to update assignments']);
            }

        } catch (Exception $e) {
            echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
        }
    }

    /**
     * Live tracking dashboard
     */
    public function live_tracking()
    {
        // Get staff with recent location updates
        $active_staff = $this->get_active_staff_locations();

        $view_data = [
            'page_title' => app_lang('live_tracking'),
            'active_staff' => $active_staff,
            'geofences' => $this->geofencing_model->get_geofences(['active_only' => true])
        ];

        return $this->template->rander("Geofencing_Attendance\Views\live_tracking", $view_data);
    }

    /**
     * Get active staff locations (AJAX)
     */
    public function get_active_staff_locations()
    {
        $locations = $this->db->table('rise_location_history lh')
            ->select('lh.*, u.first_name, u.last_name, u.image, as_session.status as session_status, as_session.checkin_time, g.name as geofence_name')
            ->join('rise_users u', 'u.id = lh.staff_id')
            ->join('rise_attendance_sessions as_session', 'as_session.id = lh.session_id AND as_session.status = "active"', 'left')
            ->join('rise_geofences g', 'g.id = as_session.geofence_id', 'left')
            ->where('lh.recorded_at >=', date('Y-m-d H:i:s', strtotime('-1 hour')))
            ->where('u.deleted', 0)
            ->where('u.status', 'active')
            ->orderBy('lh.recorded_at', 'DESC')
            ->get()
            ->getResultArray();

        // Filter to get latest location per staff
        $latest_locations = [];
        foreach ($locations as $location) {
            if (!isset($latest_locations[$location['staff_id']])) {
                $latest_locations[$location['staff_id']] = $location;
            }
        }

        if ($this->request->isAJAX()) {
            echo json_encode(['success' => true, 'data' => array_values($latest_locations)]);
            return;
        }

        return array_values($latest_locations);
    }

    /**
     * Attendance sessions list
     */
    public function attendance_sessions()
    {
        $filters = [
            'date_from' => $this->request->getGet('date_from') ?: date('Y-m-d'),
            'date_to' => $this->request->getGet('date_to') ?: date('Y-m-d'),
            'staff_id' => $this->request->getGet('staff_id'),
            'status' => $this->request->getGet('status')
        ];

        $sessions = $this->geofencing_model->get_attendance_sessions($filters);
        $total_sessions = $this->geofencing_model->count_attendance_sessions($filters);

        // Get staff list for filter dropdown
        $staff_list = $this->Users_model->get_all_where([
            'user_type' => 'staff',
            'status' => 'active',
            'deleted' => 0
        ])->getResult();

        $view_data = [
            'page_title' => app_lang('attendance_sessions'),
            'sessions' => $sessions,
            'total_sessions' => $total_sessions,
            'staff_list' => $staff_list,
            'filters' => $filters
        ];

        return $this->template->rander("Geofencing_Attendance\Views\attendance\sessions", $view_data);
    }

    /**
     * Attendance session details
     */
    public function session_details($session_id)
    {
        $session = $this->db->table('rise_attendance_sessions as_session')
            ->select('as_session.*, u.first_name, u.last_name, u.image, g.name as geofence_name, g.address as geofence_address')
            ->join('rise_users u', 'u.id = as_session.staff_id')
            ->join('rise_geofences g', 'g.id = as_session.geofence_id', 'left')
            ->where('as_session.id', $session_id)
            ->get()
            ->getRowArray();

        if (!$session) {
            show_404();
        }

        // Get break sessions
        $breaks = $this->db->table('rise_break_sessions')
            ->where('attendance_session_id', $session_id)
            ->orderBy('start_time', 'ASC')
            ->get()
            ->getResultArray();

        // Get location history for this session
        $location_history = $this->db->table('rise_location_history')
            ->where('session_id', $session_id)
            ->orderBy('recorded_at', 'ASC')
            ->get()
            ->getResultArray();

        $view_data = [
            'page_title' => 'Session Details - ' . $session['first_name'] . ' ' . $session['last_name'],
            'session' => $session,
            'breaks' => $breaks,
            'location_history' => $location_history
        ];

        return $this->template->rander("Geofencing_Attendance\Views\attendance\session_details", $view_data);
    }

    /**
     * Reports dashboard
     */
    public function reports()
    {
        $view_data = [
            'page_title' => app_lang('attendance_reports'),
            'staff_list' => $this->Users_model->get_all_where([
                'user_type' => 'staff',
                'status' => 'active',
                'deleted' => 0
            ])->getResult()
        ];

        return $this->template->rander("Geofencing_Attendance\Views\reports\index", $view_data);
    }

    /**
     * Generate daily report
     */
    public function daily_report()
    {
        $date = $this->request->getGet('date') ?: date('Y-m-d');
        $staff_id = $this->request->getGet('staff_id');

        $filters = ['date_from' => $date, 'date_to' => $date];
        if ($staff_id) {
            $filters['staff_id'] = $staff_id;
        }

        $sessions = $this->geofencing_model->get_attendance_sessions($filters);

        $view_data = [
            'page_title' => 'Daily Attendance Report - ' . date('F j, Y', strtotime($date)),
            'report_date' => $date,
            'sessions' => $sessions,
            'staff_id' => $staff_id
        ];

        return $this->template->rander("Geofencing_Attendance\Views\reports\daily", $view_data);
    }

    /**
     * Generate weekly report
     */
    public function weekly_report()
    {
        $week_start = $this->request->getGet('week_start') ?: date('Y-m-d', strtotime('monday this week'));
        $staff_id = $this->request->getGet('staff_id');

        $week_end = date('Y-m-d', strtotime($week_start . ' +6 days'));

        $filters = ['date_from' => $week_start, 'date_to' => $week_end];
        if ($staff_id) {
            $filters['staff_id'] = $staff_id;
        }

        $sessions = $this->geofencing_model->get_attendance_sessions($filters);

        // Group sessions by staff and date
        $staff_weekly_data = [];
        foreach ($sessions as $session) {
            $staff_id_key = $session['staff_id'];
            $date_key = date('Y-m-d', strtotime($session['checkin_time']));

            if (!isset($staff_weekly_data[$staff_id_key])) {
                $staff_weekly_data[$staff_id_key] = [
                    'staff_name' => $session['first_name'] . ' ' . $session['last_name'],
                    'days' => []
                ];
            }

            $staff_weekly_data[$staff_id_key]['days'][$date_key] = $session;
        }

        $view_data = [
            'page_title' => 'Weekly Attendance Report',
            'week_start' => $week_start,
            'week_end' => $week_end,
            'staff_weekly_data' => $staff_weekly_data,
            'staff_id' => $staff_id
        ];

        return $this->template->rander("Geofencing_Attendance\Views\reports\weekly", $view_data);
    }

    /**
     * Generate monthly report
     */
    public function monthly_report()
    {
        $month = $this->request->getGet('month') ?: date('Y-m');
        $staff_id = $this->request->getGet('staff_id');

        $month_start = $month . '-01';
        $month_end = date('Y-m-t', strtotime($month_start));

        $filters = ['date_from' => $month_start, 'date_to' => $month_end];
        if ($staff_id) {
            $filters['staff_id'] = $staff_id;
        }

        $sessions = $this->geofencing_model->get_attendance_sessions($filters);

        // Calculate monthly statistics
        $monthly_stats = $this->calculate_monthly_statistics($sessions, $month_start, $month_end);

        $view_data = [
            'page_title' => 'Monthly Attendance Report - ' . date('F Y', strtotime($month_start)),
            'month' => $month,
            'sessions' => $sessions,
            'monthly_stats' => $monthly_stats,
            'staff_id' => $staff_id
        ];

        return $this->template->rander("Geofencing_Attendance\Views\reports\monthly", $view_data);
    }

    /**
     * Settings page
     */
    public function settings()
    {
        $settings = [
            'require_photo_checkin' => $this->geofencing_model->get_setting('require_photo_checkin', true),
            'require_photo_checkout' => $this->geofencing_model->get_setting('require_photo_checkout', true),
            'allow_field_work' => $this->geofencing_model->get_setting('allow_field_work', false),
            'max_location_accuracy' => $this->geofencing_model->get_setting('max_location_accuracy', 100),
            'location_update_interval' => $this->geofencing_model->get_setting('location_update_interval', 300),
            'working_hours_start' => $this->geofencing_model->get_setting('working_hours_start', '09:00'),
            'working_hours_end' => $this->geofencing_model->get_setting('working_hours_end', '18:00'),
            'auto_checkout_hours' => $this->geofencing_model->get_setting('auto_checkout_hours', 12),
            'enable_real_time_tracking' => $this->geofencing_model->get_setting('enable_real_time_tracking', true),
            'data_retention_days' => $this->geofencing_model->get_setting('data_retention_days', 30)
        ];

        $view_data = [
            'page_title' => app_lang('geofencing_settings'),
            'settings' => $settings
        ];

        return $this->template->rander("Geofencing_Attendance\Views\settings", $view_data);
    }

    /**
     * Save settings
     */
    public function save_settings()
    {
        $settings = [
            'require_photo_checkin' => $this->request->getPost('require_photo_checkin') ? 1 : 0,
            'require_photo_checkout' => $this->request->getPost('require_photo_checkout') ? 1 : 0,
            'allow_field_work' => $this->request->getPost('allow_field_work') ? 1 : 0,
            'max_location_accuracy' => (int)$this->request->getPost('max_location_accuracy'),
            'location_update_interval' => (int)$this->request->getPost('location_update_interval'),
            'working_hours_start' => $this->request->getPost('working_hours_start'),
            'working_hours_end' => $this->request->getPost('working_hours_end'),
            'auto_checkout_hours' => (int)$this->request->getPost('auto_checkout_hours'),
            'enable_real_time_tracking' => $this->request->getPost('enable_real_time_tracking') ? 1 : 0,
            'data_retention_days' => (int)$this->request->getPost('data_retention_days')
        ];

        try {
            foreach ($settings as $key => $value) {
                $this->geofencing_model->save_setting($key, $value);
            }

            echo json_encode(['success' => true, 'message' => 'Settings saved successfully']);
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'message' => 'Error saving settings: ' . $e->getMessage()]);
        }
    }

    /**
     * Export attendance data to CSV
     */
    public function export_attendance()
    {
        $filters = [
            'date_from' => $this->request->getGet('date_from') ?: date('Y-m-01'),
            'date_to' => $this->request->getGet('date_to') ?: date('Y-m-t'),
            'staff_id' => $this->request->getGet('staff_id')
        ];

        $sessions = $this->geofencing_model->get_attendance_sessions($filters);

        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="attendance_export_' . date('Y-m-d') . '.csv"');

        $output = fopen('php://output', 'w');

        // CSV headers
        fputcsv($output, [
            'Staff Name',
            'Date',
            'Check-in Time',
            'Check-out Time',
            'Work Duration (Hours)',
            'Geofence',
            'Status',
            'Notes'
        ]);

        // Data rows
        foreach ($sessions as $session) {
            $work_duration = '';
            if ($session['work_duration']) {
                $hours = floor($session['work_duration'] / 3600);
                $minutes = floor(($session['work_duration'] % 3600) / 60);
                $work_duration = sprintf('%d:%02d', $hours, $minutes);
            }

            fputcsv($output, [
                $session['first_name'] . ' ' . $session['last_name'],
                date('Y-m-d', strtotime($session['checkin_time'])),
                $session['checkin_time'] ? date('H:i:s', strtotime($session['checkin_time'])) : '',
                $session['checkout_time'] ? date('H:i:s', strtotime($session['checkout_time'])) : '',
                $work_duration,
                $session['geofence_name'] ?: 'N/A',
                ucfirst($session['status']),
                $session['checkin_notes'] ?: ''
            ]);
        }

        fclose($output);
    }

    /**
     * Helper: Get today's attendance statistics
     */
    private function get_today_attendance_stats()
    {
        $today = date('Y-m-d');

        $stats = [
            'total_checkins' => 0,
            'active_sessions' => 0,
            'completed_sessions' => 0
        ];

        try {
            $today_sessions = $this->geofencing_model->get_attendance_sessions([
                'date_from' => $today,
                'date_to' => $today
            ]);

            $stats['total_checkins'] = count($today_sessions);

            foreach ($today_sessions as $session) {
                if ($session['status'] === 'active') {
                    $stats['active_sessions']++;
                } elseif ($session['status'] === 'completed') {
                    $stats['completed_sessions']++;
                }
            }
        } catch (Exception $e) {
            // If there's an error, return default stats
            error_log("Geofencing stats error: " . $e->getMessage());
        }

        return $stats;
    }

    /**
     * Helper: Calculate monthly statistics
     */
    public function test()
    {
        echo "<h2>Geofencing Test Page</h2>";
        echo "<p>This is a test page to verify routing is working.</p>";
        echo "<p>Current time: " . date('Y-m-d H:i:s') . "</p>";

        // Test geofencing model
        try {
            $geofences = $this->geofencing_model->get_geofences();
            echo "<h3>Geofences in Database:</h3>";
            if (empty($geofences)) {
                echo "<p>No geofences found.</p>";
            } else {
                echo "<ul>";
                foreach ($geofences as $geofence) {
                    echo "<li>" . htmlspecialchars($geofence['name']) . " - " . $geofence['geofence_type'] . "</li>";
                }
                echo "</ul>";
            }
        } catch (Exception $e) {
            echo "<p>Error loading geofences: " . $e->getMessage() . "</p>";
        }

        echo "<p><a href='" . get_uri('geofencing_attendance') . "'>&larr; Back to Dashboard</a></p>";
    }

    private function calculate_monthly_statistics($sessions, $month_start, $month_end)
    {
        $stats = [
            'total_sessions' => count($sessions),
            'total_work_hours' => 0,
            'average_work_hours' => 0,
            'staff_summary' => []
        ];

        $staff_totals = [];

        foreach ($sessions as $session) {
            $staff_id = $session['staff_id'];
            $staff_name = $session['first_name'] . ' ' . $session['last_name'];

            if (!isset($staff_totals[$staff_id])) {
                $staff_totals[$staff_id] = [
                    'name' => $staff_name,
                    'days_worked' => 0,
                    'total_hours' => 0
                ];
            }

            $staff_totals[$staff_id]['days_worked']++;

            if ($session['work_duration']) {
                $hours = $session['work_duration'] / 3600;
                $stats['total_work_hours'] += $hours;
                $staff_totals[$staff_id]['total_hours'] += $hours;
            }
        }

        if ($stats['total_sessions'] > 0) {
            $stats['average_work_hours'] = $stats['total_work_hours'] / $stats['total_sessions'];
        }

        $stats['staff_summary'] = $staff_totals;

        return $stats;
    }

    /**
     * Get geofences list data for DataTable
     */
    public function geofences_list_data()
    {
        $geofences = $this->geofencing_model->get_geofences();
        $result = array();

        foreach ($geofences as $data) {
            $result[] = $this->_make_geofence_row($data);
        }

        echo json_encode(array("data" => $result));
    }

    /**
     * Make geofence row for DataTable
     */
    private function _make_geofence_row($data)
    {
        $geofence_type_badge = "<span class='badge bg-info'>" . ucfirst(str_replace('_', ' ', $data['geofence_type'])) . "</span>";

        $location = "<small>" . number_format($data['latitude'], 6) . ",<br>" . number_format($data['longitude'], 6) . "</small>";
        if ($data['address']) {
            $location .= "<br><small class='text-muted'>" . $data['address'] . "</small>";
        }

        $radius = "<span class='badge bg-secondary'>" . $data['radius'] . "m</span>";

        $staff_assignment = anchor(get_uri('geofencing_attendance/geofence_staff/' . $data['id']),
            "<i data-feather='users' class='icon-16'></i> " . app_lang('assign_staff'),
            array("class" => "btn btn-sm btn-outline-primary")
        );

        $status = $data['is_active'] ?
            "<span class='badge bg-success'>" . app_lang('active') . "</span>" :
            "<span class='badge bg-warning'>" . app_lang('inactive') . "</span>";

        $options = "";

        $options .= modal_anchor(get_uri("geofencing_attendance/geofence_form"), "<i data-feather='edit' class='icon-16'></i>",
            array("class" => "edit", "title" => app_lang('edit_geofence'), "data-post-id" => $data['id']));

        $options .= js_anchor("<i data-feather='x' class='icon-16'></i>",
            array('title' => app_lang('delete_geofence'), "class" => "delete",
                  "data-id" => $data['id'],
                  "data-geofence-name" => $data['name'],
                  "data-action-url" => get_uri("geofencing_attendance/delete_geofence"),
                  "data-action" => "delete-confirmation"));

        $name = "<strong>" . $data['name'] . "</strong>";
        if ($data['description']) {
            $name .= "<br><small class='text-muted'>" . $data['description'] . "</small>";
        }

        return array(
            $data['id'],
            $name,
            $geofence_type_badge,
            $location,
            $radius,
            $staff_assignment,
            $status,
            $options
        );
    }
}
