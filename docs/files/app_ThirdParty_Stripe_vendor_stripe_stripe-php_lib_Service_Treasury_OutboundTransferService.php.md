# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\OutboundTransferService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\OutboundTransferService.php`
- Type: PHP
- Size: 2341 bytes

## Summary (from docblocks)

Returns a list of OutboundTransfers sent from the specified FinancialAccount.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Treasury\OutboundTransfer>

An OutboundTransfer can be canceled if the funds have not yet been paid out.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\OutboundTransfer

Creates an OutboundTransfer.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\OutboundTransfer

Retrieves the details of an existing OutboundTransfer by passing the unique
OutboundTransfer ID from either the OutboundTransfer creation request or
OutboundTransfer list.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\OutboundTransfer

## References

**Database Tables (inferred)**
- `our`
- `the`
- `either`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\OutboundTransferService.php`

**Classes**:
- `Stripe\Service\Treasury\OutboundTransferService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `cancel($id, $params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

