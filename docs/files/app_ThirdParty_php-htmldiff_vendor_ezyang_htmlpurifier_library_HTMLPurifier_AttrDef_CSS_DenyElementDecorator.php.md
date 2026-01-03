# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS\DenyElementDecorator.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS\DenyElementDecorator.php`
- Type: PHP
- Size: 1075 bytes

## Summary (from docblocks)

Decorator which enables CSS properties to be disabled for specific elements.

@type HTMLPurifier_AttrDef

@type string

@param HTMLPurifier_AttrDef $def Definition to wrap
@param string $element Element to deny

Checks if CurrentToken is set and equal to $this->element
@param string $string
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS\DenyElementDecorator.php`

**Classes**:
- `HTMLPurifier_AttrDef_CSS_DenyElementDecorator extends HTMLPurifier_AttrDef`

**Functions/Methods**:
- `__construct($def, $element)`
- `validate($string, $config, $context)`

