# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Apps\SecretService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Apps\SecretService.php`
- Type: PHP
- Size: 1939 bytes

## Summary (from docblocks)

List all secrets stored on the given scope.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Apps\Secret>

Create or replace a secret in the secret store.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Apps\Secret

Deletes a secret from the secret store by name and scope.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Apps\Secret

Finds a secret in the secret store by name and scope.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Apps\Secret

## References

**Database Tables (inferred)**
- `our`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Apps\SecretService.php`

**Classes**:
- `Stripe\Service\Apps\SecretService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `deleteWhere($params = null, $opts = null)`
- `find($params = null, $opts = null)`

