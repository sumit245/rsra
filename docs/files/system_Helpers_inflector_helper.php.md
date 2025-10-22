# system\Helpers\inflector_helper.php

- Path: `system\Helpers\inflector_helper.php`
- Type: PHP
- Size: 10367 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Singular
Takes a plural word and makes it singular
@param string $string Input string

Plural
Takes a singular word and makes it plural
@param string $string Input string

Counted
Takes a number and a word to return the plural or not
E.g. 0 cats, 1 cat, 2 cats, ...
@param int    $count  Number of items
@param string $string Input string

Camelize
Takes multiple words separated by spaces or
underscores and converts them to camel case.
@param string $string Input string

Pascalize
Takes multiple words separated by spaces or
underscores and converts them to Pascal case,
which is camel case with an uppercase first letter.
@param string $string Input string

Underscore
Takes multiple words separated by spaces and underscores them
@param string $string Input string

Humanize
Takes multiple words separated by the separator,
camelizes and changes them to spaces
@param string $string    Input string
@param string $separator Input separator

Checks if the given word has a plural version.
@param string $word Word to check

Replaces underscores with dashes in the string.
@param string $string Input string

Returns the suffix that should be added to a
number to denote the position in an ordered
sequence such as 1st, 2nd, 3rd, 4th.
@param int $integer The integer to determine the suffix

Turns a number into an ordinal string used
to denote the position in an ordered sequence
such as 1st, 2nd, 3rd, 4th.
@param int $integer The integer to ordinalize

## Symbols

# Symbols

**Files documented**: 1

## `system\Helpers\inflector_helper.php`

**Functions/Methods**:
- `singular(string $string)`
- `plural(string $string)`
- `counted(int $count, string $string)`
- `camelize(string $string)`
- `pascalize(string $string)`
- `underscore(string $string)`
- `humanize(string $string, string $separator = '_')`
- `is_pluralizable(string $word)`
- `dasherize(string $string)`
- `ordinal(int $integer)`
- `ordinalize(int $integer)`

