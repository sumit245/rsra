# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TokenService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TokenService.php`
- Type: PHP
- Size: 1254 bytes

## Summary (from docblocks)

Creates a single-use token that represents a bank account’s details. This token
can be used with any API method in place of a bank account dictionary. This
token can be used only once, by attaching it to a <a href="#accounts">Custom
account</a>.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Token

Retrieves the token with the given ID.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Token

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TokenService.php`

**Classes**:
- `Stripe\Service\TokenService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

