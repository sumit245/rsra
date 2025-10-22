# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\HandlerStack.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\HandlerStack.php`
- Type: PHP
- Size: 7618 bytes

## Summary (from docblocks)

Creates a composed Guzzle handler function by stacking middlewares on top of
an HTTP handler function.

@var callable

@var array

@var callable|null

Creates a default handler stack that can be used by clients.
The returned handler will wrap the provided handler or use the most
appropriate default handler for your system. The returned HandlerStack has
support for cookies, redirects, HTTP error exceptions, and preparing a body
before sending.
The returned handler stack can be passed to a client in the "handler"
option.
@param callable $handler HTTP handler function to use with the stack. If no
                         handler is provided, the best handler for your
                         system will be utilized.
@return HandlerStack

@param callable $handler Underlying HTTP handler.

Invokes the handler stack as a composed handler
@param RequestInterface $request
@param array            $options

Dumps a string representation of the stack.
@return string

Set the HTTP handler that actually returns a promise.
@param callable $handler Accepts a request and array of options and
                         returns a Promise.

Returns true if the builder has a handler.
@return bool

Unshift a middleware to the bottom of the stack.
@param callable $middleware Middleware function
@param string   $name       Name to register for this middleware.

Push a middleware to the top of the stack.
@param callable $middleware Middleware function
@param string   $name       Name to register for this middleware.

Add a middleware before another middleware by name.
@param string   $findName   Middleware to find
@param callable $middleware Middleware function
@param string   $withName   Name to register for this middleware.

Add a middleware after another middleware by name.
@param string   $findName   Middleware to find
@param callable $middleware Middleware function
@param string   $withName   Name to register for this middleware.

Remove a middleware by instance or name from the stack.
@param callable|string $remove Middleware to remove by instance or name.

Compose the middleware and handler into a single callable function.
@return callable

@param $name
@return int

Splices a function into the middleware list at a specific position.
@param          $findName
@param          $withName
@param callable $middleware
@param          $before

Provides a debug string for a given callable.
@param array|callable $fn Function to write as a string.
@return string

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\HandlerStack.php`

**Classes**:
- `GuzzleHttp\HandlerStack`

**Functions/Methods**:
- `create(callable $handler = null)`
- `__construct(callable $handler = null)`
- `__invoke(RequestInterface $request, array $options)`
- `__toString()`
- `setHandler(callable $handler)`
- `hasHandler()`
- `unshift(callable $middleware, $name = null)`
- `push(callable $middleware, $name = '')`
- `before($findName, callable $middleware, $withName = '')`
- `after($findName, callable $middleware, $withName = '')`
- `remove($remove)`
- `resolve()`
- `findByName($name)`
- `splice($findName, $withName, callable $middleware, $before)`
- `debugCallable($fn)`

