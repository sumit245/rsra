# app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\DepthRangeFilterIterator.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\DepthRangeFilterIterator.php`
- Type: PHP
- Size: 1424 bytes

## Summary (from docblocks)

DepthRangeFilterIterator limits the directory depth.
@author Fabien Potencier <fabien@symfony.com>
@template-covariant TKey
@template-covariant TValue
@extends \FilterIterator<TKey, TValue>

@param \RecursiveIteratorIterator<\RecursiveIterator<TKey, TValue>> $iterator The Iterator to filter
@param int                                                          $minDepth The min depth
@param int                                                          $maxDepth The max depth

Filters the iterator values.
@return bool

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\DepthRangeFilterIterator.php`

**Classes**:
- `Symfony\Component\Finder\Iterator\DepthRangeFilterIterator extends \FilterIterator`

**Functions/Methods**:
- `__construct(\RecursiveIteratorIterator $iterator, int $minDepth = 0, int $maxDepth = \PHP_INT_MAX)`
- `accept()`

