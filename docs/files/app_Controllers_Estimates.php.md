# app\Controllers\Estimates.php

- Path: `app\Controllers\Estimates.php`
- Type: PHP
- Size: 47414 bytes

## References

**Models Used**
- `Custom_fields_model`
- `Clients_model`
- `Estimates_model`
- `Estimate_items_model`
- `Proposals_model`
- `Contracts_model`
- `Orders_model`
- `Taxes_model`
- `Proposal_items_model`
- `Contract_items_model`
- `Order_items_model`
- `Projects_model`
- `Estimate_comments_model`
- `Items_model`
- `Invoice_items_model`
- `Users_model`
- `Email_templates_model`

**Database Tables (inferred)**
- `estimate`
- `the`
- `accepted`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Estimates.php`

**Classes**:
- `App\Controllers\Estimates extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `show_own_estimates_only_user_id()`
- `can_access_this_estimate($estimate_id = 0)`
- `can_access_this_estimate_item($estimate_item_id = 0)`
- `yearly()`
- `modal_form()`
- `save()`
- `_copy_related_items_to_estimate($copy_items_from_proposal, $copy_items_from_contract, $copy_items_from_order, $estimate_id)`
- `update_estimate_status($estimate_id, $status, $is_modal = false)`
- `_create_project_from_estimate($estimate_id)`
- `delete()`
- `list_data()`
- `estimate_list_data_of_client($client_id)`
- `_row_data($id)`
- `_make_row($data, $custom_fields)`
- `_get_estimate_status_label($estimate_info, $return_html = true)`
- `view($estimate_id = 0)`
- `_get_estimate_total_view($estimate_id = 0)`
- `discount_modal_form()`
- `save_discount()`
- `item_modal_form()`
- `save_item()`
- `delete_item()`
- `item_list_data($estimate_id = 0)`
- `_make_item_row($data)`
- `get_estimate_item_suggestion()`
- `get_estimate_item_info_suggestion()`
- `preview($estimate_id = 0, $show_close_preview = false)`
- `download_pdf($estimate_id = 0, $mode = "download")`
- `_check_estimate_access_permission($estimate_data)`
- `get_estimate_status_bar($estimate_id = 0)`
- `send_estimate_modal_form($estimate_id)`
- `send_estimate()`
- `update_item_sort_values($id = 0)`
- `upload_file()`
- `validate_estimate_file()`
- `save_comment()`
- `delete_comment($id = 0)`
- `download_comment_files($id)`
- `comment_modal_form()`
- `load_statistics_of_selected_currency($currency = "")`
- `print_estimate($estimate_id = 0)`

