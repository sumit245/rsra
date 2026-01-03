# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\NtfsExtraField.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\NtfsExtraField.php`
- Type: PHP
- Size: 8160 bytes

## Summary (from docblocks)

NTFS Extra Field.
@see https://pkware.cachefly.net/webdocs/casestudies/APPNOTE.TXT .ZIP File Format Specification

@var int Header id

@var int Tag ID

@var int Attribute size

@var int A file time is a 64-bit value that represents the number of
         100-nanosecond intervals that have elapsed since 12:00
         A.M. January 1, 1601 Coordinated Universal Time (UTC).
         this is the offset of Windows time 0 to Unix epoch in 100-nanosecond intervals.

@var int Modify ntfs time

@var int Access ntfs time

@var int Create ntfs time

@return NtfsExtraField

Returns the Header ID (type) of this Extra Field.
The Header ID is an unsigned short integer (two bytes)
which must be constant during the life cycle of this object.

Populate data from this array as if it was in local file data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@throws ZipException
@return NtfsExtraField

Populate data from this array as if it was in central directory data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@throws ZipException
@return NtfsExtraField

The actual data to put into local file data - without Header-ID
or length specifier.
@return string the data

The actual data to put into central directory - without Header-ID or
length specifier.
@return string the data

@param float $timestamp Float timestamp

@return float Float unix timestamp

## References

**Database Tables (inferred)**
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\NtfsExtraField.php`

**Classes**:
- `PhpZip\Model\Extra\Fields\NtfsExtraField implements ZipExtraField`

**Functions/Methods**:
- `__construct(int $modifyNtfsTime, int $accessNtfsTime, int $createNtfsTime)`
- `create(\DateTimeInterface $modifyDateTime,
        \DateTimeInterface $accessDateTime,
        \DateTimeInterface $createNtfsTime)`
- `getHeaderId()`
- `unpackLocalFileData(string $buffer, ?ZipEntry $entry = null)`
- `unpackCentralDirData(string $buffer, ?ZipEntry $entry = null)`
- `packLocalFileData()`
- `getModifyNtfsTime()`
- `setModifyNtfsTime(int $modifyNtfsTime)`
- `getAccessNtfsTime()`
- `setAccessNtfsTime(int $accessNtfsTime)`
- `getCreateNtfsTime()`
- `setCreateNtfsTime(int $createNtfsTime)`
- `packCentralDirData()`
- `getModifyDateTime()`
- `setModifyDateTime(\DateTimeInterface $modifyTime)`
- `getAccessDateTime()`
- `setAccessDateTime(\DateTimeInterface $accessTime)`
- `getCreateDateTime()`
- `setCreateDateTime(\DateTimeInterface $createTime)`
- `timestampToNtfsTime(float $timestamp)`
- `dateTimeToNtfsTime(\DateTimeInterface $dateTime)`
- `ntfsTimeToTimestamp(int $ntfsTime)`
- `ntfsTimeToDateTime(int $ntfsTime)`
- `__toString()`

