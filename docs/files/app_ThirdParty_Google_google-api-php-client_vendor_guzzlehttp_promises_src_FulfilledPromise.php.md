# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\promises\src\FulfilledPromise.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\promises\src\FulfilledPromise.php`
- Type: PHP
- Size: 1966 bytes

## Summary (from docblocks)

A promise that has been fulfilled.
Thenning off of this promise will invoke the onFulfilled callback
immediately and ignore other callbacks.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\promises\src\FulfilledPromise.php`

**Classes**:
- `GuzzleHttp\Promise\FulfilledPromise implements PromiseInterface`

**Functions/Methods**:
- `__construct($value)`
- `then(callable $onFulfilled = null,
        callable $onRejected = null)`
- `otherwise(callable $onRejected)`
- `wait($unwrap = true, $defaultDelivery = null)`
- `getState()`
- `resolve($value)`
- `reject($reason)`
- `cancel()`

