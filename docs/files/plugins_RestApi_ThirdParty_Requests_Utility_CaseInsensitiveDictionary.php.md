# plugins\RestApi\ThirdParty\Requests\Utility\CaseInsensitiveDictionary.php

- Path: `plugins\RestApi\ThirdParty\Requests\Utility\CaseInsensitiveDictionary.php`
- Type: PHP
- Size: 2043 bytes

## Summary (from docblocks)

Case-insensitive dictionary, suitable for HTTP headers
@package Requests
@subpackage Utilities

Case-insensitive dictionary, suitable for HTTP headers
@package Requests
@subpackage Utilities

Actual item data
@var array

Creates a case insensitive dictionary.
@param array $data Dictionary/map to convert to case-insensitive

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

Get the headers as an array
@return array Header data

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\ThirdParty\Requests\Utility\CaseInsensitiveDictionary.php`

**Classes**:
- `Requests_Utility_CaseInsensitiveDictionary implements ArrayAccess, IteratorAggregate`

**Functions/Methods**:
- `__construct(array $data = array()`
- `offsetExists($key)`
- `offsetGet($key)`
- `offsetSet($key, $value)`
- `offsetUnset($key)`
- `getIterator()`
- `getAll()`

