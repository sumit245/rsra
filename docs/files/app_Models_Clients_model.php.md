# app\Models\Clients_model.php

- Path: `app\Models\Clients_model.php`
- Type: PHP
- Size: 26486 bytes

## References

**Database Tables (inferred)**
- `directory`

## Symbols

# Symbols

**Files documented**: 1

## `app\Models\Clients_model.php`

**Classes**:
- `App\Models\Clients_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `make_quick_filter_query($filter, $clients_table, $projects_table, $invoices_table, $taxes_table, $invoice_payments_table, $invoice_items_table, $estimates_table, $estimate_requests_table, $tickets_table, $orders_table, $proposals_table)`
- `get_primary_contact($client_id = 0, $info = false)`
- `add_remove_star($client_id, $user_id, $type = "add")`
- `get_starred_clients($user_id, $client_groups = "")`
- `delete_client_and_sub_items($client_id)`
- `is_duplicate_company_name($company_name, $id = 0)`
- `get_leads_kanban_details($options = array()`
- `get_search_suggestion($search = "", $options = array()`
- `count_total_clients($options = array()`
- `get_conversion_rate_with_currency_symbol()`
- `count_total_leads($show_own_leads_only_user_id = "")`

