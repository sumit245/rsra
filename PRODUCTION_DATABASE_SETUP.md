# Production Database Setup Guide

## Problem
The error `Unable to connect to the database. Main connection [MySQLi]: Access denied for user '****'@'localhost' (using password: NO)` indicates that CodeIgniter is not reading the database password from environment variables in production.

## Solution
The `Database.php` config file has been updated to use the `env()` helper function to read database credentials from environment variables. This allows you to configure database settings via a `.env` file without modifying the code.

## Setup Instructions

### Step 1: Create `.env` file in production

Create a `.env` file in the root directory of your application (same level as `index.php`).

### Step 2: Configure database credentials

Add the following lines to your `.env` file with your production database credentials:

```env
#--------------------------------------------------------------------
# ENVIRONMENT
#--------------------------------------------------------------------
CI_ENVIRONMENT = production

#--------------------------------------------------------------------
# DATABASE
#--------------------------------------------------------------------
database.default.hostname = localhost
database.default.database = your_database_name
database.default.username = your_database_username
database.default.password = your_database_password
database.default.DBDriver = MySQLi
database.default.DBPrefix = rise_
database.default.port = 3306
```

**Important Notes:**
- Replace `your_database_name` with your actual database name
- Replace `your_database_username` with your actual database username  
- Replace `your_database_password` with your actual database password
- If your database is on a different host, change `localhost` accordingly
- If your MySQL port is not 3306, update the port number

### Step 3: Set proper file permissions

Ensure the `.env` file has appropriate permissions (typically 600 or 640):

```bash
chmod 600 .env
```

### Step 4: Verify the `.env` file is being loaded

The `.env` file should be located at the root of your project (same directory as `index.php`). CodeIgniter automatically loads this file on startup.

### Step 5: Test the connection

After creating the `.env` file with correct credentials, test your application. The database connection should now work correctly.

## Alternative: Using Environment Variables

If you prefer to set environment variables at the system level (instead of using a `.env` file), you can set them in your web server configuration or system environment:

**For Apache (.htaccess or virtual host):**
```apache
SetEnv database.default.hostname "localhost"
SetEnv database.default.database "your_database_name"
SetEnv database.default.username "your_database_username"
SetEnv database.default.password "your_database_password"
SetEnv database.default.port "3306"
```

**For Nginx (in server block):**
```nginx
fastcgi_param database.default.hostname "localhost";
fastcgi_param database.default.database "your_database_name";
fastcgi_param database.default.username "your_database_username";
fastcgi_param database.default.password "your_database_password";
fastcgi_param database.default.port "3306";
```

## Troubleshooting

### Issue: Still getting "using password: NO" error

1. **Check if `.env` file exists**: Make sure the `.env` file is in the root directory
2. **Check file permissions**: Ensure the web server can read the `.env` file
3. **Check variable names**: Verify the variable names exactly match the format shown above (with dots)
4. **Check for typos**: Ensure there are no extra spaces or typos in the `.env` file
5. **Clear cache**: Clear the application cache if one exists

### Issue: Environment variables not loading

1. Verify that `index.php` contains the DotEnv loading code:
   ```php
   (new CodeIgniter\Config\DotEnv(ROOTPATH))->load();
   ```
   This should be around line 59 in `index.php`.

2. Check PHP error logs for any DotEnv-related errors

### Testing Environment Variables

You can test if environment variables are being loaded by temporarily adding this to a controller:

```php
echo '<pre>';
echo 'Hostname: ' . env('database.default.hostname') . "\n";
echo 'Database: ' . env('database.default.database') . "\n";
echo 'Username: ' . env('database.default.username') . "\n";
echo 'Password: ' . (env('database.default.password') ? 'SET' : 'NOT SET') . "\n";
echo '</pre>';
```

**Important**: Remove this test code after verification for security reasons.

## Security Best Practices

1. **Never commit `.env` file**: Ensure `.env` is in your `.gitignore` file
2. **Use strong passwords**: Use strong, unique passwords for production databases
3. **Restrict file permissions**: Set `.env` file permissions to 600 (read/write for owner only)
4. **Use environment-specific files**: Consider using different `.env` files for different environments
5. **Regular backups**: Keep backups of your `.env` file in a secure location

## Changes Made

The following changes were made to `app/Config/Database.php`:

- Changed hardcoded database credentials to use `env()` helper function
- All database settings now read from environment variables with fallback defaults
- This allows configuration via `.env` file without code changes

Example of the change:
```php
// Before:
'password' => '',

// After:
'password' => env('database.default.password', ''),
```

