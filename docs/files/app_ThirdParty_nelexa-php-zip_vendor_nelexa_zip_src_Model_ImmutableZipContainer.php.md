# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\ImmutableZipContainer.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\ImmutableZipContainer.php`
- Type: PHP
- Size: 1964 bytes

## Summary (from docblocks)

@var ZipEntry[]

@var string|null Archive comment

@param ZipEntry[] $entries
@param ?string    $archiveComment

@return ZipEntry[]

Count elements of an object.
@see https://php.net/manual/en/countable.count.php
@return int The custom count as an integer.
            The return value is cast to an integer.

When an object is cloned, PHP 5 will perform a shallow copy of all of the object's properties.
Any properties that are references to other variables, will remain references.
Once the cloning is complete, if a __clone() method is defined,
then the newly created object's __clone() method will be called, to allow any necessary properties that need to
be changed. NOT CALLABLE DIRECTLY.
@see https://php.net/manual/en/language.oop5.cloning.php

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\ImmutableZipContainer.php`

**Classes**:
- `PhpZip\Model\ImmutableZipContainer implements \Countable`

**Functions/Methods**:
- `__construct(array $entries, ?string $archiveComment = null)`
- `getArchiveComment()`
- `count()`
- `__clone()`

