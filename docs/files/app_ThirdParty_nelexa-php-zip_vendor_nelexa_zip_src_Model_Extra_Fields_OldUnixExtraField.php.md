# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\OldUnixExtraField.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\OldUnixExtraField.php`
- Type: PHP
- Size: 8212 bytes

## Summary (from docblocks)

Info-ZIP Unix Extra Field (type 1):
==================================.
The following is the layout of the old Info-ZIP extra block for
Unix.  It has been replaced by the extended-timestamp extra block
(0x5455) and the Unix type 2 extra block (0x7855).
(Last Revision 19970118)
Local-header version:
Value         Size        Description
-----         ----        -----------
(Unix1) 0x5855        Short       tag for this extra block type ("UX")
TSize         Short       total data size for this block
AcTime        Long        time of last access (UTC/GMT)
ModTime       Long        time of last modification (UTC/GMT)
UID           Short       Unix user ID (optional)
GID           Short       Unix group ID (optional)
Central-header version:
Value         Size        Description
-----         ----        -----------
(Unix1) 0x5855        Short       tag for this extra block type ("UX")
TSize         Short       total data size for this block
AcTime        Long        time of last access (GMT/UTC)
ModTime       Long        time of last modification (GMT/UTC)
The file access and modification times are in standard Unix signed-
long format, indicating the number of seconds since 1 January 1970
00:00:00.  The times are relative to Coordinated Universal Time
(UTC), also sometimes referred to as Greenwich Mean Time (GMT).  To
convert to local time, the software must know the local timezone
offset from UTC/GMT.  The modification time may be used by non-Unix
systems to support inter-timezone freshening and updating of zip
archives.
The local-header extra block may optionally contain UID and GID
info for the file.  The local-header TSize value is the only
indication of this.  Note that Unix UIDs and GIDs are usually
specific to a particular machine, and they generally require root
access to restore.
This extra field type is obsolete, but it has been in use since
mid-1994. Therefore future archiving software should continue to
support it.

@var int Header id

@var int|null Access timestamp

@var int|null Modify timestamp

@var int|null User id

@var int|null Group id

Returns the Header ID (type) of this Extra Field.
The Header ID is an unsigned short integer (two bytes)
which must be constant during the life cycle of this object.

Populate data from this array as if it was in local file data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@return OldUnixExtraField

Populate data from this array as if it was in central directory data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@return OldUnixExtraField

The actual data to put into local file data - without Header-ID
or length specifier.
@return string the data

The actual data to put into central directory - without Header-ID or
length specifier.
@return string the data

## References

**Database Tables (inferred)**
- `UTC`
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\OldUnixExtraField.php`

**Classes**:
- `PhpZip\Model\Extra\Fields\OldUnixExtraField implements ZipExtraField`

**Functions/Methods**:
- `__construct(?int $accessTime, ?int $modifyTime, ?int $uid, ?int $gid)`
- `getHeaderId()`
- `unpackLocalFileData(string $buffer, ?ZipEntry $entry = null)`
- `unpackCentralDirData(string $buffer, ?ZipEntry $entry = null)`
- `packLocalFileData()`
- `packCentralDirData()`
- `getAccessTime()`
- `setAccessTime(?int $accessTime)`
- `getAccessDateTime()`
- `getModifyTime()`
- `setModifyTime(?int $modifyTime)`
- `getModifyDateTime()`
- `getUid()`
- `setUid(?int $uid)`
- `getGid()`
- `setGid(?int $gid)`
- `__toString()`

