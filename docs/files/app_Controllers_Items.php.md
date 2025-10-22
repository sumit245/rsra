# app\Controllers\Items.php

- Path: `app\Controllers\Items.php`
- Type: PHP
- Size: 28016 bytes

## References

**Models Used**
- `Item_categories_model`
- `Items_model`
- `Clients_model`
- `Order_items_model`

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Items.php`

**Classes**:
- `App\Controllers\Items extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `validate_access_to_items()`
- `index()`
- `_get_categories_dropdown()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data()`
- `_make_item_row($data)`
- `upload_file()`
- `validate_items_file()`
- `view()`
- `save_files_sort()`
- `grid_view($offset = 0, $limit = 20, $category_id = 0, $search = "")`
- `add_item_to_cart()`
- `count_cart_items()`
- `load_cart_items()`
- `delete_cart_item()`
- `change_cart_item_quantity($type = "")`
- `_get_cart_total_view()`
- `import_items_modal_form()`
- `download_sample_excel_file()`
- `upload_excel_file()`
- `validate_import_items_file()`
- `save_item_from_excel_file()`
- `_get_item_category_id($category = "")`
- `_get_allowed_headers()`
- `_store_headers_position($headers_row = array()`
- `validate_import_items_file_data($check_on_submit = false)`
- `_row_data_validation_and_get_error_message($key, $data)`
- `_prepare_item_data($data_row, $allowed_headers)`

