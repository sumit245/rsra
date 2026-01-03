# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\HTML\Nmtokens.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\HTML\Nmtokens.php`
- Type: PHP
- Size: 2145 bytes

## Summary (from docblocks)

Validates contents based on NMTOKENS attribute type.

@param string $string
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool|string

Splits a space separated list of tokens into its constituent parts.
@param string $string
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return array

Template method for removing certain tokens based on arbitrary criteria.
@note If we wanted to be really functional, we'd do an array_filter
      with a callback. But... we're not.
@param array $tokens
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return array

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\HTML\Nmtokens.php`

**Classes**:
- `HTMLPurifier_AttrDef_HTML_Nmtokens extends HTMLPurifier_AttrDef`

**Functions/Methods**:
- `validate($string, $config, $context)`
- `split($string, $config, $context)`
- `filter($tokens, $config, $context)`

