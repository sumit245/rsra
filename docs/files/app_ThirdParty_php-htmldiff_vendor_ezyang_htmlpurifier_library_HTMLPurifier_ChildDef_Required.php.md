# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\Required.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\Required.php`
- Type: PHP
- Size: 3350 bytes

## Summary (from docblocks)

Definition that allows a set of elements, but disallows empty children.

Lookup table of allowed elements.
@type array

Whether or not the last passed node was all whitespace.
@type bool

@param array|string $elements List of allowed element names (lowercase).

@type bool

@type string

@param array $children
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return array

## References

**Database Tables (inferred)**
- `it`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\Required.php`

**Classes**:
- `HTMLPurifier_ChildDef_Required extends HTMLPurifier_ChildDef`

**Functions/Methods**:
- `__construct($elements)`
- `validateChildren($children, $config, $context)`

