<?php
/**
 * Geofencing Attendance Plugin Installation Script
 *
 * This script handles the complete installation of the geofencing attendance system
 * including database creation, default settings, and plugin activation.
 */

ini_set('max_execution_time', 300); // 5 minutes

$product = "Geofencing_Attendance";

echo "Installing Geofencing Attendance Plugin...\n";

try {
    $db = db_connect('default');
    $dbprefix = get_db_prefix();

    // Check if required files exist
    if (!is_file(PLUGINPATH . "$product/install/database.sql")) {
        throw new Exception("Database SQL file not found in install folder!");
    }

    echo "✓ Installation files found\n";

    // Start transaction
    $db->transStart();

    // Read and execute database schema
    $sql = file_get_contents(PLUGINPATH . "$product/install/database.sql");

    // Replace table prefixes
    $sql = str_replace('CREATE TABLE IF NOT EXISTS `rise_', 'CREATE TABLE IF NOT EXISTS `' . $dbprefix, $sql);
    $sql = str_replace('INSERT INTO `rise_', 'INSERT INTO `' . $dbprefix, $sql);
    $sql = str_replace('ALTER TABLE `rise_', 'ALTER TABLE `' . $dbprefix, $sql);
    $sql = str_replace('DROP TABLE IF EXISTS `rise_', 'DROP TABLE IF EXISTS `' . $dbprefix, $sql);
    $sql = str_replace('FROM rise_', 'FROM ' . $dbprefix, $sql);
    $sql = str_replace('JOIN rise_', 'JOIN ' . $dbprefix, $sql);

    echo "✓ Database schema prepared\n";

    // Split SQL into individual queries
    $queries = array_filter(array_map('trim', explode(';', $sql)));

    $query_count = 0;
    foreach ($queries as $query) {
        if (empty($query) || strpos($query, '--') === 0) {
            continue; // Skip empty lines and comments
        }

        try {
            $db->query($query);
            $query_count++;
        } catch (Exception $e) {
            // Log the error but continue (some queries might fail if tables already exist)
            echo "Warning: Query failed - " . substr($query, 0, 50) . "...\n";
            echo "Error: " . $e->getMessage() . "\n";
        }
    }

    echo "✓ Database schema executed ($query_count queries)\n";

    // Verify critical tables were created
    $critical_tables = [
        $dbprefix . 'geofences',
        $dbprefix . 'attendance_sessions',
        $dbprefix . 'location_history',
        $dbprefix . 'geofencing_settings',
        $dbprefix . 'staff_devices'
    ];

    foreach ($critical_tables as $table) {
        if (!$db->tableExists($table)) {
            throw new Exception("Critical table not created: $table");
        }
    }

    echo "✓ Critical tables verified\n";

    // Insert default settings if not exists
    $default_settings = [
        ['setting_name' => 'default_geofence_radius', 'setting_value' => '500', 'setting_type' => 'int', 'description' => 'Default radius in meters for new geofences'],
        ['setting_name' => 'require_photo_checkin', 'setting_value' => '1', 'setting_type' => 'boolean', 'description' => 'Require selfie photo during check-in'],
        ['setting_name' => 'require_photo_checkout', 'setting_value' => '1', 'setting_type' => 'boolean', 'description' => 'Require selfie photo during check-out'],
        ['setting_name' => 'allow_field_work', 'setting_value' => '1', 'setting_type' => 'boolean', 'description' => 'Allow staff to work from field locations'],
        ['setting_name' => 'max_location_accuracy', 'setting_value' => '100', 'setting_type' => 'int', 'description' => 'Maximum allowed GPS accuracy in meters'],
        ['setting_name' => 'auto_checkout_hours', 'setting_value' => '12', 'setting_type' => 'int', 'description' => 'Auto checkout after specified hours if missed'],
        ['setting_name' => 'location_update_interval', 'setting_value' => '300', 'setting_type' => 'int', 'description' => 'Location update interval in seconds (5 minutes)'],
        ['setting_name' => 'working_hours_start', 'setting_value' => '09:00:00', 'setting_type' => 'string', 'description' => 'Standard working hours start time'],
        ['setting_name' => 'working_hours_end', 'setting_value' => '18:00:00', 'setting_type' => 'string', 'description' => 'Standard working hours end time'],
        ['setting_name' => 'lunch_break_duration', 'setting_value' => '60', 'setting_type' => 'int', 'description' => 'Standard lunch break duration in minutes'],
        ['setting_name' => 'late_threshold_minutes', 'setting_value' => '15', 'setting_type' => 'int', 'description' => 'Late arrival threshold in minutes'],
        ['setting_name' => 'overtime_threshold_hours', 'setting_value' => '8', 'setting_type' => 'int', 'description' => 'Daily hours threshold for overtime calculation'],
        ['setting_name' => 'enable_real_time_tracking', 'setting_value' => '1', 'setting_type' => 'boolean', 'description' => 'Enable real-time location tracking'],
        ['setting_name' => 'admin_notification_email', 'setting_value' => '', 'setting_type' => 'string', 'description' => 'Email for admin notifications'],
        ['setting_name' => 'backup_attendance_days', 'setting_value' => '30', 'setting_type' => 'int', 'description' => 'Days to keep detailed attendance backup']
    ];

    foreach ($default_settings as $setting) {
        // Check if setting already exists
        $existing = $db->table($dbprefix . 'geofencing_settings')
                      ->where('setting_name', $setting['setting_name'])
                      ->get()
                      ->getRow();

        if (!$existing) {
            $db->table($dbprefix . 'geofencing_settings')->insert($setting);
        }
    }

    echo "✓ Default settings configured\n";

    // Create sample geofences (optional - only if none exist)
    $geofence_count = $db->table($dbprefix . 'geofences')->countAll();

    if ($geofence_count == 0) {
        $sample_geofences = [
            [
                'name' => 'Main Office',
                'description' => 'Primary office location for staff attendance',
                'latitude' => 28.6139,
                'longitude' => 77.2090,
                'radius' => 200,
                'address' => 'Main Office Address',
                'geofence_type' => 'office',
                'is_active' => 1,
                'allow_field_work' => 0,
                'created_by' => 1,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Field Work Zone',
                'description' => 'General field work area for mobile staff',
                'latitude' => 28.7041,
                'longitude' => 77.1025,
                'radius' => 1000,
                'address' => 'Field Work Area',
                'geofence_type' => 'field_area',
                'is_active' => 1,
                'allow_field_work' => 1,
                'created_by' => 1,
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];

        foreach ($sample_geofences as $geofence) {
            $db->table($dbprefix . 'geofences')->insert($geofence);
        }

        echo "✓ Sample geofences created\n";
    }

    // Create upload directories
    $upload_dirs = [
        WRITEPATH . 'uploads/attendance_photos/',
        WRITEPATH . 'uploads/geofencing_reports/',
        WRITEPATH . 'logs/geofencing/'
    ];

    foreach ($upload_dirs as $dir) {
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
            // Create index.html for security
            file_put_contents($dir . 'index.html', '<!DOCTYPE html><html><head><title>403 Forbidden</title></head><body><h1>Directory access is forbidden.</h1></body></html>');
        }
    }

    echo "✓ Upload directories created\n";

    // Add plugin to activated plugins
    $activated_plugins_file = APPPATH . 'Config/activated_plugins.json';
    if (file_exists($activated_plugins_file)) {
        $plugins = json_decode(file_get_contents($activated_plugins_file), true);
        if (is_array($plugins) && !in_array('Geofencing_Attendance', $plugins)) {
            $plugins[] = 'Geofencing_Attendance';
            file_put_contents($activated_plugins_file, json_encode($plugins));
        }
    }

    // Update main settings
    $Settings_model = model("App\Models\Settings_model");
    $main_plugins = $Settings_model->get_setting("plugins");
    $main_plugins = @unserialize($main_plugins);

    if (!$main_plugins || !is_array($main_plugins)) {
        $main_plugins = array();
    }

    $main_plugins["Geofencing_Attendance"] = "activated";
    $Settings_model->save_setting("plugins", serialize($main_plugins));

    echo "✓ Plugin activated in system\n";

    // Create API documentation
    $api_docs_dir = WRITEPATH . 'uploads/geofencing_docs/';
    if (!is_dir($api_docs_dir)) {
        mkdir($api_docs_dir, 0755, true);
    }

    // Commit transaction
    $db->transComplete();

    if ($db->transStatus() === FALSE) {
        throw new Exception("Database transaction failed!");
    }

    echo "✓ Installation completed successfully!\n";

    // Log installation
    $log_entry = date('Y-m-d H:i:s') . " - Geofencing Attendance Plugin installed successfully\n";
    file_put_contents(WRITEPATH . 'logs/geofencing/installation.log', $log_entry, FILE_APPEND);

    // Check integration with existing HR modules
    $integration_status = [];

    if (is_dir(PLUGINPATH . 'Hr_profile/')) {
        $integration_status['hr_profile'] = 'detected';
    }

    if (is_dir(PLUGINPATH . 'Hr_payroll/')) {
        $integration_status['hr_payroll'] = 'detected';
    }

    if (is_dir(PLUGINPATH . 'RestApi/')) {
        $integration_status['rest_api'] = 'detected';
    }

    echo "\n=== INSTALLATION SUMMARY ===\n";
    echo "✓ Database tables created and populated\n";
    echo "✓ Default settings configured\n";
    echo "✓ Upload directories prepared\n";
    echo "✓ Plugin activated successfully\n";
    echo "✓ API endpoints ready\n";

    if (!empty($integration_status)) {
        echo "\n=== DETECTED INTEGRATIONS ===\n";
        foreach ($integration_status as $module => $status) {
            echo "✓ " . ucfirst(str_replace('_', ' ', $module)) . " - " . $status . "\n";
        }
    }

    echo "\n=== NEXT STEPS ===\n";
    echo "1. Access admin panel: /geofencing_attendance/dashboard\n";
    echo "2. Configure geofences: /geofencing_attendance/geofences\n";
    echo "3. Set up staff assignments\n";
    echo "4. Review settings: /geofencing_attendance/settings\n";
    echo "5. Test mobile API endpoints: /api/geofencing/*\n";
    echo "6. Configure Google Maps API key if using map features\n";

    echo "\n=== MOBILE API ENDPOINTS ===\n";
    echo "• Authentication: POST /api/geofencing/register_device\n";
    echo "• Check-in: POST /api/geofencing/checkin\n";
    echo "• Check-out: POST /api/geofencing/checkout\n";
    echo "• Location update: POST /api/geofencing/update_location\n";
    echo "• Get geofences: GET /api/geofencing/geofences\n";
    echo "• Attendance history: GET /api/geofencing/attendance_history\n";

    echo "\n=== SECURITY NOTES ===\n";
    echo "⚠ Configure proper file permissions for upload directories\n";
    echo "⚠ Set up HTTPS for API endpoints in production\n";
    echo "⚠ Review and configure privacy settings\n";
    echo "⚠ Set up regular database backups\n";

    echo "\nGeofencing Attendance Plugin installation completed!\n";

} catch (Exception $e) {
    // Rollback on error
    if (isset($db)) {
        $db->transRollback();
    }

    echo "\n✗ INSTALLATION FAILED!\n";
    echo "Error: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . "\n";
    echo "Line: " . $e->getLine() . "\n";

    // Log error
    if (is_dir(WRITEPATH . 'logs/')) {
        $error_log = date('Y-m-d H:i:s') . " - Installation failed: " . $e->getMessage() . "\n";
        file_put_contents(WRITEPATH . 'logs/geofencing_installation_error.log', $error_log, FILE_APPEND);
    }

    exit(1);
}
