# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\promises\src\Coroutine.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\promises\src\Coroutine.php`
- Type: PHP
- Size: 3938 bytes

## Summary (from docblocks)

Creates a promise that is resolved using a generator that yields values or
promises (somewhat similar to C#'s async keyword).
When called, the coroutine function will start an instance of the generator
and returns a promise that is fulfilled with its final yielded value.
Control is returned back to the generator when the yielded promise settles.
This can lead to less verbose code when doing lots of sequential async calls
with minimal processing in between.
    use GuzzleHttp\Promise;
    function createPromise($value) {
        return new Promise\FulfilledPromise($value);
    }
    $promise = Promise\coroutine(function () {
        $value = (yield createPromise('a'));
        try {
            $value = (yield createPromise($value . 'b'));
        } catch (\Exception $e) {
            // The promise was rejected.
        }
        yield $value . 'c';
    });
    // Outputs "abc"
    $promise->then(function ($v) { echo $v; });
@param callable $generatorFn Generator function to wrap into a promise.
@return Promise
@link https://github.com/petkaantonov/bluebird/blob/master/API.md#generators inspiration

@var PromiseInterface|null

@var Generator

@var Promise

@internal

@internal

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\promises\src\Coroutine.php`

**Classes**:
- `GuzzleHttp\Promise\Coroutine implements PromiseInterface`

**Functions/Methods**:
- `createPromise($value)`
- `__construct(callable $generatorFn)`
- `then(callable $onFulfilled = null,
        callable $onRejected = null)`
- `otherwise(callable $onRejected)`
- `wait($unwrap = true)`
- `getState()`
- `resolve($value)`
- `reject($reason)`
- `cancel()`
- `nextCoroutine($yielded)`
- `_handleSuccess($value)`
- `_handleFailure($reason)`

