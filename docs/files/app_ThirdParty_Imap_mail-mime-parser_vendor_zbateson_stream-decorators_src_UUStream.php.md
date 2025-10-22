# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\UUStream.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\UUStream.php`
- Type: PHP
- Size: 8580 bytes

## Summary (from docblocks)

This file is part of the ZBateson\StreamDecorators project.
@license http://opensource.org/licenses/bsd-license.php BSD

GuzzleHttp\Psr7 stream decoder extension for UU-Encoded streams.
The size of the underlying stream and the position of bytes can't be
determined because the number of encoded bytes is indeterminate without
reading the entire stream.
@author Zaahid Bateson

@var string name of the UUEncoded file

@var BufferStream of read and decoded bytes

@var string remainder of write operation if the bytes didn't align to 3
     bytes

@var int read/write position

@var boolean set to true when 'write' is called

@param StreamInterface $stream Stream to decorate
@param string $filename optional file name

Overridden to return the position in the target encoding.
@return int

Returns null, getSize isn't supported
@return null

Not supported.
@param int $offset
@param int $whence
@throws RuntimeException

Overridden to return false
@return boolean

Finds the next end-of-line character to ensure a line isn't broken up
while buffering.
@return string

Removes invalid characters from a uuencoded string, and 'BEGIN' and 'END'
line headers and footers from the passed string before returning it.
@param string $str
@return string

Buffers bytes into $this->buffer, removing uuencoding headers and footers
and decoding them.

Returns true if the end of stream has been reached.
@return boolean

Attempts to read $length bytes after decoding them, and returns them.
@param int $length
@return string

Writes the 'begin' UU header line.

Writes the '`' and 'end' UU footer lines.

Writes the passed bytes to the underlying stream after encoding them.
@param string $bytes

Prepends any existing remainder to the passed string, then checks if the
string fits into a uuencoded line, and removes and keeps any remainder
from the string to write.  Full lines ready for writing are returned.

@param string $string
@return string

Writes the passed string to the underlying stream after encoding it.
Note that reading and writing to the same stream without rewinding is not
supported.
Also note that some bytes may not be written until close or detach are
called.  This happens if written data doesn't align to a complete
uuencoded 'line' of 45 bytes.  In addition, the UU footer is only written
when closing or detaching as well.
@param string $string
@return int the number of bytes written

Returns the filename set in the UUEncoded header (or null)
@return string

Sets the UUEncoded header file name written in the 'begin' header line.
@param string $filename

Writes out any remaining bytes and the UU footer.

Writes any remaining bytes out followed by the uu-encoded footer, then
closes the stream.

Writes any remaining bytes out followed by the uu-encoded footer, then
detaches the stream.

## References

**Database Tables (inferred)**
- `a`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\UUStream.php`

**Classes**:
- `ZBateson\StreamDecorators\UUStream implements StreamInterface`

**Functions/Methods**:
- `__construct(StreamInterface $stream, $filename = null)`
- `tell()`
- `getSize()`
- `seek($offset, $whence = SEEK_SET)`
- `isSeekable()`
- `readToEndOfLine($length)`
- `filterAndDecode($str)`
- `fillBuffer($length)`
- `eof()`
- `read($length)`
- `writeUUHeader()`
- `writeUUFooter()`
- `writeEncoded($bytes)`
- `handleRemainder($string)`
- `write($string)`
- `getFilename()`
- `setFilename($filename)`
- `beforeClose()`
- `close()`
- `detach()`

