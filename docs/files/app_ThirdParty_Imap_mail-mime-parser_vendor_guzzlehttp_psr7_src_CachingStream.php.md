# app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\CachingStream.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\CachingStream.php`
- Type: PHP
- Size: 4252 bytes

## Summary (from docblocks)

Stream decorator that can cache previously read bytes from a sequentially
read stream.

@var StreamInterface Stream being wrapped

@var int Number of bytes to skip reading due to a write on the buffer

We will treat the buffer object as the body of the stream
@param StreamInterface $stream Stream to cache
@param StreamInterface $target Optionally specify where data is cached

Close both the remote stream and buffer stream

## References

**Database Tables (inferred)**
- `a`
- `the`
- `that`
- `being`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\CachingStream.php`

**Classes**:
- `GuzzleHttp\Psr7\CachingStream implements StreamInterface`

**Functions/Methods**:
- `__construct(StreamInterface $stream,
        StreamInterface $target = null)`
- `getSize()`
- `rewind()`
- `seek($offset, $whence = SEEK_SET)`
- `read($length)`
- `write($string)`
- `eof()`
- `close()`
- `cacheEntireStream()`

