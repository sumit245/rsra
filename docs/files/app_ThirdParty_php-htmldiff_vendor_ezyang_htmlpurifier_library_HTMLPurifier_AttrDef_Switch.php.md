# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\Switch.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\Switch.php`
- Type: PHP
- Size: 1289 bytes

## Summary (from docblocks)

Decorator that, depending on a token, switches between two definitions.

@type string

@type HTMLPurifier_AttrDef

@type HTMLPurifier_AttrDef

@param string $tag Tag name to switch upon
@param HTMLPurifier_AttrDef $with_tag Call if token matches tag
@param HTMLPurifier_AttrDef $without_tag Call if token doesn't match, or there is no token

@param string $string
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\Switch.php`

**Classes**:
- `HTMLPurifier_AttrDef_Switch`

**Functions/Methods**:
- `__construct($tag, $with_tag, $without_tag)`
- `validate($string, $config, $context)`

