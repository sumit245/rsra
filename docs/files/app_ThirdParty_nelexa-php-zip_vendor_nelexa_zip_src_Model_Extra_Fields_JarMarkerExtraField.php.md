# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\JarMarkerExtraField.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\JarMarkerExtraField.php`
- Type: PHP
- Size: 3371 bytes

## Summary (from docblocks)

Jar Marker Extra Field.
An executable Java program can be packaged in a JAR file with all the libraries it uses.
Executable JAR files can easily be distinguished from the files packed in the JAR file
by the extra field in the first file, which is hexadecimal in the 0xCAFE bytes series.
If this extra field is added as the very first extra field of
the archive, Solaris will consider it an executable jar file.

@var int Header id.

Returns the Header ID (type) of this Extra Field.
The Header ID is an unsigned short integer (two bytes)
which must be constant during the life cycle of this object.

The actual data to put into local file data - without Header-ID
or length specifier.
@return string the data

The actual data to put into central directory - without Header-ID or
length specifier.
@return string the data

Populate data from this array as if it was in local file data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@throws ZipException on error
@return JarMarkerExtraField

Populate data from this array as if it was in central directory data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@throws ZipException on error
@return JarMarkerExtraField

## References

**Database Tables (inferred)**
- `the`
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\JarMarkerExtraField.php`

**Classes**:
- `PhpZip\Model\Extra\Fields\JarMarkerExtraField implements ZipExtraField`

**Functions/Methods**:
- `setJarMarker(ZipContainer $container)`
- `getHeaderId()`
- `packLocalFileData()`
- `packCentralDirData()`
- `unpackLocalFileData(string $buffer, ?ZipEntry $entry = null)`
- `unpackCentralDirData(string $buffer, ?ZipEntry $entry = null)`
- `__toString()`

