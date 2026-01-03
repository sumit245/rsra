# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\FinancialConnections\SessionService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\FinancialConnections\SessionService.php`
- Type: PHP
- Size: 1326 bytes

## Summary (from docblocks)

To launch the Financial Connections authorization flow, create a
<code>Session</code>. The session’s <code>client_secret</code> can be used to
launch the flow using Stripe.js.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\FinancialConnections\Session

Retrieves the details of a Financial Connections <code>Session</code>.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\FinancialConnections\Session

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\FinancialConnections\SessionService.php`

**Classes**:
- `Stripe\Service\FinancialConnections\SessionService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

