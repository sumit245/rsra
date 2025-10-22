# app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\FilenameFilterIterator.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\FilenameFilterIterator.php`
- Type: PHP
- Size: 1176 bytes

## Summary (from docblocks)

FilenameFilterIterator filters files by patterns (a regexp, a glob, or a string).
@author Fabien Potencier <fabien@symfony.com>
@extends MultiplePcreFilterIterator<string, \SplFileInfo>

Filters the iterator values.
@return bool

Converts glob to regexp.
PCRE patterns are left unchanged.
Glob strings are transformed with Glob::toRegex().
@param string $str Pattern: glob or regexp
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\FilenameFilterIterator.php`

**Classes**:
- `Symfony\Component\Finder\Iterator\FilenameFilterIterator extends MultiplePcreFilterIterator`

**Functions/Methods**:
- `accept()`
- `toRegex(string $str)`

