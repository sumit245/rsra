# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\Enum.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\Enum.php`
- Type: PHP
- Size: 2211 bytes

## Summary (from docblocks)

Validates a keyword against a list of valid values.
@warning The case-insensitive compare of this function uses PHP's
         built-in strtolower and ctype_lower functions, which may
         cause problems with international comparisons

Lookup table of valid values.
@type array
@todo Make protected

Bool indicating whether or not enumeration is case sensitive.
@note In general this is always case insensitive.

@param array $valid_values List of valid values
@param bool $case_sensitive Whether or not case sensitive

@param string $string
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool|string

@param string $string In form of comma-delimited list of case-insensitive
     valid values. Example: "foo,bar,baz". Prepend "s:" to make
     case sensitive
@return HTMLPurifier_AttrDef_Enum

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\Enum.php`

**Classes**:
- `HTMLPurifier_AttrDef_Enum extends HTMLPurifier_AttrDef`

**Functions/Methods**:
- `__construct($valid_values = array()`
- `validate($string, $config, $context)`
- `make($string)`

