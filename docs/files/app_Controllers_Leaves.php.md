# app\Controllers\Leaves.php

- Path: `app\Controllers\Leaves.php`
- Type: PHP
- Size: 35204 bytes

## References

**Models Used**
- `Users_model`
- `Leave_types_model`
- `Leave_applications_model`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Leaves.php`

**Classes**:
- `App\Controllers\Leaves extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `access_only_allowed_members($user_id = 0)`
- `can_delete_leave_application()`
- `index($tab = "")`
- `assign_leave_modal_form($applicant_id = 0)`
- `apply_leave_modal_form()`
- `assign_leave()`
- `apply_leave()`
- `_prepare_leave_form_data()`
- `pending_approval()`
- `all_applications()`
- `summary()`
- `pending_approval_list_data()`
- `all_application_list_data()`
- `summary_list_data()`
- `_row_data($id)`
- `_make_row($data)`
- `_make_row_for_summary($data)`
- `_prepare_leave_info($data)`
- `application_details()`
- `update_status()`
- `delete()`
- `leave_info()`
- `_get_members_dropdown_list_for_filter()`
- `_get_leave_types_dropdown_list_for_filter()`
- `upload_file()`
- `validate_leaves_file()`
- `file_preview($id = "", $key = "")`
- `import_leaves_modal_form()`
- `download_sample_excel_file()`
- `upload_excel_file()`
- `validate_import_leaves_file()`
- `save_leave_from_excel_file()`
- `_get_applicant_id($applicant = "")`
- `_get_leave_type_id($leave_type = "")`
- `_get_allowed_headers()`
- `_store_headers_position($headers_row = array()`
- `validate_import_leaves_file_data($check_on_submit = false)`
- `_row_data_validation_and_get_error_message($key, $data)`
- `_prepare_leave_data($data_row, $allowed_headers)`

