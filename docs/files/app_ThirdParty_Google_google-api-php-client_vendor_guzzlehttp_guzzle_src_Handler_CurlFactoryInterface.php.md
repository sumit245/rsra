# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\CurlFactoryInterface.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\CurlFactoryInterface.php`
- Type: PHP
- Size: 702 bytes

## Summary (from docblocks)

Creates a cURL handle resource.
@param RequestInterface $request Request
@param array            $options Transfer options
@return EasyHandle
@throws \RuntimeException when an option cannot be applied

Release an easy handle, allowing it to be reused or closed.
This function must call unset on the easy handle's "handle" property.
@param EasyHandle $easy

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\CurlFactoryInterface.php`

**Functions/Methods**:
- `create(RequestInterface $request, array $options)`
- `release(EasyHandle $easy)`

