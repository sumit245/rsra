# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\IO\ZipReader.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\IO\ZipReader.php`
- Type: PHP
- Size: 30218 bytes

## Summary (from docblocks)

Zip reader.

@var int file size

@var resource

@param resource $inStream

@noinspection AdditionOperationOnArraysInspection

@throws ZipException

Read End of central directory record.
end of central dir signature    4 bytes  (0x06054b50)
number of this disk             2 bytes
number of the disk with the
start of the central directory  2 bytes
total number of entries in the
central directory on this disk  2 bytes
total number of entries in
the central directory           2 bytes
size of the central directory   4 bytes
offset of start of central
directory with respect to
the starting disk number        4 bytes
.ZIP file comment length        2 bytes
.ZIP file comment       (variable size)
@throws ZipException

Read Zip64 end of central directory locator and returns
Zip64 end of central directory position.
number of the disk with the
start of the zip64 end of
central directory               4 bytes
relative offset of the zip64
end of central directory record 8 bytes
total number of disks           4 bytes
@throws ZipException
@return int Zip64 End Of Central Directory position

Read zip64 end of central directory locator and zip64 end
of central directory record.
zip64 end of central dir
signature                       4 bytes  (0x06064b50)
size of zip64 end of central
directory record                8 bytes
version made by                 2 bytes
version needed to extract       2 bytes
number of this disk             4 bytes
number of the disk with the
start of the central directory  4 bytes
total number of entries in the
central directory on this disk  8 bytes
total number of entries in the
central directory               8 bytes
size of the central directory   8 bytes
offset of start of central
directory with respect to
the starting disk number        8 bytes
zip64 extensible data sector    (variable size)
@throws ZipException

Reads the central directory from the given seekable byte channel
and populates the internal tables with ZipEntry instances.
The ZipEntry's will know all data that can be obtained from the
central directory alone, but not the data that requires the local
file header or additional data to be read.
@throws ZipException
@return ZipEntry[]

@var UnicodePathExtraField|null $unicodePathExtraField

Read central directory entry.
central file header signature   4 bytes  (0x02014b50)
version made by                 2 bytes
version needed to extract       2 bytes
general purpose bit flag        2 bytes
compression method              2 bytes
last mod file time              2 bytes
last mod file date              2 bytes
crc-32                          4 bytes
compressed size                 4 bytes
uncompressed size               4 bytes
file name length                2 bytes
extra field length              2 bytes
file comment length             2 bytes
disk number start               2 bytes
internal file attributes        2 bytes
external file attributes        4 bytes
relative offset of local header 4 bytes
file name (variable size)
extra field (variable size)
file comment (variable size)
@param resource $stream
@throws ZipException

@var Zip64ExtraField|null $extraZip64

@var string|ZipExtraField|null $className

Read Local File Header.
local file header signature     4 bytes  (0x04034b50)
version needed to extract       2 bytes
general purpose bit flag        2 bytes
compression method              2 bytes
last mod file time              2 bytes
last mod file date              2 bytes
crc-32                          4 bytes
compressed size                 4 bytes
uncompressed size               4 bytes
file name length                2 bytes
extra field length              2 bytes
file name (variable size)
extra field (variable size)
@throws ZipException

@throws ZipException

@var WinZipAesExtraField|null $extraField

Handle extra data in zip records.
This is a special method in which you can process ExtraField
and make changes to ZipEntry.

@throws ZipException
@throws Crc32Exception
@return resource

@param resource $outStream
@throws Crc32Exception
@throws ZipException

@var WinZipAesExtraField|null $winZipAesExtra

@param resource $outStream

@psalm-suppress InvalidPropertyAssignmentValue

## References

**Database Tables (inferred)**
- `the`
- `entry`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\IO\ZipReader.php`

**Classes**:
- `PhpZip\IO\ZipReader`

**Functions/Methods**:
- `__construct($inStream, array $options = [])`
- `getDefaultOptions()`
- `read()`
- `getStreamMetaData()`
- `readEndOfCentralDirectory()`
- `findEndOfCentralDirectory()`
- `findZip64ECDPosition()`
- `readZip64EndOfCentralDirectory(int $zip64ECDPosition)`
- `readCentralDirectory(EndOfCentralDirectory $endCD)`
- `readZipEntry($stream)`
- `parseExtraFields(string $buffer, ZipEntry $zipEntry, bool $local = false)`
- `handleZip64Extra(Zip64ExtraField $extraZip64, ZipEntry $zipEntry)`
- `loadLocalExtraFields(ZipEntry $entry)`
- `handleExtraEncryptionFields(ZipEntry $zipEntry)`
- `handleExtraFields(ZipEntry $zipEntry)`
- `getEntryStream(ZipSourceFileData $zipFileData)`
- `copyUncompressedDataToStream(ZipSourceFileData $zipFileData, $outStream)`
- `copyCompressedDataToStream(ZipSourceFileData $zipData, $outStream)`
- `isZip64Support()`
- `close()`
- `__destruct()`

