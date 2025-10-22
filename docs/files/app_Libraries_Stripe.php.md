# app\Libraries\Stripe.php

- Path: `app\Libraries\Stripe.php`
- Type: PHP
- Size: 5714 bytes

## Summary (from docblocks)

so, the session creation is success
              save ipn data to db
              store the session id now
              because in the latest version, we won't get payment_intent here
              but it'll be available after the payment
              so get the payment_intent after the payment with the session_id

## Symbols

# Symbols

**Files documented**: 1

## `app\Libraries\Stripe.php`

**Classes**:
- `App\Libraries\Stripe`

**Functions/Methods**:
- `__construct()`
- `get_stripe_checkout_session($data = array()`
- `get_publishable_key()`
- `is_valid_ipn($session_id)`

