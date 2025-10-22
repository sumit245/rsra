# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Radar\ValueListItemService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Radar\ValueListItemService.php`
- Type: PHP
- Size: 2346 bytes

## Summary (from docblocks)

Returns a list of <code>ValueListItem</code> objects. The objects are sorted in
descending order by creation date, with the most recently created object
appearing first.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Radar\ValueListItem>

Creates a new <code>ValueListItem</code> object, which is added to the specified
parent value list.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Radar\ValueListItem

Deletes a <code>ValueListItem</code> object, removing it from its parent value
list.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Radar\ValueListItem

Retrieves a <code>ValueListItem</code> object.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Radar\ValueListItem

## References

**Database Tables (inferred)**
- `our`
- `its`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Radar\ValueListItemService.php`

**Classes**:
- `Stripe\Service\Radar\ValueListItemService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `delete($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

