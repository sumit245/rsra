# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\CashBalance.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\CashBalance.php`
- Type: PHP
- Size: 2475 bytes

## Summary (from docblocks)

A customer's <code>Cash balance</code> represents real funds. Customers can add
funds to their cash balance by sending a bank transfer. These funds can be used
for payment and can eventually be paid out to your bank account.
@property string $object String representing the object's type. Objects of the same type share the same value.
@property null|\Stripe\StripeObject $available A hash of all cash balances available to this customer. You cannot delete a customer with any cash balances, even if the balance is 0. Amounts are represented in the <a href="https://stripe.com/docs/currencies#zero-decimal">smallest currency unit</a>.
@property string $customer The ID of the customer whose cash balance this object represents.
@property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
@property \Stripe\StripeObject $settings

@return string the API URL for this balance transaction

@param array|string $_id
@param null|array|string $_opts
@throws \Stripe\Exception\BadMethodCallException

@param string $_id
@param null|array $_params
@param null|array|string $_options
@throws \Stripe\Exception\BadMethodCallException

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\CashBalance.php`

**Classes**:
- `Stripe\CashBalance extends ApiResource`

**Functions/Methods**:
- `instanceUrl()`
- `retrieve($_id, $_opts = null)`
- `update($_id, $_params = null, $_options = null)`

