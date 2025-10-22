# app\Models\Crud_model.php

- Path: `app\Models\Crud_model.php`
- Type: PHP
- Size: 18286 bytes

## References

**Models Used**
- `Activity_logs_model`

**Database Tables (inferred)**
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\Models\Crud_model.php`

**Classes**:
- `App\Models\Crud_model extends Model`

**Functions/Methods**:
- `__construct($table = null, $db = null)`
- `use_table($table)`
- `disable_log_activity()`
- `init_activity_log($log_type = "", $log_type_title_key = "", $log_for = "", $log_for_key = 0, $log_for2 = "", $log_for_key2 = 0)`
- `get_one($id = 0)`
- `get_one_where($where = [])`
- `get_all($include_deleted = false)`
- `escape_array($values = [])`
- `get_all_where($where = [], $limit = 1000000, $offset = 0, $sort_by_field = null)`
- `ci_save(&$data = [], $id = 0)`
- `update_where($data = [], $where = [])`
- `delete($id = 0, $undo = false)`
- `get_dropdown_list($option_fields = [], $key = "id", $where = [])`
- `prepare_custom_field_query_string($related_to, $custom_fields, $related_to_table, $custom_field_filter = [])`
- `_get_clients_of_currency_query($currency, $invoices_table, $clients_table)`
- `_get_invoice_value_calculation_query($invoices_table)`
- `get_labels_data_query()`
- `delete_permanently($id = 0)`
- `prepare_allowed_client_groups_query($clients_table, $client_groups = "")`
- `_get_clean_value($options, $key)`
- `get_custom_field_search_query($table, $related_to_type, $search_by)`

