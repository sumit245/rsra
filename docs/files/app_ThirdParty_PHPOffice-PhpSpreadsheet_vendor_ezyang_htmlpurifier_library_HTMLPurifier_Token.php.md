# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Token.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Token.php`
- Type: PHP
- Size: 2225 bytes

## Summary (from docblocks)

Abstract base token class that all others inherit from.

Line number node was on in source document. Null if unknown.
@type int

Column of line node was on in source document. Null if unknown.
@type int

Lookup array of processing that this token is exempt from.
Currently, valid values are "ValidateAttributes" and
"MakeWellFormed_TagClosedError"
@type array

Used during MakeWellFormed.  See Note [Injector skips]
@type

@type

@type

@param string $n
@return null|string

Sets the position of the token in the source document.
@param int $l
@param int $c

Convenience function for DirectLex settings line/col position.
@param int $l
@param int $c

Converts a token into its corresponding node.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Token.php`

**Classes**:
- `that`
- `HTMLPurifier_Token`

**Functions/Methods**:
- `__get($n)`
- `position($l = null, $c = null)`
- `rawPosition($l, $c)`
- `toNode()`

