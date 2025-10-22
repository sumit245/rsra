# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ApiOperations\Request.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ApiOperations\Request.php`
- Type: PHP
- Size: 3974 bytes

## Summary (from docblocks)

Trait for resources that need to make API requests.
This trait should only be applied to classes that derive from StripeObject.

@param null|array|mixed $params The list of parameters to validate
@throws \Stripe\Exception\InvalidArgumentException if $params exists and is not an array

@param string $method HTTP method ('get', 'post', etc.)
@param string $url URL for the request
@param array $params list of parameters for the request
@param null|array|string $options
@throws \Stripe\Exception\ApiErrorException if the request fails
@return array tuple containing (the JSON response, $options)

@param string $method HTTP method ('get', 'post', etc.)
@param string $url URL for the request
@param callable $readBodyChunk function that will receive chunks of data from a successful request body
@param array $params list of parameters for the request
@param null|array|string $options
@throws \Stripe\Exception\ApiErrorException if the request fails

@param string $method HTTP method ('get', 'post', etc.)
@param string $url URL for the request
@param array $params list of parameters for the request
@param null|array|string $options
@throws \Stripe\Exception\ApiErrorException if the request fails
@return array tuple containing (the JSON response, $options)

@param string $method HTTP method ('get', 'post', etc.)
@param string $url URL for the request
@param callable $readBodyChunk function that will receive chunks of data from a successful request body
@param array $params list of parameters for the request
@param null|array|string $options
@throws \Stripe\Exception\ApiErrorException if the request fails

## References

**Database Tables (inferred)**
- `StripeObject`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ApiOperations\Request.php`

**Functions/Methods**:
- `_validateParams($params = null)`
- `_request($method, $url, $params = [], $options = null)`
- `_requestStream($method, $url, $readBodyChunk, $params = [], $options = null)`
- `_staticRequest($method, $url, $params, $options)`
- `_staticStreamingRequest($method, $url, $readBodyChunk, $params, $options)`

