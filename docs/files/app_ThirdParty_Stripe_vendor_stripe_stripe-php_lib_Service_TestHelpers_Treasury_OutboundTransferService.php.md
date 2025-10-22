# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TestHelpers\Treasury\OutboundTransferService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TestHelpers\Treasury\OutboundTransferService.php`
- Type: PHP
- Size: 2177 bytes

## Summary (from docblocks)

Transitions a test mode created OutboundTransfer to the <code>failed</code>
status. The OutboundTransfer must already be in the <code>processing</code>
state.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\OutboundTransfer

Transitions a test mode created OutboundTransfer to the <code>posted</code>
status. The OutboundTransfer must already be in the <code>processing</code>
state.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\OutboundTransfer

Transitions a test mode created OutboundTransfer to the <code>returned</code>
status. The OutboundTransfer must already be in the <code>processing</code>
state.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\OutboundTransfer

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TestHelpers\Treasury\OutboundTransferService.php`

**Classes**:
- `Stripe\Service\TestHelpers\Treasury\OutboundTransferService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `fail($id, $params = null, $opts = null)`
- `post($id, $params = null, $opts = null)`
- `returnOutboundTransfer($id, $params = null, $opts = null)`

