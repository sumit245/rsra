# app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\RecursiveDirectoryIterator.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\RecursiveDirectoryIterator.php`
- Type: PHP
- Size: 4548 bytes

## Summary (from docblocks)

Extends the \RecursiveDirectoryIterator to support relative paths.
@author Victor Berchet <victor@suumit.com>

@var bool

@var bool

@throws \RuntimeException

Return an instance of SplFileInfo with support for relative paths.
@return SplFileInfo

@param bool $allowLinks
@return bool

@return \RecursiveDirectoryIterator
@throws AccessDeniedException

Do nothing for non rewindable stream.
@return void

Checks if the stream is rewindable.
@return bool

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\RecursiveDirectoryIterator.php`

**Classes**:
- `Symfony\Component\Finder\Iterator\RecursiveDirectoryIterator extends \RecursiveDirectoryIterator`

**Functions/Methods**:
- `__construct(string $path, int $flags, bool $ignoreUnreadableDirs = false)`
- `current()`
- `hasChildren($allowLinks = false)`
- `getChildren()`
- `rewind()`
- `isRewindable()`

