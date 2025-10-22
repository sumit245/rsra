# app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\Stream.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\Stream.php`
- Type: PHP
- Size: 6783 bytes

## Summary (from docblocks)

PHP stream implementation.
@var $stream

Resource modes.
@var string
@see http://php.net/manual/function.fopen.php
@see http://php.net/manual/en/function.gzopen.php

This constructor accepts an associative array of options.
- size: (int) If a read stream would otherwise have an indeterminate
  size, but the size is known due to foreknowledge, then you can
  provide that size, in bytes.
- metadata: (array) Any additional metadata to return when the metadata
  of the stream is accessed.
@param resource $stream  Stream resource to wrap.
@param array    $options Associative array of options.
@throws \InvalidArgumentException if the stream is not a stream resource

Closes the stream when the destructed

## References

**Database Tables (inferred)**
- `non`
- `stream`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\Stream.php`

**Classes**:
- `GuzzleHttp\Psr7\Stream implements StreamInterface`

**Functions/Methods**:
- `__construct($stream, $options = [])`
- `__destruct()`
- `__toString()`
- `getContents()`
- `close()`
- `detach()`
- `getSize()`
- `isReadable()`
- `isWritable()`
- `isSeekable()`
- `eof()`
- `tell()`
- `rewind()`
- `seek($offset, $whence = SEEK_SET)`
- `read($length)`
- `write($string)`
- `getMetadata($key = null)`

