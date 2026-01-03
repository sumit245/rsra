# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\List.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\List.php`
- Type: PHP
- Size: 3013 bytes

## Summary (from docblocks)

Definition for list containers ul and ol.
What does this do?  The big thing is to handle ol/ul at the top
level of list nodes, which should be handled specially by /folding/
them into the previous list node.  We generally shouldn't ever
see other disallowed elements, because the autoclose behavior
in MakeWellFormed handles it.

@type string

@type array

@param array $children
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return array

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\List.php`

**Classes**:
- `HTMLPurifier_ChildDef_List extends HTMLPurifier_ChildDef`

**Functions/Methods**:
- `validateChildren($children, $config, $context)`

