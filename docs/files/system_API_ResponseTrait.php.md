# system\API\ResponseTrait.php

- Path: `system\API\ResponseTrait.php`
- Type: PHP
- Size: 11587 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Provides common, more readable, methods to provide
consistent HTTP responses under a variety of common
situations when working as an API.
@property IncomingRequest $request
@property Response        $response

Allows child classes to override the
status code that is used in their API.
@var array<string, int>

How to format the response data.
Either 'json' or 'xml'. If blank will be
determine through content negotiation.
@var string

Current Formatter instance. This is usually set by ResponseTrait::format
@var FormatterInterface|null

Provides a single, simple method to return an API response, formatted
to match the requested format, with proper content-type and status code.
@param array|string|null $data
@return Response

Used for generic failures that no custom methods exist for.
@param array|string $messages
@param int          $status   HTTP status code
@param string|null  $code     Custom, API-specific, error code
@return Response

Used after successfully creating a new resource.
@param mixed $data
@return Response

Used after a resource has been successfully deleted.
@param mixed $data
@return Response

Used after a resource has been successfully updated.
@param mixed $data
@return Response

Used after a command has been successfully executed but there is no
meaningful reply to send back to the client.
@return Response

Used when the client is either didn't send authorization information,
or had bad authorization credentials. User is encouraged to try again
with the proper information.
@return Response

Used when access is always denied to this resource and no amount
of trying again will help.
@return Response

Used when a specified resource cannot be found.
@return Response

Used when the data provided by the client cannot be validated.
@return Response
@deprecated Use failValidationErrors instead

Used when the data provided by the client cannot be validated on one or more fields.
@param string|string[] $errors
@return Response

Use when trying to create a new resource and it already exists.
@return Response

Use when a resource was previously deleted. This is different than
Not Found, because here we know the data previously existed, but is now gone,
where Not Found means we simply cannot find any information about it.
@return Response

Used when the user has made too many requests for the resource recently.
@return Response

Used when there is a server error.
@param string      $description The error message to show the user.
@param string|null $code        A custom, API-specific, error code.
@param string      $message     A custom "reason" message to return.
@return Response The value of the Response's send() method.

Handles formatting a response. Currently makes some heavy assumptions
and needs updating! :)
@param array|string|null $data
@return string|null

Sets the format the response should be in.
@return $this

## Symbols

# Symbols

**Files documented**: 1

## `system\API\ResponseTrait.php`

**Functions/Methods**:
- `respond($data = null, ?int $status = null, string $message = '')`
- `fail($messages, int $status = 400, ?string $code = null, string $customMessage = '')`
- `respondCreated($data = null, string $message = '')`
- `respondDeleted($data = null, string $message = '')`
- `respondUpdated($data = null, string $message = '')`
- `respondNoContent(string $message = 'No Content')`
- `failUnauthorized(string $description = 'Unauthorized', ?string $code = null, string $message = '')`
- `failForbidden(string $description = 'Forbidden', ?string $code = null, string $message = '')`
- `failNotFound(string $description = 'Not Found', ?string $code = null, string $message = '')`
- `failValidationError(string $description = 'Bad Request', ?string $code = null, string $message = '')`
- `failValidationErrors($errors, ?string $code = null, string $message = '')`
- `failResourceExists(string $description = 'Conflict', ?string $code = null, string $message = '')`
- `failResourceGone(string $description = 'Gone', ?string $code = null, string $message = '')`
- `failTooManyRequests(string $description = 'Too Many Requests', ?string $code = null, string $message = '')`
- `failServerError(string $description = 'Internal Server Error', ?string $code = null, string $message = '')`
- `format($data = null)`
- `setResponseFormat(?string $format = null)`

