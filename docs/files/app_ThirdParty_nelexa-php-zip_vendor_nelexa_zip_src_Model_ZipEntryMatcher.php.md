# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\ZipEntryMatcher.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\ZipEntryMatcher.php`
- Type: PHP
- Size: 5019 bytes

## Summary (from docblocks)

@param string|ZipEntry|string[]|ZipEntry[] $entries
@return ZipEntryMatcher

@return ZipEntryMatcher
@noinspection PhpUnusedParameterInspection

@return ZipEntryMatcher

Callable function for all select entries.
Callable function signature:
function(string $entryName){}

@param string $entryName

@param string $entryName

@param ?string $password
@param ?int    $encryptionMethod
@throws ZipEntryNotFoundException

@param string $entryName

@throws ZipEntryNotFoundException

@param string $entryName

@throws ZipEntryNotFoundException

Count elements of an object.
@see http://php.net/manual/en/countable.count.php
@return int the custom count as an integer

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\ZipEntryMatcher.php`

**Classes**:
- `PhpZip\Model\ZipEntryMatcher implements \Countable`

**Functions/Methods**:
- `__construct(ZipContainer $zipContainer)`
- `add($entries)`
- `match(string $regexp)`
- `all()`
- `invoke(callable $callable)`
- `getMatches()`
- `delete()`
- `setPassword(?string $password, ?int $encryptionMethod = null)`
- `setEncryptionMethod(int $encryptionMethod)`
- `disableEncryption()`
- `count()`

