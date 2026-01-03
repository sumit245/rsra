# app\Controllers\Leads.php

- Path: `app\Controllers\Leads.php`
- Type: PHP
- Size: 69584 bytes

## References

**Models Used**
- `Custom_fields_model`
- `Lead_status_model`
- `Lead_source_model`
- `Clients_model`
- `Users_model`
- `General_files_model`
- `Social_links_model`
- `Email_templates_model`
- `Custom_field_values_model`

**Database Tables (inferred)**
- `the`
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Leads.php`

**Classes**:
- `App\Controllers\Leads extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `make_lead_modal_form_data($lead_id = 0)`
- `_get_owners_dropdown($view_type = "")`
- `save()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data, $custom_fields)`
- `view($client_id = 0, $tab = "")`
- `estimates($client_id)`
- `estimate_requests($client_id)`
- `notes($client_id)`
- `events($client_id)`
- `files($client_id)`
- `file_modal_form()`
- `save_file()`
- `files_list_data($client_id = 0)`
- `_make_file_row($data)`
- `view_file($file_id = 0)`
- `download_file($id)`
- `upload_file()`
- `validate_file()`
- `delete_file()`
- `contact_profile($contact_id = 0, $tab = "")`
- `contacts($client_id)`
- `add_new_contact_modal_form()`
- `contact_general_info_tab($contact_id = 0)`
- `company_info_tab($client_id = 0)`
- `contact_social_links_tab($contact_id = 0)`
- `save_contact()`
- `save_contact_social_links($contact_id = 0)`
- `save_profile_image($user_id = 0)`
- `delete_contact()`
- `contacts_list_data($client_id = 0)`
- `_contact_row_data($id)`
- `_make_contact_row($data, $custom_fields)`
- `save_lead_status($id = 0)`
- `all_leads_kanban()`
- `all_leads_kanban_data()`
- `save_lead_sort_and_status()`
- `make_client_modal_form($lead_id = 0)`
- `save_as_client()`
- `upload_excel_file()`
- `import_leads_modal_form()`
- `_prepare_lead_data($data_row, $allowed_headers)`
- `_get_existing_custom_field_id($title = "")`
- `_prepare_headers_for_submit($headers_row, $headers)`
- `save_lead_from_excel_file()`
- `_save_custom_fields_of_lead($lead_id, $custom_field_values_array)`
- `_get_allowed_headers()`
- `_store_headers_position($headers_row = array()`
- `validate_import_leads_file()`
- `validate_import_leads_file_data($check_on_submit = false)`
- `_row_data_validation_and_get_error_message($key, $data, $has_contact_first_name, $headers = array()`
- `download_sample_excel_file()`
- `proposals($client_id)`
- `contracts($client_id)`

