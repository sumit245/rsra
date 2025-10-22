# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Terminal\ConnectionTokenService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Terminal\ConnectionTokenService.php`
- Type: PHP
- Size: 801 bytes

## Summary (from docblocks)

To connect to a reader the Stripe Terminal SDK needs to retrieve a short-lived
connection token from Stripe, proxied through your server. On your backend, add
an endpoint that creates and returns a connection token.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Terminal\ConnectionToken

## References

**Database Tables (inferred)**
- `our`
- `Stripe`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Terminal\ConnectionTokenService.php`

**Classes**:
- `Stripe\Service\Terminal\ConnectionTokenService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `create($params = null, $opts = null)`

