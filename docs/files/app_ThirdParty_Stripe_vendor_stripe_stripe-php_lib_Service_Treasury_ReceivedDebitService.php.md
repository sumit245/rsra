# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\ReceivedDebitService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\ReceivedDebitService.php`
- Type: PHP
- Size: 1219 bytes

## Summary (from docblocks)

Returns a list of ReceivedDebits.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Treasury\ReceivedDebit>

Retrieves the details of an existing ReceivedDebit by passing the unique
ReceivedDebit ID from the ReceivedDebit list.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\ReceivedDebit

## References

**Database Tables (inferred)**
- `our`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\ReceivedDebitService.php`

**Classes**:
- `Stripe\Service\Treasury\ReceivedDebitService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

