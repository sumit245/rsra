# app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\AppendStream.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\AppendStream.php`
- Type: PHP
- Size: 5727 bytes

## Summary (from docblocks)

Reads from multiple streams, one after the other.
This is a read-only stream decorator.

@var StreamInterface[] Streams being decorated

@param StreamInterface[] $streams Streams to decorate. Each stream must
                                  be readable.

Add a stream to the AppendStream
@param StreamInterface $stream Stream to append. Must be readable.
@throws \InvalidArgumentException if the stream is not readable

Closes each attached stream.
{@inheritdoc}

Detaches each attached stream.
Returns null as it's not clear which underlying stream resource to return.
{@inheritdoc}

Tries to calculate the size by adding the size of each stream.
If any of the streams do not return a valid number, then the size of the
append stream cannot be determined and null is returned.
{@inheritdoc}

Attempts to seek to the given position. Only supports SEEK_SET.
{@inheritdoc}

Reads from all of the appended streams until the length is met or EOF.
{@inheritdoc}

## References

**Database Tables (inferred)**
- `multiple`
- `each`
- `all`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\AppendStream.php`

**Classes**:
- `GuzzleHttp\Psr7\AppendStream implements StreamInterface`

**Functions/Methods**:
- `__construct(array $streams = [])`
- `__toString()`
- `addStream(StreamInterface $stream)`
- `getContents()`
- `close()`
- `detach()`
- `tell()`
- `getSize()`
- `eof()`
- `rewind()`
- `seek($offset, $whence = SEEK_SET)`
- `read($length)`
- `isReadable()`
- `isWritable()`
- `isSeekable()`
- `write($string)`
- `getMetadata($key = null)`

