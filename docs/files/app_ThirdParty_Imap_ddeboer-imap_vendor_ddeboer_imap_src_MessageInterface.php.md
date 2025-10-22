# app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\MessageInterface.php

- Path: `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\MessageInterface.php`
- Type: PHP
- Size: 2330 bytes

## Summary (from docblocks)

An IMAP message (e-mail).

Get raw part content.
@return string

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

Move message to another mailbox.
@param MailboxInterface $mailbox

Delete message.

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

## `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\MessageInterface.php`

**Functions/Methods**:
- `getContent()`
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

