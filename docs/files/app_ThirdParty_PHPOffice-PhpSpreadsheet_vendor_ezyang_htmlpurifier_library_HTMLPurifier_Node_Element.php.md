# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Node\Element.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Node\Element.php`
- Type: PHP
- Size: 1725 bytes

## Summary (from docblocks)

Concrete element node class.

The lower-case name of the tag, like 'a', 'b' or 'blockquote'.
@note Strictly speaking, XML tags are case sensitive, so we shouldn't
be lower-casing them, but these tokens cater to HTML tags, which are
insensitive.
@type string

Associative array of the node's attributes.
@type array

List of child elements.
@type array

Does this use the <a></a> form or the </a> form, i.e.
is it a pair of start/end tokens or an empty token.
@bool

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Node\Element.php`

**Classes**:
- `HTMLPurifier_Node_Element extends HTMLPurifier_Node`

**Functions/Methods**:
- `__construct($name, $attr = array()`
- `toTokenPair()`

