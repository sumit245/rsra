# app\Libraries\Google.php

- Path: `app\Libraries\Google.php`
- Type: PHP
- Size: 10768 bytes

## References

**Models Used**
- `Settings_model`

**Database Tables (inferred)**
- `database`

## Symbols

# Symbols

**Files documented**: 1

## `app\Libraries\Google.php`

**Classes**:
- `App\Libraries\Google`

**Functions/Methods**:
- `__construct()`
- `authorize()`
- `_check_access_token($client, $redirect_to_settings = false)`
- `save_access_token($auth_code)`
- `_is_folder_exists($service, $folder_name)`
- `_save_id($name = "", $id = "", $type = "folder", $path_type = "node")`
- `download_file($file_id = "")`
- `_get_drive_service()`
- `_get_id($name = "", $type = "folder")`
- `_create_folder($folder_name = "", $path_type = "node")`
- `upload_file($temp_file, $file_name, $folder_name = "", $file_content = "")`
- `_make_file_as_public($service, $file_id = "")`
- `move_temp_file($file_name, $new_filename, $folder_name)`
- `_rename_file($service, $file_id, $new_filename)`
- `delete_file($file_id)`
- `_get_client_credentials()`

