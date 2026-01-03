# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Issuing\CardService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Issuing\CardService.php`
- Type: PHP
- Size: 2280 bytes

## Summary (from docblocks)

Returns a list of Issuing <code>Card</code> objects. The objects are sorted in
descending order by creation date, with the most recently created object
appearing first.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Issuing\Card>

Creates an Issuing <code>Card</code> object.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Card

Retrieves an Issuing <code>Card</code> object.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Card

Updates the specified Issuing <code>Card</code> object by setting the values of
the parameters passed. Any parameters not provided will be left unchanged.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Card

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Issuing\CardService.php`

**Classes**:
- `Stripe\Service\Issuing\CardService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

