# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\SeekingLimitStream.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\SeekingLimitStream.php`
- Type: PHP
- Size: 5916 bytes

## Summary (from docblocks)

This file is part of the ZBateson\StreamDecorators project.
@license http://opensource.org/licenses/bsd-license.php BSD

Maintains an internal 'read' position, and seeks to it before reading, then
seeks back to the original position of the underlying stream after reading if
the attached stream supports seeking.
Although based on LimitStream, it's not inherited from it since $offset and
$limit are set to private on LimitStream, and most other functions are re-
implemented anyway.  This also decouples the implementation from upstream
changes.
@author Zaahid Bateson

@var int Offset to start reading from

@var int Limit the number of bytes that can be read

@var int Number of bytes written, and importantly, if non-zero, writes a
     final $lineEnding on close (and so maintained instead of using
     tell() directly)

@param StreamInterface $stream Stream to wrap
@param int             $limit  Total number of bytes to allow to be read
                               from the stream. Pass -1 for no limit.
@param int             $offset Position to seek to before reading (only
                               works on seekable streams).

Returns the current relative read position of this stream subset.

@return int

Returns the size of the limited subset of data, or null if the wrapped
stream returns null for getSize.
@return int|null

Returns true if the current read position is at the end of the limited
stream

@return boolean

Ensures the seek position specified is within the stream's bounds, and
sets the internal position pointer (doesn't actually seek).

@param int $pos

Seeks to the passed position within the confines of the limited stream's
bounds.
For SeekingLimitStream, no actual seek is performed on the underlying
wrapped stream.  Instead, an internal pointer is set, and the stream is
'seeked' on read operations
@param int $offset
@param int $whence

Sets the offset to start reading from the wrapped stream.
@param int $offset
@throws \RuntimeException if the stream cannot be seeked.

Sets the length of the stream to the passed $limit.
@param int $limit

Seeks to the current position and reads up to $length bytes, or less if
it would result in reading past $this->limit
@param int $length
@return string

Reads from the underlying stream after seeking to the position within the
bounds set for this limited stream.  After reading, the wrapped stream is
'seeked' back to its position prior to the call to read().
@param int $length
@return string

## References

**Database Tables (inferred)**
- `it`
- `upstream`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\SeekingLimitStream.php`

**Classes**:
- `ZBateson\StreamDecorators\SeekingLimitStream implements StreamInterface`

**Functions/Methods**:
- `__construct(StreamInterface $stream,
        $limit = -1,
        $offset = 0)`
- `tell()`
- `getSize()`
- `eof()`
- `doSeek($pos)`
- `seek($offset, $whence = SEEK_SET)`
- `setOffset($offset)`
- `setLimit($limit)`
- `seekAndRead($length)`
- `read($length)`

