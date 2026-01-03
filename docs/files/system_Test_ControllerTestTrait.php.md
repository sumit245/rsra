# system\Test\ControllerTestTrait.php

- Path: `system\Test\ControllerTestTrait.php`
- Type: PHP
- Size: 7025 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Controller Test Trait
Provides features that make testing controllers simple and fluent.
Example:
 $this->withRequest($request)
      ->withResponse($response)
      ->withURI($uri)
      ->withBody($body)
      ->controller('App\Controllers\Home')
      ->execute('methodName');

Controller configuration.
@var App

Request.
@var IncomingRequest

Response.
@var Response

Message logger.
@var LoggerInterface

Initialized controller.
@var Controller

URI of this request.
@var string

Request body.
@var string|null

Initializes required components.

Loads the specified controller, and generates any needed dependencies.
@return mixed

Runs the specified method on the controller and returns the results.
@param array $params
@throws InvalidArgumentException
@return TestResponse

Set controller's config, with method chaining.
@param mixed $appConfig
@return mixed

Set controller's request, with method chaining.
@param mixed $request
@return mixed

Set controller's response, with method chaining.
@param mixed $response
@return mixed

Set controller's logger, with method chaining.
@param mixed $logger
@return mixed

Set the controller's URI, with method chaining.
@return mixed

Set the method's body, with method chaining.
@param string|null $body
@return mixed

## References

**Database Tables (inferred)**
- `exceptions`

## Symbols

# Symbols

**Files documented**: 1

## `system\Test\ControllerTestTrait.php`

**Functions/Methods**:
- `setUpControllerTestTrait()`
- `controller(string $name)`
- `execute(string $method, ...$params)`
- `withConfig($appConfig)`
- `withRequest($request)`
- `withResponse($response)`
- `withLogger($logger)`
- `withUri(string $uri)`
- `withBody($body)`

