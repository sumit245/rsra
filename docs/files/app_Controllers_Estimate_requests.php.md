# app\Controllers\Estimate_requests.php

- Path: `app\Controllers\Estimate_requests.php`
- Type: PHP
- Size: 29871 bytes

## References

**Models Used**
- `Users_model`
- `Estimate_requests_model`
- `Clients_model`
- `Estimates_model`
- `Custom_field_values_model`
- `Estimate_forms_model`
- `Custom_fields_model`

**Database Tables (inferred)**
- `client`
- `related_to`
- `the`
- `for`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Estimate_requests.php`

**Classes**:
- `App\Controllers\Estimate_requests extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `view_estimate_request($id = 0)`
- `download_estimate_request_files($id = 0)`
- `estimate_request_list_data()`
- `estimate_requests_for_client($client_id)`
- `estimate_requests_list_data_of_client($client_id)`
- `_make_estimate_request_row($data)`
- `_estimate_request_row_data($id)`
- `delete_estimate_request()`
- `_get_estimate_status_label($status = "")`
- `estimate_request_filed_list_data($id = 0)`
- `_make_estimate_request_field_row($data)`
- `estimate_forms()`
- `estimate_request_modal_form()`
- `save_estimate_request_form()`
- `delete_estimate_request_form()`
- `estimate_forms_list_data()`
- `_form_row_data($id)`
- `_make_form_row($data)`
- `edit_estimate_form($id = 0)`
- `edit_estimate_request_modal_form()`
- `update_estimate_request()`
- `change_estimate_request_status($id, $status)`
- `preview_estimate_form($id = 0)`
- `estimate_form_field_modal_form($estimate_form_id = 0)`
- `save_estimate_form_field()`
- `estimate_form_filed_list_data($id = 0)`
- `_form_filed_row_data($id)`
- `_make_form_field_row($data)`
- `update_form_field_sort_values($id = 0)`
- `estimate_form_field_delete()`
- `request_an_estimate_modal_form()`
- `submit_estimate_request_form($id = 0)`
- `save_estimate_request()`
- `upload_file()`
- `validate_file()`
- `embedded_code_modal_form()`

