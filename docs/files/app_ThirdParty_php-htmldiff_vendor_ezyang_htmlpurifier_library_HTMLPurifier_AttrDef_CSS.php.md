# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS.php`
- Type: PHP
- Size: 4339 bytes

## Summary (from docblocks)

Validates the HTML attribute style, otherwise known as CSS.
@note We don't implement the whole CSS specification, so it might be
      difficult to reuse this component in the context of validating
      actual stylesheet declarations.
@note If we were really serious about validating the CSS, we would
      tokenize the styles and then parse the tokens. Obviously, we
      are not doing that. Doing that could seriously harm performance,
      but would make these components a lot more viable for a CSS
      filtering solution.

@param string $css
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool|string

Name of the current CSS property being validated.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS.php`

**Classes**:
- `HTMLPurifier_AttrDef_CSS extends HTMLPurifier_AttrDef`

**Functions/Methods**:
- `validate($css, $config, $context)`

