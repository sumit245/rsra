# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\NonMimePart.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\NonMimePart.php`
- Type: PHP
- Size: 1726 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Represents part of a non-mime message.  The part could either be a plain text
part or a uuencoded attachment and could be extended for other pre-mime
message encoding types.

This allows clients to handle all messages as mime messages by providing a
Content-Type header.  NonMimePart returns text/plain.

@author Zaahid Bateson

Returns true.

@return bool

Returns text/plain

@return string

Returns ISO-8859-1

@return string

Returns 'inline'.

@return string

Returns '7bit'.

@return string

Returns false.

@return bool

Returns the Content ID of the part.
NonMimeParts do not have a Content ID, and so this simply returns null.
@return string|null

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\NonMimePart.php`

**Classes**:
- `ZBateson\MailMimeParser\Message\Part\NonMimePart extends MessagePart`

**Functions/Methods**:
- `isTextPart()`
- `getContentType()`
- `getCharset()`
- `getContentDisposition()`
- `getContentTransferEncoding()`
- `isMime()`
- `getContentId()`

