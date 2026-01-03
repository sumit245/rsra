# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\SkuService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\SkuService.php`
- Type: PHP
- Size: 2994 bytes

## Summary (from docblocks)

Returns a list of your SKUs. The SKUs are returned sorted by creation date, with
the most recently created SKUs appearing first.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\SKU>

Creates a new SKU associated with a product.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\SKU

Delete a SKU. Deleting a SKU is only possible until it has been used in an
order.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\SKU

Retrieves the details of an existing SKU. Supply the unique SKU identifier from
either a SKU creation request or from the product, and Stripe will return the
corresponding SKU information.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\SKU

Updates the specific SKU by setting the values of the parameters passed. Any
parameters not provided will be left unchanged.
Note that a SKU’s <code>attributes</code> are not editable. Instead, you would
need to deactivate the existing SKU and create a new one with the new attribute
values.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\SKU

## References

**Database Tables (inferred)**
- `our`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\SkuService.php`

**Classes**:
- `Stripe\Service\SkuService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `delete($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

