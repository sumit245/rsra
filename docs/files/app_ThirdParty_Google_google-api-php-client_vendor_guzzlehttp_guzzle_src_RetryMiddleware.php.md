# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\RetryMiddleware.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\RetryMiddleware.php`
- Type: PHP
- Size: 3240 bytes

## Summary (from docblocks)

Middleware that retries requests based on the boolean result of
invoking the provided "decider" function.

@var callable

@var callable

@param callable $decider     Function that accepts the number of retries,
                             a request, [response], and [exception] and
                             returns true if the request is to be
                             retried.
@param callable $nextHandler Next handler to invoke.
@param callable $delay       Function that accepts the number of retries
                             and [response] and returns the number of
                             milliseconds to delay.

Default exponential backoff delay function.
@param $retries
@return int

@param RequestInterface $request
@param array            $options
@return PromiseInterface

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\RetryMiddleware.php`

**Classes**:
- `GuzzleHttp\RetryMiddleware`

**Functions/Methods**:
- `__construct(callable $decider,
        callable $nextHandler,
        callable $delay = null)`
- `exponentialDelay($retries)`
- `__invoke(RequestInterface $request, array $options)`
- `onFulfilled(RequestInterface $req, array $options)`
- `onRejected(RequestInterface $req, array $options)`
- `doRetry(RequestInterface $request, array $options, ResponseInterface $response = null)`

