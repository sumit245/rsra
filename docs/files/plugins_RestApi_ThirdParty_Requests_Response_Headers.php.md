# plugins\RestApi\ThirdParty\Requests\Response\Headers.php

- Path: `plugins\RestApi\ThirdParty\Requests\Response\Headers.php`
- Type: PHP
- Size: 2135 bytes

## Summary (from docblocks)

Case-insensitive dictionary, suitable for HTTP headers
@package Requests

Case-insensitive dictionary, suitable for HTTP headers
@package Requests

Get the given header
Unlike {@see self::getValues()}, this returns a string. If there are
multiple values, it concatenates them with a comma as per RFC2616.
Avoid using this where commas may be used unquoted in values, such as
Set-Cookie headers.
@param string $key
@return string|null Header value

Set the given item
@throws Requests_Exception On attempting to use dictionary as list (`invalidset`)
@param string $key Item name
@param string $value Item value

Get all values for a given header
@param string $key
@return array|null Header values

Flattens a value into a string
Converts an array into a string by imploding values with a comma, as per
RFC2616's rules for folding headers.
@param string|array $value Value to flatten
@return string Flattened value

Get an iterator for the data
Converts the internal
@return ArrayIterator

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\ThirdParty\Requests\Response\Headers.php`

**Classes**:
- `Requests_Response_Headers extends Requests_Utility_CaseInsensitiveDictionary`

**Functions/Methods**:
- `offsetGet($key)`
- `offsetSet($key, $value)`
- `getValues($key)`
- `flatten($value)`
- `getIterator()`

