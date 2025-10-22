<?php

namespace RestApi\Libraries;

use App\Models\Users_model;

class AuthService {
	private Users_model $usersModel;

	public function __construct() {
		$this->usersModel = model('App\\Models\\Users_model');
	}

	public function login(string $email, string $password): array {
		// Get user by email and check status
		$userInfo = $this->usersModel->get_one_where(array(
			'email' => $email,
			'status' => 'active',
			'deleted' => 0,
			'disable_login' => 0
		));

		if (!$userInfo) {
			return [ 'status' => false, 'message' => 'Invalid credentials' ];
		}

		// Verify password (support both bcrypt and legacy MD5)
		$passwordValid = false;
		if (strlen($userInfo->password) === 60 && password_verify($password, $userInfo->password)) {
			$passwordValid = true;
		} elseif ($userInfo->password === md5($password)) {
			$passwordValid = true;
		}

		if (!$passwordValid) {
			return [ 'status' => false, 'message' => 'Invalid credentials' ];
		}

		// Check if client can login (for client users)
		if ($userInfo->user_type === 'client' && $userInfo->client_id) {
			$clientInfo = model('App\\Models\\Clients_model')->get_one($userInfo->client_id);
			if (!$clientInfo || $clientInfo->deleted || $clientInfo->disable_online_payment) {
				return [ 'status' => false, 'message' => 'Account access denied' ];
			}
		}

		return [ 'status' => true, 'user' => $userInfo ];
	}
}
