# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\CouponService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\CouponService.php`
- Type: PHP
- Size: 3692 bytes

## Summary (from docblocks)

Returns a list of your coupons.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Coupon>

You can create coupons easily via the <a
href="https://dashboard.stripe.com/coupons">coupon management</a> page of the
Stripe dashboard. Coupon creation is also accessible via the API if you need to
create coupons on the fly.
A coupon has either a <code>percent_off</code> or an <code>amount_off</code> and
<code>currency</code>. If you set an <code>amount_off</code>, that amount will
be subtracted from any invoice’s subtotal. For example, an invoice with a
subtotal of <currency>100</currency> will have a final total of
<currency>0</currency> if a coupon with an <code>amount_off</code> of
<amount>200</amount> is applied to it and an invoice with a subtotal of
<currency>300</currency> will have a final total of <currency>100</currency> if
a coupon with an <code>amount_off</code> of <amount>200</amount> is applied to
it.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Coupon

You can delete coupons via the <a
href="https://dashboard.stripe.com/coupons">coupon management</a> page of the
Stripe dashboard. However, deleting a coupon does not affect any customers who
have already applied the coupon; it means that new customers can’t redeem the
coupon. You can also delete coupons via the API.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Coupon

Retrieves the coupon with the given ID.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Coupon

Updates the metadata of a coupon. Other coupon details (currency, duration,
amount_off) are, by design, not editable.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Coupon

## References

**Database Tables (inferred)**
- `our`
- `any`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\CouponService.php`

**Classes**:
- `Stripe\Service\CouponService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `delete($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

