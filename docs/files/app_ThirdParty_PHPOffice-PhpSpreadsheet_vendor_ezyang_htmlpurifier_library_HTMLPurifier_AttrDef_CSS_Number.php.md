# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS\Number.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS\Number.php`
- Type: PHP
- Size: 2287 bytes

## Summary (from docblocks)

Validates a number as defined by the CSS spec.

Indicates whether or not only positive values are allowed.
@type bool

@param bool $non_negative indicates whether negatives are forbidden

@param string $number
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return string|bool
@warning Some contexts do not pass $config, $context. These
         variables should not be used without checking HTMLPurifier_Length

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS\Number.php`

**Classes**:
- `HTMLPurifier_AttrDef_CSS_Number extends HTMLPurifier_AttrDef`

**Functions/Methods**:
- `__construct($non_negative = false)`
- `validate($number, $config, $context)`

