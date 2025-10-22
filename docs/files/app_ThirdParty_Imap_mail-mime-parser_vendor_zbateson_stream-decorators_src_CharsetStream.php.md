# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\CharsetStream.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\CharsetStream.php`
- Type: PHP
- Size: 4961 bytes

## Summary (from docblocks)

This file is part of the ZBateson\StreamDecorator project.
@license http://opensource.org/licenses/bsd-license.php BSD

GuzzleHttp\Psr7 stream decoder extension for charset conversion.
@author Zaahid Bateson

@var MbWrapper the charset converter

@var string charset of the source stream

@var string charset of strings passed in write operations, and returned
     in read operations.

@var int current read/write position

@var int number of $stringCharset characters in $buffer

@var string a buffer of characters read in the original $streamCharset
     encoding

@param StreamInterface $stream Stream to decorate
@param string $streamCharset The underlying stream's charset
@param string $stringCharset The charset to encode strings to (or
       expected for write)

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

Reads a minimum of $length characters from the underlying stream in its
encoding into $this->buffer.
Aligning to 4 bytes seemed to solve an issue reading from UTF-16LE
streams and pass testReadUtf16LeToEof, although the buffered string
should've solved that on its own.
@param int $length

Returns true if the end of stream has been reached.
@return boolean

Reads up to $length decoded chars from the underlying stream and returns
them after converting to the target string charset.
@param int $length
@return string

Writes the passed string to the underlying stream after converting it to
the target stream encoding.
@param string $string
@return int the number of bytes written

## References

**Database Tables (inferred)**
- `the`
- `UTF`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\CharsetStream.php`

**Classes**:
- `ZBateson\StreamDecorators\CharsetStream implements StreamInterface`

**Functions/Methods**:
- `__construct(StreamInterface $stream, $streamCharset = 'ISO-8859-1', $stringCharset = 'UTF-8')`
- `tell()`
- `getSize()`
- `seek($offset, $whence = SEEK_SET)`
- `isSeekable()`
- `readRawCharsIntoBuffer($length)`
- `eof()`
- `read($length)`
- `write($string)`

