# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\BalanceTransactionService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\BalanceTransactionService.php`
- Type: PHP
- Size: 1578 bytes

## Summary (from docblocks)

Returns a list of transactions that have contributed to the Stripe account
balance (e.g., charges, transfers, and so forth). The transactions are returned
in sorted order, with the most recent transactions appearing first.
Note that this endpoint was previously called “Balance history” and used the
path <code>/v1/balance/history</code>.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\BalanceTransaction>

Retrieves the balance transaction with the given ID.
Note that this endpoint previously used the path
<code>/v1/balance/history/:id</code>.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BalanceTransaction

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\BalanceTransactionService.php`

**Classes**:
- `Stripe\Service\BalanceTransactionService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

