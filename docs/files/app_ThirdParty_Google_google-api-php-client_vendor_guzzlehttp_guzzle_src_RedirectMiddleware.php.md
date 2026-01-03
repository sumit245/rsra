# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php`
- Type: PHP
- Size: 7796 bytes

## Summary (from docblocks)

Request redirect middleware.
Apply this middleware like other middleware using
{@see GuzzleHttp\Middleware::redirect()}.

@var callable

@param callable $nextHandler Next handler to invoke.

@param RequestInterface $request
@param array            $options
@return PromiseInterface

@param RequestInterface  $request
@param array             $options
@param ResponseInterface|PromiseInterface $response
@return ResponseInterface|PromiseInterface

@var PromiseInterface|ResponseInterface $promise

@param RequestInterface  $request
@param array             $options
@param ResponseInterface $response
@return RequestInterface

Set the appropriate URL on the request based on the location header
@param RequestInterface  $request
@param ResponseInterface $response
@param array             $protocols
@return UriInterface

## References

**Database Tables (inferred)**
- `https`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php`

**Classes**:
- `GuzzleHttp\RedirectMiddleware`

**Functions/Methods**:
- `__construct(callable $nextHandler)`
- `__invoke(RequestInterface $request, array $options)`
- `checkRedirect(RequestInterface $request,
        array $options,
        ResponseInterface $response)`
- `withTracking(PromiseInterface $promise, $uri, $statusCode)`
- `guardMax(RequestInterface $request, array &$options)`
- `modifyRequest(RequestInterface $request,
        array $options,
        ResponseInterface $response)`
- `redirectUri(RequestInterface $request,
        ResponseInterface $response,
        array $protocols)`

