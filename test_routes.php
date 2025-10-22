<?php
/**
 * API Route Diagnostic Script
 *
 * This script tests various API endpoints and routing configurations
 * to help diagnose 404 errors and routing issues.
 */

// Base URL configuration
$base_urls = [
    'localhost' => 'http://localhost/rsra',
    'network_ip' => 'http://192.168.1.2/rsra'
];

echo "=== API Route Diagnostic Test ===\n";
echo "Time: " . date('Y-m-d H:i:s') . "\n\n";

// Test endpoints
$endpoints = [
    'index' => '/index.php',
    'dashboard' => '/index.php/dashboard',
    'api_settings' => '/index.php/api_settings',
    'api_auth_direct' => '/index.php/api/auth/login',
    'api_projects' => '/index.php/api/projects'
];

foreach ($base_urls as $label => $base_url) {
    echo "Testing Base URL: $base_url ($label)\n";
    echo str_repeat('-', 50) . "\n";

    foreach ($endpoints as $name => $endpoint) {
        $full_url = $base_url . $endpoint;
        echo "  $name: ";

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $full_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_HEADER => false,
            CURLOPT_NOBODY => ($name !== 'api_auth_direct'), // HEAD request for most, GET for auth
            CURLOPT_HTTPHEADER => [
                'Accept: application/json',
                'User-Agent: API-Test-Script/1.0'
            ]
        ]);

        if ($name === 'api_auth_direct') {
            // POST request for auth endpoint
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, 'email=test@test.com&password=test');
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/x-www-form-urlencoded',
                'Accept: application/json',
                'User-Agent: API-Test-Script/1.0'
            ]);
        }

        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curl_error = curl_error($ch);
        $redirect_url = curl_getinfo($ch, CURLINFO_REDIRECT_URL);
        curl_close($ch);

        if ($curl_error) {
            echo "ERROR ($curl_error)\n";
        } else {
            $status = '';
            switch ($http_code) {
                case 200:
                    $status = '✓ OK';
                    break;
                case 302:
                case 301:
                    $status = "→ REDIRECT ($redirect_url)";
                    break;
                case 404:
                    $status = '✗ NOT FOUND';
                    break;
                case 500:
                    $status = '✗ SERVER ERROR';
                    break;
                case 401:
                    $status = '✓ UNAUTHORIZED (endpoint works, needs auth)';
                    break;
                default:
                    $status = "? HTTP $http_code";
            }
            echo "$status\n";

            // Show response sample for 404s to help diagnose
            if ($http_code == 404 && !empty($response)) {
                $sample = substr(strip_tags($response), 0, 100);
                if (strlen($sample) > 0) {
                    echo "    Response: " . trim($sample) . "...\n";
                }
            }
        }
    }
    echo "\n";
}

echo "=== .htaccess Check ===\n";
$htaccess_file = __DIR__ . '/.htaccess';
if (file_exists($htaccess_file)) {
    echo "✓ .htaccess file exists\n";
    $content = file_get_contents($htaccess_file);
    if (strpos($content, 'RewriteEngine On') !== false) {
        echo "✓ URL rewriting enabled\n";
    } else {
        echo "✗ URL rewriting not found in .htaccess\n";
    }
    if (strpos($content, 'RewriteRule') !== false) {
        echo "✓ Rewrite rules present\n";
    } else {
        echo "✗ No rewrite rules found\n";
    }
} else {
    echo "✗ .htaccess file missing\n";
    echo "  This is likely the cause of 404 errors!\n";
}

echo "\n=== Apache Module Check ===\n";
if (function_exists('apache_get_modules')) {
    $modules = apache_get_modules();
    $required_modules = ['mod_rewrite', 'mod_headers'];

    foreach ($required_modules as $module) {
        if (in_array($module, $modules)) {
            echo "✓ $module is loaded\n";
        } else {
            echo "✗ $module is NOT loaded\n";
        }
    }
} else {
    echo "? Cannot check Apache modules (not running under Apache or apache_get_modules not available)\n";
}

echo "\n=== Route Configuration Check ===\n";

// Check main routes file
$main_routes = __DIR__ . '/app/Config/Routes.php';
if (file_exists($main_routes)) {
    echo "✓ Main Routes.php exists\n";
} else {
    echo "✗ Main Routes.php missing\n";
}

// Check RestApi routes file
$api_routes = __DIR__ . '/plugins/RestApi/Config/Routes.php';
if (file_exists($api_routes)) {
    echo "✓ RestApi Routes.php exists\n";
    $routes_content = file_get_contents($api_routes);
    if (strpos($routes_content, "auth/login") !== false) {
        echo "✓ Auth login route defined\n";
    } else {
        echo "✗ Auth login route not found\n";
    }
} else {
    echo "✗ RestApi Routes.php missing\n";
}

echo "\n=== Plugin Status Check ===\n";

// Check if RestApi is activated
$json_file = __DIR__ . '/app/Config/activated_plugins.json';
if (file_exists($json_file)) {
    $content = file_get_contents($json_file);
    $plugins = json_decode($content, true);
    if (is_array($plugins) && in_array('RestApi', $plugins)) {
        echo "✓ RestApi plugin is activated\n";
    } else {
        echo "✗ RestApi plugin is NOT activated\n";
        echo "  Activated plugins: " . implode(', ', $plugins) . "\n";
    }
} else {
    echo "✗ activated_plugins.json not found\n";
}

echo "\n=== Recommendations ===\n";

// Analyze issues and provide recommendations
$issues = [];

if (!file_exists($htaccess_file)) {
    $issues[] = "Missing .htaccess file - This is likely causing 404 errors";
}

if (function_exists('apache_get_modules')) {
    $modules = apache_get_modules();
    if (!in_array('mod_rewrite', $modules)) {
        $issues[] = "mod_rewrite not enabled in Apache";
    }
}

if (empty($issues)) {
    echo "✓ No obvious configuration issues found\n";
    echo "\nIf you're still getting 404 errors, try:\n";
    echo "1. Test with localhost first: http://localhost/rsra/index.php/api/auth/login\n";
    echo "2. Check Apache error logs\n";
    echo "3. Verify network firewall settings\n";
    echo "4. Test direct index.php access: http://192.168.1.2/rsra/index.php\n";
} else {
    echo "Issues found:\n";
    foreach ($issues as $issue) {
        echo "  ✗ $issue\n";
    }

    echo "\nTo fix:\n";
    if (!file_exists($htaccess_file)) {
        echo "1. Create .htaccess file in rsra directory\n";
        echo "2. Enable Apache mod_rewrite module\n";
        echo "3. Test again\n";
    }
}

echo "\n=== Test Commands ===\n";
echo "Manual test commands you can run:\n\n";

echo "1. Test basic connectivity:\n";
echo "   curl -I http://192.168.1.2/rsra/index.php\n\n";

echo "2. Test API login (form data):\n";
echo "   curl -X POST http://192.168.1.2/rsra/index.php/api/auth/login \\\n";
echo "     -H 'Content-Type: application/x-www-form-urlencoded' \\\n";
echo "     -H 'Accept: application/json' \\\n";
echo "     -d 'email=sumitranjan245@gmail.com&password=12345678'\n\n";

echo "3. Test API settings page:\n";
echo "   curl -I http://192.168.1.2/rsra/index.php/api_settings\n\n";

echo "--- End of Route Diagnostic ---\n";
?>
