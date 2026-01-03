# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\MimePart.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\MimePart.php`
- Type: PHP
- Size: 5031 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Represents a single part of a multi-part mime message.
A MimePart object may have any number of child parts, or may be a child
itself with its own parent or parents.
The content of the part can be read from its PartStream resource handle,
accessible via MessagePart::getContentResourceHandle.
@author Zaahid Bateson

Returns true if this part's mime type is multipart/*
@return bool

Returns a filename for the part if one is defined, or null otherwise.

@return string

Returns true.

@return bool

Returns true if this part's mime type is text/plain, text/html or if the
Content-Type header defines a charset.

@return bool

Returns the lower-cased, trimmed value of the Content-Type header.

Parses the Content-Type header, defaults to returning text/plain if not
defined.
@param string $default pass to override the returned value when not set
@return string

Returns the upper-cased charset of the Content-Type header's charset
parameter if set, ISO-8859-1 if the Content-Type is text/plain or
text/html and the charset parameter isn't set, or null otherwise.
If the charset parameter is set to 'binary' it is ignored and considered
'not set' (returns ISO-8859-1 for text/plain, text/html or null
otherwise).

@return string

Returns the content's disposition, defaulting to 'inline' if not set.
@param string $default pass to override the default returned disposition
       when not set.
@return string

Returns the content-transfer-encoding used for this part, defaulting to
'7bit' if not set.
@param string $default pass to override the default when not set.
@return string

Returns the Content ID of the part.
In MimePart, this is merely a shortcut to calling
``` $part->getHeaderValue('Content-ID'); ```.

@return string|null

Convenience method to find a part by its Content-ID header.
@param string $contentId
@return MessagePart

## References

**Database Tables (inferred)**
- `its`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\MimePart.php`

**Classes**:
- `ZBateson\MailMimeParser\Message\Part\MimePart extends ParentHeaderPart`

**Functions/Methods**:
- `isMultiPart()`
- `getFilename()`
- `isMime()`
- `isTextPart()`
- `getContentType($default = 'text/plain')`
- `getCharset()`
- `getContentDisposition($default = 'inline')`
- `getContentTransferEncoding($default = '7bit')`
- `getContentId()`
- `getPartByContentId($contentId)`

