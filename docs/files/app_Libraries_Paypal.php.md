# app\Libraries\Paypal.php

- Path: `app\Libraries\Paypal.php`
- Type: PHP
- Size: 7968 bytes

## References

**Models Used**
- `Payment_methods_model`
- `Paypal_ipn_model`

**Database Tables (inferred)**
- `the`
- `your`
- `PayPal`
- `database`

## Symbols

# Symbols

**Files documented**: 1

## `app\Libraries\Paypal.php`

**Classes**:
- `App\Libraries\Paypal`

**Functions/Methods**:
- `__construct()`
- `get_paypal_url()`
- `is_valid_ipn()`
- `_save_ipn($ipn_hash, $txn_id, $ipn_data)`
- `_get_ipn($ipn_hash = "")`
- `_is_duplicate_ipn($ipn_hash = "")`
- `_is_valid_receiver($ipn_receiver)`
- `_log($message = "")`

