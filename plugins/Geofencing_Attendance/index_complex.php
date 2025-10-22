<?php

//Prevent direct access
defined('PLUGINPATH') or exit('No direct script access allowed');

/*
  Plugin Name: Geofencing Attendance
  Description: Advanced geofencing-based attendance management system with real-time tracking, mobile API support, and comprehensive reporting for staff attendance monitoring
  Version: 1.0.0
  Requires at least: 3.0
  Author: Custom Development
  Integration: RestApi, Hr_profile, Hr_payroll
 */

// Define plugin constants
if (!defined('GEOFENCING_ATTENDANCE_PATH')) {
    define('GEOFENCING_ATTENDANCE_PATH', PLUGINPATH . 'Geofencing_Attendance/');
}

if (!defined('GEOFENCING_ATTENDANCE_URL')) {
    define('GEOFENCING_ATTENDANCE_URL', base_url('plugins/Geofencing_Attendance/'));
}

if (!defined('GEOFENCING_ATTENDANCE_ASSETS_URL')) {
    define('GEOFENCING_ATTENDANCE_ASSETS_URL', base_url('plugins/Geofencing_Attendance/assets/'));
}

// Add menu items to left sidebar
app_hooks()->add_filter('app_filter_staff_left_menu', function ($sidebar_menu) {
    $sidebar_menu["geofencing_attendance"] = [
        "name" => "geofencing_attendance",
        "url" => "geofencing_attendance",
        "class" => "map-pin",
        "position" => 7,
        "submenu" => [
            [
                "name" => "geofences",
                "url" => "geofencing_attendance/geofences",
                "class" => "map"
            ],
            [
                "name" => "live_tracking",
                "url" => "geofencing_attendance/live_tracking",
                "class" => "navigation"
            ],
            [
                "name" => "attendance_sessions",
                "url" => "geofencing_attendance/attendance_sessions",
                "class" => "clock"
            ],
            [
                "name" => "attendance_reports",
                "url" => "geofencing_attendance/attendance_reports",
                "class" => "bar-chart-2"
            ],
            [
                "name" => "device_management",
                "url" => "geofencing_attendance/device_management",
                "class" => "smartphone"
            ],
            [
                "name" => "settings",
                "url" => "geofencing_attendance/settings",
                "class" => "settings"
            ]
        ]
    ];

    return $sidebar_menu;
});

// Register installation hook
register_installation_hook("Geofencing_Attendance", function ($item_purchase_code = null) {
    include GEOFENCING_ATTENDANCE_PATH . "install/install.php";
});

// Register uninstallation hook
register_uninstallation_hook("Geofencing_Attendance", function () {
    $dbprefix = get_db_prefix();
    $db = db_connect('default');

    // Drop all plugin tables
    $tables = [
        'geofences',
        'geofence_staff',
        'attendance_sessions',
        'location_history',
        'staff_devices',
        'geofencing_settings',
        'break_sessions',
        'attendance_exceptions',
        'attendance_reports'
    ];

    foreach ($tables as $table) {
        $db->query("DROP TABLE IF EXISTS `{$dbprefix}{$table}`");
    }

    // Drop views
    $db->query("DROP VIEW IF EXISTS `view_active_attendance_sessions`");
    $db->query("DROP VIEW IF EXISTS `view_staff_current_location`");
});

// Add CSS and JS files to head
app_hooks()->add_action('app_hook_head_extension', function () {
    $viewuri = $_SERVER['REQUEST_URI'];

    if (strpos($viewuri, '/geofencing_attendance') !== false) {
        echo '<link rel="stylesheet" type="text/css" href="' . GEOFENCING_ATTENDANCE_ASSETS_URL . 'css/geofencing.css?v=' . time() . '" />';
        echo '<script src="' . GEOFENCING_ATTENDANCE_ASSETS_URL . 'js/geofencing.js?v=' . time() . '"></script>';

        // Load Google Maps API
        $google_maps_key = get_setting('google_maps_api_key') ?: 'YOUR_GOOGLE_MAPS_API_KEY';
        echo '<script src="https://maps.googleapis.com/maps/api/js?key=' . $google_maps_key . '&libraries=geometry"></script>';
    }
});

// Register permissions
app_hooks()->add_filter('app_filter_staff_permissions', function ($permissions) {
    $permissions['geofencing_attendance'] = [
        'geofencing_can_view_all_locations' => 'Can view all staff locations',
        'geofencing_can_manage_geofences' => 'Can create/edit/delete geofences',
        'geofencing_can_manage_attendance' => 'Can manage staff attendance sessions',
        'geofencing_can_view_reports' => 'Can view attendance reports',
        'geofencing_can_manage_devices' => 'Can manage staff devices',
        'geofencing_can_override_attendance' => 'Can manually override attendance',
        'geofencing_can_manage_settings' => 'Can manage geofencing settings',
        'geofencing_can_view_own_attendance' => 'Can view own attendance only',
        'geofencing_can_export_reports' => 'Can export attendance reports'
    ];

    return $permissions;
});

// Add notification handlers
app_hooks()->add_action('app_hook_after_cron_run', function () {
    // Auto-checkout staff who forgot to check out
    $geofencing_model = model('Geofencing_Attendance\Models\Geofencing_model');
    $geofencing_model->auto_checkout_incomplete_sessions();

    // Generate daily attendance reports
    $geofencing_model->generate_daily_reports();

    // Clean old location history (older than 30 days)
    $geofencing_model->cleanup_old_location_data();
});

// Integration with existing HR modules
app_hooks()->add_filter('app_filter_hr_attendance_data', function ($attendance_data) {
    // Integrate geofencing attendance with HR_payroll attendance system
    $geofencing_model = model('Geofencing_Attendance\Models\Geofencing_model');
    return $geofencing_model->integrate_with_hr_attendance($attendance_data);
});

// Add API endpoints exclusion from CSRF
app_hooks()->add_filter('app_filter_app_csrf_exclude_uris', function ($urls) {
    $urls[] = "api/geofencing/*";
    return $urls;
});

// Register custom language entries
app_hooks()->add_filter('app_filter_language_entries', function ($language_entries) {
    $language_entries = array_merge($language_entries, [
        // Menu items
        'geofencing_attendance' => 'Geofencing Attendance',
        'geofences' => 'Geofences',
        'live_tracking' => 'Live Tracking',
        'attendance_sessions' => 'Attendance Sessions',
        'attendance_reports' => 'Attendance Reports',
        'device_management' => 'Device Management',

        // General terms
        'geofence' => 'Geofence',
        'check_in' => 'Check In',
        'check_out' => 'Check Out',
        'location_tracking' => 'Location Tracking',
        'attendance_session' => 'Attendance Session',
        'field_work' => 'Field Work',
        'office_location' => 'Office Location',
        'client_site' => 'Client Site',

        // Actions
        'add_geofence' => 'Add Geofence',
        'edit_geofence' => 'Edit Geofence',
        'delete_geofence' => 'Delete Geofence',
        'assign_staff' => 'Assign Staff',
        'view_location' => 'View Location',
        'track_staff' => 'Track Staff',
        'generate_report' => 'Generate Report',
        'export_report' => 'Export Report',
        'manual_checkin' => 'Manual Check-in',
        'manual_checkout' => 'Manual Check-out',

        // Fields
        'geofence_name' => 'Geofence Name',
        'geofence_description' => 'Description',
        'latitude' => 'Latitude',
        'longitude' => 'Longitude',
        'radius' => 'Radius (meters)',
        'address' => 'Address',
        'geofence_type' => 'Geofence Type',
        'allow_field_work' => 'Allow Field Work',
        'staff_assigned' => 'Staff Assigned',
        'current_location' => 'Current Location',
        'last_update' => 'Last Update',
        'session_date' => 'Session Date',
        'checkin_time' => 'Check-in Time',
        'checkout_time' => 'Check-out Time',
        'total_hours' => 'Total Hours',
        'break_hours' => 'Break Hours',
        'overtime_hours' => 'Overtime Hours',
        'device_info' => 'Device Info',
        'attendance_photo' => 'Attendance Photo',

        // Status
        'active' => 'Active',
        'inactive' => 'Inactive',
        'completed' => 'Completed',
        'incomplete' => 'Incomplete',
        'present' => 'Present',
        'absent' => 'Absent',
        'late' => 'Late',
        'on_break' => 'On Break',
        'checked_in' => 'Checked In',
        'checked_out' => 'Checked Out',

        // Messages
        'geofence_created_success' => 'Geofence created successfully',
        'geofence_updated_success' => 'Geofence updated successfully',
        'geofence_deleted_success' => 'Geofence deleted successfully',
        'staff_assigned_success' => 'Staff assigned successfully',
        'checkin_success' => 'Check-in recorded successfully',
        'checkout_success' => 'Check-out recorded successfully',
        'location_updated' => 'Location updated successfully',
        'outside_geofence_warning' => 'You are outside the allowed work area',
        'device_registered_success' => 'Device registered successfully',
        'report_generated_success' => 'Report generated successfully',

        // Errors
        'geofence_not_found' => 'Geofence not found',
        'invalid_location' => 'Invalid location data',
        'already_checked_in' => 'Already checked in for today',
        'not_checked_in' => 'Not checked in yet',
        'location_accuracy_poor' => 'GPS accuracy is too low',
        'device_not_registered' => 'Device not registered',
        'photo_required' => 'Selfie photo is required',
        'outside_working_hours' => 'Outside working hours',

        // Reports
        'daily_attendance_report' => 'Daily Attendance Report',
        'weekly_attendance_report' => 'Weekly Attendance Report',
        'monthly_attendance_report' => 'Monthly Attendance Report',
        'staff_location_report' => 'Staff Location Report',
        'geofence_usage_report' => 'Geofence Usage Report',
        'attendance_exceptions' => 'Attendance Exceptions',
        'working_hours_summary' => 'Working Hours Summary',
        'overtime_summary' => 'Overtime Summary',

        // Settings
        'geofencing_settings' => 'Geofencing Settings',
        'default_radius' => 'Default Geofence Radius',
        'require_photo_checkin' => 'Require Photo on Check-in',
        'require_photo_checkout' => 'Require Photo on Check-out',
        'max_location_accuracy' => 'Maximum Location Accuracy',
        'auto_checkout_hours' => 'Auto Checkout Hours',
        'location_update_interval' => 'Location Update Interval',
        'working_hours_start' => 'Working Hours Start',
        'working_hours_end' => 'Working Hours End',
        'lunch_break_duration' => 'Lunch Break Duration',
        'late_threshold' => 'Late Arrival Threshold',
        'overtime_threshold' => 'Overtime Threshold',
        'enable_real_time_tracking' => 'Enable Real-time Tracking',
    ]);

    return $language_entries;
});

// Auto-activation hook to ensure plugin stays active
app_hooks()->add_action('app_hook_before_view', function() {
    $Settings_model = model("App\Models\Settings_model");
    $plugins = $Settings_model->get_setting("plugins");
    $plugins = @unserialize($plugins);

    if (!$plugins || !is_array($plugins)) {
        $plugins = array();
    }

    // If Geofencing_Attendance is not activated, reactivate it
    if (!isset($plugins["Geofencing_Attendance"]) || $plugins["Geofencing_Attendance"] !== "activated") {
        $plugins["Geofencing_Attendance"] = "activated";
        save_plugins_config($plugins);
        $Settings_model->save_setting("plugins", serialize($plugins));
    }
});
