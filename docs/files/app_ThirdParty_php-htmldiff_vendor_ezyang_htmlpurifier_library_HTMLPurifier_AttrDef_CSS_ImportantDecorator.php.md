# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS\ImportantDecorator.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS\ImportantDecorator.php`
- Type: PHP
- Size: 1597 bytes

## Summary (from docblocks)

Decorator which enables !important to be used in CSS values.

@type HTMLPurifier_AttrDef

@type bool

@param HTMLPurifier_AttrDef $def Definition to wrap
@param bool $allow Whether or not to allow !important

Intercepts and removes !important if necessary
@param string $string
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS\ImportantDecorator.php`

**Classes**:
- `HTMLPurifier_AttrDef_CSS_ImportantDecorator extends HTMLPurifier_AttrDef`

**Functions/Methods**:
- `__construct($def, $allow = false)`
- `validate($string, $config, $context)`

