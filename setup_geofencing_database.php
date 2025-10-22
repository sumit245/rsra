<?php
/**
 * Manual Geofencing Attendance Database Setup Script
 *
 * This script manually creates the database tables and configuration
 * to avoid 500 errors during plugin activation.
 *
 * Run this script directly to set up the geofencing attendance system.
 */

// Database configuration - update these values to match your setup
$db_config = [
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'rsra',
    'port' => 3306
];

echo "=== Geofencing Attendance Database Setup ===\n";
echo "Time: " . date('Y-m-d H:i:s') . "\n\n";

try {
    // Connect to database
    $dsn = "mysql:host={$db_config['hostname']};port={$db_config['port']};dbname={$db_config['database']}";
    $pdo = new PDO($dsn, $db_config['username'], $db_config['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "✓ Database connection established\n\n";

    // Start transaction
    $pdo->beginTransaction();

    echo "1. Creating geofencing tables...\n";

    // Create geofences table
    $sql = "
    CREATE TABLE IF NOT EXISTS `rise_geofences` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `name` varchar(255) NOT NULL,
      `description` text,
      `latitude` decimal(10,7) NOT NULL,
      `longitude` decimal(10,7) NOT NULL,
      `radius` int(11) NOT NULL DEFAULT 500,
      `address` text,
      `geofence_type` enum('office','client_site','field_area','custom') NOT NULL DEFAULT 'office',
      `is_active` tinyint(1) NOT NULL DEFAULT 1,
      `allow_field_work` tinyint(1) NOT NULL DEFAULT 0,
      `created_by` int(11) NOT NULL,
      `created_at` datetime NOT NULL,
      `updated_at` datetime DEFAULT NULL,
      `deleted` tinyint(1) NOT NULL DEFAULT 0,
      PRIMARY KEY (`id`),
      INDEX `idx_location` (`latitude`, `longitude`),
      INDEX `idx_active` (`is_active`, `deleted`)
    )";
    $pdo->exec($sql);
    echo "   ✓ rise_geofences table created\n";

    // Create attendance_sessions table
    $sql = "
    CREATE TABLE IF NOT EXISTS `rise_attendance_sessions` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `staff_id` int(11) NOT NULL,
      `session_date` date NOT NULL,
      `check_in_time` datetime DEFAULT NULL,
      `check_out_time` datetime DEFAULT NULL,
      `check_in_latitude` decimal(10,7) DEFAULT NULL,
      `check_in_longitude` decimal(10,7) DEFAULT NULL,
      `check_out_latitude` decimal(10,7) DEFAULT NULL,
      `check_out_longitude` decimal(10,7) DEFAULT NULL,
      `check_in_address` text,
      `check_out_address` text,
      `check_in_geofence_id` int(11) DEFAULT NULL,
      `check_out_geofence_id` int(11) DEFAULT NULL,
      `check_in_device_info` text,
      `check_out_device_info` text,
      `check_in_photo` text,
      `check_out_photo` text,
      `check_in_method` enum('geofence','field','manual') NOT NULL DEFAULT 'geofence',
      `check_out_method` enum('geofence','field','manual') NOT NULL DEFAULT 'geofence',
      `total_hours` decimal(5,2) DEFAULT NULL,
      `break_hours` decimal(5,2) DEFAULT 0.00,
      `overtime_hours` decimal(5,2) DEFAULT 0.00,
      `status` enum('active','completed','incomplete') NOT NULL DEFAULT 'active',
      `notes` text,
      `created_at` datetime NOT NULL,
      `updated_at` datetime DEFAULT NULL,
      PRIMARY KEY (`id`),
      UNIQUE KEY `unique_staff_date` (`staff_id`, `session_date`),
      INDEX `idx_staff_date` (`staff_id`, `session_date`),
      INDEX `idx_session_date` (`session_date`),
      INDEX `idx_status` (`status`)
    )";
    $pdo->exec($sql);
    echo "   ✓ rise_attendance_sessions table created\n";

    // Create location_history table
    $sql = "
    CREATE TABLE IF NOT EXISTS `rise_location_history` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `staff_id` int(11) NOT NULL,
      `session_id` int(11) DEFAULT NULL,
      `latitude` decimal(10,7) NOT NULL,
      `longitude` decimal(10,7) NOT NULL,
      `address` text,
      `accuracy` decimal(8,2) DEFAULT NULL,
      `timestamp` datetime NOT NULL,
      `event_type` enum('check_in','check_out','location_update','manual') NOT NULL DEFAULT 'location_update',
      `geofence_id` int(11) DEFAULT NULL,
      `device_info` text,
      `created_at` datetime NOT NULL,
      PRIMARY KEY (`id`),
      INDEX `idx_staff_timestamp` (`staff_id`, `timestamp`),
      INDEX `idx_session` (`session_id`),
      INDEX `idx_event_type` (`event_type`),
      INDEX `idx_geofence` (`geofence_id`)
    )";
    $pdo->exec($sql);
    echo "   ✓ rise_location_history table created\n";

    // Create staff_devices table
    $sql = "
    CREATE TABLE IF NOT EXISTS `rise_staff_devices` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `staff_id` int(11) NOT NULL,
      `device_id` varchar(255) NOT NULL,
      `device_name` varchar(255) DEFAULT NULL,
      `device_type` enum('android','ios','web') NOT NULL,
      `device_model` varchar(255) DEFAULT NULL,
      `os_version` varchar(50) DEFAULT NULL,
      `app_version` varchar(50) DEFAULT NULL,
      `push_token` text,
      `last_used_at` datetime DEFAULT NULL,
      `is_active` tinyint(1) NOT NULL DEFAULT 1,
      `registered_at` datetime NOT NULL,
      `updated_at` datetime DEFAULT NULL,
      PRIMARY KEY (`id`),
      UNIQUE KEY `unique_device` (`staff_id`, `device_id`),
      INDEX `idx_staff` (`staff_id`),
      INDEX `idx_active` (`is_active`)
    )";
    $pdo->exec($sql);
    echo "   ✓ rise_staff_devices table created\n";

    // Create geofencing_settings table
    $sql = "
    CREATE TABLE IF NOT EXISTS `rise_geofencing_settings` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `setting_name` varchar(100) NOT NULL,
      `setting_value` text,
      `setting_type` enum('string','int','boolean','json') NOT NULL DEFAULT 'string',
      `description` text,
      `updated_by` int(11) DEFAULT NULL,
      `updated_at` datetime DEFAULT NULL,
      PRIMARY KEY (`id`),
      UNIQUE KEY `unique_setting` (`setting_name`)
    )";
    $pdo->exec($sql);
    echo "   ✓ rise_geofencing_settings table created\n";

    // Create additional tables
    $additional_tables = [
        "rise_geofence_staff" => "
        CREATE TABLE IF NOT EXISTS `rise_geofence_staff` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `geofence_id` int(11) NOT NULL,
          `staff_id` int(11) NOT NULL,
          `assigned_by` int(11) NOT NULL,
          `assigned_at` datetime NOT NULL,
          `is_active` tinyint(1) NOT NULL DEFAULT 1,
          PRIMARY KEY (`id`),
          UNIQUE KEY `unique_geofence_staff` (`geofence_id`, `staff_id`),
          INDEX `idx_staff` (`staff_id`),
          INDEX `idx_geofence` (`geofence_id`)
        )",

        "rise_break_sessions" => "
        CREATE TABLE IF NOT EXISTS `rise_break_sessions` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `attendance_session_id` int(11) NOT NULL,
          `break_start` datetime NOT NULL,
          `break_end` datetime DEFAULT NULL,
          `break_duration` int(11) DEFAULT NULL,
          `break_type` enum('lunch','coffee','personal','other') NOT NULL DEFAULT 'other',
          `notes` varchar(255) DEFAULT NULL,
          `created_at` datetime NOT NULL,
          PRIMARY KEY (`id`),
          INDEX `idx_session` (`attendance_session_id`),
          INDEX `idx_break_date` (`break_start`)
        )",

        "rise_attendance_exceptions" => "
        CREATE TABLE IF NOT EXISTS `rise_attendance_exceptions` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `staff_id` int(11) NOT NULL,
          `session_id` int(11) DEFAULT NULL,
          `exception_date` date NOT NULL,
          `exception_type` enum('late_checkin','missed_checkout','location_mismatch','device_change','manual_override') NOT NULL,
          `description` text,
          `resolved` tinyint(1) NOT NULL DEFAULT 0,
          `resolved_by` int(11) DEFAULT NULL,
          `resolved_at` datetime DEFAULT NULL,
          `resolution_notes` text,
          `created_at` datetime NOT NULL,
          PRIMARY KEY (`id`),
          INDEX `idx_staff_date` (`staff_id`, `exception_date`),
          INDEX `idx_resolved` (`resolved`),
          INDEX `idx_exception_type` (`exception_type`)
        )",

        "rise_attendance_reports" => "
        CREATE TABLE IF NOT EXISTS `rise_attendance_reports` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `staff_id` int(11) NOT NULL,
          `month` varchar(7) NOT NULL,
          `total_working_days` int(11) NOT NULL DEFAULT 0,
          `present_days` int(11) NOT NULL DEFAULT 0,
          `absent_days` int(11) NOT NULL DEFAULT 0,
          `late_days` int(11) NOT NULL DEFAULT 0,
          `total_hours` decimal(8,2) NOT NULL DEFAULT 0.00,
          `overtime_hours` decimal(8,2) NOT NULL DEFAULT 0.00,
          `break_hours` decimal(8,2) NOT NULL DEFAULT 0.00,
          `average_checkin_time` time DEFAULT NULL,
          `average_checkout_time` time DEFAULT NULL,
          `exceptions_count` int(11) NOT NULL DEFAULT 0,
          `generated_at` datetime NOT NULL,
          `generated_by` int(11) DEFAULT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `unique_staff_month` (`staff_id`, `month`),
          INDEX `idx_month` (`month`)
        )"
    ];

    foreach ($additional_tables as $table_name => $table_sql) {
        $pdo->exec($table_sql);
        echo "   ✓ $table_name table created\n";
    }

    echo "\n2. Inserting default settings...\n";

    // Insert default settings
    $default_settings = [
        ['setting_name' => 'default_geofence_radius', 'setting_value' => '500', 'setting_type' => 'int', 'description' => 'Default radius in meters for new geofences'],
        ['setting_name' => 'require_photo_checkin', 'setting_value' => '1', 'setting_type' => 'boolean', 'description' => 'Require selfie photo during check-in'],
        ['setting_name' => 'require_photo_checkout', 'setting_value' => '1', 'setting_type' => 'boolean', 'description' => 'Require selfie photo during check-out'],
        ['setting_name' => 'allow_field_work', 'setting_value' => '1', 'setting_type' => 'boolean', 'description' => 'Allow staff to work from field locations'],
        ['setting_name' => 'max_location_accuracy', 'setting_value' => '100', 'setting_type' => 'int', 'description' => 'Maximum allowed GPS accuracy in meters'],
        ['setting_name' => 'auto_checkout_hours', 'setting_value' => '12', 'setting_type' => 'int', 'description' => 'Auto checkout after specified hours if missed'],
        ['setting_name' => 'location_update_interval', 'setting_value' => '300', 'setting_type' => 'int', 'description' => 'Location update interval in seconds'],
        ['setting_name' => 'working_hours_start', 'setting_value' => '09:00:00', 'setting_type' => 'string', 'description' => 'Standard working hours start time'],
        ['setting_name' => 'working_hours_end', 'setting_value' => '18:00:00', 'setting_type' => 'string', 'description' => 'Standard working hours end time'],
        ['setting_name' => 'enable_real_time_tracking', 'setting_value' => '1', 'setting_type' => 'boolean', 'description' => 'Enable real-time location tracking']
    ];

    foreach ($default_settings as $setting) {
        // Check if setting already exists
        $stmt = $pdo->prepare("SELECT id FROM rise_geofencing_settings WHERE setting_name = ?");
        $stmt->execute([$setting['setting_name']]);

        if (!$stmt->fetch()) {
            $stmt = $pdo->prepare("INSERT INTO rise_geofencing_settings (setting_name, setting_value, setting_type, description, updated_at) VALUES (?, ?, ?, ?, NOW())");
            $stmt->execute([$setting['setting_name'], $setting['setting_value'], $setting['setting_type'], $setting['description']]);
            echo "   ✓ Setting: " . $setting['setting_name'] . "\n";
        }
    }

    echo "\n3. Creating sample geofences...\n";

    // Check if any geofences exist
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM rise_geofences");
    $stmt->execute();
    $geofence_count = $stmt->fetchColumn();

    if ($geofence_count == 0) {
        $sample_geofences = [
            [
                'name' => 'Main Office',
                'description' => 'Primary office location for staff attendance',
                'latitude' => 28.6139,
                'longitude' => 77.2090,
                'radius' => 200,
                'address' => 'Main Office Location',
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
            $stmt = $pdo->prepare("
                INSERT INTO rise_geofences (name, description, latitude, longitude, radius, address, geofence_type, is_active, allow_field_work, created_by, created_at)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
            ");
            $stmt->execute(array_values($geofence));
            echo "   ✓ Created: " . $geofence['name'] . "\n";
        }
    } else {
        echo "   ✓ Geofences already exist ($geofence_count found)\n";
    }

    echo "\n4. Creating upload directories...\n";

    $directories = [
        'attendance_photos',
        'geofencing_reports',
        'geofencing_logs'
    ];

    foreach ($directories as $dir) {
        $full_path = __DIR__ . "/files/uploads/$dir";
        if (!is_dir($full_path)) {
            mkdir($full_path, 0755, true);
            file_put_contents($full_path . '/index.html', '<!DOCTYPE html><html><head><title>403 Forbidden</title></head><body><h1>Directory access is forbidden.</h1></body></html>');
            echo "   ✓ Created directory: $dir\n";
        } else {
            echo "   ✓ Directory already exists: $dir\n";
        }
    }

    // Commit transaction
    $pdo->commit();

    echo "\n5. Activating plugin...\n";

    // Update activated_plugins.json
    $plugins_file = __DIR__ . '/app/Config/activated_plugins.json';
    if (file_exists($plugins_file)) {
        $plugins = json_decode(file_get_contents($plugins_file), true);
        if (is_array($plugins) && !in_array('Geofencing_Attendance', $plugins)) {
            $plugins[] = 'Geofencing_Attendance';
            file_put_contents($plugins_file, json_encode($plugins, JSON_PRETTY_PRINT));
            echo "   ✓ Added to activated_plugins.json\n";
        } else {
            echo "   ✓ Already in activated_plugins.json\n";
        }
    }

    echo "\n=== SETUP COMPLETED SUCCESSFULLY ===\n";
    echo "\nDatabase Tables Created:\n";
    echo "• rise_geofences - Location boundaries\n";
    echo "• rise_attendance_sessions - Daily attendance records\n";
    echo "• rise_location_history - Real-time location tracking\n";
    echo "• rise_staff_devices - Device management\n";
    echo "• rise_geofencing_settings - System configuration\n";
    echo "• rise_geofence_staff - Staff assignments\n";
    echo "• rise_break_sessions - Break time tracking\n";
    echo "• rise_attendance_exceptions - Exception management\n";
    echo "• rise_attendance_reports - Monthly reports cache\n";

    echo "\nNext Steps:\n";
    echo "1. Try activating the Geofencing_Attendance plugin again\n";
    echo "2. Access: http://localhost/rsra/index.php/geofencing_attendance\n";
    echo "3. Configure geofences and assign staff\n";
    echo "4. Test mobile API endpoints: /api/geofencing/*\n";

    echo "\nMobile API Ready:\n";
    echo "• POST /api/geofencing/register_device\n";
    echo "• POST /api/geofencing/checkin\n";
    echo "• POST /api/geofencing/checkout\n";
    echo "• GET  /api/geofencing/geofences\n";
    echo "• POST /api/geofencing/update_location\n";

} catch (PDOException $e) {
    if (isset($pdo)) {
        $pdo->rollback();
    }
    echo "\n✗ Database Error: " . $e->getMessage() . "\n";
    exit(1);
} catch (Exception $e) {
    if (isset($pdo)) {
        $pdo->rollback();
    }
    echo "\n✗ Error: " . $e->getMessage() . "\n";
    exit(1);
}

echo "\nSetup script completed at: " . date('Y-m-d H:i:s') . "\n";
?>
