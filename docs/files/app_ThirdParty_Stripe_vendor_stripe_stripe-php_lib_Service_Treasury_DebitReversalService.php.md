# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\DebitReversalService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\DebitReversalService.php`
- Type: PHP
- Size: 1599 bytes

## Summary (from docblocks)

Returns a list of DebitReversals.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Treasury\DebitReversal>

Reverses a ReceivedDebit and creates a DebitReversal object.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\DebitReversal

Retrieves a DebitReversal object.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\DebitReversal

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\DebitReversalService.php`

**Classes**:
- `Stripe\Service\Treasury\DebitReversalService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

