# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\PromotionCodeService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\PromotionCodeService.php`
- Type: PHP
- Size: 2412 bytes

## Summary (from docblocks)

Returns a list of your promotion codes.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\PromotionCode>

A promotion code points to a coupon. You can optionally restrict the code to a
specific customer, redemption limit, and expiration date.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\PromotionCode

Retrieves the promotion code with the given ID. In order to retrieve a promotion
code by the customer-facing <code>code</code> use <a
href="/docs/api/promotion_codes/list">list</a> with the desired
<code>code</code>.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\PromotionCode

Updates the specified promotion code by setting the values of the parameters
passed. Most fields are, by design, not editable.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\PromotionCode

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\PromotionCodeService.php`

**Classes**:
- `Stripe\Service\PromotionCodeService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

