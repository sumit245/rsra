# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\QuotedPrintableStream.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\QuotedPrintableStream.php`
- Type: PHP
- Size: 6198 bytes

## Summary (from docblocks)

This file is part of the ZBateson\StreamDecorators project.
@license http://opensource.org/licenses/bsd-license.php BSD

GuzzleHttp\Psr7 stream decoder decorator for quoted printable streams.
@author Zaahid Bateson

@var int current read/write position

@var string Last line of written text (used to maintain good line-breaks)

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

Reads $length chars from the underlying stream, prepending the past $pre
to it first.
If the characters read (including the prepended $pre) contain invalid
quoted-printable characters, the underlying stream is rewound by the
total number of characters ($length + strlen($pre)).
The quoted-printable encoded characters are returned.  If the characters
read are invalid, '3D' is returned indicating an '=' character.
@param int $length
@param string $pre
@return string

Decodes the passed $block of text.
If the last or before last character is an '=' char, indicating the
beginning of a quoted-printable encoded char, 1 or 2 additional bytes are
read from the underlying stream respectively.
The decoded string is returned.
@param string $block
@return string

Reads up to $length characters, appends them to the passed $str string,
and returns the total number of characters read.
-1 is returned if there are no more bytes to read.
@param int $length
@param string $append
@return int

Reads up to $length decoded bytes from the underlying quoted-printable
encoded stream and returns them.
@param int $length
@return string

Writes the passed string to the underlying stream after encoding it as
quoted-printable.
Note that reading and writing to the same stream without rewinding is not
supported.
@param string $string
@return int the number of bytes written

Writes out a final CRLF if the current line isn't empty.

Closes the underlying stream and writes a final CRLF if the current line
isn't empty.

Closes the underlying stream and writes a final CRLF if the current line
isn't empty.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\QuotedPrintableStream.php`

**Classes**:
- `ZBateson\StreamDecorators\QuotedPrintableStream implements StreamInterface`

**Functions/Methods**:
- `tell()`
- `getSize()`
- `seek($offset, $whence = SEEK_SET)`
- `isSeekable()`
- `readEncodedChars($length, $pre = '')`
- `decodeBlock($block)`
- `readRawDecodeAndAppend($length, &$str)`
- `read($length)`
- `write($string)`
- `beforeClose()`
- `close()`
- `detach()`

