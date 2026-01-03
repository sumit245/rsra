# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrCollections.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrCollections.php`
- Type: PHP
- Size: 4862 bytes

## Summary (from docblocks)

Defines common attribute collections that modules reference

Associative array of attribute collections, indexed by name.
@type array

Performs all expansions on internal data for use by other inclusions
It also collects all attribute collection extensions from
modules
@param HTMLPurifier_AttrTypes $attr_types HTMLPurifier_AttrTypes instance
@param HTMLPurifier_HTMLModule[] $modules Hash array of HTMLPurifier_HTMLModule members

Takes a reference to an attribute associative array and performs
all inclusions specified by the zero index.
@param array &$attr Reference to attribute array

Expands all string identifiers in an attribute array by replacing
them with the appropriate values inside HTMLPurifier_AttrTypes
@param array &$attr Reference to attribute array
@param HTMLPurifier_AttrTypes $attr_types HTMLPurifier_AttrTypes instance

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrCollections.php`

**Classes**:
- `HTMLPurifier_AttrCollections`

**Functions/Methods**:
- `__construct($attr_types, $modules)`
- `doConstruct($attr_types, $modules)`
- `performInclusions(&$attr)`
- `expandIdentifiers(&$attr, $attr_types)`

