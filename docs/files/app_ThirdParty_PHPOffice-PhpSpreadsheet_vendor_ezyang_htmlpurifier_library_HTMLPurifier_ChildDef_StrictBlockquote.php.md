# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\StrictBlockquote.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\StrictBlockquote.php`
- Type: PHP
- Size: 2914 bytes

## Summary (from docblocks)

Takes the contents of blockquote when in strict and reformats for validation.

@type array

@type array

@type bool

@type string

@type bool

@param HTMLPurifier_Config $config
@return array
@note We don't want MakeWellFormed to auto-close inline elements since
      they might be allowed.

@param array $children
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return array

@param HTMLPurifier_Config $config

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\StrictBlockquote.php`

**Classes**:
- `HTMLPurifier_ChildDef_StrictBlockquote extends HTMLPurifier_ChildDef_Required`
- `into`

**Functions/Methods**:
- `getAllowedElements($config)`
- `validateChildren($children, $config, $context)`
- `init($config)`

