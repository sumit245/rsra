# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Stream\MessagePartStream.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Stream\MessagePartStream.php`
- Type: PHP
- Size: 5759 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Provides a readable stream for a MessagePart.
@author Zaahid Bateson

@var StreamFactory For creating needed stream decorators.

@var MessagePart The part to read from.

Constructor

@param StreamFactory $sdf
@param MessagePart $part

Attaches and returns a CharsetStream decorator to the passed $stream.
If the current attached MessagePart doesn't specify a charset, $stream is
returned as-is.
@param StreamInterface $stream
@return StreamInterface

Attaches and returns a transfer encoding stream decorator to the passed
$stream.
The attached stream decorator is based on the attached part's returned
value from MessagePart::getContentTransferEncoding, using one of the
following stream decorators as appropriate:
o QuotedPrintableStream
o Base64Stream
o UUStream
@param StreamInterface $stream
@return StreamInterface

Writes out the content portion of the attached mime part to the passed
$stream.
@param StreamInterface $stream

Creates an array of streams based on the attached part's mime boundary
and child streams.
@param ParentHeaderPart $part passed in because $this->part is declared
       as MessagePart
@return StreamInterface[]

Returns an array of Psr7 Streams representing the attached part and it's
direct children.
@return StreamInterface[]

@var ParentHeaderPart

Creates the underlying stream lazily when required.
@return StreamInterface

## References

**Database Tables (inferred)**
- `MessagePart`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Stream\MessagePartStream.php`

**Classes**:
- `ZBateson\MailMimeParser\Stream\MessagePartStream implements StreamInterface`

**Functions/Methods**:
- `__construct(StreamFactory $sdf, MessagePart $part)`
- `getCharsetDecoratorForStream(StreamInterface $stream)`
- `getTransferEncodingDecoratorForStream(StreamInterface $stream)`
- `writePartContentTo(StreamInterface $stream)`
- `getBoundaryAndChildStreams(ParentHeaderPart $part)`
- `getStreamsArray()`
- `createStream()`

