# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\CurlMultiHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\CurlMultiHandler.php`
- Type: PHP
- Size: 5618 bytes

## Summary (from docblocks)

Returns an asynchronous response using curl_multi_* functions.
When using the CurlMultiHandler, custom curl options can be specified as an
associative array of curl option constants mapping to values in the
**curl** key of the provided request options.
@property resource $_mh Internal use only. Lazy loaded multi-handle.

@var CurlFactoryInterface

This handler accepts the following options:
- handle_factory: An optional factory  used to create curl handles
- select_timeout: Optional timeout (in seconds) to block before timing
  out while selecting curl handles. Defaults to 1 second.
@param array $options

Ticks the curl event loop.

Runs until all outstanding connections have completed.

Cancels a handle from sending and removes references to it.
@param int $id Handle ID to cancel and remove.
@return bool True on success, false on failure.

## References

**Database Tables (inferred)**
- `sending`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\CurlMultiHandler.php`

**Classes**:
- `GuzzleHttp\Handler\CurlMultiHandler`

**Functions/Methods**:
- `__construct(array $options = [])`
- `__get($name)`
- `__destruct()`
- `__invoke(RequestInterface $request, array $options)`
- `tick()`
- `execute()`
- `addRequest(array $entry)`
- `cancel($id)`
- `processMessages()`
- `timeToNext()`

