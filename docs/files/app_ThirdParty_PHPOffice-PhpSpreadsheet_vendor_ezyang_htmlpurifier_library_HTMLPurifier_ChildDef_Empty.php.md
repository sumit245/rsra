# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\Empty.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\Empty.php`
- Type: PHP
- Size: 866 bytes

## Summary (from docblocks)

Definition that disallows all elements.
@warning validateChildren() in this class is actually never called, because
         empty elements are corrected in HTMLPurifier_Strategy_MakeWellFormed
         before child definitions are parsed in earnest by
         HTMLPurifier_Strategy_FixNesting.

@type bool

@type string

@param HTMLPurifier_Node[] $children
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return array

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\Empty.php`

**Classes**:
- `is`
- `HTMLPurifier_ChildDef_Empty extends HTMLPurifier_ChildDef`

**Functions/Methods**:
- `__construct()`
- `validateChildren($children, $config, $context)`

