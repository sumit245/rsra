# app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\ExcludeDirectoryFilterIterator.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\ExcludeDirectoryFilterIterator.php`
- Type: PHP
- Size: 2669 bytes

## Summary (from docblocks)

ExcludeDirectoryFilterIterator filters out directories.
@author Fabien Potencier <fabien@symfony.com>
@extends \FilterIterator<string, \SplFileInfo>
@implements \RecursiveIterator<string, \SplFileInfo>

@param \Iterator $iterator    The Iterator to filter
@param string[]  $directories An array of directories to exclude

Filters the iterator values.
@return bool

@return bool

@return self

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\ExcludeDirectoryFilterIterator.php`

**Classes**:
- `Symfony\Component\Finder\Iterator\ExcludeDirectoryFilterIterator extends \FilterIterator implements \RecursiveIterator`

**Functions/Methods**:
- `__construct(\Iterator $iterator, array $directories)`
- `accept()`
- `hasChildren()`
- `getChildren()`

