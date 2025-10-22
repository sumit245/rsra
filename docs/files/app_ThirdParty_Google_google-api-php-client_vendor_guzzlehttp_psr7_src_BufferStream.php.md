# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\BufferStream.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\BufferStream.php`
- Type: PHP
- Size: 3043 bytes

## Summary (from docblocks)

Provides a buffer stream that can be written to to fill a buffer, and read
from to remove bytes from the buffer.
This stream returns a "hwm" metadata value that tells upstream consumers
what the configured high water mark of the stream is, or the maximum
preferred size of the buffer.

@param int $hwm High water mark, representing the preferred maximum
                buffer size. If the size of the buffer exceeds the high
                water mark, then calls to write will continue to succeed
                but will return false to inform writers to slow down
                until the buffer has been drained by reading from it.

Reads data from the buffer.

Writes data to the buffer.

## References

**Database Tables (inferred)**
- `to`
- `the`
- `it`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\BufferStream.php`

**Classes**:
- `GuzzleHttp\Psr7\BufferStream implements StreamInterface`

**Functions/Methods**:
- `__construct($hwm = 16384)`
- `__toString()`
- `getContents()`
- `close()`
- `detach()`
- `getSize()`
- `isReadable()`
- `isWritable()`
- `isSeekable()`
- `rewind()`
- `seek($offset, $whence = SEEK_SET)`
- `eof()`
- `tell()`
- `read($length)`
- `write($string)`
- `getMetadata($key = null)`

