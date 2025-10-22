# plugins\RestApi\ThirdParty\Requests\Exception.php

- Path: `plugins\RestApi\ThirdParty\Requests\Exception.php`
- Type: PHP
- Size: 1027 bytes

## Summary (from docblocks)

Exception for HTTP requests
@package Requests

Exception for HTTP requests
@package Requests

Type of exception
@var string

Data associated with the exception
@var mixed

Create a new exception
@param string $message Exception message
@param string $type Exception type
@param mixed $data Associated data
@param integer $code Exception numerical code, if applicable

Like {@see getCode()}, but a string code.
@codeCoverageIgnore
@return string

Gives any relevant data
@codeCoverageIgnore
@return mixed

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\ThirdParty\Requests\Exception.php`

**Classes**:
- `Requests_Exception extends Exception`

**Functions/Methods**:
- `__construct($message, $type, $data = null, $code = 0)`
- `getType()`
- `getData()`

