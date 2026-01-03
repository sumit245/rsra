# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ApiOperations\Update.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ApiOperations\Update.php`
- Type: PHP
- Size: 1446 bytes

## Summary (from docblocks)

Trait for updatable resources. Adds an `update()` static method and a
`save()` method to the class.
This trait should only be applied to classes that derive from StripeObject.

@param string $id the ID of the resource to update
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return static the updated resource

@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return static the saved resource

## References

**Database Tables (inferred)**
- `StripeObject`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ApiOperations\Update.php`

**Functions/Methods**:
- `update($id, $params = null, $opts = null)`
- `save($opts = null)`

