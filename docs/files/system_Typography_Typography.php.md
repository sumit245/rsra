# system\Typography\Typography.php

- Path: `system\Typography\Typography.php`
- Type: PHP
- Size: 13345 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Typography Class

Block level elements that should not be wrapped inside <p> tags
@var string

Elements that should not have <p> and <br /> tags within them.
@var string

Tags we want the parser to completely ignore when splitting the string.
@var string

array of block level elements that require inner content to be within another block level element
@var array

the last block element parsed
@var string

whether or not to protect quotes within { curly braces }
@var bool

Auto Typography
This function converts text, making it typographically correct:
    - Converts double spaces into paragraphs.
    - Converts single line breaks into <br /> tags
    - Converts single and double quotes into correctly facing curly quote entities.
    - Converts three dots into ellipsis.
    - Converts double dashes into em-dashes.
 - Converts two spaces into entities
@param bool $reduceLinebreaks whether to reduce more then two consecutive newlines to two

Format Characters
This function mainly converts double and single quotes
to curly entities, but it also converts em-dashes,
double spaces, and ampersands

Format Newlines
Converts newline characters into either <p> tags or <br />

Protect Characters
Protects special characters from being formatted later
We don't want quotes converted within tags so we'll temporarily convert them to {@DQ} and {@SQ}
and we don't want double dashes converted to emdash entities, so they are marked with {@DD}
likewise double spaces are converted to {@NBS} to prevent entity conversion

Convert newlines to HTML line breaks except within PRE tags

## References

**Database Tables (inferred)**
- `being`

## Symbols

# Symbols

**Files documented**: 1

## `system\Typography\Typography.php`

**Classes**:
- `CodeIgniter\Typography\Typography`

**Functions/Methods**:
- `autoTypography(string $str, bool $reduceLinebreaks = false)`
- `formatCharacters(string $str)`
- `formatNewLines(string $str)`
- `protectCharacters(array $match)`
- `nl2brExceptPre(string $str)`

