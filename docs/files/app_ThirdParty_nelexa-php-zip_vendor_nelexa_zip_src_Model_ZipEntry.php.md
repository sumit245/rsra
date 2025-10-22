# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\ZipEntry.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\ZipEntry.php`
- Type: PHP
- Size: 31667 bytes

## Summary (from docblocks)

ZIP file entry.
@see     https://pkware.cachefly.net/webdocs/casestudies/APPNOTE.TXT .ZIP File Format Specification

@var int the unknown value for numeric properties

@var string Entry name (filename in archive)

@var bool Is directory

@var ZipData|null Zip entry contents

@var int Made by platform

@var int Extracted by platform

@var int Software version

@var int Version needed to extract

@var int Compression method

@var int General purpose bit flags

@var int Dos time

@var int Crc32

@var int Compressed size

@var int Uncompressed size

@var int Internal attributes

@var int External attributes

@var int relative Offset Of Local File Header

Collections of Extra Fields in Central Directory.
Keys from Header ID [int] and value Extra Field [ExtraField].

Collections of Extra Fields int local header.
Keys from Header ID [int] and value Extra Field [ExtraField].

@var string|null comment field

@var string|null entry password for read or write encryption data

@var int encryption method

@var int compression level

@var string|null entry name charset

@param string      $name    Entry name
@param string|null $charset Entry name charset

This method only internal use.
@internal
@noinspection PhpTooManyParametersInspection
@param ?string $comment
@param ?string $charset
@return ZipEntry

Set entry name.
@param string      $name    New entry name
@param string|null $charset Entry name charset
@return ZipEntry

@see DosCodePage::getCodePages()
@param ?string $charset
@return ZipEntry

@param string $newName New entry name
@return ZipEntry new {@see ZipEntry} object with new name
@internal

Returns the ZIP entry name.

@return int platform

Set platform.
@return ZipEntry

Set extracted OS.
@return ZipEntry

@return ZipEntry

Version needed to extract.

Set version needed to extract.
@return ZipEntry

Returns the compressed size of this entry.

Sets the compressed size of this entry.
@param int $compressedSize the Compressed Size
@return ZipEntry
@internal

Returns the uncompressed size of this entry.

Sets the uncompressed size of this entry.
@param int $uncompressedSize the (Uncompressed) Size
@return ZipEntry
@internal

Return relative Offset Of Local File Header.

@return ZipEntry
@internal

Returns the General Purpose Bit Flags.

Sets the General Purpose Bit Flags.
@param int $gpbf general purpose bit flags
@return ZipEntry
@internal

@return ZipEntry

Enabling or disabling the use of the Data Descriptor block.

Returns true if and only if this ZIP entry is encrypted.

Sets the encryption property to false and removes any other
encryption artifacts.
@return ZipEntry

Sets the encryption flag for this ZIP entry.
@return ZipEntry

Returns the compression method for this entry.

Sets the compression method for this entry.
@throws ZipUnsupportMethodException
@return ZipEntry
@see ZipCompressionMethod::STORED
@see ZipCompressionMethod::DEFLATED
@see ZipCompressionMethod::BZIP2

Get Unix Timestamp.

Get Dos Time.

Set Dos Time.
@return ZipEntry

Set time from unix timestamp.
@return ZipEntry

Returns the external file attributes.
@return int the external file attributes

Sets the external file attributes.
@param int $externalAttributes the external file attributes
@return ZipEntry

Returns the internal file attributes.
@return int the internal file attributes

Sets the internal file attributes.
@param int $internalAttributes the internal file attributes
@return ZipEntry

Returns true if and only if this ZIP entry represents a directory entry
(i.e. end with '/').

@return ZipEntry

@return ZipEntry

Returns comment entry.

Set entry comment.
@param ?string $comment
@return ZipEntry

Return crc32 content or 0 for WinZip AES v2.

Set crc32 content.
@return ZipEntry
@internal

Set password and encryption method from entry.
@param ?string $password
@param ?int    $encryptionMethod
@return ZipEntry

Set encryption method.
@see ZipEncryptionMethod::NONE
@see ZipEncryptionMethod::PKWARE
@see ZipEncryptionMethod::WINZIP_AES_256
@see ZipEncryptionMethod::WINZIP_AES_192
@see ZipEncryptionMethod::WINZIP_AES_128
@param ?int $encryptionMethod
@return ZipEntry

@return ZipEntry

Update general purpose bit flogs.

Sets Unix permissions in a way that is understood by Info-Zip's
unzip command.
@param int $mode mode an int value
@return ZipEntry

Unix permission.
@return int the unix permissions

@var AsiExtraField $asiExtraField

Offset MUST be considered in decision about ZIP64 format - see
description of Data Descriptor in ZIP File Format Specification.

Returns true if this entry represents a unix symlink,
in which case the entry's content contains the target path
for the symlink.
@return bool true if the entry represents a unix symlink,
             false otherwise

@var NtfsExtraField|null $ntfsExtra

@var ExtendedTimestampExtraField|null $extendedExtra

@var OldUnixExtraField|null $oldUnixExtra

@var NtfsExtraField|null $ntfsExtra

@var ExtendedTimestampExtraField|null $extendedExtra

@var OldUnixExtraField|null $oldUnixExtra

@var NtfsExtraField|null $ntfsExtra

@var ExtendedTimestampExtraField|null $extendedExtra

## References

**Database Tables (inferred)**
- `Header`
- `unix`
- `entry`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\ZipEntry.php`

**Classes**:
- `PhpZip\Model\ZipEntry`

**Functions/Methods**:
- `__construct(string $name, ?string $charset = null)`
- `create(string $name,
        int $createdOS,
        int $extractedOS,
        int $softwareVersion,
        int $extractVersion,
        int $compressionMethod,
        int $gpbf,
        int $dosTime,
        int $crc,
        int $compressedSize,
        int $uncompressedSize,
        int $internalAttributes,
        int $externalAttributes,
        int $offsetLocalHeader,
        ?string $comment = null,
        ?string $charset = null)`
- `setName(string $name, ?string $charset = null)`
- `setCharset(?string $charset = null)`
- `getCharset()`
- `rename(string $newName)`
- `getName()`
- `getData()`
- `setData(?ZipData $data)`
- `getCreatedOS()`
- `setCreatedOS(int $platform)`
- `getExtractedOS()`
- `setExtractedOS(int $platform)`
- `getSoftwareVersion()`
- `setSoftwareVersion(int $softwareVersion)`
- `getExtractVersion()`
- `setExtractVersion(int $version)`
- `getCompressedSize()`
- `setCompressedSize(int $compressedSize)`
- `getUncompressedSize()`
- `setUncompressedSize(int $uncompressedSize)`
- `getLocalHeaderOffset()`
- `setLocalHeaderOffset(int $localHeaderOffset)`
- `getGeneralPurposeBitFlags()`
- `setGeneralPurposeBitFlags(int $gpbf)`
- `updateCompressionLevel()`
- `setGeneralBitFlag(int $mask, bool $enable)`
- `isSetGeneralBitFlag(int $mask)`
- `isDataDescriptorEnabled()`
- `enableDataDescriptor(bool $enabled = true)`
- `enableUtf8Name(bool $enabled)`
- `isUtf8Flag()`
- `isEncrypted()`
- `isStrongEncryption()`
- `disableEncryption()`
- `setEncrypted(bool $encrypted)`
- `getCompressionMethod()`
- `setCompressionMethod(int $compressionMethod)`
- `getTime()`
- `getDosTime()`
- `setDosTime(int $dosTime)`
- `setTime(int $unixTimestamp)`
- `getExternalAttributes()`
- `setExternalAttributes(int $externalAttributes)`
- `getInternalAttributes()`
- `setInternalAttributes(int $internalAttributes)`
- `isDirectory()`
- `getCdExtraFields()`
- `getCdExtraField(int $headerId)`
- `setCdExtraFields(ExtraFieldsCollection $cdExtraFields)`
- `getLocalExtraFields()`
- `getLocalExtraField(int $headerId)`
- `setLocalExtraFields(ExtraFieldsCollection $localExtraFields)`
- `getExtraField(int $headerId)`
- `hasExtraField(int $headerId)`
- `removeExtraField(int $headerId)`
- `addExtraField(ZipExtraField $zipExtraField)`
- `addLocalExtraField(ZipExtraField $zipExtraField)`
- `addCdExtraField(ZipExtraField $zipExtraField)`
- `getComment()`
- `setComment(?string $comment)`
- `isDataDescriptorRequired()`
- `getCrc()`
- `setCrc(int $crc)`
- `getPassword()`
- `setPassword(?string $password, ?int $encryptionMethod = null)`
- `getEncryptionMethod()`
- `setEncryptionMethod(?int $encryptionMethod)`
- `getCompressionLevel()`
- `setCompressionLevel(int $compressionLevel)`
- `updateGbpfCompLevel()`
- `setUnixMode(int $mode)`
- `getUnixMode()`
- `isZip64ExtensionsRequired()`
- `isUnixSymlink()`
- `getMTime()`
- `getATime()`
- `getCTime()`
- `__clone()`

