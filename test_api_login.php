<?php
/**
 * RestApi Login Test Script
 *
 * This script tests the RestApi login endpoint with the provided credentials
 * and demonstrates how to use the returned JWT token for authenticated requests.
 */

// Test configuration
$base_url = 'http://localhost/rsra/index.php';
$test_credentials = [
    'email' => 'sumitranjan245@gmail.com',
    'password' => '12345678'
];

echo "=== RestApi Login Test ===\n";
echo "Time: " . date('Y-m-d H:i:s') . "\n\n";

// Test 1: Login endpoint
echo "1. Testing Login Endpoint\n";
echo "URL: {$base_url}/api/auth/login\n";
echo "Credentials: {$test_credentials['email']} / {$test_credentials['password']}\n\n";

$login_data = http_build_query($test_credentials);

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => $base_url . '/api/auth/login',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $login_data,
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/x-www-form-urlencoded',
        'Accept: application/json',
        'Content-Length: ' . strlen($login_data)
    ],
    CURLOPT_TIMEOUT => 30,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false
]);

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curl_error = curl_error($ch);
curl_close($ch);

echo "HTTP Status Code: $http_code\n";

if ($curl_error) {
    echo "✗ cURL Error: $curl_error\n";
    exit(1);
}

if (!$response) {
    echo "✗ No response received\n";
    exit(1);
}

echo "Raw Response:\n";
echo str_repeat('-', 50) . "\n";
echo $response . "\n";
echo str_repeat('-', 50) . "\n\n";

$response_data = json_decode($response, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    echo "✗ Invalid JSON response\n";
    echo "JSON Error: " . json_last_error_msg() . "\n";
    exit(1);
}

// Check login success
if (!isset($response_data['status'])) {
    echo "✗ Response missing 'status' field\n";
    exit(1);
}

if ($response_data['status'] === true) {
    echo "✓ Login Successful!\n\n";

    if (isset($response_data['token'])) {
        $token = $response_data['token'];
        echo "JWT Token: " . substr($token, 0, 50) . "...\n";

        if (isset($response_data['user'])) {
            $user = $response_data['user'];
            echo "User Info:\n";
            echo "  - ID: " . ($user['user_id'] ?? 'N/A') . "\n";
            echo "  - Email: " . ($user['email'] ?? 'N/A') . "\n";
            echo "  - Name: " . ($user['name'] ?? 'N/A') . "\n";
            echo "  - Type: " . ($user['user_type'] ?? 'N/A') . "\n\n";
        }

        // Test 2: Use token for authenticated request
        echo "2. Testing Authenticated Request\n";
        echo "URL: {$base_url}/api_settings\n";

        $auth_ch = curl_init();
        curl_setopt_array($auth_ch, [
            CURLOPT_URL => $base_url . '/api_settings',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'Accept: application/json',
                'authtoken: ' . $token
            ],
            CURLOPT_TIMEOUT => 30,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false
        ]);

        $auth_response = curl_exec($auth_ch);
        $auth_http_code = curl_getinfo($auth_ch, CURLINFO_HTTP_CODE);
        $auth_curl_error = curl_error($auth_ch);
        curl_close($auth_ch);

        echo "HTTP Status Code: $auth_http_code\n";

        if ($auth_curl_error) {
            echo "✗ cURL Error: $auth_curl_error\n";
        } elseif ($auth_http_code == 200) {
            echo "✓ Authenticated request successful!\n";
            echo "Response length: " . strlen($auth_response) . " bytes\n";
        } else {
            echo "✗ Authenticated request failed\n";
            echo "Response: " . substr($auth_response, 0, 200) . "...\n";
        }

    } else {
        echo "✗ Token missing from successful login response\n";
    }

} else {
    echo "✗ Login Failed!\n";

    if (isset($response_data['message'])) {
        echo "Error Message: " . $response_data['message'] . "\n";
    }

    // Common failure reasons
    echo "\nTroubleshooting:\n";
    echo "1. Check if user exists in database\n";
    echo "2. Verify password is correct\n";
    echo "3. Ensure RestApi plugin is activated\n";
    echo "4. Check database connection\n";
    echo "5. Verify API endpoints are accessible\n";
}

echo "\n3. Additional Test Endpoints\n";
echo "You can test these endpoints manually:\n";
echo "- Settings Page: {$base_url}/api_settings\n";
echo "- Projects API: {$base_url}/api/projects (requires token)\n";
echo "- Clients API: {$base_url}/api/clients (requires token)\n";
echo "- Tasks API: {$base_url}/api/tasks (requires token)\n";

echo "\n4. cURL Examples for Manual Testing\n";
echo "Login:\n";
echo "curl -X POST {$base_url}/api/auth/login \\\n";
echo "  -H 'Content-Type: application/x-www-form-urlencoded' \\\n";
echo "  -d 'email={$test_credentials['email']}&password={$test_credentials['password']}'\n\n";

if (isset($token)) {
    echo "Authenticated Request:\n";
    echo "curl -X GET {$base_url}/api/projects \\\n";
    echo "  -H 'Accept: application/json' \\\n";
    echo "  -H 'authtoken: {$token}'\n";
}

echo "\n=== Test Completed ===\n";

// Log the test results
$log_entry = date('Y-m-d H:i:s') . " - API Login Test - Status: " .
    ($response_data['status'] ?? false ? 'SUCCESS' : 'FAILED') .
    " - HTTP: $http_code\n";
file_put_contents(__DIR__ . '/api_test_log.txt', $log_entry, FILE_APPEND);

?>
