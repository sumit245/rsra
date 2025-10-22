# plugins\RestApi\ThirdParty\Requests\Cookie\Jar.php

- Path: `plugins\RestApi\ThirdParty\Requests\Cookie\Jar.php`
- Type: PHP
- Size: 3865 bytes

## Summary (from docblocks)

Cookie holder object
@package Requests
@subpackage Cookies

Cookie holder object
@package Requests
@subpackage Cookies

Actual item data
@var array

Create a new jar
@param array $cookies Existing cookie values

Normalise cookie data into a Requests_Cookie
@param string|Requests_Cookie $cookie
@return Requests_Cookie

Normalise cookie data into a Requests_Cookie
@codeCoverageIgnore
@deprecated Use {@see Requests_Cookie_Jar::normalize_cookie}
@return Requests_Cookie

Check if the given item exists
@param string $key Item key
@return boolean Does the item exist?

Get the value for the item
@param string $key Item key
@return string|null Item value (null if offsetExists is false)

Set the given item
@throws Requests_Exception On attempting to use dictionary as list (`invalidset`)
@param string $key Item name
@param string $value Item value

Unset the given header
@param string $key

Get an iterator for the data
@return ArrayIterator

Register the cookie handler with the request's hooking system
@param Requests_Hooker $hooks Hooking system

Add Cookie header to a request if we have any
As per RFC 6265, cookies are separated by '; '
@param string $url
@param array $headers
@param array $data
@param string $type
@param array $options

Parse all cookies from a response and attach them to the response
@var Requests_Response $response

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\ThirdParty\Requests\Cookie\Jar.php`

**Classes**:
- `Requests_Cookie_Jar implements ArrayAccess, IteratorAggregate`

**Functions/Methods**:
- `__construct($cookies = array()`
- `normalize_cookie($cookie, $key = null)`
- `normalizeCookie($cookie, $key = null)`
- `offsetExists($key)`
- `offsetGet($key)`
- `offsetSet($key, $value)`
- `offsetUnset($key)`
- `getIterator()`
- `register(Requests_Hooker $hooks)`
- `before_request($url, &$headers, &$data, &$type, &$options)`
- `before_redirect_check(Requests_Response $return)`

