# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\ApkAlignmentExtraField.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\ApkAlignmentExtraField.php`
- Type: PHP
- Size: 4268 bytes

## Summary (from docblocks)

Apk Alignment Extra Field.
@see https://android.googlesource.com/platform/tools/apksig/+/master/src/main/java/com/android/apksig/ApkSigner.java
@see https://developer.android.com/studio/command-line/zipalign

@var int Extensible data block/field header ID used for storing
         information about alignment of uncompressed entries as
         well as for aligning the entries's data. See ZIP
         appnote.txt section 4.5 Extensible data fields.

@var int

@var int

Returns the Header ID (type) of this Extra Field.
The Header ID is an unsigned short integer (two bytes)
which must be constant during the life cycle of this object.

Populate data from this array as if it was in local file data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@throws ZipException
@return ApkAlignmentExtraField

Populate data from this array as if it was in central directory data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@throws ZipException on error
@return ApkAlignmentExtraField

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

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\ApkAlignmentExtraField.php`

**Classes**:
- `PhpZip\Model\Extra\Fields\ApkAlignmentExtraField implements ZipExtraField`

**Functions/Methods**:
- `__construct(int $multiple, int $padding)`
- `getHeaderId()`
- `getMultiple()`
- `getPadding()`
- `setMultiple(int $multiple)`
- `setPadding(int $padding)`
- `unpackLocalFileData(string $buffer, ?ZipEntry $entry = null)`
- `unpackCentralDirData(string $buffer, ?ZipEntry $entry = null)`
- `packLocalFileData()`
- `packCentralDirData()`
- `__toString()`

