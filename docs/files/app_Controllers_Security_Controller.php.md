# app\Controllers\Security_Controller.php

- Path: `app\Controllers\Security_Controller.php`
- Type: PHP
- Size: 36859 bytes

## References

**Models Used**
- `Users_model`
- `Projects_model`
- `Project_members_model`
- `Invoices_model`
- `Invoice_payments_model`
- `Client_groups_model`
- `Clients_model`
- `Labels_model`
- `Messages_model`
- `Custom_fields_model`
- `Roles_model`

**Database Tables (inferred)**
- `helper`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Security_Controller.php`

**Classes**:
- `App\Controllers\Security_Controller extends App_Controller`

**Functions/Methods**:
- `__construct($redirect = true)`
- `init_permission_checker($module)`
- `get_access_info($group)`
- `access_only_team_members()`
- `access_only_admin()`
- `access_only_admin_or_settings_admin()`
- `access_only_allowed_members()`
- `access_only_allowed_members_or_client_contact($client_id)`
- `access_only_allowed_members_or_contact_personally($user_id)`
- `access_only_team_members_or_client_contact($client_id)`
- `access_only_clients()`
- `check_module_availability($module_name)`
- `can_create_projects()`
- `can_view_team_members_list()`
- `access_only_team_members_or_client()`
- `init_project_permission_checker($project_id = 0)`
- `can_create_tasks($in_project = true)`
- `can_manage_all_projects()`
- `_get_currencies_dropdown()`
- `get_hidden_topbar_menus_dropdown()`
- `_get_projects_dropdown_for_income_and_expenses($type = "all")`
- `_get_groups_dropdown_select2_data($show_header = false)`
- `get_clients_and_leads_dropdown($return_json = false)`
- `show_assigned_tasks_only_user_id()`
- `get_calendar_filter_dropdown($type = "default")`
- `check_access_to_store()`
- `check_access_to_this_order_item($order_item_info)`
- `make_labels_dropdown($type = "", $label_ids = "", $is_filter = false, $custom_filter_title = "")`
- `can_edit_projects($project_id = 0)`
- `get_user_options_for_query($only_type = "")`
- `check_access_on_messages_for_this_user()`
- `can_view_invoices($client_id = 0)`
- `can_edit_invoices()`
- `can_access_expenses()`
- `validate_sending_message($to_user_id)`
- `show_own_clients_only_user_id()`
- `check_profile_image_dimension($image_file_name = "")`
- `show_assigned_tickets_only_user_id()`
- `get_team_members_dropdown($is_filter = false)`
- `_get_projects_dropdown()`
- `check_access_to_this_item($item_info)`
- `get_conversion_rate_with_currency_symbol()`
- `can_access_this_client($client_id = 0)`
- `can_access_this_lead($lead_id = 0)`
- `show_own_leads_only_user_id()`
- `prepare_custom_field_filter_values($related_to, $is_admin = 0, $user_type = "")`
- `_get_roles_dropdown()`
- `is_own_id($user_id)`
- `has_role_manage_permission()`
- `is_admin_role($role)`
- `get_allowed_user_ids()`
- `_check_valid_date($string = "")`
- `has_all_projects_restricted_role()`
- `_get_companies_dropdown()`
- `can_edit_tasks()`

