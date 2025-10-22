# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Capability.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Capability.php`
- Type: PHP
- Size: 2992 bytes

## Summary (from docblocks)

This is an object representing a capability for a Stripe account.
Related guide: <a
href="https://stripe.com/docs/connect/account-capabilities">Account
capabilities</a>.
@property string $id The identifier for the capability.
@property string $object String representing the object's type. Objects of the same type share the same value.
@property string|\Stripe\Account $account The account for which the capability enables functionality.
@property \Stripe\StripeObject $future_requirements
@property bool $requested Whether the capability has been requested.
@property null|int $requested_at Time at which the capability was requested. Measured in seconds since the Unix epoch.
@property \Stripe\StripeObject $requirements
@property string $status The status of the capability. Can be <code>active</code>, <code>inactive</code>, <code>pending</code>, or <code>unrequested</code>.

@return string the API URL for this Stripe account reversal

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

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Capability.php`

**Classes**:
- `Stripe\Capability extends ApiResource`
- `Stripe\instance`

**Functions/Methods**:
- `instanceUrl()`
- `retrieve($_id, $_opts = null)`
- `update($_id, $_params = null, $_options = null)`

