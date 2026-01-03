# app\Controllers\Expenses.php

- Path: `app\Controllers\Expenses.php`
- Type: PHP
- Size: 43856 bytes

## References

**Models Used**
- `Custom_fields_model`
- `Expense_categories_model`
- `Users_model`
- `Expenses_model`
- `Clients_model`
- `Projects_model`
- `Taxes_model`
- `Invoice_payments_model`
- `Custom_field_values_model`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Expenses.php`

**Classes**:
- `App\Controllers\Expenses extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `_get_categories_dropdown()`
- `_get_team_members_dropdown()`
- `yearly()`
- `summary()`
- `custom()`
- `recurring()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data($recurring = false)`
- `_row_data($id)`
- `_make_row($data, $custom_fields)`
- `file_preview($id = "", $key = "")`
- `upload_file()`
- `validate_expense_file()`
- `yearly_chart()`
- `yearly_chart_data()`
- `income_vs_expenses()`
- `income_vs_expenses_chart_data()`
- `income_vs_expenses_summary()`
- `income_vs_expenses_summary_list_data()`
- `_row_data_of_summary($month_index, $payments, $expenses)`
- `expense_list_data_of_client($client_id)`
- `can_access_clients()`
- `expense_details()`
- `summary_list_data()`
- `download_files($id)`
- `import_expenses_modal_form()`
- `download_sample_excel_file()`
- `upload_excel_file()`
- `validate_import_expenses_file()`
- `_prepare_expense_data($data_row, $allowed_headers)`
- `_get_existing_custom_field_id($title = "")`
- `_prepare_headers_for_submit($headers_row, $headers)`
- `save_expense_from_excel_file()`
- `_save_custom_fields_of_expense($expense_id, $custom_field_values_array)`
- `_get_category_id($category = "")`
- `_get_project_id($project = "")`
- `_get_user_id($user = "")`
- `_get_client_id($client = "")`
- `_get_tax_id($tax = "")`
- `_get_allowed_headers()`
- `_store_headers_position($headers_row = array()`
- `validate_import_expenses_file_data($check_on_submit = false)`
- `_row_data_validation_and_get_error_message($key, $data, $headers = array()`

