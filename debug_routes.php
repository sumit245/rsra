<?php
/**
 * Route Debugging Script
 *
 * This script helps debug route registration issues by showing all registered routes
 * and testing specific API endpoints.
 */

echo "=== Route Debug Script ===\n";
echo "Time: " . date('Y-m-d H:i:s') . "\n";
echo "Remote IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n";
echo "Request URI: " . ($_SERVER['REQUEST_URI'] ?? 'unknown') . "\n";
echo "Request Method: " . ($_SERVER['REQUEST_METHOD'] ?? 'unknown') . "\n\n";

// Initialize CodeIgniter manually
try {
    // Define FCPATH
    define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);
    chdir(FCPATH);

    // Load paths
    require FCPATH . 'app/Config/Paths.php';
    $paths = new Config\Paths();

    // Bootstrap
    require rtrim($paths->systemDirectory, '\\/ ') . DIRECTORY_SEPARATOR . 'bootstrap.php';

    // Load environment
    require_once SYSTEMPATH . 'Config/DotEnv.php';
    (new CodeIgniter\Config\DotEnv(ROOTPATH))->load();

    echo "✓ CodeIgniter initialized\n\n";

} catch (Exception $e) {
    echo "✗ Failed to initialize CodeIgniter: " . $e->getMessage() . "\n";
    exit;
}

// Check PLUGINPATH
echo "1. PLUGIN PATH CHECK\n";
echo str_repeat('-', 30) . "\n";
if (defined('PLUGINPATH')) {
    echo "✓ PLUGINPATH defined: " . PLUGINPATH . "\n";
} else {
    echo "✗ PLUGINPATH not defined\n";
    // Define it manually for testing
    define('PLUGINPATH', ROOTPATH . 'plugins/');
    echo "  Manually defined: " . PLUGINPATH . "\n";
}
echo "\n";

// Check activated plugins
echo "2. ACTIVATED PLUGINS\n";
echo str_repeat('-', 30) . "\n";
$plugins_file = APPPATH . 'Config/activated_plugins.json';
if (file_exists($plugins_file)) {
    $plugins = json_decode(file_get_contents($plugins_file), true);
    echo "Activated plugins: " . implode(', ', $plugins) . "\n";

    if (in_array('RestApi', $plugins)) {
        echo "✓ RestApi is activated\n";

        // Check RestApi route file
        $restapi_routes = PLUGINPATH . 'RestApi/Config/Routes.php';
        if (file_exists($restapi_routes)) {
            echo "✓ RestApi Routes.php exists\n";
            echo "  Path: $restapi_routes\n";
        } else {
            echo "✗ RestApi Routes.php missing\n";
        }
    } else {
        echo "✗ RestApi is NOT activated\n";
    }
} else {
    echo "✗ activated_plugins.json not found\n";
}
echo "\n";

// Load Routes manually
echo "3. MANUAL ROUTE LOADING TEST\n";
echo str_repeat('-', 30) . "\n";

try {
    // Get routes service
    $routes = \Config\Services::routes();
    echo "✓ Routes service obtained\n";

    // Load main routes
    echo "Loading main Routes.php...\n";
    require APPPATH . 'Config/Routes.php';
    echo "✓ Main routes loaded\n";

    // The main routes file should have loaded plugin routes
    echo "Plugin routes should be loaded by main Routes.php\n";

} catch (Exception $e) {
    echo "✗ Error loading routes: " . $e->getMessage() . "\n";
}
echo "\n";

// Test route collection
echo "4. ROUTE COLLECTION ANALYSIS\n";
echo str_repeat('-', 30) . "\n";

try {
    $routes = \Config\Services::routes();
    $collection = $routes->getRoutes();

    echo "Total routes registered: " . count($collection) . "\n";

    // Look for API routes
    $api_routes = [];
    foreach ($collection as $route => $handler) {
        if (strpos($route, 'api/') !== false || strpos($route, 'api') === 0) {
            $api_routes[$route] = $handler;
        }
    }

    echo "API routes found: " . count($api_routes) . "\n";

    if (count($api_routes) > 0) {
        echo "\nAPI Routes:\n";
        foreach ($api_routes as $route => $handler) {
            echo "  $route => $handler\n";
        }
    } else {
        echo "\n✗ NO API ROUTES FOUND!\n";
        echo "This explains why API endpoints return 404\n";

        echo "\nFirst 10 registered routes:\n";
        $i = 0;
        foreach ($collection as $route => $handler) {
            if ($i >= 10) break;
            echo "  $route => $handler\n";
            $i++;
        }
    }

} catch (Exception $e) {
    echo "✗ Error analyzing routes: " . $e->getMessage() . "\n";
}
echo "\n";

// Test specific route patterns
echo "5. SPECIFIC ROUTE TESTS\n";
echo str_repeat('-', 30) . "\n";

$test_patterns = [
    'api/auth/login',
    'api/projects',
    'api/clients',
    'dashboard',
    'signin'
];

try {
    $router = \Config\Services::router();
    $routes = \Config\Services::routes();

    foreach ($test_patterns as $pattern) {
        echo "Testing: $pattern\n";

        // Try to match the route
        $collection = $routes->getRoutes();
        $found = false;

        foreach ($collection as $route => $handler) {
            if (preg_match('#^' . $route . '$#', $pattern)) {
                echo "  ✓ Matches route: $route => $handler\n";
                $found = true;
                break;
            }
        }

        if (!$found) {
            echo "  ✗ No matching route found\n";
        }
    }

} catch (Exception $e) {
    echo "✗ Error testing routes: " . $e->getMessage() . "\n";
}
echo "\n";

// File system verification
echo "6. PLUGIN FILE VERIFICATION\n";
echo str_repeat('-', 30) . "\n";

$critical_files = [
    'plugins/RestApi/index.php',
    'plugins/RestApi/Config/Routes.php',
    'plugins/RestApi/Controllers/AuthController.php',
    'plugins/RestApi/Controllers/Rest_api_Controller.php'
];

foreach ($critical_files as $file) {
    $full_path = ROOTPATH . $file;
    if (file_exists($full_path)) {
        echo "✓ $file exists\n";

        if ($file === 'plugins/RestApi/Config/Routes.php') {
            // Check the contents
            $content = file_get_contents($full_path);
            if (strpos($content, "auth/login") !== false) {
                echo "  ✓ Contains auth/login route\n";
            } else {
                echo "  ✗ Does NOT contain auth/login route\n";
            }

            if (strpos($content, "\$routes->post('auth/login'") !== false) {
                echo "  ✓ POST auth/login route defined\n";
            } else {
                echo "  ✗ POST auth/login route NOT properly defined\n";
            }
        }
    } else {
        echo "✗ $file MISSING\n";
    }
}
echo "\n";

// Request simulation
echo "7. REQUEST SIMULATION\n";
echo str_repeat('-', 30) . "\n";

$current_uri = $_SERVER['REQUEST_URI'] ?? '/rsra/debug_routes.php';
echo "Current URI: $current_uri\n";

// Simulate different API requests
$test_uris = [
    '/rsra/index.php/api/auth/login',
    '/rsra/index.php/api/projects',
    '/rsra/index.php/dashboard'
];

foreach ($test_uris as $test_uri) {
    echo "\nTesting URI: $test_uri\n";

    // Extract the route part (after index.php/)
    if (preg_match('#/index\.php/(.+)$#', $test_uri, $matches)) {
        $route_part = $matches[1];
        echo "  Route part: $route_part\n";

        // Check if this matches any registered routes
        try {
            $routes = \Config\Services::routes();
            $collection = $routes->getRoutes();

            $matched = false;
            foreach ($collection as $pattern => $handler) {
                // Simple pattern matching
                $regex_pattern = str_replace('(:segment)', '([^/]+)', $pattern);
                $regex_pattern = str_replace('(:any)', '(.+)', $regex_pattern);

                if (preg_match("#^{$regex_pattern}$#", $route_part)) {
                    echo "  ✓ Would match: $pattern => $handler\n";
                    $matched = true;
                    break;
                }
            }

            if (!$matched) {
                echo "  ✗ No route match found\n";
            }

        } catch (Exception $e) {
            echo "  ✗ Error testing route: " . $e->getMessage() . "\n";
        }
    }
}

echo "\n=== DIAGNOSIS ===\n";
echo "If no API routes are found in section 4, the problem is:\n";
echo "1. Plugin routes are not being loaded during route registration\n";
echo "2. Check that Routes.php is properly loading plugin route files\n";
echo "3. Check that plugin route files have correct syntax\n\n";

echo "If API routes ARE found but still get 404:\n";
echo "1. Route pattern matching issue\n";
echo "2. Controller/method not found\n";
echo "3. Middleware blocking access\n\n";

echo "Next step: Compare this output between local and remote access\n";
echo "Local: http://localhost/rsra/debug_routes.php\n";
echo "Remote: http://192.168.1.2/rsra/debug_routes.php\n";

?>
