# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\psr\http-factory\src\StreamFactoryInterface.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\psr\http-factory\src\StreamFactoryInterface.php`
- Type: PHP
- Size: 1418 bytes

## Summary (from docblocks)

Create a new stream from a string.
The stream SHOULD be created with a temporary resource.
@param string $content String content with which to populate the stream.
@return StreamInterface

Create a stream from an existing file.
The file MUST be opened using the given mode, which may be any mode
supported by the `fopen` function.
The `$filename` MAY be any string supported by `fopen()`.
@param string $filename Filename or stream URI to use as basis of stream.
@param string $mode Mode with which to open the underlying filename/stream.
@return StreamInterface
@throws \RuntimeException If the file cannot be opened.
@throws \InvalidArgumentException If the mode is invalid.

Create a new stream from an existing resource.
The stream MUST be readable and may be writable.
@param resource $resource PHP resource to use as basis of stream.
@return StreamInterface

## References

**Database Tables (inferred)**
- `a`
- `an`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\psr\http-factory\src\StreamFactoryInterface.php`

**Functions/Methods**:
- `createStream(string $content = '')`
- `createStreamFromFile(string $filename, string $mode = 'r')`
- `createStreamFromResource($resource)`

