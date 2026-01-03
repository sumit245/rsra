# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS\Multiple.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS\Multiple.php`
- Type: PHP
- Size: 2092 bytes

## Summary (from docblocks)

Framework class for strings that involve multiple values.
Certain CSS properties such as border-width and margin allow multiple
lengths to be specified.  This class can take a vanilla border-width
definition and multiply it, usually into a max of four.
@note Even though the CSS specification isn't clear about it, inherit
      can only be used alone: it will never manifest as part of a multi
      shorthand declaration.  Thus, this class does not allow inherit.

Instance of component definition to defer validation to.
@type HTMLPurifier_AttrDef
@todo Make protected

Max number of values allowed.
@todo Make protected

@param HTMLPurifier_AttrDef $single HTMLPurifier_AttrDef to multiply
@param int $max Max number of values allowed (usually four)

@param string $string
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS\Multiple.php`

**Classes**:
- `for`
- `can`
- `does`
- `HTMLPurifier_AttrDef_CSS_Multiple extends HTMLPurifier_AttrDef`

**Functions/Methods**:
- `__construct($single, $max = 4)`
- `validate($string, $config, $context)`

