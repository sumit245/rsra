# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\MessageParser.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\MessageParser.php`
- Type: PHP
- Size: 9967 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Parses a mail mime message into its component parts.  To invoke, call
MailMimeParser::parse.
@author Zaahid Bateson

@var PartFactoryService service instance used to create MimePartFactory
     objects.

@var PartBuilderFactory used to create PartBuilders

@var int maintains the character length of the last line separator,
     typically 2 for CRLF, to keep track of the correct 'end' position
     for a part because the CRLF before a boundary is considered part of
     the boundary.

Sets up the parser with its dependencies.

@param PartFactoryService $pfs
@param PartBuilderFactory $pbf

Parses the passed stream into a ZBateson\MailMimeParser\Message object
and returns it.

@param StreamInterface $stream the stream to parse the message from
@return \ZBateson\MailMimeParser\Message

Ensures the header isn't empty and contains a colon separator character,
then splits it and calls $partBuilder->addHeader.

@param string $header
@param PartBuilder $partBuilder

Reads a line of up to 4096 characters.  If the line is larger than that,
the remaining characters in the line are read and discarded, and only the
first 4096 characters are returned.
@param resource $handle
@return string

Reads a line of 2048 characters.  If the line is larger than that, the
remaining characters in the line are read and
discarded, and only the first part is returned.
This method is identical to readLine, except it calculates the number of
characters that make up the line's new line characters (e.g. 2 for "\r\n"
or 1 for "\n").
@param resource $handle
@param int $lineSeparatorLength
@return string

Reads header lines up to an empty line, adding them to the passed
$partBuilder.

@param resource $handle the resource handle to read from
@param PartBuilder $partBuilder the current part to add headers to

Reads lines from the passed $handle, calling
$partBuilder->setEndBoundaryFound with the passed line until it returns
true or the stream is at EOF.

setEndBoundaryFound returns true if the passed line matches a boundary
for the $partBuilder itself or any of its parents.

Once a boundary is found, setStreamPartAndContentEndPos is called with
the passed $handle's read pos before the boundary and its line separator
were read.

@param resource $handle
@param PartBuilder $partBuilder

Reads content for a non-mime message.  If there are uuencoded attachment
parts in the message (denoted by 'begin' lines), those parts are read and
added to the passed $partBuilder as children.

@param resource $handle
@param PartBuilder $partBuilder
@return string

Reads content for a single part of a MIME message.

If the part being read is in turn a multipart part, readPart is called on
it recursively to read its headers and content.

The start/end positions of the part's content are set on the passed
$partBuilder, which in turn sets the end position of the part and its
parents.

@param resource $handle
@param PartBuilder $partBuilder

Reads a part and any of its children, into the passed $partBuilder,
either by calling readUUEncodedOrPlainTextMessage or readPartContent
after reading headers.

@param resource $handle
@param PartBuilder $partBuilder

Reads the message from the passed stream and returns a PartBuilder
representing it.

@param StreamInterface $stream
@return PartBuilder

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\MessageParser.php`

**Classes**:
- `ZBateson\MailMimeParser\Message\MessageParser`

**Functions/Methods**:
- `__construct(PartFactoryService $pfs,
        PartBuilderFactory $pbf)`
- `parse(StreamInterface $stream)`
- `addRawHeaderToPart($header, PartBuilder $partBuilder)`
- `readLine($handle)`
- `readBoundaryLine($handle, &$lineSeparatorLength = 0)`
- `readHeaders($handle, PartBuilder $partBuilder)`
- `findContentBoundary($handle, PartBuilder $partBuilder)`
- `readUUEncodedOrPlainTextMessage($handle, PartBuilder $partBuilder)`
- `readPartContent($handle, PartBuilder $partBuilder)`
- `readPart($handle, PartBuilder $partBuilder)`
- `read(StreamInterface $stream)`

