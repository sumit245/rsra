# app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\PathFilterIterator.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\PathFilterIterator.php`
- Type: PHP
- Size: 1452 bytes

## Summary (from docblocks)

PathFilterIterator filters files by path patterns (e.g. some/special/dir).
@author Fabien Potencier  <fabien@symfony.com>
@author Włodzimierz Gajda <gajdaw@gajdaw.pl>
@extends MultiplePcreFilterIterator<string, \SplFileInfo>

Filters the iterator values.
@return bool

Converts strings to regexp.
PCRE patterns are left unchanged.
Default conversion:
    'lorem/ipsum/dolor' ==>  'lorem\/ipsum\/dolor/'
Use only / as directory separator (on Windows also).
@param string $str Pattern: regexp or dirname
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\PathFilterIterator.php`

**Classes**:
- `Symfony\Component\Finder\Iterator\PathFilterIterator extends MultiplePcreFilterIterator`

**Functions/Methods**:
- `accept()`
- `toRegex(string $str)`

