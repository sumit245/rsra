<?php
/**
 * Network Diagnostic Script for RSRA API Access
 *
 * This script helps diagnose network access issues when the API works locally
 * but not from external systems.
 */

echo "=== RSRA Network Access Diagnostic ===\n";
echo "Time: " . date('Y-m-d H:i:s') . "\n";
echo "Server: " . ($_SERVER['SERVER_NAME'] ?? 'Unknown') . "\n";
echo "Request from: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n\n";

// Test 1: Basic PHP Info
echo "1. SERVER ENVIRONMENT CHECK\n";
echo str_repeat('-', 40) . "\n";
echo "Server Software: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'Unknown') . "\n";
echo "Document Root: " . ($_SERVER['DOCUMENT_ROOT'] ?? 'Unknown') . "\n";
echo "HTTP Host: " . ($_SERVER['HTTP_HOST'] ?? 'Unknown') . "\n";
echo "Server Name: " . ($_SERVER['SERVER_NAME'] ?? 'Unknown') . "\n";
echo "Server Addr: " . ($_SERVER['SERVER_ADDR'] ?? 'Unknown') . "\n";
echo "Server Port: " . ($_SERVER['SERVER_PORT'] ?? 'Unknown') . "\n";
echo "Request URI: " . ($_SERVER['REQUEST_URI'] ?? 'Unknown') . "\n";
echo "Request Method: " . ($_SERVER['REQUEST_METHOD'] ?? 'Unknown') . "\n\n";

// Test 2: Network Interface Check
echo "2. NETWORK INTERFACES\n";
echo str_repeat('-', 40) . "\n";

if (function_exists('exec')) {
    $output = [];
    exec('ipconfig', $output);
    foreach ($output as $line) {
        if (strpos($line, 'IPv4') !== false || strpos($line, 'Ethernet') !== false || strpos($line, 'Wireless') !== false) {
            echo trim($line) . "\n";
        }
    }
} else {
    echo "exec() function disabled - cannot check network interfaces\n";
}
echo "\n";

// Test 3: Headers Check
echo "3. REQUEST HEADERS\n";
echo str_repeat('-', 40) . "\n";
foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}
echo "\n";

// Test 4: CodeIgniter Environment Check
echo "4. CODEIGNITER ENVIRONMENT\n";
echo str_repeat('-', 40) . "\n";
if (defined('ENVIRONMENT')) {
    echo "Environment: " . ENVIRONMENT . "\n";
} else {
    echo "Environment: Not defined\n";
}

if (defined('APPPATH')) {
    echo "App Path: " . APPPATH . "\n";
} else {
    echo "App Path: Not defined\n";
}

if (defined('PLUGINPATH')) {
    echo "Plugin Path: " . PLUGINPATH . "\n";
} else {
    echo "Plugin Path: Not defined\n";
}

// Check if CI is loaded
if (function_exists('service')) {
    echo "CodeIgniter: Loaded\n";
} else {
    echo "CodeIgniter: Not loaded\n";
}
echo "\n";

// Test 5: File System Check
echo "5. FILE SYSTEM ACCESS\n";
echo str_repeat('-', 40) . "\n";

$important_files = [
    'index.php',
    'app/Config/Routes.php',
    'plugins/RestApi/Config/Routes.php',
    'plugins/RestApi/Controllers/AuthController.php',
    '.htaccess'
];

foreach ($important_files as $file) {
    if (file_exists(__DIR__ . '/' . $file)) {
        echo "✓ $file exists\n";
    } else {
        echo "✗ $file missing\n";
    }
}
echo "\n";

// Test 6: API Routes Test
echo "6. API ROUTE SIMULATION\n";
echo str_repeat('-', 40) . "\n";

// Simulate route matching
$request_uri = $_SERVER['REQUEST_URI'] ?? '';
$path_info = $_SERVER['PATH_INFO'] ?? '';

echo "Request URI: $request_uri\n";
echo "Path Info: $path_info\n";

// Check if this looks like an API request
if (strpos($request_uri, '/api/') !== false) {
    echo "✓ API request detected\n";

    // Extract the API path
    $api_path = '';
    if (preg_match('/\/api\/(.+)/', $request_uri, $matches)) {
        $api_path = $matches[1];
        echo "API Path: $api_path\n";

        // Check specific API endpoints
        $api_routes = [
            'auth/login' => 'POST',
            'projects' => 'GET',
            'clients' => 'GET',
            'auth/debug' => 'GET'
        ];

        foreach ($api_routes as $route => $method) {
            if (strpos($api_path, $route) === 0) {
                echo "✓ Route '$route' matches (expects $method)\n";
            }
        }
    }
} else {
    echo "- Not an API request\n";
}
echo "\n";

// Test 7: Plugin Status
echo "7. PLUGIN STATUS\n";
echo str_repeat('-', 40) . "\n";

$plugin_file = __DIR__ . '/app/Config/activated_plugins.json';
if (file_exists($plugin_file)) {
    $plugins = json_decode(file_get_contents($plugin_file), true);
    if (is_array($plugins)) {
        echo "Activated plugins: " . implode(', ', $plugins) . "\n";
        if (in_array('RestApi', $plugins)) {
            echo "✓ RestApi plugin is activated\n";
        } else {
            echo "✗ RestApi plugin is NOT activated\n";
        }
    } else {
        echo "✗ Could not parse activated_plugins.json\n";
    }
} else {
    echo "✗ activated_plugins.json not found\n";
}
echo "\n";

// Test 8: Database Connection (if possible)
echo "8. DATABASE CONNECTION TEST\n";
echo str_repeat('-', 40) . "\n";

try {
    $db_config = [
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'rsra',
        'port' => 3306
    ];

    $dsn = "mysql:host={$db_config['hostname']};port={$db_config['port']};dbname={$db_config['database']}";
    $pdo = new PDO($dsn, $db_config['username'], $db_config['password']);
    echo "✓ Database connection successful\n";

    // Quick user count
    $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM rise_users WHERE deleted = 0");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "Active users in database: " . $result['count'] . "\n";

} catch (Exception $e) {
    echo "✗ Database connection failed: " . $e->getMessage() . "\n";
}
echo "\n";

// Test 9: Security Recommendations
echo "9. SECURITY & ACCESS RECOMMENDATIONS\n";
echo str_repeat('-', 40) . "\n";

$remote_ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$local_ips = ['127.0.0.1', '::1', 'localhost'];

if (in_array($remote_ip, $local_ips)) {
    echo "✓ Local access detected\n";
} else {
    echo "! Remote access from: $remote_ip\n";
    echo "  Make sure:\n";
    echo "  - Windows Firewall allows Apache on port 80\n";
    echo "  - Router forwards port 80 to this machine\n";
    echo "  - Apache is configured to accept external connections\n";
    echo "  - No antivirus is blocking network access\n";
}
echo "\n";

// Test 10: Quick API Test
echo "10. QUICK API ENDPOINT TEST\n";
echo str_repeat('-', 40) . "\n";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && strpos($_SERVER['REQUEST_URI'], '/api/auth/login') !== false) {
    echo "✓ This IS the API login endpoint!\n";
    echo "POST data received:\n";
    foreach ($_POST as $key => $value) {
        echo "  $key: " . (strlen($value) > 50 ? substr($value, 0, 50) . '...' : $value) . "\n";
    }

    if (isset($_POST['email']) && isset($_POST['password'])) {
        echo "✓ Required email and password fields present\n";
    } else {
        echo "✗ Missing email or password fields\n";
    }
} else {
    echo "- Not the login endpoint (method: " . $_SERVER['REQUEST_METHOD'] . ")\n";
    echo "- To test API login, POST to: /rsra/index.php/api/auth/login\n";
}

echo "\n=== DIAGNOSTIC COMPLETE ===\n";
echo "\nTo test this script:\n";
echo "1. From local system: http://localhost/rsra/network_diagnostic.php\n";
echo "2. From remote system: http://192.168.1.2/rsra/network_diagnostic.php\n";
echo "3. API test: POST to http://192.168.1.2/rsra/index.php/api/auth/login\n";

?>
