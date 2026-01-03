# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Node\Text.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Node\Text.php`
- Type: PHP
- Size: 1380 bytes

## Summary (from docblocks)

Concrete text token class.
Text tokens comprise of regular parsed character data (PCDATA) and raw
character data (from the CDATA sections). Internally, their
data is parsed with all entities expanded. Surprisingly, the text token
does have a "tag name" called #PCDATA, which is how the DTD represents it
in permissible child nodes.

PCDATA tag name compatible with DTD, see
HTMLPurifier_ChildDef_Custom for details.
@type string

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

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Node\Text.php`

**Classes**:
- `HTMLPurifier_Node_Text extends HTMLPurifier_Node`

**Functions/Methods**:
- `__construct($data, $is_whitespace, $line = null, $col = null)`
- `toTokenPair()`

