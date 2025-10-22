# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrTypes.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrTypes.php`
- Type: PHP
- Size: 3668 bytes

## Summary (from docblocks)

Provides lookup array of attribute types to HTMLPurifier_AttrDef objects

Lookup array of attribute string identifiers to concrete implementations.
@type HTMLPurifier_AttrDef[]

Constructs the info array, supplying default implementations for attribute
types.

Retrieves a type
@param string $type String type name
@return HTMLPurifier_AttrDef Object AttrDef for type

Sets a new implementation for a type
@param string $type String type name
@param HTMLPurifier_AttrDef $impl Object AttrDef for type

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrTypes.php`

**Classes**:
- `HTMLPurifier_AttrTypes`
- `must`

**Functions/Methods**:
- `__construct()`
- `makeEnum($in)`
- `get($type)`
- `set($type, $impl)`

