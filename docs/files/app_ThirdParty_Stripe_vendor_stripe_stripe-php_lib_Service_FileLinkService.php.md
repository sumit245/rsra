# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\FileLinkService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\FileLinkService.php`
- Type: PHP
- Size: 1994 bytes

## Summary (from docblocks)

Returns a list of file links.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\FileLink>

Creates a new file link object.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\FileLink

Retrieves the file link with the given ID.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\FileLink

Updates an existing file link object. Expired links can no longer be updated.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\FileLink

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\FileLinkService.php`

**Classes**:
- `Stripe\Service\FileLinkService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

