# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Terminal\LocationService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Terminal\LocationService.php`
- Type: PHP
- Size: 2840 bytes

## Summary (from docblocks)

Returns a list of <code>Location</code> objects.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Terminal\Location>

Creates a new <code>Location</code> object. For further details, including which
address fields are required in each country, see the <a
href="/docs/terminal/fleet/locations">Manage locations</a> guide.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Terminal\Location

Deletes a <code>Location</code> object.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Terminal\Location

Retrieves a <code>Location</code> object.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Terminal\Location

Updates a <code>Location</code> object by setting the values of the parameters
passed. Any parameters not provided will be left unchanged.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Terminal\Location

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Terminal\LocationService.php`

**Classes**:
- `Stripe\Service\Terminal\LocationService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `delete($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

