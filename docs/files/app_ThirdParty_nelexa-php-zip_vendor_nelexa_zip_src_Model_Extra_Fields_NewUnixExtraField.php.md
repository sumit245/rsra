# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\NewUnixExtraField.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\NewUnixExtraField.php`
- Type: PHP
- Size: 6075 bytes

## Summary (from docblocks)

Info-ZIP New Unix Extra Field:
====================================.
Currently stores Unix UIDs/GIDs up to 32 bits.
(Last Revision 20080509)
Value         Size        Description
-----         ----        -----------
(UnixN) 0x7875        Short       tag for this extra block type ("ux")
TSize         Short       total data size for this block
Version       1 byte      version of this extra field, currently 1
UIDSize       1 byte      Size of UID field
UID           Variable    UID for this entry
GIDSize       1 byte      Size of GID field
GID           Variable    GID for this entry
Currently Version is set to the number 1.  If there is a need
to change this field, the version will be incremented.  Changes
may not be backward compatible so this extra field should not be
used if the version is not recognized.
UIDSize is the size of the UID field in bytes.  This size should
match the size of the UID field on the target OS.
UID is the UID for this entry in standard little endian format.
GIDSize is the size of the GID field in bytes.  This size should
match the size of the GID field on the target OS.
GID is the GID for this entry in standard little endian format.
If both the old 16-bit Unix extra field (tag 0x7855, Info-ZIP Unix)
and this extra field are present, the values in this extra field
supercede the values in that extra field.

@var int header id

ID of the first non-root user created on a unix system.

@var int version of this extra field, currently 1

@var int User id

@var int Group id

Returns the Header ID (type) of this Extra Field.
The Header ID is an unsigned short integer (two bytes)
which must be constant during the life cycle of this object.

Populate data from this array as if it was in local file data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@throws ZipException
@return NewUnixExtraField

Populate data from this array as if it was in central directory data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@throws ZipException
@return NewUnixExtraField

The actual data to put into local file data - without Header-ID
or length specifier.
@return string the data

The actual data to put into central directory - without Header-ID or
length specifier.
@return string the data

@throws ZipException

## References

**Database Tables (inferred)**
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\NewUnixExtraField.php`

**Classes**:
- `PhpZip\Model\Extra\Fields\NewUnixExtraField implements ZipExtraField`

**Functions/Methods**:
- `__construct(int $version = 1, int $uid = self::USER_GID_PID, int $gid = self::USER_GID_PID)`
- `getHeaderId()`
- `unpackLocalFileData(string $buffer, ?ZipEntry $entry = null)`
- `unpackCentralDirData(string $buffer, ?ZipEntry $entry = null)`
- `packLocalFileData()`
- `packCentralDirData()`
- `readSizeIntegerLE(string $data, int $size)`
- `getUid()`
- `setUid(int $uid)`
- `getGid()`
- `setGid(int $gid)`
- `getVersion()`
- `__toString()`

