# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\Integer.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\Integer.php`
- Type: PHP
- Size: 2547 bytes

## Summary (from docblocks)

Validates an integer.
@note While this class was modeled off the CSS definition, no currently
      allowed CSS uses this type.  The properties that do are: widows,
      orphans, z-index, counter-increment, counter-reset.  Some of the
      HTML attributes, however, find use for a non-negative version of this.

Whether or not negative values are allowed.
@type bool

Whether or not zero is allowed.
@type bool

Whether or not positive values are allowed.
@type bool

@param $negative Bool indicating whether or not negative values are allowed
@param $zero Bool indicating whether or not zero is allowed
@param $positive Bool indicating whether or not positive values are allowed

@param string $integer
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\Integer.php`

**Classes**:
- `was`
- `HTMLPurifier_AttrDef_Integer extends HTMLPurifier_AttrDef`

**Functions/Methods**:
- `__construct($negative = true, $zero = true, $positive = true)`
- `validate($integer, $config, $context)`

