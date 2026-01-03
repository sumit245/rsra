# plugins\Hr_payroll\Helpers\hr_payroll_general_helper.php

- Path: `plugins\Hr_payroll\Helpers\hr_payroll_general_helper.php`
- Type: PHP
- Size: 21699 bytes

## Summary (from docblocks)

Check whether column exists in a table
Custom function because Codeigniter is caching the tables and this is causing issues in migrations
@param  string $column column name to check
@param  string $table table name to check
@return boolean

get hr payroll option
@param  [type] $name 
@return [type]

row hr payroll options exist
@param  [type] $name 
@return [type]

hr payroll payroll column exist
@param  [type] $name 
@return [type]

hr profile reformat currency asset
@param  string $value 
@return string

hr payroll get status modules
@param  [type] $module_name 
@return [type]

hr payroll alphabeticala
@return [type]

hr payroll get departments name
@param  [type] $staffid 
@return [type]

hrp attendance type
@return [type]

hrp get timesheets status
@return [type]

hrp get hr profile status
@return [type]

hrp get commission status
@return [type]

list hr payroll permisstion
@return [type]

hr payroll get staff id hr permissions
@return [type]

hr payroll get staff id dont permissions
@return [type]

date to column name
@return [type]

payroll system column
@return [type]

payroll system columns dont format
@return [type]

luckysheet header format
@return [type]

luckysheet row format
@return [type]

hrp file force contents
@param  [type]  $filename 
@param  [type]  $data     
@param  integer $flags    
@return [type]

hrp reformat currency
@param  [type] $value 
@return [type]

hrp payslip number to anphabe
@return [type]

hrp payslip replace string
@param  [type] $file 
@return [type]

get payslip template name
@param  [type] $id 
@return [type]

get staffid by permission
@return [type]

get array staffid by permission
@param  string $newquerystring 
@return [type]

hrp payslip json data decode
@param  string $json_data 
@return [type]

## References

**Database Tables (inferred)**
- `setting`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\Hr_payroll\Helpers\hr_payroll_general_helper.php`

**Functions/Methods**:
- `get_hr_payroll_option($name)`
- `row_hr_payroll_options_exist($name)`
- `hr_payroll_payroll_column_exist($key)`
- `hr_payroll_reformat_currency($value)`
- `hr_payroll_get_status_modules($module_name)`
- `hr_payroll_alphabeticala()`
- `hr_payroll_get_departments_name($staffid)`
- `hrp_attendance_type()`
- `hrp_get_timesheets_status()`
- `hrp_get_hr_profile_status()`
- `hrp_get_commission_status()`
- `list_hr_payroll_permisstion()`
- `hr_payroll_get_staff_id_hr_permissions()`
- `hr_payroll_get_staff_id_dont_permissions()`
- `date_to_column_name()`
- `payroll_system_columns()`
- `payroll_system_columns_dont_format()`
- `luckysheet_header_format()`
- `luckysheet_row_format()`
- `hrp_file_force_contents($filename, $data, $flags = 0)`
- `hrp_reformat_currency($value)`
- `hrp_payslip_number_to_anphabe()`
- `hrp_payslip_replace_string($file)`
- `get_payslip_template_name($id)`
- `get_staffid_by_permission($newquerystring='')`
- `get_array_staffid_by_permission()`
- `hrp_payslip_json_data_decode($json_data='')`
- `cal_to_jd($calendar, $m, $d, $y)`
- `jddayofweek($julianday, $mode)`
- `cal_days_in_month($calendar, $month, $year)`
- `has_permission($permission, $staffid = '', $can = '')`
- `hrp_has_permission($staff_permission, $staffid = '')`

