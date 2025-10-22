# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\CreditReversalService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\CreditReversalService.php`
- Type: PHP
- Size: 1753 bytes

## Summary (from docblocks)

Returns a list of CreditReversals.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Treasury\CreditReversal>

Reverses a ReceivedCredit and creates a CreditReversal object.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\CreditReversal

Retrieves the details of an existing CreditReversal by passing the unique
CreditReversal ID from either the CreditReversal creation request or
CreditReversal list.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\CreditReversal

## References

**Database Tables (inferred)**
- `our`
- `either`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\CreditReversalService.php`

**Classes**:
- `Stripe\Service\Treasury\CreditReversalService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

