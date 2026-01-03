# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\OutboundPaymentService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\OutboundPaymentService.php`
- Type: PHP
- Size: 2276 bytes

## Summary (from docblocks)

Returns a list of OutboundPayments sent from the specified FinancialAccount.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Treasury\OutboundPayment>

Cancel an OutboundPayment.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\OutboundPayment

Creates an OutboundPayment.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\OutboundPayment

Retrieves the details of an existing OutboundPayment by passing the unique
OutboundPayment ID from either the OutboundPayment creation request or
OutboundPayment list.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\OutboundPayment

## References

**Database Tables (inferred)**
- `our`
- `the`
- `either`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\OutboundPaymentService.php`

**Classes**:
- `Stripe\Service\Treasury\OutboundPaymentService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `cancel($id, $params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

