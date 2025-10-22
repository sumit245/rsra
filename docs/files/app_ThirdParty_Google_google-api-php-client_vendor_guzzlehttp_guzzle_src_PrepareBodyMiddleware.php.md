# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php`
- Type: PHP
- Size: 3156 bytes

## Summary (from docblocks)

Prepares requests that contain a body, adding the Content-Length,
Content-Type, and Expect headers.

@var callable

@param callable $nextHandler Next handler to invoke.

@param RequestInterface $request
@param array            $options
@return PromiseInterface

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php`

**Classes**:
- `GuzzleHttp\PrepareBodyMiddleware`

**Functions/Methods**:
- `__construct(callable $nextHandler)`
- `__invoke(RequestInterface $request, array $options)`
- `addExpectHeader(RequestInterface $request,
        array $options,
        array &$modify)`

