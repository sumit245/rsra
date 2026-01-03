# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Helper\MultipartHelper.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Helper\MultipartHelper.php`
- Type: PHP
- Size: 16819 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Provides various routines to manipulate and create multipart messages from an
existing message (e.g. to make space for attachments in a message, or to
change a simple message to a multipart/alternative one, etc...)
@author Zaahid Bateson

@var GenericHelper a GenericHelper instance

Constructor

@param MimePartFactory $mimePartFactory
@param UUEncodedPartFactory $uuEncodedPartFactory
@param PartBuilderFactory $partBuilderFactory
@param GenericHelper $genericHelper

Creates and returns a unique boundary.
@param string $mimeType first 3 characters of a multipart type are used,
     e.g. REL for relative or ALT for alternative
@return string

Creates a unique mime boundary and assigns it to the passed part's
Content-Type header with the passed mime type.
@param ParentHeaderPart $part
@param string $mimeType

Sets the passed message as multipart/mixed.

If the message has content, a new part is created and added as a child of
the message.  The message's content and content headers are moved to the
new part.
@param Message $message

Sets the passed message as multipart/alternative.
If the message has content, a new part is created and added as a child of
the message.  The message's content and content headers are moved to the
new part.
@param Message $message

Searches the passed $alternativePart for a part with the passed mime type
and returns its parent.
Used for alternative mime types that have a multipart/mixed or
multipart/related child containing a content part of $mimeType, where
the whole mixed/related part should be removed.
@param string $mimeType the content-type to find below $alternativePart
@param ParentHeaderPart $alternativePart The multipart/alternative part to look
       under
@return boolean|MimePart false if a part is not found

Removes all parts of $mimeType from $alternativePart.
If $alternativePart contains a multipart/mixed or multipart/relative part
with other parts of different content-types, the multipart part is
removed, and parts of different content-types can optionally be moved to
the main message part.
@param Message $message
@param string $mimeType
@param ParentHeaderPart $alternativePart
@param bool $keepOtherContent
@return bool

Creates a new mime part as a multipart/alternative and assigns the passed
$contentPart as a part below it before returning it.
@param Message $message
@param MessagePart $contentPart
@return MimePart the alternative part

Moves all parts under $from into this message except those with a
content-type equal to $exceptMimeType.  If the message is not a
multipart/mixed message, it is set to multipart/mixed first.
@param Message $message
@param ParentHeaderPart $from
@param string $exceptMimeType

Enforces the message to be a mime message for a non-mime (e.g. uuencoded
or unspecified) message.  If the message has uuencoded attachments, sets
up the message as a multipart/mixed message and creates a separate
content part.
@param Message $message

Creates a multipart/related part out of 'inline' children of $parent and
returns it.
@param ParentHeaderPart $parent
@return MimePart

Finds an alternative inline part in the message and returns it if one
exists.
If the passed $mimeType is text/plain, searches for a text/html part.
Otherwise searches for a text/plain part to return.
@param Message $message
@param string $mimeType
@return \ZBateson\MailMimeParser\Message\Part\MimeType or null if not
        found

Creates a new content part for the passed mimeType and charset, making
space by creating a multipart/alternative if needed
@param Message $message
@param string $mimeType
@param string $charset
@return \ZBateson\MailMimeParser\Message\Part\MimePart

Creates and adds a MimePart for the passed content and options as an
attachment.
@param Message $message
@param string|resource|Psr\Http\Message\StreamInterface\StreamInterface
       $resource
@param string $mimeType
@param string $disposition
@param string $filename
@param string $encoding
@return \ZBateson\MailMimeParser\Message\Part\MimePart

Removes the content part of the message with the passed mime type.  If
there is a remaining content part and it is an alternative part of the
main message, the content part is moved to the message part.
If the content part is part of an alternative part beneath the message,
the alternative part is replaced by the remaining content part,
optionally keeping other parts if $keepOtherContent is set to true.
@param Message $message
@param string $mimeType
@param bool $keepOtherContent
@return boolean true on success

Removes the 'inline' part with the passed contentType, at the given index
defaulting to the first
@param Message $message
@param string $mimeType
@param int $index
@return boolean true on success

Either creates a mime part or sets the existing mime part with the passed
mimeType to $strongOrHandle.
@param Message $message
@param string $mimeType
@param string|resource $stringOrHandle
@param string $charset

## References

**Database Tables (inferred)**
- `an`
- `into`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Helper\MultipartHelper.php`

**Classes**:
- `ZBateson\MailMimeParser\Message\Helper\MultipartHelper extends AbstractHelper`

**Functions/Methods**:
- `__construct(MimePartFactory $mimePartFactory,
        UUEncodedPartFactory $uuEncodedPartFactory,
        PartBuilderFactory $partBuilderFactory,
        GenericHelper $genericHelper)`
- `getUniqueBoundary($mimeType)`
- `setMimeHeaderBoundaryOnPart(ParentHeaderPart $part, $mimeType)`
- `setMessageAsMixed(Message $message)`
- `setMessageAsAlternative(Message $message)`
- `getContentPartContainerFromAlternative($mimeType, ParentHeaderPart $alternativePart)`
- `removeAllContentPartsFromAlternative(Message $message, $mimeType, ParentHeaderPart $alternativePart, $keepOtherContent)`
- `createAlternativeContentPart(Message $message, MessagePart $contentPart)`
- `moveAllPartsAsAttachmentsExcept(Message $message, ParentHeaderPart $from, $exceptMimeType)`
- `enforceMime(Message $message)`
- `createMultipartRelatedPartForInlineChildrenOf(ParentHeaderPart $parent)`
- `findOtherContentPartFor(Message $message, $mimeType)`
- `createContentPartForMimeType(Message $message, $mimeType, $charset)`
- `createAndAddPartForAttachment(Message $message, $resource, $mimeType, $disposition, $filename = null, $encoding = 'base64')`
- `removeAllContentPartsByMimeType(Message $message, $mimeType, $keepOtherContent = false)`
- `removePartByMimeType(Message $message, $mimeType, $index = 0)`
- `setContentPartForMimeType(Message $message, $mimeType, $stringOrHandle, $charset)`

