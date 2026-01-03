-- Geofencing Attendance System Database Schema
-- Created for RSRA CRM Integration

-- Create geofences table for location management
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
);

-- Create geofence staff assignments table
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
);

-- Create attendance sessions table for login/logout tracking
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
);

-- Create location history table for tracking staff movements
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
);

-- Create device registrations table
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
);

-- Create geofencing settings table
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
);

-- Create break sessions table for tracking break times
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
);

-- Create attendance exceptions table
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
);

-- Create attendance reports table for caching monthly reports
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
);

-- Insert default geofencing settings
INSERT INTO `rise_geofencing_settings` (`setting_name`, `setting_value`, `setting_type`, `description`) VALUES
('default_geofence_radius', '500', 'int', 'Default radius in meters for new geofences'),
('require_photo_checkin', '1', 'boolean', 'Require selfie photo during check-in'),
('require_photo_checkout', '1', 'boolean', 'Require selfie photo during check-out'),
('allow_field_work', '1', 'boolean', 'Allow staff to work from field locations'),
('max_location_accuracy', '100', 'int', 'Maximum allowed GPS accuracy in meters'),
('auto_checkout_hours', '12', 'int', 'Auto checkout after specified hours if missed'),
('location_update_interval', '300', 'int', 'Location update interval in seconds (5 minutes)'),
('working_hours_start', '09:00:00', 'string', 'Standard working hours start time'),
('working_hours_end', '18:00:00', 'string', 'Standard working hours end time'),
('lunch_break_duration', '60', 'int', 'Standard lunch break duration in minutes'),
('late_threshold_minutes', '15', 'int', 'Late arrival threshold in minutes'),
('overtime_threshold_hours', '8', 'int', 'Daily hours threshold for overtime calculation'),
('enable_real_time_tracking', '1', 'boolean', 'Enable real-time location tracking'),
('admin_notification_email', '', 'string', 'Email for admin notifications'),
('backup_attendance_days', '30', 'int', 'Days to keep detailed attendance backup');

-- Create indexes for better performance
ALTER TABLE `rise_attendance_sessions` ADD INDEX `idx_date_range` (`session_date`, `check_in_time`);
ALTER TABLE `rise_location_history` ADD INDEX `idx_location_search` (`latitude`, `longitude`, `timestamp`);
ALTER TABLE `rise_geofences` ADD INDEX `idx_type_active` (`geofence_type`, `is_active`);

-- Create foreign key constraints (optional - uncomment if referential integrity needed)
-- ALTER TABLE `rise_geofence_staff` ADD CONSTRAINT `fk_geofence_staff_geofence` FOREIGN KEY (`geofence_id`) REFERENCES `rise_geofences` (`id`) ON DELETE CASCADE;
-- ALTER TABLE `rise_geofence_staff` ADD CONSTRAINT `fk_geofence_staff_user` FOREIGN KEY (`staff_id`) REFERENCES `rise_users` (`id`) ON DELETE CASCADE;
-- ALTER TABLE `rise_attendance_sessions` ADD CONSTRAINT `fk_attendance_staff` FOREIGN KEY (`staff_id`) REFERENCES `rise_users` (`id`) ON DELETE CASCADE;
-- ALTER TABLE `rise_location_history` ADD CONSTRAINT `fk_location_staff` FOREIGN KEY (`staff_id`) REFERENCES `rise_users` (`id`) ON DELETE CASCADE;
-- ALTER TABLE `rise_staff_devices` ADD CONSTRAINT `fk_device_staff` FOREIGN KEY (`staff_id`) REFERENCES `rise_users` (`id`) ON DELETE CASCADE;

-- Create views for common queries
CREATE OR REPLACE VIEW `view_active_attendance_sessions` AS
SELECT
  s.id,
  s.staff_id,
  CONCAT(u.first_name, ' ', u.last_name) as staff_name,
  u.email,
  s.session_date,
  s.check_in_time,
  s.check_out_time,
  s.check_in_address,
  s.check_out_address,
  g1.name as check_in_geofence,
  g2.name as check_out_geofence,
  s.total_hours,
  s.status,
  s.check_in_method,
  s.check_out_method
FROM rise_attendance_sessions s
LEFT JOIN rise_users u ON s.staff_id = u.id
LEFT JOIN rise_geofences g1 ON s.check_in_geofence_id = g1.id
LEFT JOIN rise_geofences g2 ON s.check_out_geofence_id = g2.id
WHERE u.deleted = 0 AND u.status = 'active';

CREATE OR REPLACE VIEW `view_staff_current_location` AS
SELECT
  lh.staff_id,
  CONCAT(u.first_name, ' ', u.last_name) as staff_name,
  u.email,
  lh.latitude,
  lh.longitude,
  lh.address,
  lh.timestamp as last_update,
  g.name as current_geofence,
  g.geofence_type,
  s.status as session_status
FROM rise_location_history lh
INNER JOIN (
  SELECT staff_id, MAX(timestamp) as max_timestamp
  FROM rise_location_history
  GROUP BY staff_id
) latest ON lh.staff_id = latest.staff_id AND lh.timestamp = latest.max_timestamp
LEFT JOIN rise_users u ON lh.staff_id = u.id
LEFT JOIN rise_geofences g ON lh.geofence_id = g.id
LEFT JOIN rise_attendance_sessions s ON lh.session_id = s.id
WHERE u.deleted = 0 AND u.status = 'active';

-- Sample data for testing (optional - uncomment to insert)
-- INSERT INTO `rise_geofences` (`name`, `description`, `latitude`, `longitude`, `radius`, `address`, `geofence_type`, `is_active`, `allow_field_work`, `created_by`, `created_at`) VALUES
-- ('Main Office', 'Company headquarters office location', 28.6139, 77.2090, 200, 'Connaught Place, New Delhi, India', 'office', 1, 0, 1, NOW()),
-- ('Client Site - ABC Corp', 'ABC Corporation client office', 28.5355, 77.3910, 300, 'Noida, Uttar Pradesh, India', 'client_site', 1, 0, 1, NOW()),
-- ('Field Work Zone', 'General field work area', 28.7041, 77.1025, 1000, 'Delhi NCR Region', 'field_area', 1, 1, 1, NOW());
