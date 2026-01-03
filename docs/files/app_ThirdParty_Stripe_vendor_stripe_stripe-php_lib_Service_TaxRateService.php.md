# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TaxRateService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TaxRateService.php`
- Type: PHP
- Size: 2043 bytes

## Summary (from docblocks)

Returns a list of your tax rates. Tax rates are returned sorted by creation
date, with the most recently created tax rates appearing first.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\TaxRate>

Creates a new tax rate.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\TaxRate

Retrieves a tax rate with the given ID.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\TaxRate

Updates an existing tax rate.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\TaxRate

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TaxRateService.php`

**Classes**:
- `Stripe\Service\TaxRateService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

