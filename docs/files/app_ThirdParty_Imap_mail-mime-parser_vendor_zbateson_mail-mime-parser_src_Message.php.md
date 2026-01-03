# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message.php`
- Type: PHP
- Size: 17287 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

A parsed mime message with optional mime parts depending on its type.
A mime message may have any number of mime parts, and each part may have any
number of sub-parts, etc...
@author Zaahid Bateson

@var MessageHelperService helper class with various message manipulation
     routines.

Constructor
@param PartStreamFilterManager $partStreamFilterManager
@param StreamFactory $streamFactory
@param PartFilterFactory $partFilterFactory
@param PartBuilder $partBuilder
@param MessageHelperService $messageHelperService
@param StreamInterface $stream
@param StreamInterface $contentStream

Convenience method to parse a handle or string into a Message without
requiring including MailMimeParser, instantiating it, and calling parse.
@param resource|string $handleOrString the resource handle to the input
       stream of the mime message, or a string containing a mime message
@return Message

Returns the text/plain part at the given index (or null if not found.)
@param int $index
@return MessagePart

Returns the number of text/plain parts in this message.
@return int

Returns the text/html part at the given index (or null if not found.)
@param int $index
@return MessagePart

Returns the number of text/html parts in this message.
@return int

Returns the attachment part at the given 0-based index, or null if none
is set.
@param int $index
@return MessagePart

Returns all attachment parts.
"Attachments" are any non-multipart, non-signature and any text or html
html part witha Content-Disposition set to  'attachment'.
@return MessagePart[]

Returns the number of attachments available.
@return int

Returns a Psr7 Stream for the 'inline' text/plain content at the passed
$index, or null if unavailable.
@param int $index
@param string $charset
@return StreamInterface

Returns a resource handle for the 'inline' text/plain content at the
passed $index, or null if unavailable.
Note: this method should *not* be used and has been deprecated. Instead,
use Psr7 streams with getTextStream.  Multibyte chars will not be read
correctly with getTextResourceHandle/fread.
@param int $index
@param string $charset
@deprecated since version 1.2.1
@return resource

Returns the content of the inline text/plain part at the given index.
Reads the entire stream content into a string and returns it.  Returns
null if the message doesn't have an inline text part.
@param int $index
@param string $charset
@return string

Returns a Psr7 Stream for the 'inline' text/html content at the passed
$index, or null if unavailable.
@param int $index
@param string $charset
@return StreamInterface

Returns a resource handle for the 'inline' text/html content at the
passed $index, or null if unavailable.
Note: this method should *not* be used and has been deprecated. Instead,
use Psr7 streams with getHtmlStream.  Multibyte chars will not be read
correctly with getHtmlResourceHandle/fread.
@param int $index
@param string $charset
@deprecated since version 1.2.1
@return resource

Returns the content of the inline text/html part at the given index.
Reads the entire stream content into a string and returns it.  Returns
null if the message doesn't have an inline html part.
@param int $index
@param string $charset
@return string

Returns true if either a Content-Type or Mime-Version header are defined
in this Message.
@return bool

Sets the text/plain part of the message to the passed $stringOrHandle,
either creating a new part if one doesn't exist for text/plain, or
assigning the value of $stringOrHandle to an existing text/plain part.
The optional $charset parameter is the charset for saving to.
$stringOrHandle is expected to be in UTF-8 regardless of the target
charset.
@param string|resource|StreamInterface $resource
@param string $charset

Sets the text/html part of the message to the passed $stringOrHandle,
either creating a new part if one doesn't exist for text/html, or
assigning the value of $stringOrHandle to an existing text/html part.
The optional $charset parameter is the charset for saving to.
$stringOrHandle is expected to be in UTF-8 regardless of the target
charset.
@param string|resource|StreamInterface $resource
@param string $charset

Removes the text/plain part of the message at the passed index if one
exists.  Returns true on success.
@param int $index
@return bool true on success

Removes all text/plain inline parts in this message, optionally keeping
other inline parts as attachments on the main message (defaults to
keeping them).
@param bool $keepOtherPartsAsAttachments
@return bool true on success

Removes the html part of the message if one exists.  Returns true on
success.
@param int $index
@return bool true on success

Removes all text/html inline parts in this message, optionally keeping
other inline parts as attachments on the main message (defaults to
keeping them).
@param bool $keepOtherPartsAsAttachments
@return bool true on success

Adds an attachment part for the passed raw data string or handle and
given parameters.
@param string|resource|StreamInterface $resource
@param string $mimeType
@param string $filename
@param string $disposition
@param string $encoding defaults to 'base64', only applied for a mime
       email

Adds an attachment part using the passed file.
Essentially creates a file stream and uses it.
@param string $filePath
@param string $mimeType
@param string $filename
@param string $disposition

Removes the attachment with the given index
@param int $index

Returns a stream that can be used to read the content part of a signed
message, which can be used to sign an email or verify a signature.
The method simply returns the stream for the first child.  No
verification of whether the message is in fact a signed message is
performed.
Note that unlike getSignedMessageAsString, getSignedMessageStream doesn't
replace new lines.
@return StreamInterface or null if the message doesn't have any children

Returns a string containing the entire body of a signed message for
verification or calculating a signature.
Non-CRLF new lines are replaced to always be CRLF.
@return string or null if the message doesn't have any children

Returns the signature part of a multipart/signed message or null.
The signature part is determined to always be the 2nd child of a
multipart/signed message, the first being the 'body'.
Using the 'protocol' parameter of the Content-Type header is unreliable
in some instances (for instance a difference of x-pgp-signature versus
pgp-signature).
@return MimePart

Turns the message into a multipart/signed message, moving the actual
message into a child part, sets the content-type of the main message to
multipart/signed and adds an empty signature part as well.
After calling setAsMultipartSigned, call getSignedMessageAsString to
return a
@param string $micalg The Message Integrity Check algorithm being used
@param string $protocol The mime-type of the signature body

Sets the signature body of the message to the passed $body for a
multipart/signed message.
@param string $body

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message.php`

**Classes**:
- `ZBateson\MailMimeParser\Message extends MimePart`
- `ZBateson\MailMimeParser\with`

**Functions/Methods**:
- `__construct(PartStreamFilterManager $partStreamFilterManager,
        StreamFactory $streamFactory,
        PartFilterFactory $partFilterFactory,
        PartBuilder $partBuilder,
        MessageHelperService $messageHelperService,
        StreamInterface $stream = null,
        StreamInterface $contentStream = null)`
- `from($handleOrString)`
- `getTextPart($index = 0)`
- `getTextPartCount()`
- `getHtmlPart($index = 0)`
- `getHtmlPartCount()`
- `getAttachmentPart($index)`
- `getAllAttachmentParts()`
- `getAttachmentCount()`
- `getTextStream($index = 0, $charset = MailMimeParser::DEFAULT_CHARSET)`
- `getTextResourceHandle($index = 0, $charset = MailMimeParser::DEFAULT_CHARSET)`
- `getTextContent($index = 0, $charset = MailMimeParser::DEFAULT_CHARSET)`
- `getHtmlStream($index = 0, $charset = MailMimeParser::DEFAULT_CHARSET)`
- `getHtmlResourceHandle($index = 0, $charset = MailMimeParser::DEFAULT_CHARSET)`
- `getHtmlContent($index = 0, $charset = MailMimeParser::DEFAULT_CHARSET)`
- `isMime()`
- `setTextPart($resource, $charset = 'UTF-8')`
- `setHtmlPart($resource, $charset = 'UTF-8')`
- `removeTextPart($index = 0)`
- `removeAllTextParts($keepOtherPartsAsAttachments = true)`
- `removeHtmlPart($index = 0)`
- `removeAllHtmlParts($keepOtherPartsAsAttachments = true)`
- `addAttachmentPart($resource, $mimeType, $filename = null, $disposition = 'attachment', $encoding = 'base64')`
- `addAttachmentPartFromFile($filePath, $mimeType, $filename = null, $disposition = 'attachment', $encoding = 'base64')`
- `removeAttachmentPart($index)`
- `getSignedMessageStream()`
- `getSignedMessageAsString()`
- `getSignaturePart()`
- `setAsMultipartSigned($micalg, $protocol)`
- `setSignature($body)`

