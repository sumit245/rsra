# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\IO\ZipWriter.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\IO\ZipWriter.php`
- Type: PHP
- Size: 28323 bytes

## Summary (from docblocks)

@var int Chunk read size

@param resource $outStream
@throws ZipException

@param resource $outStream
@throws ZipException

@param resource $outStream
@throws ZipException

@var WinZipAesExtraField|null $winZipAesExtra

Merges the local file data fields of the given ZipExtraFields.
@throws ZipException

@param resource $outStream
@throws ZipException

@var Zip64ExtraField|null $zip64ExtraLocal

@var WinZipAesExtraField|null $winZipAesExtra

@param resource $inStream
@param resource $outStream

@param resource $outStream
@throws ZipUnsupportMethodException
@return resource|null

@param resource $outStream
@return resource|null

@param resource $outStream

@var WinZipAesExtraField|null $winZipAesExtra

@param resource $outStream
@throws ZipException

Writes a Central File Header record.
@param resource $outStream
@throws ZipException

@var WinZipAesExtraField|null $winZipAesExtra

@param resource $outStream

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\IO\ZipWriter.php`

**Classes**:
- `PhpZip\IO\ZipWriter`

**Functions/Methods**:
- `__construct(ZipContainer $container)`
- `write($outStream)`
- `beforeWrite()`
- `writeLocalBlock($outStream)`
- `writeLocalHeader($outStream, ZipEntry $entry)`
- `getExtraFieldsContents(ZipEntry $entry, bool $local)`
- `writeData($outStream, ZipEntry $entry)`
- `writeAndCountChecksum($inStream, $outStream, int $size)`
- `appendCompressionFilter($outStream, ZipEntry $entry)`
- `appendEncryptionFilter($outStream, ZipEntry $entry, int $size)`
- `writeDataDescriptor($outStream, ZipEntry $entry)`
- `writeCentralDirectoryBlock($outStream)`
- `writeCentralDirectoryHeader($outStream, ZipEntry $entry)`
- `writeEndOfCentralDirectoryBlock($outStream,
        int $centralDirectoryOffset,
        int $centralDirectorySize)`

