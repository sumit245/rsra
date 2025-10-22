# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Util\Iterator\IgnoreFilesRecursiveFilterIterator.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Util\Iterator\IgnoreFilesRecursiveFilterIterator.php`
- Type: PHP
- Size: 2025 bytes

## Summary (from docblocks)

Recursive iterator for ignore files.

Ignore list files.

Check whether the current element of the iterator is acceptable.
@see http://php.net/manual/en/filteriterator.accept.php
@return bool true if the current element is acceptable, otherwise false

@var \SplFileInfo $fileInfo

@return IgnoreFilesRecursiveFilterIterator
@psalm-suppress UndefinedInterfaceMethod
@noinspection PhpPossiblePolymorphicInvocationInspection

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Util\Iterator\IgnoreFilesRecursiveFilterIterator.php`

**Classes**:
- `PhpZip\Util\Iterator\IgnoreFilesRecursiveFilterIterator extends \RecursiveFilterIterator`

**Functions/Methods**:
- `__construct(\RecursiveIterator $iterator, array $ignoreFiles)`
- `accept()`
- `getChildren()`

