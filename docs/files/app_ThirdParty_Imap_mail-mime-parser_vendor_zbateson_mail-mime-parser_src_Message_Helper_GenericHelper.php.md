# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Helper\GenericHelper.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Helper\GenericHelper.php`
- Type: PHP
- Size: 5586 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Provides common Message helper routines for Message manipulation.
@author Zaahid Bateson

@var string[] List of content headers grabbed from
     https://tools.ietf.org/html/rfc4021#section-2.2

Copies the passed $header from $from, to $to or sets the header to
$default if it doesn't exist in $from.
@param ParentHeaderPart $from
@param ParentHeaderPart $to
@param string $header
@param string $default

Removes Content-* headers (permanent ones as defined in 
https://tools.ietf.org/html/rfc4021#section-2.2) from the passed part,
then detaches its content stream.

@param ParentHeaderPart $part

Copies Content-* headers (permanent ones as defined in 
https://tools.ietf.org/html/rfc4021#section-2.2)
from the $from header into the $to header. If the Content-Type header
isn't defined in $from, defaults to text/plain with utf-8 and
quoted-printable.
@param ParentHeaderPart $from
@param ParentHeaderPart $to
@param bool $move

Creates a new content part from the passed part, allowing the part to be
used for something else (e.g. changing a non-mime message to a multipart
mime message).
@param ParentHeaderPart $part
@return MimePart the newly-created MimePart

Copies type headers (Content-Type, Content-Disposition,
Content-Transfer-Encoding) from the $from MimePart to $to.  Attaches the
content resource handle of $from to $to, and loops over child parts,
removing them from $from and adding them to $to.
@param ParentHeaderPart $from
@param ParentHeaderPart $to

Replaces the $part ParentHeaderPart with $replacement.
Essentially removes $part from its parent, and adds $replacement in its
same position.  If $part is this Message, then $part can't be removed and
replaced, and instead $replacement's type headers are copied to $message,
and any children below $replacement are added directly below $message.
@param Message $message
@param ParentHeaderPart $part
@param ParentHeaderPart $replacement

## References

**Database Tables (inferred)**
- `the`
- `header`
- `MimePart`
- `to`
- `and`
- `its`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Helper\GenericHelper.php`

**Classes**:
- `ZBateson\MailMimeParser\Message\Helper\GenericHelper extends AbstractHelper`

**Functions/Methods**:
- `copyHeader(ParentHeaderPart $from, ParentHeaderPart $to, $header, $default = null)`
- `removeContentHeadersAndContent(ParentHeaderPart $part)`
- `copyContentHeadersAndContent(ParentHeaderPart $from, ParentHeaderPart $to, $move = false)`
- `createNewContentPartFrom(ParentHeaderPart $part)`
- `movePartContentAndChildren(ParentHeaderPart $from, ParentHeaderPart $to)`
- `replacePart(Message $message, ParentHeaderPart $part, ParentHeaderPart $replacement)`

