# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\Base64Stream.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\Base64Stream.php`
- Type: PHP
- Size: 5825 bytes

## Summary (from docblocks)

This file is part of the ZBateson\StreamDecorators project.
@license http://opensource.org/licenses/bsd-license.php BSD

GuzzleHttp\Psr7 stream decoder extension for base64 streams.
Note that it's expected the underlying stream will only contain valid base64
characters (normally the stream should be wrapped in a
PregReplaceFilterStream to filter out non-base64 characters for reading).
```
$f = fopen(...);
$stream = new Base64Stream(new PregReplaceFilterStream(
     Psr7\stream_for($f), '/[^a-zA-Z0-9\/\+=]/', ''
));
//...
```
For writing, a ChunkSplitStream could come in handy so the output is split
into lines:
```
$f = fopen(...);
$stream = new Base64Stream(new ChunkSplitStream(new PregReplaceFilterStream(
     Psr7\stream_for($f), '/[^a-zA-Z0-9\/\+=]/', ''
)));
//...
```
@author Zaahid Bateson

@var BufferStream buffered bytes

@var string remainder of write operation if the bytes didn't align to 3
     bytes

@var int current number of read/written bytes (for tell())

@param StreamInterface $stream

Returns the current position of the file read/write pointer
@return int

Returns null, getSize isn't supported
@return null

Not implemented (yet).
Seek position can be calculated.
@param int $offset
@param int $whence
@throws RuntimeException

Overridden to return false
@return boolean

Returns true if the end of stream has been reached.
@return boolean

Fills the internal byte buffer after reading and decoding data from the
underlying stream.
Note that it's expected the underlying stream will only contain valid
base64 characters (normally the stream should be wrapped in a
PregReplaceFilterStream to filter out non-base64 characters).
@param int $length

Attempts to read $length bytes after decoding them, and returns them.
Note that reading and writing to the same stream may result in wrongly
encoded data and is not supported.
@param int $length
@return string

Writes the passed string to the underlying stream after encoding it to
base64.
Base64Stream::close or detach must be called.  Failing to do so may
result in 1-2 bytes missing from the end of the stream if there's a
remainder.  Note that the default Stream destructor calls close as well.
Note that reading and writing to the same stream may result in wrongly
encoded data and is not supported.
@param string $string
@return int the number of bytes written

Writes out any remaining bytes at the end of the stream and closes.

Closes the underlying stream after writing out any remaining bytes
needing to be encoded.

Detaches the underlying stream after writing out any remaining bytes
needing to be encoded.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\Base64Stream.php`

**Classes**:
- `ZBateson\StreamDecorators\Base64Stream implements StreamInterface`

**Functions/Methods**:
- `__construct(StreamInterface $stream)`
- `tell()`
- `getSize()`
- `seek($offset, $whence = SEEK_SET)`
- `isSeekable()`
- `eof()`
- `fillBuffer($length)`
- `read($length)`
- `write($string)`
- `beforeClose()`
- `close()`
- `detach()`

