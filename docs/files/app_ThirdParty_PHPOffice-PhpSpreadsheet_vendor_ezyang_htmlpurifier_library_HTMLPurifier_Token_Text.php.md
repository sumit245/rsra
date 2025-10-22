# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Token\Text.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Token\Text.php`
- Type: PHP
- Size: 1325 bytes

## Summary (from docblocks)

Concrete text token class.
Text tokens comprise of regular parsed character data (PCDATA) and raw
character data (from the CDATA sections). Internally, their
data is parsed with all entities expanded. Surprisingly, the text token
does have a "tag name" called #PCDATA, which is how the DTD represents it
in permissible child nodes.

@type string

< PCDATA tag name compatible with DTD.

@type string

< Parsed character data of text.

@type bool

< Bool indicating if node is whitespace.

Constructor, accepts data and determines if it is whitespace.
@param string $data String parsed character data.
@param int $line
@param int $col

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Token\Text.php`

**Classes**:
- `HTMLPurifier_Token_Text extends HTMLPurifier_Token`

**Functions/Methods**:
- `__construct($data, $line = null, $col = null)`
- `toNode()`

