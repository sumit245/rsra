# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\EphemeralKey.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\EphemeralKey.php`
- Type: PHP
- Size: 1547 bytes

## Summary (from docblocks)

@property string $id Unique identifier for the object.
@property string $object String representing the object's type. Objects of the same type share the same value.
@property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
@property int $expires Time at which the key will expire. Measured in seconds since the Unix epoch.
@property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
@property string $secret The key's secret. You can use this value to make authorized requests to the Stripe API.

@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\InvalidArgumentException if stripe_version is missing
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\EphemeralKey the created key

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\EphemeralKey.php`

**Classes**:
- `Stripe\EphemeralKey extends ApiResource`

**Functions/Methods**:
- `create($params = null, $opts = null)`

