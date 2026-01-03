# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\PropertyList.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\PropertyList.php`
- Type: PHP
- Size: 2783 bytes

## Summary (from docblocks)

Generic property list implementation

Internal data-structure for properties.
@type array

Parent plist.
@type HTMLPurifier_PropertyList

Cache.
@type array

@param HTMLPurifier_PropertyList $parent Parent plist

Recursively retrieves the value for a key
@param string $name
@throws HTMLPurifier_Exception

Sets the value of a key, for this plist
@param string $name
@param mixed $value

Returns true if a given key exists
@param string $name
@return bool

Resets a value to the value of it's parent, usually the default. If
no value is specified, the entire plist is reset.
@param string $name

Squashes this property list and all of its property lists into a single
array, and returns the array. This value is cached by default.
@param bool $force If true, ignores the cache and regenerates the array.
@return array

Returns the parent plist.
@return HTMLPurifier_PropertyList

Sets the parent plist.
@param HTMLPurifier_PropertyList $plist Parent plist

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\PropertyList.php`

**Classes**:
- `HTMLPurifier_PropertyList`

**Functions/Methods**:
- `__construct($parent = null)`
- `get($name)`
- `set($name, $value)`
- `has($name)`
- `reset($name = null)`
- `squash($force = false)`
- `getParent()`
- `setParent($plist)`

