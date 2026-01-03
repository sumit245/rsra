# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\TransactionService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\TransactionService.php`
- Type: PHP
- Size: 1138 bytes

## Summary (from docblocks)

Retrieves a list of Transaction objects.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Treasury\Transaction>

Retrieves the details of an existing Transaction.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\Transaction

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\TransactionService.php`

**Classes**:
- `Stripe\Service\Treasury\TransactionService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

