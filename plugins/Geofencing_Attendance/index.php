<?php

//Prevent direct access
defined('PLUGINPATH') or exit('No direct script access allowed');

/*
  Plugin Name: Geofencing Attendance
  Description: Advanced geofencing-based attendance management system
  Version: 1.0.0
  Requires at least: 3.0
  Author: Custom Development
  Integration: RestApi, Hr_profile, Hr_payroll
 */

// Define plugin constants
if (!defined('GEOFENCING_ATTENDANCE_PATH')) {
    define('GEOFENCING_ATTENDANCE_PATH', PLUGINPATH . 'Geofencing_Attendance/');
}

// Add menu items to left sidebar
app_hooks()->add_filter('app_filter_staff_left_menu', function ($sidebar_menu) {
    $sidebar_menu["geofencing_attendance"] = [
        "name" => "geofencing_attendance",
        "url" => "geofencing_attendance",
        "class" => "map-pin",
        "position" => 7
    ];

    return $sidebar_menu;
});

// Add menu items to admin left sidebar
app_hooks()->add_filter('app_filter_admin_left_menu', function ($sidebar_menu) {
    $sidebar_menu["geofencing_attendance"] = [
        "name" => "geofencing_attendance",
        "url" => "geofencing_attendance",
        "class" => "map-pin",
        "position" => 7
    ];

    return $sidebar_menu;
});

// Simple installation hook without complex database operations
register_installation_hook("Geofencing_Attendance", function ($item_purchase_code = null) {
    try {
        // Just activate the plugin without running database creation
        $Settings_model = model("App\Models\Settings_model");
        $plugins = $Settings_model->get_setting("plugins");
        $plugins = @unserialize($plugins);

        if (!$plugins || !is_array($plugins)) {
            $plugins = array();
        }

        $plugins["Geofencing_Attendance"] = "activated";
        $Settings_model->save_setting("plugins", serialize($plugins));

        // Add to activated plugins JSON
        $activated_plugins_file = APPPATH . 'Config/activated_plugins.json';
        if (file_exists($activated_plugins_file)) {
            $activated_plugins = json_decode(file_get_contents($activated_plugins_file), true);
            if (is_array($activated_plugins) && !in_array('Geofencing_Attendance', $activated_plugins)) {
                $activated_plugins[] = 'Geofencing_Attendance';
                file_put_contents($activated_plugins_file, json_encode($activated_plugins));
            }
        }

        return true;
    } catch (Exception $e) {
        error_log("Geofencing_Attendance activation error: " . $e->getMessage());
        return false;
    }
});

// Simple uninstallation hook
register_uninstallation_hook("Geofencing_Attendance", function () {
    try {
        // Just remove from activated plugins
        $Settings_model = model("App\Models\Settings_model");
        $plugins = $Settings_model->get_setting("plugins");
        $plugins = @unserialize($plugins);

        if (isset($plugins["Geofencing_Attendance"])) {
            unset($plugins["Geofencing_Attendance"]);
            $Settings_model->save_setting("plugins", serialize($plugins));
        }

        return true;
    } catch (Exception $e) {
        error_log("Geofencing_Attendance deactivation error: " . $e->getMessage());
        return false;
    }
});

// Auto-activation hook to ensure plugin stays active
app_hooks()->add_action('app_hook_before_view', function() {
    try {
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
    } catch (Exception $e) {
        // Silently handle errors to prevent breaking the main application
        error_log("Geofencing_Attendance auto-activation error: " . $e->getMessage());
    }
});
