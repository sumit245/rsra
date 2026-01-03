# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS\Composite.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS\Composite.php`
- Type: PHP
- Size: 1332 bytes

## Summary (from docblocks)

Allows multiple validators to attempt to validate attribute.
Composite is just what it sounds like: a composite of many validators.
This means that multiple HTMLPurifier_AttrDef objects will have a whack
at the string.  If one of them passes, that's what is returned.  This is
especially useful for CSS values, which often are a choice between
an enumerated set of predefined values or a flexible data type.

List of objects that may process strings.
@type HTMLPurifier_AttrDef[]
@todo Make protected

@param HTMLPurifier_AttrDef[] $defs List of HTMLPurifier_AttrDef objects

@param string $string
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS\Composite.php`

**Classes**:
- `HTMLPurifier_AttrDef_CSS_Composite extends HTMLPurifier_AttrDef`

**Functions/Methods**:
- `__construct($defs)`
- `validate($string, $config, $context)`

