# app\Controllers\Proposals.php

- Path: `app\Controllers\Proposals.php`
- Type: PHP
- Size: 34982 bytes

## References

**Models Used**
- `Custom_fields_model`
- `Clients_model`
- `Proposals_model`
- `Taxes_model`
- `Proposal_items_model`
- `Items_model`
- `Invoice_items_model`
- `Users_model`
- `Email_templates_model`

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Proposals.php`

**Classes**:
- `App\Controllers\Proposals extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `yearly()`
- `modal_form()`
- `get_proposal_clients_and_leads_dropdown()`
- `save_view()`
- `save()`
- `update_proposal_status($proposal_id, $status)`
- `delete()`
- `list_data()`
- `proposal_list_data_of_client($client_id)`
- `_row_data($id)`
- `_make_row($data, $custom_fields)`
- `_get_proposal_status_label($proposal_info, $return_html = true)`
- `view($proposal_id = 0)`
- `_get_proposal_total_view($proposal_id = 0)`
- `discount_modal_form()`
- `save_discount()`
- `item_modal_form()`
- `save_item()`
- `delete_item()`
- `item_list_data($proposal_id = 0)`
- `_make_item_row($data)`
- `get_proposal_item_suggestion()`
- `get_proposal_item_info_suggestion()`
- `preview($proposal_id = 0, $show_close_preview = false, $is_editor_preview = false)`
- `_check_proposal_access_permission($proposal_data)`
- `get_proposal_status_bar($proposal_id = 0)`
- `send_proposal_modal_form($proposal_id)`
- `send_proposal()`
- `update_item_sort_values($id = 0)`
- `editor($proposal_id = 0)`

