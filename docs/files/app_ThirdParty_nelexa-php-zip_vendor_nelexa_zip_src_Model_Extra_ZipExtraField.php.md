# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\ZipExtraField.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\ZipExtraField.php`
- Type: PHP
- Size: 1922 bytes

## Summary (from docblocks)

Extra Field in a Local or Central Header of a ZIP archive.
It defines the common properties of all Extra Fields and how to
serialize/unserialize them to/from byte arrays.

Returns the Header ID (type) of this Extra Field.
The Header ID is an unsigned short integer (two bytes)
which must be constant during the life cycle of this object.

Populate data from this array as if it was in local file data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@return static

Populate data from this array as if it was in central directory data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@return static

The actual data to put into local file data - without Header-ID
or length specifier.
@return string the data

The actual data to put into central directory - without Header-ID or
length specifier.
@return string the data

## References

**Database Tables (inferred)**
- `byte`
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\ZipExtraField.php`

**Functions/Methods**:
- `getHeaderId()`
- `unpackLocalFileData(string $buffer, ?ZipEntry $entry = null)`
- `unpackCentralDirData(string $buffer, ?ZipEntry $entry = null)`
- `packLocalFileData()`
- `packCentralDirData()`
- `__toString()`

