# plugins\Hr_profile\Helpers\hr_profile_general_helper.php

- Path: `plugins\Hr_profile\Helpers\hr_profile_general_helper.php`
- Type: PHP
- Size: 35009 bytes

## Summary (from docblocks)

job position by staff
@param  integer $staffid
@return string

job name by id
@param  integer $job_position
@return string

hr profile reformat currency asset
@param  string $value
@return string

get department name
@param  integer $departmentid
@return object

handle hr profile job position attachments array
@param  [type] $jobposition_tid
@param  string $index_name
@return [type]

get hr profile upload path by type
@param  string $type

get status modules
@param  string $module_name
@return boolean

handle hr profile attachments array
@param  [type] $staffid
@param  string $index_name
@return [type]

Performs fixes when $_FILES is array and the index is messed up
Eq user click on + then remove the file and then added new file
In this case the indexes will be 0,2 - 1 is missing because it's removed but they should be 0,1
@param  string $index_name $_FILES index name
@return null

hr profile staff profile image upload for staffmodel
@param  integer $staff id
@return boolean

list hr profile permisstion
@return [type]

hr profile get staff id hr permissions
@return [type]

hr profile get staff id dont permissions
@return [type]

hr profile handle contract attachments array
@param  [type] $contractid
@param  string $index_name
@return [type]

get job name
@param  [type] $id
@return [type]

get department from strings
@param  [type] $string_ids
@return [type]

hr profile get kb groups
@return [type]

hr profile get all knowledge base articles grouped
@param  boolean $only_customers
@param  array   $where
@return [type]

hr profile handle kb article files upload
@param  string $articleid
@param  string $index_name
@return [type]

hr profile get workplace name
@param  [type] $id
@return [type]

hr profile get job position name
@param  [type] $id
@return [type]

hr profile get job position description
@param  [type] $id
@return [type]

hr profile get hr_code
@param  [type] $staff_id
@return [type]

hr get staff email by id
@param  [type] $id
@return [type]

hr get training hash
@param  [type] $training_id
@return [type]

hr profile type of training exists
@param  [type] $name
@return [type]

get type of training by id
@param  [type] $id
@return [type]

get training library name
@param  [type] $ids
@return [type]

hr get list staff name
@param  [type] $ids
@return [type]

hr get list job position name
@param  [type] $ids
@return [type]

hr contract pdf
@param  [type] $contract
@return [type]

hr get contract type
@param  [type] $id
@return [type]

hr get role name
@param  [type] $ids
@return [type]

get staff department names
@param  [type] $staffid
@return [type]

hr render salary table
@param  [type] $contract_id
@return [type]

hr process digital signature image
@param  [type] $partBase64
@param  [type] $path
@return [type]

hr profile check hide menu
@return [type]

get staff image
@param  [type]  $staff_id
@param  boolean $include_name
@return [type]

handle hr profile add attachments
@param  [type] $file_name
@param  [type] $target_path
@param  [type] $rel_id
@param  [type] $rel_type
@return [type]

staff contract variables
@return [type]

staff contract map variables
@param  [type] $key
@param  [type] $contract
@return [type]

hr profile process digital signature image
@param  [type] $partBase64
@param  [type] $path
@param  [type] $image_name
@return [type]

unique_filename
@param  [type] $dir
@param  [type] $filename
@return [type]

to slug
@param  [type] $string
@return [type]

has permission
@param  [type]  $permission
@param  string  $staffid
@param  string  $can
@return boolean

hr has permission
@param  [type] $staff_permission
@param  string $staffid
@return [type]

## References

**Models Used**
- `Users_model`

**Database Tables (inferred)**
- `strings`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\Hr_profile\Helpers\hr_profile_general_helper.php`

**Functions/Methods**:
- `hr_profile_job_position_by_staff($staffid)`
- `hr_profile_job_name_by_id($job_position)`
- `hr_profile_reformat_currency($value)`
- `hr_profile_get_department_name($departmentid)`
- `handle_hr_profile_job_position_attachments_array($jobposition_tid, $index_name = 'attachments')`
- `get_hr_profile_upload_path_by_type($type)`
- `hr_profile_get_status_modules($module_name)`
- `handle_hr_profile_attachments_array($staffid, $index_name = 'attachments')`
- `_file_attachments_index_fix($index_name)`
- `hr_profile_handle_staff_profile_image_upload($user_id)`
- `list_hr_profile_permisstion()`
- `hr_profile_get_staff_id_hr_permissions()`
- `hr_profile_get_staff_id_dont_permissions()`
- `hr_profile_handle_contract_attachments_array($id, $index_name = 'attachments')`
- `get_job_name($id)`
- `get_department_from_strings($string_ids, $department_on_line)`
- `hr_profile_get_kb_groups()`
- `hr_profile_get_all_knowledge_base_articles_grouped($only_customers = true, $where = [])`
- `hr_profile_handle_kb_article_files_upload($articleid = '', $index_name = 'kb_article_files')`
- `hr_profile_get_workplace_name($id)`
- `hr_profile_get_job_position_name($id)`
- `hr_profile_get_job_position_description($id)`
- `hr_profile_get_hr_code($staff_id)`
- `hr_get_staff_email_by_id($id)`
- `hr_get_training_hash($training_id)`
- `hr_profile_type_of_training_exists($name)`
- `get_type_of_training_by_id($id)`
- `get_training_library_name($ids)`
- `hr_get_list_staff_name($ids)`
- `hr_get_list_job_position_name($ids)`
- `hr_contract_pdf($contract)`
- `hr_get_contract_type($id)`
- `hr_get_role_name($id)`
- `get_staff_department_names($staffid)`
- `hr_render_salary_table($contract_id)`
- `hr_process_digital_signature_image($partBase64, $path)`
- `hr_profile_check_hide_menu()`
- `get_default_company_name($company_id = 0)`
- `get_staff_image($staff_id, $include_name = true)`
- `handle_hr_profile_add_attachments($file_name, $target_path, $rel_id, $rel_type)`
- `hr_log_notification($event, $options = [], $user_id = 0, $to_user_id = 0)`
- `staff_contract_variables()`
- `staff_contract_map_variables($key, $contract)`
- `hr_profile_process_digital_signature_image($partBase64, $path, $image_name)`
- `unique_filename($dir, $filename)`
- `to_slug($string)`
- `has_permission($permission, $staffid = '', $can = '')`
- `hr_has_permission($staff_permission, $staffid = '')`

