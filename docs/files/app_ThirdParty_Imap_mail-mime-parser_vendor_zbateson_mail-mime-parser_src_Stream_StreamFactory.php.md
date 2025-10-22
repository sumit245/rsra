# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Stream\StreamFactory.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Stream\StreamFactory.php`
- Type: PHP
- Size: 4782 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Factory class for Psr7 stream decorators used in MailMimeParser.
@author Zaahid Bateson

Returns a SeekingLimitStream using $part->getStreamPartLength() and
$part->getStreamPartStartOffset()
@param StreamInterface $stream
@param PartBuilder $part
@return SeekingLimitStream

Returns a SeekingLimitStream using $part->getStreamContentLength() and
$part->getStreamContentStartOffset()
@param StreamInterface $stream
@param PartBuilder $part
@return SeekingLimitStream

Creates and returns a SeekingLimitedStream.
@param StreamInterface $stream
@param int $length
@param int $start
@return SeekingLimitStream

Creates a non-closing stream that doesn't close it's internal stream when
closing/detaching.

@param StreamInterface $stream
@return NonClosingStream

Creates a ChunkSplitStream.

@param StreamInterface $stream
@return ChunkSplitStream

Creates and returns a Base64Stream with an internal
PregReplaceFilterStream that filters out non-base64 characters.

@param StreamInterface $stream
@return Base64Stream

Creates and returns a QuotedPrintableStream.
@param StreamInterface $stream
@return QuotedPrintableStream

Creates and returns a UUStream
@param StreamInterface $stream
@return UUStream

Creates and returns a CharsetStream
@param StreamInterface $stream
@param string $fromCharset
@param string $toCharset
@return CharsetStream

Creates and returns a MessagePartStream
@param MessagePart $part
@return MessagePartStream

Creates and returns a HeaderStream
@param MessagePart $part
@return HeaderStream

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Stream\StreamFactory.php`

**Classes**:
- `ZBateson\MailMimeParser\Stream\for`
- `ZBateson\MailMimeParser\Stream\StreamFactory`

**Functions/Methods**:
- `getLimitedPartStream(StreamInterface $stream, PartBuilder $part)`
- `getLimitedContentStream(StreamInterface $stream, PartBuilder $part)`
- `newLimitStream(StreamInterface $stream, $length, $start)`
- `newNonClosingStream(StreamInterface $stream)`
- `newChunkSplitStream(StreamInterface $stream)`
- `newBase64Stream(StreamInterface $stream)`
- `newQuotedPrintableStream(StreamInterface $stream)`
- `newUUStream(StreamInterface $stream)`
- `newCharsetStream(StreamInterface $stream, $fromCharset, $toCharset)`
- `newMessagePartStream(MessagePart $part)`
- `newHeaderStream(MessagePart $part)`

