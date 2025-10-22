# app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\LimitStream.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\LimitStream.php`
- Type: PHP
- Size: 4211 bytes

## Summary (from docblocks)

Decorator used to return only a subset of a stream

@var int Offset to start reading from

@var int Limit the number of bytes that can be read

@param StreamInterface $stream Stream to wrap
@param int             $limit  Total number of bytes to allow to be read
                               from the stream. Pass -1 for no limit.
@param int             $offset Position to seek to before reading (only
                               works on seekable streams).

Returns the size of the limited subset of data
{@inheritdoc}

Allow for a bounded seek on the read limited stream
{@inheritdoc}

Give a relative tell()
{@inheritdoc}

Set the offset to start limiting from
@param int $offset Offset to seek to and begin byte limiting from
@throws \RuntimeException if the stream cannot be seeked.

Set the limit of bytes that the decorator allows to be read from the
stream.
@param int $limit Number of bytes to allow to be read from the stream.
                  Use -1 for no limit.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\LimitStream.php`

**Classes**:
- `GuzzleHttp\Psr7\LimitStream implements StreamInterface`

**Functions/Methods**:
- `__construct(StreamInterface $stream,
        $limit = -1,
        $offset = 0)`
- `eof()`
- `getSize()`
- `seek($offset, $whence = SEEK_SET)`
- `tell()`
- `setOffset($offset)`
- `setLimit($limit)`
- `read($length)`

