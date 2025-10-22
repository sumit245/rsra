# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\PaymentLinkService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\PaymentLinkService.php`
- Type: PHP
- Size: 2679 bytes

## Summary (from docblocks)

Returns a list of your payment links.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\PaymentLink>

When retrieving a payment link, there is an includable
<strong>line_items</strong> property containing the first handful of those
items. There is also a URL where you can retrieve the full (paginated) list of
line items.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\LineItem>

Creates a payment link.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\PaymentLink

Retrieve a payment link.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\PaymentLink

Updates a payment link.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\PaymentLink

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\PaymentLinkService.php`

**Classes**:
- `Stripe\Service\PaymentLinkService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `allLineItems($id, $params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

