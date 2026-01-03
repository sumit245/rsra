# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php`
- Type: PHP
- Size: 5687 bytes

## Summary (from docblocks)

HTTP Request exception

@var RequestInterface

@var ResponseInterface

@var array

Wrap non-RequestExceptions with a RequestException
@param RequestInterface $request
@param \Exception       $e
@return RequestException

Factory method to create a new exception with a normalized error message
@param RequestInterface  $request  Request
@param ResponseInterface $response Response received
@param \Exception        $previous Previous exception
@param array             $ctx      Optional handler context.
@return self

Get a short summary of the response
Will return `null` if the response is not printable.
@param ResponseInterface $response
@return string|null

Obfuscates URI if there is an username and a password present
@param UriInterface $uri
@return UriInterface

Get the request that caused the exception
@return RequestInterface

Get the associated response
@return ResponseInterface|null

Check if a response was received
@return bool

Get contextual information about the error from the underlying handler.
The contents of this array will vary depending on which handler you are
using. It may also be just an empty array. Relying on this data will
couple you to a specific handler, but can give more debug information
when needed.
@return array

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php`

**Classes**:
- `GuzzleHttp\Exception\RequestException extends TransferException`

**Functions/Methods**:
- `__construct($message,
        RequestInterface $request,
        ResponseInterface $response = null,
        \Exception $previous = null,
        array $handlerContext = [])`
- `wrapException(RequestInterface $request, \Exception $e)`
- `create(RequestInterface $request,
        ResponseInterface $response = null,
        \Exception $previous = null,
        array $ctx = [])`
- `getResponseBodySummary(ResponseInterface $response)`
- `obfuscateUri($uri)`
- `getRequest()`
- `getResponse()`
- `hasResponse()`
- `getHandlerContext()`

