# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Token\Tag.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Token\Tag.php`
- Type: PHP
- Size: 2016 bytes

## Summary (from docblocks)

Abstract class of a tag token (start, end or empty), and its behavior.

Static bool marker that indicates the class is a tag.
This allows us to check objects with <tt>!empty($obj->is_tag)</tt>
without having to use a function call <tt>is_a()</tt>.
@type bool

The lower-case name of the tag, like 'a', 'b' or 'blockquote'.
@note Strictly speaking, XML tags are case sensitive, so we shouldn't
be lower-casing them, but these tokens cater to HTML tags, which are
insensitive.
@type string

Associative array of the tag's attributes.
@type array

Non-overloaded constructor, which lower-cases passed tag name.
@param string $name String name.
@param array $attr Associative array of attributes.
@param int $line
@param int $col
@param array $armor

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Token\Tag.php`

**Classes**:
- `of`
- `HTMLPurifier_Token_Tag extends HTMLPurifier_Token`
- `is`

**Functions/Methods**:
- `__construct($name, $attr = array()`
- `toNode()`

