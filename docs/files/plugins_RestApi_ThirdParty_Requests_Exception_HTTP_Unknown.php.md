# plugins\RestApi\ThirdParty\Requests\Exception\HTTP\Unknown.php

- Path: `plugins\RestApi\ThirdParty\Requests\Exception\HTTP\Unknown.php`
- Type: PHP
- Size: 868 bytes

## Summary (from docblocks)

Exception for unknown status responses
@package Requests

Exception for unknown status responses
@package Requests

HTTP status code
@var integer|bool Code if available, false if an error occurred

Reason phrase
@var string

Create a new exception
If `$data` is an instance of {@see Requests_Response}, uses the status
code from it. Otherwise, sets as 0
@param string|null $reason Reason phrase
@param mixed $data Associated data

## References

**Database Tables (inferred)**
- `it`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\ThirdParty\Requests\Exception\HTTP\Unknown.php`

**Classes**:
- `Requests_Exception_HTTP_Unknown extends Requests_Exception_HTTP`

**Functions/Methods**:
- `__construct($reason = null, $data = null)`

