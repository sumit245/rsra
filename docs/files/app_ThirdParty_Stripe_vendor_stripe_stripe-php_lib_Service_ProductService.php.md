# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\ProductService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\ProductService.php`
- Type: PHP
- Size: 3892 bytes

## Summary (from docblocks)

Returns a list of your products. The products are returned sorted by creation
date, with the most recently created products appearing first.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Product>

Creates a new product object.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Product

Delete a product. Deleting a product is only possible if it has no prices
associated with it. Additionally, deleting a product with <code>type=good</code>
is only possible if it has no SKUs associated with it.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Product

Retrieves the details of an existing product. Supply the unique product ID from
either a product creation request or the product list, and Stripe will return
the corresponding product information.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Product

Search for products you’ve previously created using Stripe’s <a
href="/docs/search#search-query-language">Search Query Language</a>. Don’t use
search in read-after-write flows where strict consistency is necessary. Under
normal operating conditions, data is searchable in less than a minute.
Occasionally, propagation of new or updated data can be up to an hour behind
during outages. Search functionality is not available to merchants in India.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\SearchResult<\Stripe\Product>

Updates the specific product by setting the values of the parameters passed. Any
parameters not provided will be left unchanged.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Product

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\ProductService.php`

**Classes**:
- `Stripe\Service\ProductService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `delete($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `search($params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

