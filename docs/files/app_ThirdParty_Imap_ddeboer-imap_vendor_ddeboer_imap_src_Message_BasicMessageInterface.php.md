# app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Message\BasicMessageInterface.php

- Path: `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Message\BasicMessageInterface.php`
- Type: PHP
- Size: 3146 bytes

## Summary (from docblocks)

Get raw message headers.
@return string

Get the raw message, including all headers, parts, etc. unencoded and unparsed.
@return string the raw message

Get message headers.
@return Headers

Get message id.
A unique message id in the form <...>
@return null|string

Get message sender (from headers).
@return null|EmailAddress

Get To recipients.
@return EmailAddress[] Empty array in case message has no To: recipients

Get Cc recipients.
@return EmailAddress[] Empty array in case message has no CC: recipients

Get Bcc recipients.
@return EmailAddress[] Empty array in case message has no BCC: recipients

Get Reply-To recipients.
@return EmailAddress[] Empty array in case message has no Reply-To: recipients

Get Sender.
@return EmailAddress[] Empty array in case message has no Sender: recipients

Get Return-Path.
@return EmailAddress[] Empty array in case message has no Return-Path: recipients

Get date (from headers).
@return null|\DateTimeImmutable

Get message size (from headers).
@return null|int|string

Get message subject (from headers).
@return null|string

Get message In-Reply-To (from headers).
@return array

Get message References (from headers).
@return array

Get body HTML.
@return null|string Null if message has no HTML message part

Get body text.
@return null|string

Get attachments (if any) linked to this e-mail.
@return AttachmentInterface[]

Does this message have attachments?
@return bool

## References

**Database Tables (inferred)**
- `headers`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Message\BasicMessageInterface.php`

**Functions/Methods**:
- `getRawHeaders()`
- `getRawMessage()`
- `getHeaders()`
- `getId()`
- `getFrom()`
- `getTo()`
- `getCc()`
- `getBcc()`
- `getReplyTo()`
- `getSender()`
- `getReturnPath()`
- `getDate()`
- `getSize()`
- `getSubject()`
- `getInReplyTo()`
- `getReferences()`
- `getBodyHtml()`
- `getBodyText()`
- `getAttachments()`
- `hasAttachments()`

