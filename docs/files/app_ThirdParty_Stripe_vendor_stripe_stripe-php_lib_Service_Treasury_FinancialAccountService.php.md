# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\FinancialAccountService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\FinancialAccountService.php`
- Type: PHP
- Size: 3303 bytes

## Summary (from docblocks)

Returns a list of FinancialAccounts.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Treasury\FinancialAccount>

Creates a new FinancialAccount. For now, each connected account can only have
one FinancialAccount.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\FinancialAccount

Retrieves the details of a FinancialAccount.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\FinancialAccount

Retrieves Features information associated with the FinancialAccount.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\FinancialAccount

Updates the details of a FinancialAccount.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\FinancialAccount

Updates the Features associated with a FinancialAccount.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\FinancialAccount

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\FinancialAccountService.php`

**Classes**:
- `Stripe\Service\Treasury\FinancialAccountService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `retrieveFeatures($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`
- `updateFeatures($id, $params = null, $opts = null)`

