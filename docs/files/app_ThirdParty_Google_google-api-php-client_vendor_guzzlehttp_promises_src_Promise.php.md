# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\promises\src\Promise.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\promises\src\Promise.php`
- Type: PHP
- Size: 8779 bytes

## Summary (from docblocks)

Promises/A+ implementation that avoids recursion when possible.
@link https://promisesaplus.com/

@param callable $waitFn   Fn that when invoked resolves the promise.
@param callable $cancelFn Fn that when invoked cancels the promise.

Call a stack of handlers using a specific callback index and value.
@param int   $index   1 (resolve) or 2 (reject).
@param mixed $value   Value to pass to the callback.
@param array $handler Array of handler data (promise and callbacks).
@return array Returns the next group to resolve.

@var PromiseInterface $promise

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\promises\src\Promise.php`

**Classes**:
- `GuzzleHttp\Promise\Promise implements PromiseInterface`

**Functions/Methods**:
- `__construct(callable $waitFn = null,
        callable $cancelFn = null)`
- `then(callable $onFulfilled = null,
        callable $onRejected = null)`
- `otherwise(callable $onRejected)`
- `wait($unwrap = true)`
- `getState()`
- `cancel()`
- `resolve($value)`
- `reject($reason)`
- `settle($state, $value)`
- `callHandler($index, $value, array $handler)`
- `waitIfPending()`
- `invokeWaitFn()`
- `invokeWaitList()`

