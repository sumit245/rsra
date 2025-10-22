# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\HTML\ID.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\HTML\ID.php`
- Type: PHP
- Size: 3204 bytes

## Summary (from docblocks)

Validates the HTML attribute ID.
@warning Even though this is the id processor, it
         will ignore the directive Attr:IDBlacklist, since it will only
         go according to the ID accumulator. Since the accumulator is
         automatically generated, it will have already absorbed the
         blacklist. If you're hacking around, make sure you use load()!

Determines whether or not we're validating an ID in a CSS
selector context.
@type bool

@param bool $selector

@param string $id
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\HTML\ID.php`

**Classes**:
- `HTMLPurifier_AttrDef_HTML_ID extends HTMLPurifier_AttrDef`

**Functions/Methods**:
- `__construct($selector = false)`
- `validate($id, $config, $context)`

