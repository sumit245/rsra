# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\Request.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\Request.php`
- Type: PHP
- Size: 3383 bytes

## Summary (from docblocks)

PSR-7 request implementation.

@var string

@var null|string

@var UriInterface

@param string                               $method  HTTP method
@param string|UriInterface                  $uri     URI
@param array                                $headers Request headers
@param string|null|resource|StreamInterface $body    Request body
@param string                               $version Protocol version

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\Request.php`

**Classes**:
- `GuzzleHttp\Psr7\Request implements RequestInterface`

**Functions/Methods**:
- `__construct($method,
        $uri,
        array $headers = [],
        $body = null,
        $version = '1.1')`
- `getRequestTarget()`
- `withRequestTarget($requestTarget)`
- `getMethod()`
- `withMethod($method)`
- `getUri()`
- `withUri(UriInterface $uri, $preserveHost = false)`
- `updateHostFromUri()`

