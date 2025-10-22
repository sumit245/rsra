# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\EphemeralKeyService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\EphemeralKeyService.php`
- Type: PHP
- Size: 1289 bytes

## Summary (from docblocks)

Invalidates a short-lived API key for a given resource.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\EphemeralKey

Creates a short-lived API key for a given resource.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\EphemeralKey

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\EphemeralKeyService.php`

**Classes**:
- `Stripe\Service\EphemeralKeyService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `delete($id, $params = null, $opts = null)`
- `create($params = null, $opts = null)`

