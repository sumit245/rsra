# app\Controllers\Invoices.php

- Path: `app\Controllers\Invoices.php`
- Type: PHP
- Size: 54451 bytes

## References

**Models Used**
- `Custom_fields_model`
- `Clients_model`
- `Invoices_model`
- `Estimates_model`
- `Orders_model`
- `Contracts_model`
- `Proposals_model`
- `Projects_model`
- `Taxes_model`
- `Invoice_items_model`
- `Estimate_items_model`
- `Contract_items_model`
- `Proposal_items_model`
- `Order_items_model`
- `Items_model`
- `Payment_methods_model`
- `Users_model`
- `Email_templates_model`
- `Verification_model`

**Database Tables (inferred)**
- `the`
- `estimate`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Invoices.php`

**Classes**:
- `App\Controllers\Invoices extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index($tab = "")`
- `yearly()`
- `recurring()`
- `custom()`
- `modal_form()`
- `get_project_suggestion($client_id = 0)`
- `save()`
- `_copy_related_items_to_invoice($copy_items_from_estimate, $copy_items_from_proposal, $copy_items_from_order, $copy_items_from_contract, $invoice_id)`
- `delete()`
- `list_data()`
- `invoice_list_data_of_client($client_id)`
- `invoice_list_data_of_project($project_id, $client_id = 0)`
- `sub_invoices($recurring_invoice_id)`
- `sub_invoices_list_data($recurring_invoice_id)`
- `_row_data($id)`
- `_make_row($data, $custom_fields)`
- `_make_options_dropdown($invoice_id = 0)`
- `_get_invoice_status_label($data, $return_html = true)`
- `recurring_list_data()`
- `_make_recurring_row($data)`
- `view($invoice_id = 0)`
- `_get_invoice_total_view($invoice_id = 0)`
- `item_modal_form()`
- `save_item()`
- `delete_item()`
- `item_list_data($invoice_id = 0)`
- `_make_item_row($data)`
- `update_item_sort_values($id = 0)`
- `get_invoice_item_suggestion()`
- `get_invoice_item_info_suggestion()`
- `preview($invoice_id = 0, $show_close_preview = false)`
- `print_invoice($invoice_id = 0)`
- `download_pdf($invoice_id = 0, $mode = "download")`
- `_check_invoice_access_permission($invoice_data)`
- `send_invoice_modal_form($invoice_id)`
- `get_send_invoice_template($invoice_id = 0, $contact_id = 0, $return_type = "", $invoice_info = "", $contact_info = "")`
- `send_invoice()`
- `get_invoice_status_bar($invoice_id = 0)`
- `update_invoice_status($invoice_id = 0, $status = "")`
- `discount_modal_form()`
- `save_discount()`
- `load_statistics_of_selected_currency($currency = "", $currency_symbol = "")`
- `upload_file()`
- `validate_invoices_file()`
- `file_preview($id = "", $key = "")`
- `load_invoice_overview_statistics_of_selected_currency($currency = "", $currency_symbol = "")`

