# app\Controllers\App_Controller.php

- Path: `app\Controllers\App_Controller.php`
- Type: PHP
- Size: 9107 bytes

## Summary (from docblocks)

download files. If there is one file then don't archive the file otherwise archive the files.

@param string $directory_path
@param string $serialized_file_data 
@return download files

## References

**Models Used**
- `Users_model`
- `Settings_model`

**Database Tables (inferred)**
- `database`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\App_Controller.php`

**Classes**:
- `App\Controllers\App_Controller extends Controller`

**Functions/Methods**:
- `__construct()`
- `initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)`
- `get_models_array()`
- `validate_submitted_data($fields = array()`
- `download_app_files($directory_path, $serialized_file_data)`
- `_get_currency_dropdown_select2_data()`

