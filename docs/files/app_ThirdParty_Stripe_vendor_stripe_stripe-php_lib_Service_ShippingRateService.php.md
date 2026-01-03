# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\ShippingRateService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\ShippingRateService.php`
- Type: PHP
- Size: 2016 bytes

## Summary (from docblocks)

Returns a list of your shipping rates.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\ShippingRate>

Creates a new shipping rate object.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\ShippingRate

Returns the shipping rate object with the given ID.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\ShippingRate

Updates an existing shipping rate object.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\ShippingRate

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\ShippingRateService.php`

**Classes**:
- `Stripe\Service\ShippingRateService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

