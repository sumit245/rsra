# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php`
- Type: PHP
- Size: 20601 bytes

## Summary (from docblocks)

Creates curl resources from a request

@var array

@var int Total number of idle handles to keep in cache

@param int $maxHandles Maximum number of idle handles.

Completes a cURL transaction, either returning a response promise or a
rejected promise.
@param callable             $handler
@param EasyHandle           $easy
@param CurlFactoryInterface $factory Dictates how the handle is released
@return \GuzzleHttp\Promise\PromiseInterface

Remove a header from the options array.
@param string $name    Case-insensitive header to remove
@param array  $options Array of options to modify

This function ensures that a response was set on a transaction. If one
was not set, then the request is retried if possible. This error
typically means you are sending a payload, curl encountered a
"Connection died, retrying a fresh connect" error, tried to rewind the
stream, and then encountered a "necessary data rewind wasn't possible"
error, causing the request to be sent through curl_multi_info_read()
without an error status.

## References

**Database Tables (inferred)**
- `a`
- `the`
- `adding`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php`

**Classes**:
- `GuzzleHttp\Handler\CurlFactory implements CurlFactoryInterface`

**Functions/Methods**:
- `__construct($maxHandles)`
- `create(RequestInterface $request, array $options)`
- `release(EasyHandle $easy)`
- `finish(callable $handler,
        EasyHandle $easy,
        CurlFactoryInterface $factory)`
- `invokeStats(EasyHandle $easy)`
- `finishError(callable $handler,
        EasyHandle $easy,
        CurlFactoryInterface $factory)`
- `createRejection(EasyHandle $easy, array $ctx)`
- `getDefaultConf(EasyHandle $easy)`
- `applyMethod(EasyHandle $easy, array &$conf)`
- `applyBody(RequestInterface $request, array $options, array &$conf)`
- `applyHeaders(EasyHandle $easy, array &$conf)`
- `removeHeader($name, array &$options)`
- `applyHandlerOptions(EasyHandle $easy, array &$conf)`
- `retryFailedRewind(callable $handler,
        EasyHandle $easy,
        array $ctx)`
- `createHeaderFn(EasyHandle $easy)`

