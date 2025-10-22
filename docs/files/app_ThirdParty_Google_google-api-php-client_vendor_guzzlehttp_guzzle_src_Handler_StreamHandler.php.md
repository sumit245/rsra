# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\StreamHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\StreamHandler.php`
- Type: PHP
- Size: 18280 bytes

## Summary (from docblocks)

HTTP handler that uses PHP's HTTP stream wrapper.

Sends an HTTP request.
@param RequestInterface $request Request to send.
@param array            $options Request transfer options.
@return PromiseInterface

Drains the source stream into the "sink" client option.
@param StreamInterface $source
@param StreamInterface $sink
@param string          $contentLength Header specifying the amount of
                                      data to read.
@return StreamInterface
@throws \RuntimeException when the sink option is invalid.

Create a resource and check to ensure it was created successfully
@param callable $callback Callable that returns stream resource
@return resource
@throws \RuntimeException on error

## References

**Database Tables (inferred)**
- `a`
- `adding`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\StreamHandler.php`

**Classes**:
- `GuzzleHttp\Handler\StreamHandler`

**Functions/Methods**:
- `__invoke(RequestInterface $request, array $options)`
- `invokeStats(array $options,
        RequestInterface $request,
        $startTime,
        ResponseInterface $response = null,
        $error = null)`
- `createResponse(RequestInterface $request,
        array $options,
        $stream,
        $startTime)`
- `createSink(StreamInterface $stream, array $options)`
- `checkDecode(array $options, array $headers, $stream)`
- `drain(StreamInterface $source,
        StreamInterface $sink,
        $contentLength)`
- `createResource(callable $callback)`
- `createStream(RequestInterface $request, array $options)`
- `resolveHost(RequestInterface $request, array $options)`
- `getDefaultContext(RequestInterface $request)`
- `add_proxy(RequestInterface $request, &$options, $value, &$params)`
- `add_timeout(RequestInterface $request, &$options, $value, &$params)`
- `add_verify(RequestInterface $request, &$options, $value, &$params)`
- `add_cert(RequestInterface $request, &$options, $value, &$params)`
- `add_progress(RequestInterface $request, &$options, $value, &$params)`
- `add_debug(RequestInterface $request, &$options, $value, &$params)`
- `addNotification(array &$params, callable $notify)`
- `callArray(array $functions)`

