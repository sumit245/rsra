# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\AbstractUnicodeExtraField.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\AbstractUnicodeExtraField.php`
- Type: PHP
- Size: 3429 bytes

## Summary (from docblocks)

A common base class for Unicode extra information extra fields.

@return int the CRC32 checksum of the filename or comment as
            encoded in the central directory of the zip file

@param string $unicodeValue the UTF-8 encoded name to set

Populate data from this array as if it was in local file data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@throws ZipException on error
@return static

Populate data from this array as if it was in central directory data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@throws ZipException on error
@return static

The actual data to put into local file data - without Header-ID
or length specifier.
@return string the data

The actual data to put into central directory - without Header-ID or
length specifier.
@return string the data

## References

**Database Tables (inferred)**
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\AbstractUnicodeExtraField.php`

**Classes**:
- `PhpZip\Model\Extra\Fields\for`
- `PhpZip\Model\Extra\Fields\AbstractUnicodeExtraField implements ZipExtraField`

**Functions/Methods**:
- `__construct(int $crc32, string $unicodeValue)`
- `getCrc32()`
- `setCrc32(int $crc32)`
- `getUnicodeValue()`
- `setUnicodeValue(string $unicodeValue)`
- `unpackLocalFileData(string $buffer, ?ZipEntry $entry = null)`
- `unpackCentralDirData(string $buffer, ?ZipEntry $entry = null)`
- `packLocalFileData()`
- `packCentralDirData()`

