# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\Optional.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\Optional.php`
- Type: PHP
- Size: 1209 bytes

## Summary (from docblocks)

Definition that allows a set of elements, and allows no children.
@note This is a hack to reuse code from HTMLPurifier_ChildDef_Required,
      really, one shouldn't inherit from the other.  Only altered behavior
      is to overload a returned false with an array.  Thus, it will never
      return false.

@type bool

@type string

@param array $children
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return array

## References

**Database Tables (inferred)**
- `HTMLPurifier_ChildDef_Required`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\Optional.php`

**Classes**:
- `HTMLPurifier_ChildDef_Optional extends HTMLPurifier_ChildDef_Required`

**Functions/Methods**:
- `validateChildren($children, $config, $context)`

