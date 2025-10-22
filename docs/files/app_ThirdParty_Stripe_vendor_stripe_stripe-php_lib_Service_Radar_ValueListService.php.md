# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Radar\ValueListService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Radar\ValueListService.php`
- Type: PHP
- Size: 3021 bytes

## Summary (from docblocks)

Returns a list of <code>ValueList</code> objects. The objects are sorted in
descending order by creation date, with the most recently created object
appearing first.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Radar\ValueList>

Creates a new <code>ValueList</code> object, which can then be referenced in
rules.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Radar\ValueList

Deletes a <code>ValueList</code> object, also deleting any items contained
within the value list. To be deleted, a value list must not be referenced in any
rules.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Radar\ValueList

Retrieves a <code>ValueList</code> object.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Radar\ValueList

Updates a <code>ValueList</code> object by setting the values of the parameters
passed. Any parameters not provided will be left unchanged. Note that
<code>item_type</code> is immutable.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Radar\ValueList

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Radar\ValueListService.php`

**Classes**:
- `Stripe\Service\Radar\ValueListService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `delete($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

