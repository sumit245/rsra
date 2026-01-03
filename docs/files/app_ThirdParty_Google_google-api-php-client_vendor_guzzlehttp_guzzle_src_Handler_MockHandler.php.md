# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\MockHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\MockHandler.php`
- Type: PHP
- Size: 5860 bytes

## Summary (from docblocks)

Handler that returns responses or throw exceptions from a queue.

Creates a new MockHandler that uses the default handler stack list of
middlewares.
@param array $queue Array of responses, callables, or exceptions.
@param callable $onFulfilled Callback to invoke when the return value is fulfilled.
@param callable $onRejected  Callback to invoke when the return value is rejected.
@return HandlerStack

The passed in value must be an array of
{@see Psr7\Http\Message\ResponseInterface} objects, Exceptions,
callables, or Promises.
@param array $queue
@param callable $onFulfilled Callback to invoke when the return value is fulfilled.
@param callable $onRejected  Callback to invoke when the return value is rejected.

Adds one or more variadic requests, exceptions, callables, or promises
to the queue.

Get the last received request.
@return RequestInterface

Get the last received request options.
@return array

Returns the number of remaining items in the queue.
@return int

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\MockHandler.php`

**Classes**:
- `GuzzleHttp\Handler\MockHandler implements \Countable`

**Functions/Methods**:
- `createWithMiddleware(array $queue = null,
        callable $onFulfilled = null,
        callable $onRejected = null)`
- `__construct(array $queue = null,
        callable $onFulfilled = null,
        callable $onRejected = null)`
- `__invoke(RequestInterface $request, array $options)`
- `append()`
- `getLastRequest()`
- `getLastOptions()`
- `count()`
- `invokeStats(RequestInterface $request,
        array $options,
        ResponseInterface $response = null,
        $reason = null)`

