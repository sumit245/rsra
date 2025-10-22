<?php
/**
 * CodeIgniter Bootstrap Test
 *
 * This script tests if CodeIgniter loads properly when accessed from external systems.
 * It will help identify where the framework initialization fails.
 */

echo "=== CodeIgniter Bootstrap Test ===\n";
echo "Time: " . date('Y-m-d H:i:s') . "\n";
echo "Remote IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n";
echo "Request URI: " . ($_SERVER['REQUEST_URI'] ?? 'unknown') . "\n\n";

// Step 1: Basic PHP environment
echo "1. PHP ENVIRONMENT\n";
echo str_repeat('-', 30) . "\n";
echo "PHP Version: " . PHP_VERSION . "\n";
echo "Current Directory: " . getcwd() . "\n";
echo "Script Directory: " . __DIR__ . "\n";
echo "Document Root: " . ($_SERVER['DOCUMENT_ROOT'] ?? 'unknown') . "\n\n";

// Step 2: Path constants
echo "2. SETTING UP PATHS\n";
echo str_repeat('-', 30) . "\n";

try {
    // Define FCPATH like index.php does
    define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);
    echo "✓ FCPATH defined: " . FCPATH . "\n";

    // Change directory like index.php does
    chdir(FCPATH);
    echo "✓ Changed directory to: " . getcwd() . "\n";

    // Check if paths file exists
    $paths_file = FCPATH . 'app/Config/Paths.php';
    if (file_exists($paths_file)) {
        echo "✓ Paths.php file exists\n";
        require $paths_file;

        $paths = new Config\Paths();
        echo "✓ Paths object created\n";

        echo "  - System Directory: " . $paths->systemDirectory . "\n";
        echo "  - App Directory: " . $paths->appDirectory . "\n";
        echo "  - Writable Directory: " . $paths->writableDirectory . "\n";

        // Check if directories exist
        if (is_dir($paths->systemDirectory)) {
            echo "  ✓ System directory exists\n";
        } else {
            echo "  ✗ System directory missing: " . $paths->systemDirectory . "\n";
        }

        if (is_dir($paths->appDirectory)) {
            echo "  ✓ App directory exists\n";
        } else {
            echo "  ✗ App directory missing: " . $paths->appDirectory . "\n";
        }
    } else {
        echo "✗ Paths.php file not found: $paths_file\n";
        throw new Exception("Paths.php file missing");
    }

} catch (Exception $e) {
    echo "✗ Error in path setup: " . $e->getMessage() . "\n";
    echo "Stopping here - cannot continue without proper paths\n";
    exit;
}

echo "\n";

// Step 3: System bootstrap
echo "3. SYSTEM BOOTSTRAP\n";
echo str_repeat('-', 30) . "\n";

try {
    $bootstrap_file = rtrim($paths->systemDirectory, '\\/ ') . DIRECTORY_SEPARATOR . 'bootstrap.php';
    echo "Bootstrap file: $bootstrap_file\n";

    if (file_exists($bootstrap_file)) {
        echo "✓ Bootstrap file exists\n";

        // This is where the magic happens - loading CodeIgniter
        require $bootstrap_file;
        echo "✓ Bootstrap file loaded\n";

        // Check if key constants are defined
        $constants_to_check = ['SYSTEMPATH', 'APPPATH', 'ROOTPATH', 'WRITEPATH'];
        foreach ($constants_to_check as $const) {
            if (defined($const)) {
                echo "  ✓ $const: " . constant($const) . "\n";
            } else {
                echo "  ✗ $const not defined\n";
            }
        }

    } else {
        echo "✗ Bootstrap file not found: $bootstrap_file\n";
        throw new Exception("Bootstrap file missing");
    }

} catch (Exception $e) {
    echo "✗ Error in bootstrap: " . $e->getMessage() . "\n";
    echo "This is likely where the external access fails\n";
    exit;
}

echo "\n";

// Step 4: Environment loading
echo "4. ENVIRONMENT SETUP\n";
echo str_repeat('-', 30) . "\n";

try {
    // Load environment settings
    $dotenv_file = SYSTEMPATH . 'Config/DotEnv.php';
    if (file_exists($dotenv_file)) {
        echo "✓ DotEnv file exists\n";
        require_once $dotenv_file;

        $dotenv = new CodeIgniter\Config\DotEnv(ROOTPATH);
        $dotenv->load();
        echo "✓ Environment loaded\n";

        // Check environment
        if (defined('ENVIRONMENT')) {
            echo "  Environment: " . ENVIRONMENT . "\n";
        } else {
            echo "  Environment: Not defined (will default to production)\n";
        }

    } else {
        echo "✗ DotEnv file not found\n";
    }

} catch (Exception $e) {
    echo "✗ Error loading environment: " . $e->getMessage() . "\n";
}

echo "\n";

// Step 5: CodeIgniter instance
echo "5. CODEIGNITER INSTANCE\n";
echo str_repeat('-', 30) . "\n";

try {
    // Create the application instance
    $app = Config\Services::codeigniter();
    echo "✓ CodeIgniter instance created\n";

    if (is_object($app)) {
        echo "  Class: " . get_class($app) . "\n";

        // Test basic routing
        $request = Config\Services::request();
        echo "✓ Request service available\n";
        echo "  Method: " . $request->getMethod() . "\n";
        echo "  URI: " . $request->getUri() . "\n";

        $routes = Config\Services::routes();
        echo "✓ Routes service available\n";

    } else {
        echo "✗ CodeIgniter instance is not an object\n";
    }

} catch (Exception $e) {
    echo "✗ Error creating CodeIgniter instance: " . $e->getMessage() . "\n";
    echo "Stack trace:\n" . $e->getTraceAsString() . "\n";
}

echo "\n";

// Step 6: Plugin system test
echo "6. PLUGIN SYSTEM TEST\n";
echo str_repeat('-', 30) . "\n";

try {
    // Check if plugin constants are defined
    if (defined('PLUGINPATH')) {
        echo "✓ PLUGINPATH defined: " . PLUGINPATH . "\n";

        // Check activated plugins
        $plugins_file = APPPATH . 'Config/activated_plugins.json';
        if (file_exists($plugins_file)) {
            $plugins = json_decode(file_get_contents($plugins_file), true);
            echo "✓ Activated plugins: " . implode(', ', $plugins) . "\n";

            if (in_array('RestApi', $plugins)) {
                echo "✓ RestApi plugin is activated\n";

                // Check RestApi files
                $restapi_files = [
                    'plugins/RestApi/index.php',
                    'plugins/RestApi/Config/Routes.php',
                    'plugins/RestApi/Controllers/AuthController.php'
                ];

                foreach ($restapi_files as $file) {
                    if (file_exists(ROOTPATH . $file)) {
                        echo "  ✓ $file exists\n";
                    } else {
                        echo "  ✗ $file missing\n";
                    }
                }
            }
        }
    } else {
        echo "✗ PLUGINPATH not defined\n";
    }

} catch (Exception $e) {
    echo "✗ Error in plugin system: " . $e->getMessage() . "\n";
}

echo "\n";

// Step 7: Route test
echo "7. ROUTE RESOLUTION TEST\n";
echo str_repeat('-', 30) . "\n";

try {
    // Simulate API route
    $test_routes = [
        '/rsra/index.php/api/auth/login',
        '/rsra/index.php/api/projects',
        '/rsra/index.php/dashboard'
    ];

    foreach ($test_routes as $test_route) {
        echo "Testing route: $test_route\n";

        // This is a simplified test - in reality, CodeIgniter does complex route matching
        if (strpos($test_route, '/api/') !== false) {
            echo "  ✓ API route detected\n";
        } else {
            echo "  - Regular route\n";
        }
    }

} catch (Exception $e) {
    echo "✗ Error in route test: " . $e->getMessage() . "\n";
}

echo "\n=== TEST COMPLETE ===\n";

echo "\nDIAGNOSIS:\n";
echo "If you see this message, basic CodeIgniter bootstrap is working.\n";
echo "If API routes still fail, the issue is likely in:\n";
echo "1. Route registration (plugin routes not loading)\n";
echo "2. Controller instantiation\n";
echo "3. Authentication middleware\n";
echo "\nNext steps:\n";
echo "1. Test this script from both local and remote systems\n";
echo "2. Compare the output to identify where they differ\n";
echo "3. Focus on the first error/difference found\n";

// Step 8: Quick API simulation
echo "\n8. API ENDPOINT SIMULATION\n";
echo str_repeat('-', 30) . "\n";

if (strpos($_SERVER['REQUEST_URI'] ?? '', '/api/auth/login') !== false && $_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "✓ This request matches API login endpoint\n";
    echo "POST data:\n";
    foreach ($_POST as $key => $value) {
        echo "  $key: $value\n";
    }

    // Try to load RestApi AuthController manually
    if (defined('PLUGINPATH') && file_exists(PLUGINPATH . 'RestApi/Controllers/AuthController.php')) {
        echo "✓ AuthController file exists\n";
        echo "  Manual instantiation test would go here\n";
    }
} else {
    echo "- Not the API login endpoint\n";
    echo "  To test: POST to http://192.168.1.2/rsra/ci_test.php/api/auth/login\n";
}

?>
