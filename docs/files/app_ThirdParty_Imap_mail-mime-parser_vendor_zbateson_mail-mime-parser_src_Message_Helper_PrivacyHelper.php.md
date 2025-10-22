# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Helper\PrivacyHelper.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Helper\PrivacyHelper.php`
- Type: PHP
- Size: 7681 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Provides routines to set or retrieve the signature part of a signed message.
@author Zaahid Bateson

@var GenericHelper a GenericHelper instance

@var MultipartHelper a MultipartHelper instance

Constructor

@param MimePartFactory $mimePartFactory
@param UUEncodedPartFactory $uuEncodedPartFactory
@param PartBuilderFactory $partBuilderFactory
@param GenericHelper $genericHelper
@param MultipartHelper $multipartHelper

The passed message is set as multipart/signed, and a new part is created
below it with content headers, content and children copied from the
message.
@param Message $message
@param string $micalg
@param string $protocol

Sets the signature of the message to $body, creating a signature part if
one doesn't exist.
@param Message $message
@param string $body

Loops over parts of the message and sets the content-transfer-encoding
header to quoted-printable for text/* mime parts, and to base64
otherwise for parts that are '8bit' encoded.
Used for multipart/signed messages which doesn't support 8bit transfer
encodings.
@param Message $message

Ensures a non-text part comes first in a signed multipart/alternative
message as some clients seem to prefer the first content part if the
client doesn't understand multipart/signed.
@param Message $message

Returns a stream that can be used to read the content part of a signed
message, which can be used to sign an email or verify a signature.
The method simply returns the stream for the first child.  No
verification of whether the message is in fact a signed message is
performed.
Note that unlike getSignedMessageAsString, getSignedMessageStream doesn't
replace new lines.
@param Message $message
@return \Psr\Http\Message\StreamInterface or null if the message doesn't
        have any children

Returns a string containing the entire body (content) of a signed message
for verification or calculating a signature.
Non-CRLF new lines are replaced to always be CRLF.
@param Message $message
@return string or null if the message doesn't have any children

Returns the signature part of a multipart/signed message or null.
The signature part is determined to always be the 2nd child of a
multipart/signed message, the first being the 'body'.
Using the 'protocol' parameter of the Content-Type header is unreliable
in some instances (for instance a difference of x-pgp-signature versus
pgp-signature).
@param Message $message
@return \ZBateson\MailMimeParser\Message\Part\MimePart

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Helper\PrivacyHelper.php`

**Classes**:
- `ZBateson\MailMimeParser\Message\Helper\PrivacyHelper extends AbstractHelper`

**Functions/Methods**:
- `__construct(MimePartFactory $mimePartFactory,
        UUEncodedPartFactory $uuEncodedPartFactory,
        PartBuilderFactory $partBuilderFactory,
        GenericHelper $genericHelper,
        MultipartHelper $multipartHelper)`
- `setMessageAsMultipartSigned(Message $message, $micalg, $protocol)`
- `setSignature(Message $message, $body)`
- `overwrite8bitContentEncoding(Message $message)`
- `ensureHtmlPartFirstForSignedMessage(Message $message)`
- `getSignedMessageStream(Message $message)`
- `getSignedMessageAsString(Message $message)`
- `getSignaturePart(Message $message)`

