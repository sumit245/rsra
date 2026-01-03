# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ApiOperations\NestedResource.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ApiOperations\NestedResource.php`
- Type: PHP
- Size: 3994 bytes

## Summary (from docblocks)

Trait for resources that have nested resources.
This trait should only be applied to classes that derive from StripeObject.

@param string $method
@param string $url
@param null|array $params
@param null|array|string $options
@return \Stripe\StripeObject

@param string $id
@param string $nestedPath
@param null|string $nestedId
@return string

@param string $id
@param string $nestedPath
@param null|array $params
@param null|array|string $options
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\StripeObject

@param string $id
@param string $nestedPath
@param null|string $nestedId
@param null|array $params
@param null|array|string $options
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\StripeObject

@param string $id
@param string $nestedPath
@param null|string $nestedId
@param null|array $params
@param null|array|string $options
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\StripeObject

@param string $id
@param string $nestedPath
@param null|string $nestedId
@param null|array $params
@param null|array|string $options
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\StripeObject

@param string $id
@param string $nestedPath
@param null|array $params
@param null|array|string $options
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\StripeObject

## References

**Database Tables (inferred)**
- `StripeObject`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ApiOperations\NestedResource.php`

**Functions/Methods**:
- `_nestedResourceOperation($method, $url, $params = null, $options = null)`
- `_nestedResourceUrl($id, $nestedPath, $nestedId = null)`
- `_createNestedResource($id, $nestedPath, $params = null, $options = null)`
- `_retrieveNestedResource($id, $nestedPath, $nestedId, $params = null, $options = null)`
- `_updateNestedResource($id, $nestedPath, $nestedId, $params = null, $options = null)`
- `_deleteNestedResource($id, $nestedPath, $nestedId, $params = null, $options = null)`
- `_allNestedResources($id, $nestedPath, $params = null, $options = null)`

