# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Middleware.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Middleware.php`
- Type: PHP
- Size: 9898 bytes

## Summary (from docblocks)

Functions used to create and wrap handlers with handler middleware.

Middleware that adds cookies to requests.
The options array must be set to a CookieJarInterface in order to use
cookies. This is typically handled for you by a client.
@return callable Returns a function that accepts the next handler.

Middleware that throws exceptions for 4xx or 5xx responses when the
"http_error" request option is set to true.
@return callable Returns a function that accepts the next handler.

Middleware that pushes history data to an ArrayAccess container.
@param array|\ArrayAccess $container Container to hold the history (by reference).
@return callable Returns a function that accepts the next handler.
@throws \InvalidArgumentException if container is not an array or ArrayAccess.

Middleware that invokes a callback before and after sending a request.
The provided listener cannot modify or alter the response. It simply
"taps" into the chain to be notified before returning the promise. The
before listener accepts a request and options array, and the after
listener accepts a request, options array, and response promise.
@param callable $before Function to invoke before forwarding the request.
@param callable $after  Function invoked after forwarding.
@return callable Returns a function that accepts the next handler.

Middleware that handles request redirects.
@return callable Returns a function that accepts the next handler.

Middleware that retries requests based on the boolean result of
invoking the provided "decider" function.
If no delay function is provided, a simple implementation of exponential
backoff will be utilized.
@param callable $decider Function that accepts the number of retries,
                         a request, [response], and [exception] and
                         returns true if the request is to be retried.
@param callable $delay   Function that accepts the number of retries and
                         returns the number of milliseconds to delay.
@return callable Returns a function that accepts the next handler.

Middleware that logs requests, responses, and errors using a message
formatter.
@param LoggerInterface  $logger Logs messages.
@param MessageFormatter $formatter Formatter used to create message strings.
@param string           $logLevel Level at which to log requests.
@return callable Returns a function that accepts the next handler.

This middleware adds a default content-type if possible, a default
content-length or transfer-encoding header, and the expect header.
@return callable

Middleware that applies a map function to the request before passing to
the next handler.
@param callable $fn Function that accepts a RequestInterface and returns
                    a RequestInterface.
@return callable

Middleware that applies a map function to the resolved promise's
response.
@param callable $fn Function that accepts a ResponseInterface and
                    returns a ResponseInterface.
@return callable

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Middleware.php`

**Classes**:
- `GuzzleHttp\Middleware`

**Functions/Methods**:
- `cookies()`
- `httpErrors()`
- `history(&$container)`
- `tap(callable $before = null, callable $after = null)`
- `redirect()`
- `retry(callable $decider, callable $delay = null)`
- `log(LoggerInterface $logger, MessageFormatter $formatter, $logLevel = LogLevel::INFO)`
- `prepareBody()`
- `mapRequest(callable $fn)`
- `mapResponse(callable $fn)`

