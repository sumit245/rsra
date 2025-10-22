# plugins\Warehouse\lib\gtsslib.php

- Path: `plugins\Warehouse\lib\gtsslib.php`
- Type: PHP
- Size: 24996 bytes

## Summary (from docblocks)

check local license_exist
@return bool

get current version
@return string

call api 
@param  string $method 
@param  string $url   
@param  string $data 
@return json

check connection
@return json

get latest version
@return json

activate license
@param  string  $license
@param  string  $client
@param  string  $create_lic
@return array

verify license
@param  boolean $time_based_check
@param  boolean $license  
@param  boolean $client   
@return array

deactivate license 
@param  boolean $license 
@param  boolean $client  
@return json

check_update
@return json

download_update
@param  [type]  $update_id 
@param  [type]  $type         
@param  [type]  $version      
@param  boolean $license      
@param  boolean $client       
@param  boolean $db_for_import
@return object

progress description
@param  string $resource     
@param  string $download_size
@param  string $downloaded   
@param  string $upload_size  
@param  string $uploaded     
@return object

get_ip_from_third_party
@return object

get remote filesize
@param  string $url 
@return int

decrypt
@param  string $data
@return string

## Symbols

# Symbols

**Files documented**: 1

## `plugins\Warehouse\lib\gtsslib.php`

**Classes**:
- `InventoryLic`

**Functions/Methods**:
- `__construct()`
- `check_local_license_exist()`
- `get_current_version()`
- `call_api($method, $url, $data = null)`
- `check_connection()`
- `get_latest_version()`
- `activate_license($license, $client, $create_lic = true)`
- `verify_license($time_based_check = false, $license = false, $client = false)`
- `deactivate_license($license = false, $client = false)`
- `check_update()`
- `download_update($update_id, $type, $version, $license = false, $client = false, $db_for_import = false)`
- `progress($resource, $download_size, $downloaded, $upload_size, $uploaded)`
- `get_ip_from_third_party()`
- `get_remote_filesize($url)`
- `decrypt($data)`

