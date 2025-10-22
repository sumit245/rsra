# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\ChunkSplitStream.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\ChunkSplitStream.php`
- Type: PHP
- Size: 3403 bytes

## Summary (from docblocks)

This file is part of the ZBateson\StreamDecorators project.
@license http://opensource.org/licenses/bsd-license.php BSD

Inserts line ending characters after the set number of characters have been
written to the underlying stream.
@author Zaahid Bateson

@var int Number of bytes written, and importantly, if non-zero, writes a
     final $lineEnding on close (and so maintained instead of using
     tell() directly)

@var int The number of characters in a line before inserting $lineEnding.

@var string The line ending characters to insert.

@var int The strlen() of $lineEnding

@param StreamInterface $stream
@param int $lineLength
@param string $lineEnding

Inserts the line ending character after each line length characters in
the passed string, making sure previously written bytes are taken into
account.
@param string $string
@return string

Writes the passed string to the underlying stream, ensuring line endings
are inserted every "line length" characters in the string.
@param string $string
@return number of bytes written

Inserts a final line ending character.

Closes the stream after ensuring a final line ending character is
inserted.

Detaches the stream after ensuring a final line ending character is
inserted.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\ChunkSplitStream.php`

**Classes**:
- `ZBateson\StreamDecorators\ChunkSplitStream implements StreamInterface`

**Functions/Methods**:
- `__construct(StreamInterface $stream, $lineLength = 76, $lineEnding = "\r\n")`
- `getChunkedString($string)`
- `write($string)`
- `beforeClose()`
- `close()`
- `detach()`

