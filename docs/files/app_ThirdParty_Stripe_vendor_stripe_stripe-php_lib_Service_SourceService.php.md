# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\SourceService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\SourceService.php`
- Type: PHP
- Size: 3599 bytes

## Summary (from docblocks)

List source transactions for a given source.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\SourceTransaction>

Creates a new source object.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Source

Delete a specified source for a given customer.
@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Source

Retrieves an existing source object. Supply the unique source ID from a source
creation request and Stripe will return the corresponding up-to-date source
object information.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Source

Updates the specified source by setting the values of the parameters passed. Any
parameters not provided will be left unchanged.
This request accepts the <code>metadata</code> and <code>owner</code> as
arguments. It is also possible to update type specific information for selected
payment methods. Please refer to our <a href="/docs/sources">payment method
guides</a> for more detail.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Source

Verify a given source.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Source

## References

**Database Tables (inferred)**
- `our`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\SourceService.php`

**Classes**:
- `Stripe\Service\SourceService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `allSourceTransactions($id, $params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `detach($parentId, $id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`
- `verify($id, $params = null, $opts = null)`

