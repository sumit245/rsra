# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Issuing\CardholderService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Issuing\CardholderService.php`
- Type: PHP
- Size: 2393 bytes

## Summary (from docblocks)

Returns a list of Issuing <code>Cardholder</code> objects. The objects are
sorted in descending order by creation date, with the most recently created
object appearing first.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Issuing\Cardholder>

Creates a new Issuing <code>Cardholder</code> object that can be issued cards.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Cardholder

Retrieves an Issuing <code>Cardholder</code> object.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Cardholder

Updates the specified Issuing <code>Cardholder</code> object by setting the
values of the parameters passed. Any parameters not provided will be left
unchanged.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Cardholder

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Issuing\CardholderService.php`

**Classes**:
- `Stripe\Service\Issuing\CardholderService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

