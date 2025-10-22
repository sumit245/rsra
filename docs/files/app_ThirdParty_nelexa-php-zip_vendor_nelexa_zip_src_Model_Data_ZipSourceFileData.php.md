# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Data\ZipSourceFileData.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Data\ZipSourceFileData.php`
- Type: PHP
- Size: 3861 bytes

## Summary (from docblocks)

@var resource|null

@throws ZipException
@return resource returns stream data

@throws ZipException
@return string returns data as string

@param resource $outStream Output stream
@throws ZipException
@throws Crc32Exception

@param resource $outputStream Output stream

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Data\ZipSourceFileData.php`

**Classes**:
- `PhpZip\Model\Data\ZipSourceFileData implements ZipData`

**Functions/Methods**:
- `__construct(ZipReader $zipReader, ZipEntry $zipEntry, int $offsetData)`
- `hasRecompressData(ZipEntry $entry)`
- `getDataAsStream()`
- `getDataAsString()`
- `copyDataToStream($outStream)`
- `copyCompressedDataToStream($outputStream)`
- `getSourceEntry()`
- `getCompressedSize()`
- `getUncompressedSize()`
- `getOffset()`
- `__destruct()`

