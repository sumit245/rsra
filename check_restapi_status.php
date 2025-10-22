<?php
/**
 * RestApi Status Monitoring Script
 *
 * This script checks the current activation status of the RestApi plugin
 * and provides diagnostic information to troubleshoot deactivation issues.
 */

// Database configuration - update these values to match your setup
$db_config = [
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'rsra',
    'port'     => 3306
];

echo "=== RestApi Status Check ===\n";
echo "Time: " . date('Y-m-d H:i:s') . "\n\n";

try {
    // Connect to database
    $dsn = "mysql:host={$db_config['hostname']};port={$db_config['port']};dbname={$db_config['database']}";
    $pdo = new PDO($dsn, $db_config['username'], $db_config['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "✓ Database connection established\n\n";

    // Check 1: Database plugin settings
    echo "1. Database Plugin Settings Check:\n";
    $stmt = $pdo->prepare("SELECT setting_value FROM rise_settings WHERE setting_name = 'plugins'");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $plugins = @unserialize($result['setting_value']);
        if (is_array($plugins)) {
            $restapi_status = $plugins['RestApi'] ?? 'NOT SET';
            echo "   - RestApi status in database: " . $restapi_status . "\n";

            if ($restapi_status === 'activated') {
                echo "   ✓ RestApi is ACTIVATED in database\n";
            } else {
                echo "   ✗ RestApi is NOT activated in database\n";
            }
        } else {
            echo "   ✗ Could not deserialize plugins setting\n";
        }
    } else {
        echo "   ✗ No plugins setting found in database\n";
    }

    // Check 2: activated_plugins.json file
    echo "\n2. activated_plugins.json File Check:\n";
    $json_file = __DIR__ . '/app/Config/activated_plugins.json';

    if (file_exists($json_file)) {
        $content = file_get_contents($json_file);
        $activated_plugins = @json_decode($content, true);

        if (is_array($activated_plugins)) {
            echo "   - Activated plugins: " . implode(', ', $activated_plugins) . "\n";

            if (in_array('RestApi', $activated_plugins)) {
                echo "   ✓ RestApi is present in activated_plugins.json\n";
            } else {
                echo "   ✗ RestApi is MISSING from activated_plugins.json\n";
            }
        } else {
            echo "   ✗ Could not parse activated_plugins.json\n";
        }
    } else {
        echo "   ✗ activated_plugins.json file does not exist\n";
    }

    // Check 3: License verification settings
    echo "\n3. License Verification Settings Check:\n";
    $verification_settings = ['RestApi_verification_id', 'RestApi_verified', 'RestApi_last_verification'];

    foreach ($verification_settings as $setting) {
        $stmt = $pdo->prepare("SELECT setting_value FROM rise_settings WHERE setting_name = ?");
        $stmt->execute([$setting]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $value = $result['setting_value'];
            if ($setting === 'RestApi_last_verification') {
                $value .= ' (' . date('Y-m-d H:i:s', $value) . ')';
            }
            echo "   - $setting: $value\n";
        } else {
            echo "   - $setting: NOT SET\n";
        }
    }

    // Check 4: Plugin files existence
    echo "\n4. Plugin Files Check:\n";
    $required_files = [
        'plugins/RestApi/index.php',
        'plugins/RestApi/Libraries/Apiinit.php',
        'plugins/RestApi/Libraries/Envapi.php'
    ];

    foreach ($required_files as $file) {
        $full_path = __DIR__ . '/' . $file;
        if (file_exists($full_path)) {
            echo "   ✓ $file exists\n";
        } else {
            echo "   ✗ $file MISSING\n";
        }
    }

    // Check 5: Bypass status
    echo "\n5. License Bypass Status Check:\n";

    // Check Apiinit.php bypass
    $apiinit_file = __DIR__ . '/plugins/RestApi/Libraries/Apiinit.php';
    if (file_exists($apiinit_file)) {
        $content = file_get_contents($apiinit_file);
        if (strpos($content, 'return true') !== false && strpos($content, 'bypass') !== false) {
            echo "   ✓ Apiinit.php bypass is active\n";
        } else {
            echo "   ✗ Apiinit.php bypass may not be working\n";
        }
    } else {
        echo "   ✗ Apiinit.php file not found\n";
    }

    // Check Envapi.php bypass
    $envapi_file = __DIR__ . '/plugins/RestApi/Libraries/Envapi.php';
    if (file_exists($envapi_file)) {
        $content = file_get_contents($envapi_file);
        if (strpos($content, 'validatePurchase') !== false && strpos($content, 'return true') !== false) {
            echo "   ✓ Envapi.php bypass is active\n";
        } else {
            echo "   ✗ Envapi.php bypass may not be working\n";
        }
    } else {
        echo "   ✗ Envapi.php file not found\n";
    }

    // Check 6: Auto-reactivation hook
    echo "\n6. Auto-reactivation Hook Check:\n";
    $index_file = __DIR__ . '/plugins/RestApi/index.php';
    if (file_exists($index_file)) {
        $content = file_get_contents($index_file);
        if (strpos($content, 'app_hook_before_view') !== false) {
            echo "   ✓ Auto-reactivation hook is present\n";
        } else {
            echo "   ✗ Auto-reactivation hook is MISSING\n";
        }
    } else {
        echo "   ✗ RestApi index.php file not found\n";
    }

    // Overall status summary
    echo "\n=== OVERALL STATUS SUMMARY ===\n";

    $issues = [];

    if (!isset($restapi_status) || $restapi_status !== 'activated') {
        $issues[] = "Database shows RestApi as not activated";
    }

    if (!isset($activated_plugins) || !in_array('RestApi', $activated_plugins)) {
        $issues[] = "activated_plugins.json missing RestApi";
    }

    if (empty($issues)) {
        echo "✓ RestApi appears to be properly activated!\n";
        echo "\nTest your endpoints:\n";
        echo "- Settings: http://localhost/rsra/index.php/api_settings\n";
        echo "- Login: POST to http://localhost/rsra/index.php/api/auth/login\n";
    } else {
        echo "✗ Issues found:\n";
        foreach ($issues as $issue) {
            echo "  - $issue\n";
        }
        echo "\nRecommended action: Run fix_restapi_direct.php\n";
    }

    // Log this check
    $log_entry = date('Y-m-d H:i:s') . " - Status check completed - Issues: " . count($issues) . "\n";
    file_put_contents(__DIR__ . '/restapi_status_log.txt', $log_entry, FILE_APPEND);

} catch (PDOException $e) {
    echo "\n✗ Database Error: " . $e->getMessage() . "\n";
    echo "\nPlease check your database configuration.\n";
} catch (Exception $e) {
    echo "\n✗ Error: " . $e->getMessage() . "\n";
}

echo "\n--- End of Status Check ---\n";
?>
