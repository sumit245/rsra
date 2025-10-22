# plugins\RestApi\ThirdParty\Requests\Exception\HTTP.php

- Path: `plugins\RestApi\ThirdParty\Requests\Exception\HTTP.php`
- Type: PHP
- Size: 1420 bytes

## Summary (from docblocks)

Exception based on HTTP response
@package Requests

Exception based on HTTP response
@package Requests

HTTP status code
@var integer

Reason phrase
@var string

Create a new exception
There is no mechanism to pass in the status code, as this is set by the
subclass used. Reason phrases can vary, however.
@param string|null $reason Reason phrase
@param mixed $data Associated data

Get the status message

Get the correct exception class for a given error code
@param int|bool $code HTTP status code, or false if unavailable
@return string Exception class name to use

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\ThirdParty\Requests\Exception\HTTP.php`

**Classes**:
- `Requests_Exception_HTTP extends Requests_Exception`
- `for`
- `name`

**Functions/Methods**:
- `__construct($reason = null, $data = null)`
- `getReason()`
- `get_class($code)`

