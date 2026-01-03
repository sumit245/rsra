# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\UUEncodedPart.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\UUEncodedPart.php`
- Type: PHP
- Size: 3570 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

A specialized NonMimePart representing a uuencoded part.

This represents part of a message that is not a mime message.  A multi-part
mime message may have a part with a Content-Transfer-Encoding of x-uuencode
but that would be represented by a normal MimePart.

UUEncodedPart extends NonMimePart to return a Content-Transfer-Encoding of
x-uuencode, a Content-Type of application-octet-stream, and a
Content-Disposition of 'attachment'.  It also expects a mode and filename to
initialize it, and adds 'filename' parts to the Content-Disposition and
'name' to Content-Type.

@author Zaahid Bateson

@var int the unix file permission

@var string the name of the file in the uuencoding 'header'.

Constructor

@param PartStreamFilterManager $partStreamFilterManager
@param StreamFactory $streamFactory
@param PartBuilder $partBuilder
@param StreamInterface $stream
@param StreamInterface $contentStream

Returns the file mode included in the uuencoded header for this part.

@return int

Returns the filename included in the uuencoded header for this part.

@return string

Sets the unix file mode for the uuencoded header.
@param int $mode

Sets the filename included in the uuencoded header.
@param string $filename

Returns false.

@return bool

Returns text/plain

@return string

Returns null

@return string

Returns 'inline'.

@return string

Returns 'x-uuencode'.

@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\UUEncodedPart.php`

**Classes**:
- `ZBateson\MailMimeParser\Message\Part\UUEncodedPart extends NonMimePart`

**Functions/Methods**:
- `__construct(PartStreamFilterManager $partStreamFilterManager,
        StreamFactory $streamFactory,
        PartBuilder $partBuilder,
        StreamInterface $stream = null,
        StreamInterface $contentStream = null)`
- `getUnixFileMode()`
- `getFilename()`
- `setUnixFileMode($mode)`
- `setFilename($filename)`
- `isTextPart()`
- `getContentType()`
- `getCharset()`
- `getContentDisposition()`
- `getContentTransferEncoding()`

