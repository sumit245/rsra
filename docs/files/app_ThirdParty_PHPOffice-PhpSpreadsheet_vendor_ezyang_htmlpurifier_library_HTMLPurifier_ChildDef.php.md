# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef.php`
- Type: PHP
- Size: 1559 bytes

## Summary (from docblocks)

Defines allowed child nodes and validates nodes against it.

Type of child definition, usually right-most part of class name lowercase.
Used occasionally in terms of context.
@type string

Indicates whether or not an empty array of children is okay.
This is necessary for redundant checking when changes affecting
a child node may cause a parent node to now be disallowed.
@type bool

Lookup array of all elements that this definition could possibly allow.
@type array

Get lookup of tag names that should not close this element automatically.
All other elements will do so.
@param HTMLPurifier_Config $config HTMLPurifier_Config object
@return array

Validates nodes according to definition and returns modification.
@param HTMLPurifier_Node[] $children Array of HTMLPurifier_Node
@param HTMLPurifier_Config $config HTMLPurifier_Config object
@param HTMLPurifier_Context $context HTMLPurifier_Context object
@return bool|array true to leave nodes as is, false to remove parent node, array of replacement children

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef.php`

**Classes**:
- `HTMLPurifier_ChildDef`
- `name`

**Functions/Methods**:
- `getAllowedElements($config)`
- `validateChildren($children, $config, $context)`

