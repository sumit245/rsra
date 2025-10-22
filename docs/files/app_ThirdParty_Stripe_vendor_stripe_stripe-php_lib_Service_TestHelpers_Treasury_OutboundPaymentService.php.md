# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TestHelpers\Treasury\OutboundPaymentService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TestHelpers\Treasury\OutboundPaymentService.php`
- Type: PHP
- Size: 2163 bytes

## Summary (from docblocks)

Transitions a test mode created OutboundPayment to the <code>failed</code>
status. The OutboundPayment must already be in the <code>processing</code>
state.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\OutboundPayment

Transitions a test mode created OutboundPayment to the <code>posted</code>
status. The OutboundPayment must already be in the <code>processing</code>
state.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\OutboundPayment

Transitions a test mode created OutboundPayment to the <code>returned</code>
status. The OutboundPayment must already be in the <code>processing</code>
state.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\OutboundPayment

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TestHelpers\Treasury\OutboundPaymentService.php`

**Classes**:
- `Stripe\Service\TestHelpers\Treasury\OutboundPaymentService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `fail($id, $params = null, $opts = null)`
- `post($id, $params = null, $opts = null)`
- `returnOutboundPayment($id, $params = null, $opts = null)`

