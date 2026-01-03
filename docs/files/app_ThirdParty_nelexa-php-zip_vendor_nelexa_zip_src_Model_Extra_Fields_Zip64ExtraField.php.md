# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\Zip64ExtraField.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\Zip64ExtraField.php`
- Type: PHP
- Size: 7854 bytes

## Summary (from docblocks)

ZIP64 Extra Field.
@see https://pkware.cachefly.net/webdocs/casestudies/APPNOTE.TXT .ZIP File Format Specification

@var int The Header ID for a ZIP64 Extended Information Extra Field.

Returns the Header ID (type) of this Extra Field.
The Header ID is an unsigned short integer (two bytes)
which must be constant during the life cycle of this object.

Populate data from this array as if it was in local file data.
@param string    $buffer the buffer to read data from
@param ?ZipEntry $entry
@throws ZipException on error
@return Zip64ExtraField

Populate data from this array as if it was in central directory data.
@param string    $buffer the buffer to read data from
@param ?ZipEntry $entry
@throws ZipException
@return Zip64ExtraField

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

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\Zip64ExtraField.php`

**Classes**:
- `PhpZip\Model\Extra\Fields\Zip64ExtraField implements ZipExtraField`

**Functions/Methods**:
- `__construct(?int $uncompressedSize = null,
        ?int $compressedSize = null,
        ?int $localHeaderOffset = null,
        ?int $diskStart = null)`
- `getHeaderId()`
- `unpackLocalFileData(string $buffer, ?ZipEntry $entry = null)`
- `unpackCentralDirData(string $buffer, ?ZipEntry $entry = null)`
- `packLocalFileData()`
- `packSizes()`
- `packCentralDirData()`
- `getUncompressedSize()`
- `setUncompressedSize(?int $uncompressedSize)`
- `getCompressedSize()`
- `setCompressedSize(?int $compressedSize)`
- `getLocalHeaderOffset()`
- `setLocalHeaderOffset(?int $localHeaderOffset)`
- `getDiskStart()`
- `setDiskStart(?int $diskStart)`
- `__toString()`

