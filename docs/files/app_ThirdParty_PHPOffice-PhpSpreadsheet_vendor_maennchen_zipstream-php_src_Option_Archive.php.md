# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\maennchen\zipstream-php\src\Option\Archive.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\maennchen\zipstream-php\src\Option\Archive.php`
- Type: PHP
- Size: 6067 bytes

## Summary (from docblocks)

@var string

Size, in bytes, of the largest file to try
and load into memory (used by
addFileFromPath()).  Large files may also
be compressed differently; see the
'largeFileMethod' option. Default is ~20 Mb.
@var int

How to handle large files.  Legal values are
Method::STORE() (the default), or
Method::DEFLATE(). STORE sends the file
raw and is significantly
faster, while DEFLATE compresses the file
and is much, much slower. Note that DEFLATE
must compress the file twice and is extremely slow.
@var Method

Boolean indicating whether or not to send
the HTTP headers for this file.
@var bool

The method called to send headers
@var Callable

Enable Zip64 extension, supporting very large
archives (any size > 4 GB or file count > 64k)
@var bool

Enable streaming files with single read where
general purpose bit 3 indicates local file header
contain zero values in crc and size fields,
these appear only after file contents
in data descriptor block.
@var bool

Enable reading file stat for determining file size.
When a 32-bit system reads file size that is
over 2 GB, invalid value appears in file size
due to integer overflow. Should be disabled on
32-bit systems with method addFileFromPath
if any file may exceed 2 GB. In this case file
will be read in blocks and correct size will be
determined from content.
@var bool

Enable flush after every write to output stream.
@var bool

HTTP Content-Disposition.  Defaults to
'attachment', where
FILENAME is the specified filename.
Note that this does nothing if you are
not sending HTTP headers.
@var string

Note that this does nothing if you are
not sending HTTP headers.
@var string

@var int

@var resource

Options constructor.

@return resource

@param resource $outputStream

@return int

@param int $deflateLevel

## References

**Database Tables (inferred)**
- `content`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\maennchen\zipstream-php\src\Option\Archive.php`

**Classes**:
- `ZipStream\Option\Archive`

**Functions/Methods**:
- `__construct()`
- `getComment()`
- `setComment(string $comment)`
- `getLargeFileSize()`
- `setLargeFileSize(int $largeFileSize)`
- `getLargeFileMethod()`
- `setLargeFileMethod(Method $largeFileMethod)`
- `isSendHttpHeaders()`
- `setSendHttpHeaders(bool $sendHttpHeaders)`
- `getHttpHeaderCallback()`
- `setHttpHeaderCallback(Callable $httpHeaderCallback)`
- `isEnableZip64()`
- `setEnableZip64(bool $enableZip64)`
- `isZeroHeader()`
- `setZeroHeader(bool $zeroHeader)`
- `isFlushOutput()`
- `setFlushOutput(bool $flushOutput)`
- `isStatFiles()`
- `setStatFiles(bool $statFiles)`
- `getContentDisposition()`
- `setContentDisposition(string $contentDisposition)`
- `getContentType()`
- `setContentType(string $contentType)`
- `getOutputStream()`
- `setOutputStream($outputStream)`
- `getDeflateLevel()`
- `setDeflateLevel(int $deflateLevel)`

