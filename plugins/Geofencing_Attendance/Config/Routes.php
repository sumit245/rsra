<?php

namespace Config;

$routes = Services::routes();

$geofencing_namespace = ['namespace' => 'Geofencing_Attendance\Controllers'];

// Admin panel routes for geofencing attendance management
$routes->group('geofencing_attendance', $geofencing_namespace, function ($routes) {
    // Main dashboard
    $routes->get('', 'Geofencing_Controller::index');
    $routes->get('dashboard', 'Geofencing_Controller::index');

    // Geofences management
    $routes->get('geofences', 'Geofencing_Controller::geofences');
    $routes->post('geofences_list_data', 'Geofencing_Controller::geofences_list_data');
    $routes->get('geofence_form', 'Geofencing_Controller::geofence_form');
    $routes->get('geofence_form/(:num)', 'Geofencing_Controller::geofence_form/$1');
    $routes->post('save_geofence', 'Geofencing_Controller::save_geofence');
    $routes->post('delete_geofence', 'Geofencing_Controller::delete_geofence');

    // Staff assignment to geofences
    $routes->get('geofence_staff/(:num)', 'Geofencing_Controller::geofence_staff/$1');
    $routes->post('save_geofence_staff', 'Geofencing_Controller::save_geofence_staff');

    // Live tracking
    $routes->get('live_tracking', 'Geofencing_Controller::live_tracking');
    $routes->post('get_active_staff_locations', 'Geofencing_Controller::get_active_staff_locations');

    // Attendance sessions
    $routes->get('attendance_sessions', 'Geofencing_Controller::attendance_sessions');
    $routes->get('session_details/(:num)', 'Geofencing_Controller::session_details/$1');

    // Reports
    $routes->get('reports', 'Geofencing_Controller::reports');
    $routes->get('daily_report', 'Geofencing_Controller::daily_report');
    $routes->get('weekly_report', 'Geofencing_Controller::weekly_report');
    $routes->get('monthly_report', 'Geofencing_Controller::monthly_report');
    $routes->get('export_attendance', 'Geofencing_Controller::export_attendance');

    // Settings
    $routes->get('settings', 'Geofencing_Controller::settings');
    $routes->post('save_settings', 'Geofencing_Controller::save_settings');

    // Test route
    $routes->get('test', 'Geofencing_Controller::test');
});

// Mobile API routes for geofencing attendance
$routes->group('api/geofencing', $geofencing_namespace, function ($routes) {

    // Device registration
    $routes->post('register_device', 'Mobile_Api_Controller::register_device');

    // Geofences
    $routes->get('geofences', 'Mobile_Api_Controller::get_geofences');
    $routes->get('geofences/nearby', 'Mobile_Api_Controller::get_nearby_geofences');
    $routes->post('check_location', 'Mobile_Api_Controller::check_location');

    // Attendance operations
    $routes->post('checkin', 'Mobile_Api_Controller::checkin');
    $routes->post('checkout', 'Mobile_Api_Controller::checkout');
    $routes->post('update_location', 'Mobile_Api_Controller::update_location');
    $routes->get('status', 'Mobile_Api_Controller::get_status');

    // Break management
    $routes->post('start_break', 'Mobile_Api_Controller::start_break');
    $routes->post('end_break', 'Mobile_Api_Controller::end_break');

    // Reports for mobile
    $routes->get('attendance_history', 'Mobile_Api_Controller::get_attendance_history');
    $routes->get('daily_report', 'Mobile_Api_Controller::get_daily_report');
    $routes->get('weekly_report', 'Mobile_Api_Controller::get_weekly_report');
    $routes->get('monthly_report', 'Mobile_Api_Controller::get_monthly_report');
});

// AJAX endpoints for admin panel (optional for future use)
$routes->group('geofencing_ajax', $geofencing_namespace, function ($routes) {
    $routes->post('dashboard_stats', 'Geofencing_Controller::get_dashboard_stats');
    $routes->post('live_locations', 'Geofencing_Controller::get_live_locations');
});
