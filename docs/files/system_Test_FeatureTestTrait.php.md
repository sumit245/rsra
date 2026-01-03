# system\Test\FeatureTestTrait.php

- Path: `system\Test\FeatureTestTrait.php`
- Type: PHP
- Size: 10330 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Trait FeatureTestTrait
Provides additional utilities for doing full HTTP testing
against your application in trait format.

Sets a RouteCollection that will override
the application's route collection.
Example routes:
[
   ['get', 'home', 'Home::index']
]
@param array $routes
@return $this

Sets any values that should exist during this session.
@param array|null $values Array of values, or null to use the current $_SESSION
@return $this

Set request's headers
Example of use
withHeaders([
 'Authorization' => 'Token'
])
@param array $headers Array of headers
@return $this

Set the format the request's body should have.
@param string $format The desired format. Currently supported formats: xml, json
@return $this

Set the raw body for the request
@param mixed $body
@return $this

Don't run any events while running this test.
@return $this

Calls a single URI, executes it, and returns a TestResponse
instance that can be used to run many assertions against.
@throws RedirectException
@throws Exception
@return TestResponse

@var RouteCollection $routes

Performs a GET request.
@throws RedirectException
@throws Exception
@return TestResponse

Performs a POST request.
@throws RedirectException
@throws Exception
@return TestResponse

Performs a PUT request
@throws RedirectException
@throws Exception
@return TestResponse

Performss a PATCH request
@throws RedirectException
@throws Exception
@return TestResponse

Performs a DELETE request.
@throws RedirectException
@throws Exception
@return TestResponse

Performs an OPTIONS request.
@throws RedirectException
@throws Exception
@return TestResponse

Setup a Request object to use so that CodeIgniter
won't try to auto-populate some of the items.

Setup the custom request's headers
@return IncomingRequest

Populates the data of our Request with "global" data
relevant to the request, like $_POST data.
Always populate the GET vars based on the URI.
@throws ReflectionException
@return Request

Set the request's body formatted according to the value in $this->bodyFormat.
This allows the body to be formatted in a way that the controller is going to
expect as in the case of testing a JSON or XML API.
@param array|null $params The parameters to be formatted and put in the body. If this is empty, it will get the
                          what has been loaded into the request global of the request class.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Test\FeatureTestTrait.php`

**Functions/Methods**:
- `withRoutes(?array $routes = null)`
- `withSession(?array $values = null)`
- `withHeaders(array $headers = [])`
- `withBodyFormat(string $format)`
- `withBody($body)`
- `skipEvents()`
- `call(string $method, string $path, ?array $params = null)`
- `get(string $path, ?array $params = null)`
- `post(string $path, ?array $params = null)`
- `put(string $path, ?array $params = null)`
- `patch(string $path, ?array $params = null)`
- `delete(string $path, ?array $params = null)`
- `options(string $path, ?array $params = null)`
- `setupRequest(string $method, ?string $path = null)`
- `setupHeaders(IncomingRequest $request)`
- `populateGlobals(string $method, Request $request, ?array $params = null)`
- `setRequestBody(Request $request, ?array $params = null)`

