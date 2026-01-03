# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\OrderService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\OrderService.php`
- Type: PHP
- Size: 4816 bytes

## Summary (from docblocks)

Returns a list of your orders. The orders are returned sorted by creation date,
with the most recently created orders appearing first.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Order>

When retrieving an order, there is an includable <strong>line_items</strong>
property containing the first handful of those items. There is also a URL where
you can retrieve the full (paginated) list of line items.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\LineItem>

Cancels the order as well as the payment intent if one is attached.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Order

Creates a new <code>open</code> order object.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Order

Reopens a <code>submitted</code> order.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Order

Retrieves the details of an existing order. Supply the unique order ID from
either an order creation request or the order list, and Stripe will return the
corresponding order information.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Order

Submitting an Order transitions the status to <code>processing</code> and
creates a PaymentIntent object so the order can be paid. If the Order has an
<code>amount_total</code> of 0, no PaymentIntent object will be created. Once
the order is submitted, its contents cannot be changed, unless the <a
href="#reopen_order">reopen</a> method is called.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Order

Updates the specific order by setting the values of the parameters passed. Any
parameters not provided will be left unchanged.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Order

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\OrderService.php`

**Classes**:
- `Stripe\Service\OrderService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `allLineItems($id, $params = null, $opts = null)`
- `cancel($id, $params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `reopen($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `submit($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

