<?php

namespace Purchase\Config;

use CodeIgniter\Config\BaseConfig;

class Purchase extends BaseConfig
{

    public $app_settings_array = [
        "purchase_file_path" => PLUGIN_URL_PATH . "Purchase/files/purchase_files/",
    ];

    public function __construct() {}
}
