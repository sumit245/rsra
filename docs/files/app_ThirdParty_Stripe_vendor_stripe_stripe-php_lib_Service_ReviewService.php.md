# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\ReviewService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\ReviewService.php`
- Type: PHP
- Size: 1789 bytes

## Summary (from docblocks)

Returns a list of <code>Review</code> objects that have <code>open</code> set to
<code>true</code>. The objects are sorted in descending order by creation date,
with the most recently created object appearing first.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Review>

Approves a <code>Review</code> object, closing it and removing it from the list
of reviews.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Review

Retrieves a <code>Review</code> object.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Review

## References

**Database Tables (inferred)**
- `our`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\ReviewService.php`

**Classes**:
- `Stripe\Service\ReviewService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `approve($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

