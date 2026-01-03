# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\PregReplaceFilterStream.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\PregReplaceFilterStream.php`
- Type: PHP
- Size: 2696 bytes

## Summary (from docblocks)

This file is part of the ZBateson\StreamDecorators project.
@license http://opensource.org/licenses/bsd-license.php BSD

Calls preg_replace on each read operation with the passed pattern and
replacement string.  Should only really be used to find single characters,
since a pattern intended to match more may be split across multiple read()
operations.
@author Zaahid Bateson

@var string The regex pattern

@var string The replacement

@var BufferStream Buffered stream of input from the underlying stream

Returns true if the end of stream has been reached.
@return boolean

Not supported by PregReplaceFilterStream
@param int $offset
@param int $whence
@throws RuntimeException

Overridden to return false
@return boolean

Fills the BufferStream with at least 8192 characters of input for future
read operations.
@param int $length

Reads from the underlying stream, filters it and returns up to $length
bytes.
@param int $length
@return string

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\PregReplaceFilterStream.php`

**Classes**:
- `ZBateson\StreamDecorators\PregReplaceFilterStream implements StreamInterface`

**Functions/Methods**:
- `__construct(StreamInterface $stream, $pattern, $replacement)`
- `eof()`
- `seek($offset, $whence = SEEK_SET)`
- `isSeekable()`
- `fillBuffer($length)`
- `read($length)`

