# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\TransferStats.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\TransferStats.php`
- Type: PHP
- Size: 3085 bytes

## Summary (from docblocks)

Represents data at the point after it was transferred either successfully
or after a network error.

@param RequestInterface  $request          Request that was sent.
@param ResponseInterface $response         Response received (if any)
@param null              $transferTime     Total handler transfer time.
@param mixed             $handlerErrorData Handler error data.
@param array             $handlerStats     Handler specific stats.

@return RequestInterface

Returns the response that was received (if any).
@return ResponseInterface|null

Returns true if a response was received.
@return bool

Gets handler specific error data.
This might be an exception, a integer representing an error code, or
anything else. Relying on this value assumes that you know what handler
you are using.
@return mixed

Get the effective URI the request was sent to.
@return UriInterface

Get the estimated time the request was being transferred by the handler.
@return float Time in seconds.

Gets an array of all of the handler specific transfer data.
@return array

Get a specific handler statistic from the handler by name.
@param string $stat Handler specific transfer stat to retrieve.
@return mixed|null

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\TransferStats.php`

**Classes**:
- `GuzzleHttp\TransferStats`

**Functions/Methods**:
- `__construct(RequestInterface $request,
        ResponseInterface $response = null,
        $transferTime = null,
        $handlerErrorData = null,
        $handlerStats = [])`
- `getRequest()`
- `getResponse()`
- `hasResponse()`
- `getHandlerErrorData()`
- `getEffectiveUri()`
- `getTransferTime()`
- `getHandlerStats()`
- `getHandlerStat($stat)`

