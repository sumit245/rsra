# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TaxCodeService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TaxCodeService.php`
- Type: PHP
- Size: 1293 bytes

## Summary (from docblocks)

A list of <a href="https://stripe.com/docs/tax/tax-categories">all tax codes
available</a> to add to Products in order to allow specific tax calculations.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\TaxCode>

Retrieves the details of an existing tax code. Supply the unique tax code ID and
Stripe will return the corresponding tax code information.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\TaxCode

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TaxCodeService.php`

**Classes**:
- `Stripe\Service\TaxCodeService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

