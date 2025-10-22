# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\FinancialConnections\AccountService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\FinancialConnections\AccountService.php`
- Type: PHP
- Size: 3053 bytes

## Summary (from docblocks)

Returns a list of Financial Connections <code>Account</code> objects.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\FinancialConnections\Account>

Lists all owners for a given <code>Account</code>.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\FinancialConnections\AccountOwner>

Disables your access to a Financial Connections <code>Account</code>. You will
no longer be able to access data associated with the account (e.g. balances,
transactions).
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\FinancialConnections\Account

Refreshes the data associated with a Financial Connections <code>Account</code>.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\FinancialConnections\Account

Retrieves the details of an Financial Connections <code>Account</code>.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\FinancialConnections\Account

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\FinancialConnections\AccountService.php`

**Classes**:
- `Stripe\Service\FinancialConnections\AccountService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `allOwners($id, $params = null, $opts = null)`
- `disconnect($id, $params = null, $opts = null)`
- `refresh($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

