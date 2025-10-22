# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Issuing\TransactionService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Issuing\TransactionService.php`
- Type: PHP
- Size: 1922 bytes

## Summary (from docblocks)

Returns a list of Issuing <code>Transaction</code> objects. The objects are
sorted in descending order by creation date, with the most recently created
object appearing first.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Issuing\Transaction>

Retrieves an Issuing <code>Transaction</code> object.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Transaction

Updates the specified Issuing <code>Transaction</code> object by setting the
values of the parameters passed. Any parameters not provided will be left
unchanged.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Transaction

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Issuing\TransactionService.php`

**Classes**:
- `Stripe\Service\Issuing\TransactionService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

