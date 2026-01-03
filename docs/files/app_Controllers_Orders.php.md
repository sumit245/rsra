# app\Controllers\Orders.php

- Path: `app\Controllers\Orders.php`
- Type: PHP
- Size: 30567 bytes

## References

**Models Used**
- `Custom_fields_model`
- `Order_status_model`
- `Clients_model`
- `Order_items_model`
- `Items_model`
- `Orders_model`
- `Taxes_model`
- `Invoice_items_model`

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Orders.php`

**Classes**:
- `App\Controllers\Orders extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `process_order()`
- `item_list_data_of_login_user()`
- `_make_item_row($data)`
- `item_modal_form()`
- `save_item()`
- `update_item_sort_values($id = 0)`
- `delete_item()`
- `_get_order_total_view($order_id = 0)`
- `place_order()`
- `list_data()`
- `_make_row($data, $custom_fields)`
- `yearly()`
- `modal_form()`
- `_get_clients_dropdown()`
- `save()`
- `delete()`
- `view($order_id = 0)`
- `check_access_to_this_order($order_data)`
- `download_pdf($order_id = 0, $mode = "download")`
- `preview($order_id = 0, $show_close_preview = false)`
- `get_order_item_suggestion()`
- `get_order_item_info_suggestion()`
- `save_order_status($id = 0)`
- `_row_data($id)`
- `discount_modal_form()`
- `save_discount()`
- `item_list_data($order_id = 0)`
- `order_list_data_of_client($client_id)`
- `upload_file()`
- `validate_orders_file()`
- `file_preview($id = "", $key = "")`

