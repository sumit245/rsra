<?php

namespace RestApi\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Rest_api_Controller extends ResourceController {
	use ResponseTrait;
	protected $format = 'json';
	protected $api_settings_model;

	public function __construct() {
		$this->api_settings_model = model('RestApi\Models\Api_settings_model');
		helper('jwt');
		$is_valid_token = validateToken();
		$token          = get_token();

		// For JWT tokens, we only need to validate the token itself
		// Database token check is only needed for API key authentication
		$token_valid = false;

		if ($is_valid_token['status'] == true) {
			// JWT token is valid
			$token_valid = true;
		} else {
			// Fallback: check if it's a database stored API token
			$check_token = $this->api_settings_model->check_token($token);
			if ($check_token === true) {
				$token_valid = true;
			}
		}

		if (!$token_valid) {
			$message = [
				'status'  => false,
				'message' => $is_valid_token['message'] ?? "Token not found"
			];
			$this->response = service('response');
			echo $this->format($message);
			die;
		}
	}
}

/* End of file Rest_api_Controller.php */
/* Location: ./plugins/RestAPI/controllers/Rest_api_Controller.php */
