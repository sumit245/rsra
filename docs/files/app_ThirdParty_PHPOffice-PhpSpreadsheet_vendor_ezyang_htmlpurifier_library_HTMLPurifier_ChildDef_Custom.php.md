# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\Custom.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\Custom.php`
- Type: PHP
- Size: 2733 bytes

## Summary (from docblocks)

Custom validation class, accepts DTD child definitions
@warning Currently this class is an all or nothing proposition, that is,
         it will only give a bool return value.

@type string

@type bool

Allowed child pattern as defined by the DTD.
@type string

PCRE regex derived from $dtd_regex.
@type string

@param $dtd_regex Allowed child pattern from the DTD

Compiles the PCRE regex from a DTD regex ($dtd_regex to $_pcre_regex)

@param HTMLPurifier_Node[] $children
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool

## References

**Database Tables (inferred)**
- `the`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\Custom.php`

**Classes**:
- `is`
- `HTMLPurifier_ChildDef_Custom extends HTMLPurifier_ChildDef`

**Functions/Methods**:
- `__construct($dtd_regex)`
- `_compileRegex()`
- `validateChildren($children, $config, $context)`

