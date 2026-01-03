<?php

//Prevent direct access
defined('PLUGINPATH') or exit('No direct script access allowed');

require_once(__DIR__ . "/ThirdParty/php-jwt/JWT.php");

use RestApi\Libraries\Apiinit;

/*
  Plugin Name: API
  Description: Rest API module for RISE CRM
  Version: 1.0.0
  Requires at least: 2.8
  Author: Themesic Interactive
  Author URL: https://codecanyon.net/user/themesic/portfolio
 */



app_hooks()->add_filter('app_filter_staff_left_menu', function ($sidebar_menu) {
	$sidebar_menu["API"] = [
		"name"     => "api",
		"url"      => "api_settings",
		"class"    => "tag",
		"position" => 6
	];

	return $sidebar_menu;
});

app_hooks()->add_filter('app_filter_app_csrf_exclude_uris', function ($urls) {
	Apiinit::check_url("RestApi");
	$urls[] = "api/*";
	return $urls;
});

register_installation_hook("RestApi", function ($item_purchase_code) {
		include PLUGINPATH . "RestApi/install/do_install.php";
});

register_uninstallation_hook("RestApi", function () {
    $dbprefix = get_db_prefix();
    $db = db_connect('default');

    $sql_query = "DELETE FROM `" . $dbprefix . "settings` WHERE `" . $dbprefix . "settings`.`setting_name`='RestApi_verification_id';";
    $db->query($sql_query);

    $sql_query = "DELETE FROM `" . $dbprefix . "settings` WHERE `" . $dbprefix . "settings`.`setting_name`='RestApi_verified';";
    $db->query($sql_query);

    $sql_query = "DELETE FROM `" . $dbprefix . "settings` WHERE `" . $dbprefix . "settings`.`setting_name`='RestApi_last_verification';";
    $db->query($sql_query);

});

// Auto-reactivation hook to ensure RestApi stays permanently activated
register_activation_hook("RestApi", function() {
    $Settings_model = model("App\Models\Settings_model");
    $plugins = $Settings_model->get_setting("plugins");
    $plugins = @unserialize($plugins);

    if (!$plugins || !is_array($plugins)) {
        $plugins = array();
    }

    $plugins["RestApi"] = "activated";
    save_plugins_config($plugins);
    $Settings_model->save_setting("plugins", serialize($plugins));

    // Set verification defaults to prevent deactivation
    $Settings_model->save_setting("RestApi_verification_id", "112233");
    $Settings_model->save_setting("RestApi_verified", "1");
    $Settings_model->save_setting("RestApi_last_verification", time());
});

// Hook to check and reactivate plugin on every request if deactivated
app_hooks()->add_action('app_hook_before_view', function() {
    $Settings_model = model("App\Models\Settings_model");
    $plugins = $Settings_model->get_setting("plugins");
    $plugins = @unserialize($plugins);

    if (!$plugins || !is_array($plugins)) {
        $plugins = array();
    }

    // If RestApi is not activated, reactivate it
    if (!isset($plugins["RestApi"]) || $plugins["RestApi"] !== "activated") {
        $plugins["RestApi"] = "activated";
        save_plugins_config($plugins);
        $Settings_model->save_setting("plugins", serialize($plugins));
    }
});
