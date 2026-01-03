# app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Message.php

- Path: `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Message.php`
- Type: PHP
- Size: 8994 bytes

## Summary (from docblocks)

An IMAP message (e-mail).

@var bool

@var bool

@var null|Message\Headers

@var null|string

@var null|string

Constructor.
@param ImapResourceInterface $resource      IMAP resource
@param int                   $messageNumber Message number

Lazy load structure.

Ensure message exists.
@param int $messageNumber

Get raw message headers.
@return string

Get the raw message, including all headers, parts, etc. unencoded and unparsed.
@return string the raw message

Get message headers.
@return Message\Headers

Clearmessage headers.

Get message recent flag value (from headers).
@return null|string

Get message unseen flag value (from headers).
@return bool

Get message flagged flag value (from headers).
@return bool

Get message answered flag value (from headers).
@return bool

Get message deleted flag value (from headers).
@return bool

Get message draft flag value (from headers).
@return bool

Has the message been marked as read?
@return bool

Mark message as seen.
@return bool
@deprecated since version 1.1, to be removed in 2.0

Mark message as seen.
@return bool

Move message to another mailbox.
@param MailboxInterface $mailbox
@throws MessageCopyException

Move message to another mailbox.
@param MailboxInterface $mailbox
@throws MessageMoveException

Delete message.
@throws MessageDeleteException

Set Flag Message.
@param string $flag \Seen, \Answered, \Flagged, \Deleted, and \Draft
@return bool

Clear Flag Message.
@param string $flag \Seen, \Answered, \Flagged, \Deleted, and \Draft
@return bool

## References

**Database Tables (inferred)**
- `headers`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Message.php`

**Classes**:
- `Ddeboer\Imap\Message extends Message\AbstractMessage implements MessageInterface`

**Functions/Methods**:
- `__construct(ImapResourceInterface $resource, int $messageNumber)`
- `lazyLoadStructure()`
- `assertMessageExists(int $messageNumber)`
- `getRawHeaders()`
- `getRawMessage()`
- `getHeaders()`
- `clearHeaders()`
- `isRecent()`
- `isUnseen()`
- `isFlagged()`
- `isAnswered()`
- `isDeleted()`
- `isDraft()`
- `isSeen()`
- `maskAsSeen()`
- `markAsSeen()`
- `copy(MailboxInterface $mailbox)`
- `move(MailboxInterface $mailbox)`
- `delete()`
- `setFlag(string $flag)`
- `clearFlag(string $flag)`

