# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TestHelpers\Treasury\InboundTransferService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TestHelpers\Treasury\InboundTransferService.php`
- Type: PHP
- Size: 2191 bytes

## Summary (from docblocks)

Transitions a test mode created InboundTransfer to the <code>failed</code>
status. The InboundTransfer must already be in the <code>processing</code>
state.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\InboundTransfer

Marks the test mode InboundTransfer object as returned and links the
InboundTransfer to a ReceivedDebit. The InboundTransfer must already be in the
<code>succeeded</code> state.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\InboundTransfer

Transitions a test mode created InboundTransfer to the <code>succeeded</code>
status. The InboundTransfer must already be in the <code>processing</code>
state.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\InboundTransfer

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TestHelpers\Treasury\InboundTransferService.php`

**Classes**:
- `Stripe\Service\TestHelpers\Treasury\InboundTransferService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `fail($id, $params = null, $opts = null)`
- `returnInboundTransfer($id, $params = null, $opts = null)`
- `succeed($id, $params = null, $opts = null)`

