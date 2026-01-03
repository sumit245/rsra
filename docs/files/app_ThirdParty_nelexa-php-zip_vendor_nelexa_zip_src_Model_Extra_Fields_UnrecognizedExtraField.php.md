# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\UnrecognizedExtraField.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\UnrecognizedExtraField.php`
- Type: PHP
- Size: 2695 bytes

## Summary (from docblocks)

Simple placeholder for all those extra fields we don't want to deal with.

@var string extra field data without Header-ID or length specifier

Returns the Header ID (type) of this Extra Field.
The Header ID is an unsigned short integer (two bytes)
which must be constant during the life cycle of this object.

Populate data from this array as if it was in local file data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@return UnrecognizedExtraField

Populate data from this array as if it was in central directory data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@return UnrecognizedExtraField

{@inheritDoc}

{@inheritDoc}

## References

**Database Tables (inferred)**
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\UnrecognizedExtraField.php`

**Classes**:
- `PhpZip\Model\Extra\Fields\UnrecognizedExtraField implements ZipExtraField`

**Functions/Methods**:
- `__construct(int $headerId, string $data)`
- `setHeaderId(int $headerId)`
- `getHeaderId()`
- `unpackLocalFileData(string $buffer, ?ZipEntry $entry = null)`
- `unpackCentralDirData(string $buffer, ?ZipEntry $entry = null)`
- `packLocalFileData()`
- `packCentralDirData()`
- `getData()`
- `setData(string $data)`
- `__toString()`

