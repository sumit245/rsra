<?php

namespace RestApi\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use RestApi\Libraries\AuthService;

class AuthController extends ResourceController {
	use ResponseTrait;
	protected $format = 'json';

	public function login() {
		$request = service('request');
		$email = trim($request->getPost('email') ?? '');
		$password = (string) ($request->getPost('password') ?? '');
		if ($email === '' || $password === '') {
			return $this->respond([ 'status' => false, 'message' => 'Email and password are required' ], 400);
		}
		$auth = new AuthService();
		$result = $auth->login($email, $password);
		if (!$result['status']) {
			return $this->respond([ 'status' => false, 'message' => $result['message'] ], 401);
		}
		$payload = [
			'user_id' => $result['user']->id,
			'email' => $result['user']->email,
			'name' => $result['user']->first_name . ' ' . $result['user']->last_name,
			'user_type' => $result['user']->user_type,
		];
		helper('jwt');
		$token = EncodeJWTtoken($payload);
		return $this->respond([ 'status' => true, 'token' => $token, 'user' => $payload ]);
	}

	public function debug() {
		$request = service('request');
		$headers = $request->headers();
		helper('jwt');
		$token = get_token();
		$validation = validateToken();

		return $this->respond([
			'status' => true,
			'headers' => $headers,
			'token' => $token,
			'validation' => $validation,
			'server_request_uri' => $_SERVER['REQUEST_URI'] ?? 'not set'
		]);
	}

	public function updateProfile() {
		helper('jwt');
		$validation = validateToken();
		if (!$validation['status']) { return $this->respond($validation, 401); }
		$userId = $validation['data']->user_id ?? null;
		if (!$userId) { return $this->respond(['status'=>false,'message'=>'Invalid token'], 401); }

		$users = model('App\\Models\\Users_model');
		$data = [];
		$req = service('request');
		$fields = ['first_name','last_name','gender','age'];
		foreach ($fields as $f) { if ($req->getPost($f) !== null) { $data[$f] = $req->getPost($f); } }
		if (empty($data)) { return $this->respond(['status'=>false,'message'=>'No fields to update'], 400); }
		$users->save_job_info(['user_id' => $userId] + $data);
		return $this->respond(['status'=>true,'message'=>'Profile updated']);
	}

	public function changePassword() {
		helper('jwt');
		$validation = validateToken();
		if (!$validation['status']) { return $this->respond($validation, 401); }
		$userEmail = $validation['data']->email ?? null;
		if (!$userEmail) { return $this->respond(['status'=>false,'message'=>'Invalid token'], 401); }
		$req = service('request');
		$current = (string) $req->getPost('current_password');
		$new = (string) $req->getPost('new_password');
		if ($current === '' || $new === '') { return $this->respond(['status'=>false,'message'=>'Both current_password and new_password are required'], 400); }
		$users = model('App\\Models\\Users_model');
		// re-authenticate
		$auth = new AuthService();
		$check = $auth->login($userEmail, $current);
		if (!$check['status']) { return $this->respond(['status'=>false,'message'=>'Current password incorrect'], 401); }
		$users->update_password($userEmail, $new);
		return $this->respond(['status'=>true,'message'=>'Password changed']);
	}
}
