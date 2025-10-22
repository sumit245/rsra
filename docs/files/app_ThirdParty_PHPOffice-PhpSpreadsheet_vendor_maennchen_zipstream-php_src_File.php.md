# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\maennchen\zipstream-php\src\File.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\maennchen\zipstream-php\src\File.php`
- Type: PHP
- Size: 14460 bytes

## Summary (from docblocks)

@var string

@var FileOptions

@var Bigint

@var Bigint

@var  int

@var Bigint

@var Bigint

@var int

@var Version

@var ZipStream

@var resource

@var resource

@var Method

@var Bigint

Create and send zip header for this file.
@return void
@throws \ZipStream\Exception\EncodingException

Strip characters that are not legal in Windows filenames
to prevent compatibility issues
@param string $filename Unprocessed filename
@return string

Convert a UNIX timestamp to a DOS timestamp.
@param int $when
@return int DOS Timestamp

Create and send data descriptor footer for this file.
@return void

Send CDR record for specified file.
@return string

@return Bigint

## References

**Database Tables (inferred)**
- `file`
- `1980`
- `PHP`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\maennchen\zipstream-php\src\File.php`

**Classes**:
- `ZipStream\File`

**Functions/Methods**:
- `__construct(ZipStream $zip, string $name, ?FileOptions $opt = null)`
- `processPath(string $path)`
- `processData(string $data)`
- `addFileHeader()`
- `filterFilename(string $filename)`
- `dosTime(int $when)`
- `buildZip64ExtraBlock(bool $force = false)`
- `addFileFooter()`
- `processStream(StreamInterface $stream)`
- `processStreamWithZeroHeader(StreamInterface $stream)`
- `readStream(StreamInterface $stream, ?int $options = null)`
- `deflateInit()`
- `deflateData(StreamInterface $stream, string &$data, ?int $options = null)`
- `deflateFinish(?int $options = null)`
- `processStreamWithComputedHeader(StreamInterface $stream)`
- `getCdrFile()`
- `getTotalLength()`

