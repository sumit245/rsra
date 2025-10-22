# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\HTML\LinkTypes.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\HTML\LinkTypes.php`
- Type: PHP
- Size: 1768 bytes

## Summary (from docblocks)

Validates a rel/rev link attribute against a directive of allowed values
@note We cannot use Enum because link types allow multiple
      values.
@note Assumes link types are ASCII text

Name config attribute to pull.
@type string

@param string $name

@param string $string
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\HTML\LinkTypes.php`

**Classes**:
- `HTMLPurifier_AttrDef_HTML_LinkTypes extends HTMLPurifier_AttrDef`

**Functions/Methods**:
- `__construct($name)`
- `validate($string, $config, $context)`

