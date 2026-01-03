# app\Controllers\Tickets.php

- Path: `app\Controllers\Tickets.php`
- Type: PHP
- Size: 44440 bytes

## References

**Models Used**
- `Ticket_templates_model`
- `Custom_fields_model`
- `Users_model`
- `Tickets_model`
- `Projects_model`
- `Ticket_types_model`
- `Clients_model`
- `Ticket_comments_model`
- `Settings_model`

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Tickets.php`

**Classes**:
- `App\Controllers\Tickets extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `can_delete_tickets()`
- `index($status = "", $ticket_type_id = 0)`
- `modal_form()`
- `get_project_suggestion($client_id = 0)`
- `save()`
- `upload_file()`
- `validate_ticket_file()`
- `list_data($is_widget = 0)`
- `ticket_list_data_of_client($client_id, $is_widget = 0)`
- `_row_data($id)`
- `_make_row($data, $custom_fields)`
- `view($ticket_id = 0)`
- `delete()`
- `save_comment()`
- `save_ticket_status($ticket_id = 0, $status = "closed")`
- `download_comment_files($id)`
- `_check_permission_of_selected_ticket($ticket_id = 0)`
- `assign_to_me($ticket_id = 0)`
- `ticket_templates()`
- `can_view_ticket_template($id = 0)`
- `can_edit_ticket_template($id = 0)`
- `ticket_template_modal_form()`
- `save_ticket_template()`
- `delete_ticket_template()`
- `ticket_template_list_data($view_type = "", $ticket_type_id = 0)`
- `_row_data_for_ticket_templates($id)`
- `_make_row_for_ticket_templates($data, $view_type = "")`
- `ticket_template_view($id)`
- `insert_template_modal_form()`
- `add_client_modal_form($ticket_id = 0)`
- `link_to_client()`
- `settings_modal_form()`
- `save_settings()`
- `get_client_contact_suggestion($client_id = 0)`
- `_get_ticket_types_dropdown_list_for_filter($ticket_type_id = 0)`
- `ticket_list_data_of_project($project_id)`
- `batch_update_modal_form($ticket_ids = "")`
- `save_batch_update()`

