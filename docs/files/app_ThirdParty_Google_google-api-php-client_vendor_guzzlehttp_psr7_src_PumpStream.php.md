# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\PumpStream.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\PumpStream.php`
- Type: PHP
- Size: 4035 bytes

## Summary (from docblocks)

Provides a read only stream that pumps data from a PHP callable.
When invoking the provided callable, the PumpStream will pass the amount of
data requested to read to the callable. The callable can choose to ignore
this value and return fewer or more bytes than requested. Any extra data
returned by the provided callable is buffered internally until drained using
the read() function of the PumpStream. The provided callable MUST return
false when there is no more data to read.

@var callable

@var int

@var int

@var array

@var BufferStream

@param callable $source Source of the stream data. The callable MAY
                        accept an integer argument used to control the
                        amount of data to return. The callable MUST
                        return a string when called, or false on error
                        or EOF.
@param array $options   Stream options:
                        - metadata: Hash of metadata to use with stream.
                        - size: Size of the stream, if known.

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\PumpStream.php`

**Classes**:
- `GuzzleHttp\Psr7\PumpStream implements StreamInterface`

**Functions/Methods**:
- `__construct(callable $source, array $options = [])`
- `__toString()`
- `close()`
- `detach()`
- `getSize()`
- `tell()`
- `eof()`
- `isSeekable()`
- `rewind()`
- `seek($offset, $whence = SEEK_SET)`
- `isWritable()`
- `write($string)`
- `isReadable()`
- `read($length)`
- `getContents()`
- `getMetadata($key = null)`
- `pump($length)`

