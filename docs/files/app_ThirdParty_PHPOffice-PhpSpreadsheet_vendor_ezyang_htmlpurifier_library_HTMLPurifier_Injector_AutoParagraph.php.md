# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Injector\AutoParagraph.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Injector\AutoParagraph.php`
- Type: PHP
- Size: 13796 bytes

## Summary (from docblocks)

Injector that auto paragraphs text in the root node based on
double-spacing.
@todo Ensure all states are unit tested, including variations as well.
@todo Make a graph of the flow control for this Injector.

@type string

@type array

@return HTMLPurifier_Token_Start

@param HTMLPurifier_Token_Text $token

@param HTMLPurifier_Token $token

Splits up a text in paragraph tokens and appends them
to the result stream that will replace the original
@param string $data String text data that will be processed
   into paragraphs
@param HTMLPurifier_Token[] $result Reference to array of tokens that the
   tags will be appended onto

Returns true if passed token is inline (and, ergo, allowed in
paragraph tags)
@param HTMLPurifier_Token $token
@return bool

Looks ahead in the token list and determines whether or not we need
to insert a <p> tag.
@return bool

Determines if a particular token requires an earlier inline token
to get a paragraph. This should be used with _forwardUntilEndToken
@param HTMLPurifier_Token $current
@return bool

## References

**Database Tables (inferred)**
- `needing`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Injector\AutoParagraph.php`

**Classes**:
- `HTMLPurifier_Injector_AutoParagraph extends HTMLPurifier_Injector`

**Functions/Methods**:
- `_pStart()`
- `handleText(&$token)`
- `handleElement(&$token)`
- `_splitText($data, &$result)`
- `_isInline($token)`
- `_pLookAhead()`
- `_checkNeedsP($current)`

