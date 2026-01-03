# plugins\RestApi\ThirdParty\Requests\Response.php

- Path: `plugins\RestApi\ThirdParty\Requests\Response.php`
- Type: PHP
- Size: 2515 bytes

## Summary (from docblocks)

HTTP response class
Contains a response from Requests::request()
@package Requests

HTTP response class
Contains a response from Requests::request()
@package Requests

Constructor

Response body
@var string

Raw HTTP data from the transport
@var string

Headers, as an associative array
@var Requests_Response_Headers Array-like object representing headers

Status code, false if non-blocking
@var integer|boolean

Protocol version, false if non-blocking
@var float|boolean

Whether the request succeeded or not
@var boolean

Number of redirects the request used
@var integer

URL requested
@var string

Previous requests (from redirects)
@var array Array of Requests_Response objects

Cookies from the request
@var Requests_Cookie_Jar Array-like object representing a cookie jar

Is the response a redirect?
@return boolean True if redirect (3xx status), false if not.

Throws an exception if the request was not successful
@throws Requests_Exception If `$allow_redirects` is false, and code is 3xx (`response.no_redirects`)
@throws Requests_Exception_HTTP On non-successful status code. Exception class corresponds to code (e.g. {@see Requests_Exception_HTTP_404})
@param boolean $allow_redirects Set to false to throw on a 3xx as well

## References

**Database Tables (inferred)**
- `Requests`
- `the`
- `redirects`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\ThirdParty\Requests\Response.php`

**Classes**:
- `Requests_Response`
- `corresponds`

**Functions/Methods**:
- `__construct()`
- `is_redirect()`
- `throw_for_status($allow_redirects = true)`

