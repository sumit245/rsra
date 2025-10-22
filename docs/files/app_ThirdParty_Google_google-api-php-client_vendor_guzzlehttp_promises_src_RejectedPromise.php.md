# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\promises\src\RejectedPromise.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\promises\src\RejectedPromise.php`
- Type: PHP
- Size: 2229 bytes

## Summary (from docblocks)

A promise that has been rejected.
Thenning off of this promise will invoke the onRejected callback
immediately and ignore other callbacks.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\promises\src\RejectedPromise.php`

**Classes**:
- `GuzzleHttp\Promise\RejectedPromise implements PromiseInterface`

**Functions/Methods**:
- `__construct($reason)`
- `then(callable $onFulfilled = null,
        callable $onRejected = null)`
- `otherwise(callable $onRejected)`
- `wait($unwrap = true, $defaultDelivery = null)`
- `getState()`
- `resolve($value)`
- `reject($reason)`
- `cancel()`

