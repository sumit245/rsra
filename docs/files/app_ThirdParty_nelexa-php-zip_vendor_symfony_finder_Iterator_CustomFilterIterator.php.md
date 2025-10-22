# app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\CustomFilterIterator.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\CustomFilterIterator.php`
- Type: PHP
- Size: 1571 bytes

## Summary (from docblocks)

CustomFilterIterator filters files by applying anonymous functions.
The anonymous function receives a \SplFileInfo and must return false
to remove files.
@author Fabien Potencier <fabien@symfony.com>
@extends \FilterIterator<string, \SplFileInfo>

@param \Iterator<string, \SplFileInfo> $iterator The Iterator to filter
@param callable[]                      $filters  An array of PHP callbacks
@throws \InvalidArgumentException

Filters the iterator values.
@return bool

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\CustomFilterIterator.php`

**Classes**:
- `Symfony\Component\Finder\Iterator\CustomFilterIterator extends \FilterIterator`

**Functions/Methods**:
- `__construct(\Iterator $iterator, array $filters)`
- `accept()`

