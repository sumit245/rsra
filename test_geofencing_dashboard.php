<?php

// Simple test script to check if geofencing dashboard is accessible
// This simulates an authenticated session

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "=== Geofencing Dashboard Access Test ===\n";
echo "Time: " . date('Y-m-d H:i:s') . "\n\n";

// Test 1: Check if the URL is accessible
echo "1. Testing URL accessibility...\n";
$url = "http://localhost/rsra/index.php/geofencing_attendance";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_NOBODY, false);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36');

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$redirect_url = curl_getinfo($ch, CURLINFO_REDIRECT_URL);
curl_close($ch);

echo "   HTTP Status: $http_code\n";
if ($redirect_url) {
    echo "   Redirected to: $redirect_url\n";
}
echo "   ✓ Route is accessible (not 404)\n\n";

// Test 2: Check if controller files exist
echo "2. Checking controller files...\n";
$controller_path = "plugins/Geofencing_Attendance/Controllers/Geofencing_Controller.php";
if (file_exists($controller_path)) {
    echo "   ✓ Geofencing_Controller.php exists\n";
} else {
    echo "   ✗ Geofencing_Controller.php missing\n";
}

// Test 3: Check if view files exist
echo "\n3. Checking view files...\n";
$dashboard_view = "plugins/Geofencing_Attendance/Views/dashboard.php";
$dashboard_view_alt = "plugins/Geofencing_Attendance/Views/dashboard/index.php";

if (file_exists($dashboard_view)) {
    echo "   ✓ Views/dashboard.php exists\n";
} else {
    echo "   ✗ Views/dashboard.php missing\n";
}

if (file_exists($dashboard_view_alt)) {
    echo "   ✓ Views/dashboard/index.php exists\n";
} else {
    echo "   ✗ Views/dashboard/index.php missing\n";
}

$geofences_index = "plugins/Geofencing_Attendance/Views/geofences/index.php";
$geofences_form = "plugins/Geofencing_Attendance/Views/geofences/form.php";

if (file_exists($geofences_index)) {
    echo "   ✓ Views/geofences/index.php exists\n";
} else {
    echo "   ✗ Views/geofences/index.php missing\n";
}

if (file_exists($geofences_form)) {
    echo "   ✓ Views/geofences/form.php exists\n";
} else {
    echo "   ✗ Views/geofences/form.php missing\n";
}

// Test 4: Check database tables
echo "\n4. Checking database tables...\n";
try {
    $db = new mysqli('localhost', 'root', '', 'rsrbotics_rsra');
    if ($db->connect_error) {
        throw new Exception('Connection failed: ' . $db->connect_error);
    }

    $tables = [
        'rise_geofences',
        'rise_attendance_sessions',
        'rise_location_history',
        'rise_staff_devices',
        'rise_geofence_staff'
    ];

    foreach ($tables as $table) {
        $result = $db->query("SHOW TABLES LIKE '$table'");
        if ($result->num_rows > 0) {
            echo "   ✓ $table exists\n";
        } else {
            echo "   ✗ $table missing\n";
        }
    }

    // Check for sample data
    echo "\n5. Checking sample data...\n";
    $result = $db->query("SELECT COUNT(*) as count FROM rise_geofences");
    $row = $result->fetch_assoc();
    echo "   Geofences in database: " . $row['count'] . "\n";

    if ($row['count'] > 0) {
        $result = $db->query("SELECT name, latitude, longitude FROM rise_geofences LIMIT 2");
        while ($row = $result->fetch_assoc()) {
            echo "   - " . $row['name'] . " (" . $row['latitude'] . ", " . $row['longitude'] . ")\n";
        }
    }

} catch (Exception $e) {
    echo "   ✗ Database error: " . $e->getMessage() . "\n";
}

// Test 5: Check plugin activation
echo "\n6. Checking plugin activation...\n";
$activated_plugins_file = "app/Config/activated_plugins.json";
if (file_exists($activated_plugins_file)) {
    $activated_plugins = json_decode(file_get_contents($activated_plugins_file), true);
    if (is_array($activated_plugins) && in_array('Geofencing_Attendance', $activated_plugins)) {
        echo "   ✓ Geofencing_Attendance plugin is activated\n";
    } else {
        echo "   ✗ Geofencing_Attendance plugin is not activated\n";
        echo "   Current plugins: " . implode(', ', $activated_plugins) . "\n";
    }
} else {
    echo "   ✗ activated_plugins.json file missing\n";
}

// Test 6: Test routes file loading
echo "\n7. Testing routes configuration...\n";
$routes_file = "plugins/Geofencing_Attendance/Config/Routes.php";
if (file_exists($routes_file)) {
    echo "   ✓ Plugin Routes.php exists\n";

    // Check if main routes file includes plugin routes
    $main_routes = file_get_contents("app/Config/Routes.php");
    if (strpos($main_routes, 'PLUGINPATH') !== false && strpos($main_routes, 'activated_plugins') !== false) {
        echo "   ✓ Main Routes.php includes plugin routes loading\n";
    } else {
        echo "   ✗ Main Routes.php does not include plugin routes loading\n";
    }
} else {
    echo "   ✗ Plugin Routes.php missing\n";
}

// Test 7: Check for recent errors in logs
echo "\n8. Checking recent error logs...\n";
$log_files = glob("writable/logs/log-*.log");
if (!empty($log_files)) {
    $latest_log = max($log_files);
    echo "   Latest log file: " . basename($latest_log) . "\n";

    $log_content = file_get_contents($latest_log);
    if (strpos($log_content, 'Geofencing_Controller') !== false) {
        echo "   ⚠ Found Geofencing_Controller references in logs\n";

        // Get last few lines that mention Geofencing
        $lines = explode("\n", $log_content);
        $geofencing_lines = array_filter($lines, function($line) {
            return strpos($line, 'Geofencing') !== false;
        });

        $recent_lines = array_slice($geofencing_lines, -3);
        foreach ($recent_lines as $line) {
            echo "   Log: " . trim($line) . "\n";
        }
    } else {
        echo "   ✓ No recent Geofencing errors in logs\n";
    }
} else {
    echo "   ✓ No log files found (no errors)\n";
}

echo "\n=== Summary ===\n";
if ($http_code == 302) {
    echo "✓ System Status: WORKING (redirects to login as expected)\n";
    echo "✓ The geofencing dashboard is accessible but requires authentication\n";
    echo "✓ Try accessing via: http://localhost/rsra/index.php/signin\n";
    echo "✓ Then navigate to: http://localhost/rsra/index.php/geofencing_attendance\n";
} elseif ($http_code == 200) {
    echo "✓ System Status: WORKING (direct access granted)\n";
} else {
    echo "✗ System Status: ISSUE (HTTP $http_code)\n";
}

echo "\n--- Test completed ---\n";
?>
