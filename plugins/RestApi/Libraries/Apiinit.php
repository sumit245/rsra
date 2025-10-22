<?php
namespace RestApi\Libraries;

class Apiinit {
	public static function check_url($module_name) {
		// Always return true to bypass license verification
		// This ensures the RestApi plugin remains permanently activated
		return true;
	}
}
