<?php
/**
 * User Database Check Script
 *
 * This script checks if a user exists in the database and shows their details
 * to help troubleshoot API login issues.
 */

// Database configuration - update these values to match your setup
$db_config = [
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'rsra',
    'port'     => 3306
];

// Test user credentials
$test_email = 'sumitranjan245@gmail.com';

echo "=== User Database Check ===\n";
echo "Time: " . date('Y-m-d H:i:s') . "\n";
echo "Checking user: $test_email\n\n";

try {
    // Connect to database
    $dsn = "mysql:host={$db_config['hostname']};port={$db_config['port']};dbname={$db_config['database']}";
    $pdo = new PDO($dsn, $db_config['username'], $db_config['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "✓ Database connection established\n\n";

    // Check 1: Find user by email
    echo "1. Searching for user by email...\n";
    $stmt = $pdo->prepare("SELECT * FROM rise_users WHERE email = ?");
    $stmt->execute([$test_email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        echo "✓ User found!\n\n";

        echo "User Details:\n";
        echo "  - ID: " . $user['id'] . "\n";
        echo "  - First Name: " . ($user['first_name'] ?? 'N/A') . "\n";
        echo "  - Last Name: " . ($user['last_name'] ?? 'N/A') . "\n";
        echo "  - Email: " . $user['email'] . "\n";
        echo "  - User Type: " . ($user['user_type'] ?? 'N/A') . "\n";
        echo "  - Status: " . ($user['status'] ?? 'N/A') . "\n";
        echo "  - Deleted: " . ($user['deleted'] ?? 'N/A') . "\n";
        echo "  - Created: " . ($user['created_at'] ?? 'N/A') . "\n";
        echo "  - Password Hash: " . substr($user['password'] ?? 'N/A', 0, 20) . "...\n";

        // Check user status
        echo "\n2. User Status Analysis:\n";

        if (isset($user['deleted']) && $user['deleted'] != 0) {
            echo "  ✗ User is marked as DELETED\n";
        } else {
            echo "  ✓ User is not deleted\n";
        }

        if (isset($user['status']) && $user['status'] === 'active') {
            echo "  ✓ User status is ACTIVE\n";
        } else {
            echo "  ✗ User status is: " . ($user['status'] ?? 'unknown') . "\n";
        }

        if (!empty($user['password'])) {
            echo "  ✓ User has password set\n";
        } else {
            echo "  ✗ User has no password set\n";
        }

        // Check 3: Test password verification (common hashing methods)
        echo "\n3. Password Analysis:\n";
        $test_password = '12345678';
        $stored_hash = $user['password'] ?? '';

        if (empty($stored_hash)) {
            echo "  ✗ No password hash stored\n";
        } else {
            echo "  - Hash length: " . strlen($stored_hash) . " characters\n";
                echo "  - First 20 chars: " . substr($stored_hash, 0, 20) . "...\n";
                echo "  - Hash type appears to be: ";

                if (strpos($stored_hash, '$2y$') === 0 || strpos($stored_hash, '$2b$') === 0) {
                    echo "bcrypt\n";
                    if (password_verify($test_password, $stored_hash)) {
                        echo "  ✓ Test password matches with bcrypt!\n";
                    } else {
                        echo "  ✗ Test password does not match with bcrypt\n";
                    }
                } elseif (strlen($stored_hash) === 32) {
                    echo "MD5\n";
                    $md5_hash = md5($test_password);
                    echo "  - Expected MD5: $md5_hash\n";
                    echo "  - Stored hash:  $stored_hash\n";
                    if ($md5_hash === $stored_hash) {
                        echo "  ✓ Test password matches with MD5!\n";
                    } else {
                        echo "  ✗ Test password does not match with MD5\n";
                    }
                } elseif (strlen($stored_hash) === 40) {
                    echo "SHA1\n";
                    $sha1_hash = sha1($test_password);
                    echo "  - Expected SHA1: $sha1_hash\n";
                    echo "  - Stored hash:   $stored_hash\n";
                    if ($sha1_hash === $stored_hash) {
                        echo "  ✓ Test password matches with SHA1!\n";
                    } else {
                        echo "  ✗ Test password does not match with SHA1\n";
                    }
                } else {
                    echo "Unknown (" . strlen($stored_hash) . " chars)\n";
                    echo "  - Full hash: $stored_hash\n";
                    echo "  - Trying various hash methods...\n";

                    $methods = [
                        'md5' => md5($test_password),
                        'sha1' => sha1($test_password),
                        'sha256' => hash('sha256', $test_password),
                        'sha512' => hash('sha512', $test_password),
                    ];

                    $match_found = false;
                    foreach ($methods as $method => $hash) {
                        echo "    $method: $hash\n";
                        if ($hash === $stored_hash) {
                            echo "  ✓ Password matches using $method!\n";
                            $match_found = true;
                        }
                    }

                    // Try bcrypt even if length doesn't match
                    if (!$match_found) {
                        if (password_verify($test_password, $stored_hash)) {
                            echo "  ✓ Password matches using bcrypt verification!\n";
                            $match_found = true;
                        }
                    }

                    if (!$match_found) {
                        echo "  ✗ No hash method matches\n";
                        echo "  - Try different test passwords:\n";
                        echo "    - 123456\n";
                        echo "    - password\n";
                        echo "    - admin\n";
                        echo "    - 12345678\n";
                    }
                }
        }

    } else {
        echo "✗ User NOT found!\n\n";

        echo "4. Checking for similar users...\n";

        // Check for users with similar email patterns
        $similar_stmt = $pdo->prepare("SELECT id, email, first_name, last_name FROM rise_users WHERE email LIKE ? OR email LIKE ? LIMIT 10");
        $similar_stmt->execute([
            '%' . str_replace('@', '%@', $test_email) . '%',
            '%' . explode('@', $test_email)[0] . '%'
        ]);
        $similar_users = $similar_stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($similar_users) {
            echo "  Similar users found:\n";
            foreach ($similar_users as $similar) {
                echo "    - ID {$similar['id']}: {$similar['email']} ({$similar['first_name']} {$similar['last_name']})\n";
            }
        } else {
            echo "  No similar users found\n";
        }

        echo "\n5. All users in database:\n";
        $all_stmt = $pdo->prepare("SELECT id, email, first_name, last_name, user_type, status FROM rise_users WHERE deleted = 0 ORDER BY id LIMIT 20");
        $all_stmt->execute();
        $all_users = $all_stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($all_users) {
            foreach ($all_users as $u) {
                echo "    - ID {$u['id']}: {$u['email']} ({$u['first_name']} {$u['last_name']}) - {$u['user_type']} - {$u['status']}\n";
            }
        } else {
            echo "    No active users found in database!\n";
        }
    }

    // Check 6: Database table structure
    echo "\n6. Database Table Info:\n";
    $columns_stmt = $pdo->prepare("DESCRIBE rise_users");
    $columns_stmt->execute();
    $columns = $columns_stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "  Users table columns:\n";
    foreach ($columns as $col) {
        echo "    - {$col['Field']} ({$col['Type']}) - {$col['Null']} - {$col['Default']}\n";
    }

    // Check 7: Total user count
    $count_stmt = $pdo->prepare("SELECT COUNT(*) as total, COUNT(CASE WHEN deleted = 0 THEN 1 END) as active FROM rise_users");
    $count_stmt->execute();
    $counts = $count_stmt->fetch(PDO::FETCH_ASSOC);

    echo "\n7. User Statistics:\n";
    echo "  - Total users: " . $counts['total'] . "\n";
    echo "  - Active users: " . $counts['active'] . "\n";

} catch (PDOException $e) {
    echo "\n✗ Database Error: " . $e->getMessage() . "\n";
    echo "\nPlease check your database configuration:\n";
    echo "- Host: {$db_config['hostname']}\n";
    echo "- Database: {$db_config['database']}\n";
    echo "- Username: {$db_config['username']}\n";
    echo "- Port: {$db_config['port']}\n";

    echo "\nAlso verify the database table name. Common variations:\n";
    echo "- rise_users\n";
    echo "- users\n";
    echo "- rsra_users\n";

} catch (Exception $e) {
    echo "\n✗ Error: " . $e->getMessage() . "\n";
}

echo "\n=== Recommendations ===\n";

if (isset($user) && $user) {
    echo "User exists. If login still fails:\n";
    echo "1. Check password hashing method in AuthService\n";
    echo "2. Verify user status is 'active'\n";
    echo "3. Check if user_type allows API access\n";
    echo "4. Review API authentication logic\n";
} else {
    echo "User does not exist. To fix:\n";
    echo "1. Create user via admin panel\n";
    echo "2. Or import users from backup\n";
    echo "3. Or use existing user credentials\n";
    echo "4. Check if table name is correct (rise_users)\n";
}

echo "\n--- End of User Check ---\n";
?>
