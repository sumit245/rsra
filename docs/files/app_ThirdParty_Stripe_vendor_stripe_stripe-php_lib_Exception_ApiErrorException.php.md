# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Exception\ApiErrorException.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Exception\ApiErrorException.php`
- Type: PHP
- Size: 5012 bytes

## Summary (from docblocks)

Implements properties and methods common to all (non-SPL) Stripe exceptions.

Creates a new API error exception.
@param string $message the exception message
@param null|int $httpStatus the HTTP status code
@param null|string $httpBody the HTTP body as a string
@param null|array $jsonBody the JSON deserialized body
@param null|array|\Stripe\Util\CaseInsensitiveArray $httpHeaders the HTTP headers array
@param null|string $stripeCode the Stripe error code
@return static

Gets the Stripe error object.
@return null|\Stripe\ErrorObject

Sets the Stripe error object.
@param null|\Stripe\ErrorObject $error

Gets the HTTP body as a string.
@return null|string

Sets the HTTP body as a string.
@param null|string $httpBody

Gets the HTTP headers array.
@return null|array|\Stripe\Util\CaseInsensitiveArray

Sets the HTTP headers array.
@param null|array|\Stripe\Util\CaseInsensitiveArray $httpHeaders

Gets the HTTP status code.
@return null|int

Sets the HTTP status code.
@param null|int $httpStatus

Gets the JSON deserialized body.
@return null|array<string, mixed>

Sets the JSON deserialized body.
@param null|array<string, mixed> $jsonBody

Gets the Stripe request ID.
@return null|string

Sets the Stripe request ID.
@param null|string $requestId

Gets the Stripe error code.
Cf. the `CODE_*` constants on {@see \Stripe\ErrorObject} for possible
values.
@return null|string

Sets the Stripe error code.
@param null|string $stripeCode

Returns the string representation of the exception.
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Exception\ApiErrorException.php`

**Classes**:
- `Stripe\Exception\ApiErrorException extends \Exception implements ExceptionInterface`

**Functions/Methods**:
- `factory($message,
        $httpStatus = null,
        $httpBody = null,
        $jsonBody = null,
        $httpHeaders = null,
        $stripeCode = null)`
- `getError()`
- `setError($error)`
- `getHttpBody()`
- `setHttpBody($httpBody)`
- `getHttpHeaders()`
- `setHttpHeaders($httpHeaders)`
- `getHttpStatus()`
- `setHttpStatus($httpStatus)`
- `getJsonBody()`
- `setJsonBody($jsonBody)`
- `getRequestId()`
- `setRequestId($requestId)`
- `getStripeCode()`
- `setStripeCode($stripeCode)`
- `__toString()`
- `constructErrorObject()`

