# app\Controllers\Contracts.php

- Path: `app\Controllers\Contracts.php`
- Type: PHP
- Size: 39069 bytes

## References

**Models Used**
- `Custom_fields_model`
- `Clients_model`
- `Contracts_model`
- `Projects_model`
- `Taxes_model`
- `Contract_items_model`
- `Items_model`
- `Invoice_items_model`
- `Users_model`
- `Email_templates_model`

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Contracts.php`

**Classes**:
- `App\Controllers\Contracts extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `yearly()`
- `modal_form()`
- `get_contract_clients_and_leads_dropdown()`
- `save_view()`
- `save()`
- `update_contract_status($contract_id, $status)`
- `delete()`
- `list_data()`
- `contract_list_data_of_client($client_id)`
- `_row_data($id)`
- `_make_row($data, $custom_fields)`
- `_get_contract_status_label($contract_info, $return_html = true)`
- `view($contract_id = 0)`
- `_get_contract_total_view($contract_id = 0)`
- `discount_modal_form()`
- `save_discount()`
- `item_modal_form()`
- `save_item()`
- `delete_item()`
- `item_list_data($contract_id = 0)`
- `_make_item_row($data)`
- `get_contract_item_suggestion()`
- `get_contract_item_info_suggestion()`
- `preview($contract_id = 0, $show_close_preview = false, $is_editor_preview = false)`
- `_check_contract_access_permission($contract_data)`
- `get_contract_status_bar($contract_id = 0)`
- `send_contract_modal_form($contract_id)`
- `send_contract()`
- `update_item_sort_values($id = 0)`
- `editor($contract_id = 0)`
- `get_project_suggestion($client_id = 0)`
- `contract_list_data_of_project($project_id)`
- `upload_file()`
- `validate_contracts_file()`

