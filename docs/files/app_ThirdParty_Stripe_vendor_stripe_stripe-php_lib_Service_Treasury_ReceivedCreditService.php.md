# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\ReceivedCreditService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\ReceivedCreditService.php`
- Type: PHP
- Size: 1228 bytes

## Summary (from docblocks)

Returns a list of ReceivedCredits.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Treasury\ReceivedCredit>

Retrieves the details of an existing ReceivedCredit by passing the unique
ReceivedCredit ID from the ReceivedCredit list.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\ReceivedCredit

## References

**Database Tables (inferred)**
- `our`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\ReceivedCreditService.php`

**Classes**:
- `Stripe\Service\Treasury\ReceivedCreditService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

