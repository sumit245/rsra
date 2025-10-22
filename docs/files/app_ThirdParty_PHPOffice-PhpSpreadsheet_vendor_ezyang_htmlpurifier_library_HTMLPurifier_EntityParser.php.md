# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\EntityParser.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\EntityParser.php`
- Type: PHP
- Size: 9980 bytes

## Summary (from docblocks)

Handles referencing and derefencing character entities

Reference to entity lookup table.
@type HTMLPurifier_EntityLookup

Callback regex string for entities in text.
@type string

Callback regex string for entities in attributes.
@type string

Tests if the beginning of a string is a semi-optional regex

Substitute entities with the parsed equivalents.  Use this on
textual data in an HTML document (as opposed to attributes.)
@param string $string String to have entities parsed.
@return string Parsed string.

Substitute entities with the parsed equivalents.  Use this on
attribute contents in documents.
@param string $string String to have entities parsed.
@return string Parsed string.

Callback function for substituteNonSpecialEntities() that does the work.
@param array $matches  PCRE matches array, with 0 the entire match, and
                 either index 1, 2 or 3 set with a hex value, dec value,
                 or string (respectively).
@return string Replacement string.

Callback regex string for parsing entities.
@type string

Decimal to parsed string conversion table for special entities.
@type array

Stripped entity names to decimal conversion table for special entities.
@type array

Substitutes non-special entities with their parsed equivalents. Since
running this whenever you have parsed character is t3h 5uck, we run
it before everything else.
@param string $string String to have non-special entities parsed.
@return string Parsed string.

Callback function for substituteNonSpecialEntities() that does the work.
@param array $matches  PCRE matches array, with 0 the entire match, and
                 either index 1, 2 or 3 set with a hex value, dec value,
                 or string (respectively).
@return string Replacement string.

Substitutes only special entities with their parsed equivalents.
@notice We try to avoid calling this function because otherwise, it
would have to be called a lot (for every parsed section).
@param string $string String to have non-special entities parsed.
@return string Parsed string.

Callback function for substituteSpecialEntities() that does the work.
This callback has same syntax as nonSpecialEntityCallback().
@param array $matches  PCRE-style matches array, with 0 the entire match, and
                 either index 1, 2 or 3 set with a hex value, dec value,
                 or string (respectively).
@return string Replacement string.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\EntityParser.php`

**Classes**:
- `HTMLPurifier_EntityParser`

**Functions/Methods**:
- `__construct()`
- `substituteTextEntities($string)`
- `substituteAttrEntities($string)`
- `entityCallback($matches)`
- `substituteNonSpecialEntities($string)`
- `nonSpecialEntityCallback($matches)`
- `substituteSpecialEntities($string)`
- `specialEntityCallback($matches)`

