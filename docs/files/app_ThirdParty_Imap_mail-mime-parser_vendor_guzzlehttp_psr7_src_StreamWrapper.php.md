# app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\StreamWrapper.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\StreamWrapper.php`
- Type: PHP
- Size: 3758 bytes

## Summary (from docblocks)

Converts Guzzle streams into PHP stream resources.

@var resource

@var StreamInterface

@var string r, r+, or w

Returns a resource representing the stream.
@param StreamInterface $stream The stream to get a resource for
@return resource
@throws \InvalidArgumentException if stream is not readable or writable

Creates a stream context that can be used to open a stream as a php stream resource.
@param StreamInterface $stream
@return resource

Registers the stream wrapper if needed

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\StreamWrapper.php`

**Classes**:
- `GuzzleHttp\Psr7\StreamWrapper`

**Functions/Methods**:
- `getResource(StreamInterface $stream)`
- `createStreamContext(StreamInterface $stream)`
- `register()`
- `stream_open($path, $mode, $options, &$opened_path)`
- `stream_read($count)`
- `stream_write($data)`
- `stream_tell()`
- `stream_eof()`
- `stream_seek($offset, $whence)`
- `stream_cast($cast_as)`
- `stream_stat()`
- `url_stat($path, $flags)`

