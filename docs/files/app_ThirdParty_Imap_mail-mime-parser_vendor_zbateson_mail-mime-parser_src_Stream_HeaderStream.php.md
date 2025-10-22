# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Stream\HeaderStream.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Stream\HeaderStream.php`
- Type: PHP
- Size: 2584 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Psr7 stream decorator implementation providing a readable stream for a part's
headers.
HeaderStream is only used by a MimePart parent.  It can accept any
MessagePart - for non-MimeParts, only type headers are generated based on
available information.
@author Zaahid Bateson

@var MessagePart the part to read from.

Constructor

@param MessagePart $part

Returns a header array for the current part.
If the part is not a MimePart, Content-Type, Content-Disposition and
Content-Transfer-Encoding headers are generated manually.
@return array

Writes out headers for $this->part and follows them with an empty line.
@param StreamInterface $stream

Creates the underlying stream lazily when required.
@return StreamInterface

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Stream\HeaderStream.php`

**Classes**:
- `ZBateson\MailMimeParser\Stream\HeaderStream implements StreamInterface`

**Functions/Methods**:
- `__construct(MessagePart $part)`
- `getPartHeadersIterator()`
- `writePartHeadersTo(StreamInterface $stream)`
- `createStream()`

