# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\ExtendedTimestampExtraField.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\ExtendedTimestampExtraField.php`
- Type: PHP
- Size: 14083 bytes

## Summary (from docblocks)

Extended Timestamp Extra Field:
==============================.
The following is the layout of the extended-timestamp extra block.
(Last Revision 19970118)
Local-header version:
Value         Size        Description
-----         ----        -----------
(time) 0x5455 Short       tag for this extra block type ("UT")
TSize         Short       total data size for this block
Flags         Byte        info bits
(ModTime)     Long        time of last modification (UTC/GMT)
(AcTime)      Long        time of last access (UTC/GMT)
(CrTime)      Long        time of original creation (UTC/GMT)
Central-header version:
Value         Size        Description
-----         ----        -----------
(time) 0x5455 Short       tag for this extra block type ("UT")
TSize         Short       total data size for this block
Flags         Byte        info bits (refers to local header!)
(ModTime)     Long        time of last modification (UTC/GMT)
The central-header extra field contains the modification time only,
or no timestamp at all.  TSize is used to flag its presence or
absence.  But note:
If "Flags" indicates that Modtime is present in the local header
field, it MUST be present in the central header field, too!
This correspondence is required because the modification time
value may be used to support trans-timezone freshening and
updating operations with zip archives.
The time values are in standard Unix signed-long format, indicating
the number of seconds since 1 January 1970 00:00:00.  The times
are relative to Coordinated Universal Time (UTC), also sometimes
referred to as Greenwich Mean Time (GMT).  To convert to local time,
the software must know the local timezone offset from UTC/GMT.
The lower three bits of Flags in both headers indicate which time-
stamps are present in the LOCAL extra field:
bit 0           if set, modification time is present
bit 1           if set, access time is present
bit 2           if set, creation time is present
bits 3-7        reserved for additional timestamps; not set
Those times that are present will appear in the order indicated, but
any combination of times may be omitted.  (Creation time may be
present without access time, for example.)  TSize should equal
(1 + 4*(number of set bits in Flags)), as the block is currently
defined.  Other timestamps may be added in the future.
@see ftp://ftp.info-zip.org/pub/infozip/doc/appnote-iz-latest.zip Info-ZIP version Specification

@var int Header id

@var int the bit set inside the flags by when the last modification time
         is present in this extra field

@var int the bit set inside the flags by when the last access time is
         present in this extra field

@var int the bit set inside the flags by when the original creation time
         is present in this extra field

@var int The 3 boolean fields (below) come from this flags byte.  The remaining 5 bits
         are ignored according to the current version of the spec (December 2012).

@var int|null Modify time

@var int|null Access time

@var int|null Create time

@param ?int $modifyTime
@param ?int $accessTime
@param ?int $createTime
@return ExtendedTimestampExtraField

Returns the Header ID (type) of this Extra Field.
The Header ID is an unsigned short integer (two bytes)
which must be constant during the life cycle of this object.

Populate data from this array as if it was in local file data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@return ExtendedTimestampExtraField

Populate data from this array as if it was in central directory data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@return ExtendedTimestampExtraField

The actual data to put into local file data - without Header-ID
or length specifier.
@return string the data

The actual data to put into central directory - without Header-ID or
length specifier.
Note: even if bit1 and bit2 are set, the Central data will still
not contain access/create fields: only local data ever holds those!
@return string the data

Gets flags byte.
The flags byte tells us which of the three datestamp fields are
present in the data:
bit0 - modify time
bit1 - access time
bit2 - create time
Only first 3 bits of flags are used according to the
latest version of the spec (December 2012).
@return int flags byte indicating which of the
            three datestamp fields are present

Returns the modify time (seconds since epoch) of this zip entry,
or null if no such timestamp exists in the zip entry.
@return int|null modify time (seconds since epoch) or null

Returns the access time (seconds since epoch) of this zip entry,
or null if no such timestamp exists in the zip entry.
@return int|null access time (seconds since epoch) or null

Returns the create time (seconds since epoch) of this zip entry,
or null if no such timestamp exists in the zip entry.
Note: modern linux file systems (e.g., ext2)
do not appear to store a "create time" value, and so
it's usually omitted altogether in the zip extra
field. Perhaps other unix systems track this.
@return int|null create time (seconds since epoch) or null

Returns the modify time as a \DateTimeInterface
of this zip entry, or null if no such timestamp exists in the zip entry.
The milliseconds are always zeroed out, since the underlying data
offers only per-second precision.
@return \DateTimeInterface|null modify time as \DateTimeInterface or null

Returns the access time as a \DateTimeInterface
of this zip entry, or null if no such timestamp exists in the zip entry.
The milliseconds are always zeroed out, since the underlying data
offers only per-second precision.
@return \DateTimeInterface|null access time as \DateTimeInterface or null

Returns the create time as a a \DateTimeInterface
of this zip entry, or null if no such timestamp exists in the zip entry.
The milliseconds are always zeroed out, since the underlying data
offers only per-second precision.
Note: modern linux file systems (e.g., ext2)
do not appear to store a "create time" value, and so
it's usually omitted altogether in the zip extra
field.  Perhaps other unix systems track $this->.
@return \DateTimeInterface|null create time as \DateTimeInterface or null

Sets the modify time (seconds since epoch) of this zip entry
using a integer.
@param int|null $unixTime unix time of the modify time (seconds per epoch) or null

Sets the access time (seconds since epoch) of this zip entry
using a integer.
@param int|null $unixTime Unix time of the access time (seconds per epoch) or null

Sets the create time (seconds since epoch) of this zip entry
using a integer.
@param int|null $unixTime Unix time of the create time (seconds per epoch) or null

## References

**Database Tables (inferred)**
- `UTC`
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\ExtendedTimestampExtraField.php`

**Classes**:
- `PhpZip\Model\Extra\Fields\ExtendedTimestampExtraField implements ZipExtraField`

**Functions/Methods**:
- `__construct(int $flags, ?int $modifyTime, ?int $accessTime, ?int $createTime)`
- `create(?int $modifyTime, ?int $accessTime, ?int $createTime)`
- `getHeaderId()`
- `unpackLocalFileData(string $buffer, ?ZipEntry $entry = null)`
- `unpackCentralDirData(string $buffer, ?ZipEntry $entry = null)`
- `packLocalFileData()`
- `packCentralDirData()`
- `getFlags()`
- `getModifyTime()`
- `getAccessTime()`
- `getCreateTime()`
- `getModifyDateTime()`
- `getAccessDateTime()`
- `getCreateDateTime()`
- `setModifyTime(?int $unixTime)`
- `updateFlags()`
- `setAccessTime(?int $unixTime)`
- `setCreateTime(?int $unixTime)`
- `timestampToDateTime(?int $timestamp)`
- `__toString()`

