# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS\URI.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS\URI.php`
- Type: PHP
- Size: 2568 bytes

## Summary (from docblocks)

Validates a URI in CSS syntax, which uses url('http://example.com')
@note While theoretically speaking a URI in a CSS document could
      be non-embedded, as of CSS2 there is no such usage so we're
      generalizing it. This may need to be changed in the future.
@warning Since HTMLPurifier_AttrDef_CSS blindly uses semicolons as
         the separator, you cannot put a literal semicolon in
         in the URI. Try percent encoding it, in that case.

@param string $uri_string
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\CSS\URI.php`

**Classes**:
- `HTMLPurifier_AttrDef_CSS_URI extends HTMLPurifier_AttrDef_URI`

**Functions/Methods**:
- `__construct()`
- `validate($uri_string, $config, $context)`

