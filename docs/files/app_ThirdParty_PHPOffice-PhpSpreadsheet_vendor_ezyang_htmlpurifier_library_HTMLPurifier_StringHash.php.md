# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\StringHash.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\StringHash.php`
- Type: PHP
- Size: 1070 bytes

## Summary (from docblocks)

This is in almost every respect equivalent to an array except
that it keeps track of which keys were accessed.
@warning For the sake of backwards compatibility with early versions
    of PHP 5, you must not use the $hash[$key] syntax; if you do
    our version of offsetGet is never called.

@type array

Retrieves a value, and logs the access.
@param mixed $index
@return mixed

Returns a lookup array of all array indexes that have been accessed.
@return array in form array($index => true).

Resets the access array.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\StringHash.php`

**Classes**:
- `HTMLPurifier_StringHash extends ArrayObject`

**Functions/Methods**:
- `offsetGet($index)`
- `getAccessed()`
- `resetAccessed()`

