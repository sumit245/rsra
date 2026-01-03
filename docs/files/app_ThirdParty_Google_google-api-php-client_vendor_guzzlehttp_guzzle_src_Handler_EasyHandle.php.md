# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\EasyHandle.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\EasyHandle.php`
- Type: PHP
- Size: 2825 bytes

## Summary (from docblocks)

Represents a cURL easy handle and the data it populates.
@internal

@var resource cURL resource

@var StreamInterface Where data is being written

@var array Received HTTP headers so far

@var ResponseInterface Received response (if any)

@var RequestInterface Request being sent

@var array Request options

@var int cURL error number (if any)

@var \Exception Exception during on_headers (if any)

Attach a response to the easy handle based on the received headers.
@throws \RuntimeException if no headers have been received.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\EasyHandle.php`

**Classes**:
- `GuzzleHttp\Handler\EasyHandle`

**Functions/Methods**:
- `createResponse()`
- `__get($name)`

