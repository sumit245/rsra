# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Node.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Node.php`
- Type: PHP
- Size: 1280 bytes

## Summary (from docblocks)

Abstract base node class that all others inherit from.
Why do we not use the DOM extension?  (1) It is not always available,
(2) it has funny constraints on the data it can represent,
whereas we want a maximally flexible representation, and (3) its
interface is a bit cumbersome.

Line number of the start token in the source document
@type int

Column number of the start token in the source document. Null if unknown.
@type int

Lookup array of processing that this token is exempt from.
Currently, valid values are "ValidateAttributes".
@type array

When true, this node should be ignored as non-existent.
Who is responsible for ignoring dead nodes?  FixNesting is
responsible for removing them before passing on to child
validators.

Returns a pair of start and end tokens, where the end token
is null if it is not necessary. Does not include children.
@type array

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Node.php`

**Classes**:
- `that`
- `HTMLPurifier_Node`

**Functions/Methods**:
- `toTokenPair()`

