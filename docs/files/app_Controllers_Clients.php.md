# app\Controllers\Clients.php

- Path: `app\Controllers\Clients.php`
- Type: PHP
- Size: 85054 bytes

## References

**Models Used**
- `Clients_model`
- `Custom_fields_model`
- `Tickets_model`
- `General_files_model`
- `Users_model`
- `Social_links_model`
- `Settings_model`
- `Email_templates_model`
- `Verification_model`
- `Custom_field_values_model`
- `Client_groups_model`

**Database Tables (inferred)**
- `the`
- `client`
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Clients.php`

**Classes**:
- `App\Controllers\Clients extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index($tab = "")`
- `can_edit_clients()`
- `can_view_files()`
- `can_add_files()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data, $custom_fields)`
- `view($client_id = 0, $tab = "")`
- `add_remove_star($client_id, $type = "add")`
- `show_my_starred_clients()`
- `projects($client_id)`
- `payments($client_id)`
- `tickets($client_id)`
- `invoices($client_id)`
- `estimates($client_id)`
- `orders($client_id)`
- `estimate_requests($client_id)`
- `notes($client_id)`
- `events($client_id)`
- `files($client_id, $view_type = "")`
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
- `account_settings($contact_id)`
- `my_preferences()`
- `save_my_preferences()`
- `save_personal_language($language)`
- `contacts($client_id = 0)`
- `add_new_contact_modal_form()`
- `contact_general_info_tab($contact_id = 0)`
- `company_info_tab($client_id = 0)`
- `contact_social_links_tab($contact_id = 0)`
- `save_contact()`
- `save_contact_social_links($contact_id = 0)`
- `save_account_settings($user_id)`
- `save_profile_image($user_id = 0)`
- `delete_contact()`
- `contacts_list_data($client_id = 0)`
- `_contact_row_data($id)`
- `_make_contact_row($data, $custom_fields, $hide_primary_contact_label = false)`
- `invitation_modal()`
- `send_invitation()`
- `users()`
- `keyboard_shortcut_modal_form()`
- `upload_excel_file()`
- `import_clients_modal_form()`
- `_prepare_client_data($data_row, $allowed_headers)`
- `_get_existing_custom_field_id($title = "")`
- `_prepare_headers_for_submit($headers_row, $headers)`
- `save_client_from_excel_file()`
- `_save_custom_fields_of_client($client_id, $custom_field_values_array)`
- `_get_client_group_ids($client_groups_data)`
- `_get_allowed_headers()`
- `_store_headers_position($headers_row = array()`
- `validate_import_clients_file()`
- `validate_import_clients_file_data($check_on_submit = false)`
- `_row_data_validation_and_get_error_message($key, $data, $has_contact_first_name, $headers = array()`
- `download_sample_excel_file()`
- `gdpr()`
- `export_my_data()`
- `_make_export_data($user_info)`
- `request_my_account_removal()`
- `expenses($client_id)`
- `contracts($client_id)`
- `clients_list()`
- `make_access_permissions_view_data()`
- `proposals($client_id)`
- `switch_account($user_id)`

