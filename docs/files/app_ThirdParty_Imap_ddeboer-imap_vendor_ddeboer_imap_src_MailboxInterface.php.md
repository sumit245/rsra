# app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\MailboxInterface.php

- Path: `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\MailboxInterface.php`
- Type: PHP
- Size: 3785 bytes

## Summary (from docblocks)

An IMAP mailbox (commonly referred to as a 'folder').

Get mailbox decoded name.
@return string

Get mailbox encoded path.
@return string

Get mailbox encoded full name.
@return string

Get mailbox attributes.
@return int

Get mailbox delimiter.
@return string

Get Mailbox status.
@param null|int $flags
@return \stdClass

Bulk Set Flag for Messages.
@param string                       $flag    \Seen, \Answered, \Flagged, \Deleted, and \Draft
@param array|MessageIterator|string $numbers Message numbers
@return bool

Bulk Clear Flag for Messages.
@param string                       $flag    \Seen, \Answered, \Flagged, \Deleted, and \Draft
@param array|MessageIterator|string $numbers Message numbers
@return bool

Get message ids.
@param ConditionInterface $search Search expression (optional)
@return MessageIteratorInterface

Get message iterator for a sequence.
@param string $sequence Message numbers
@return MessageIteratorInterface

Get a message by message number.
@param int $number Message number
@return MessageInterface

Get messages in this mailbox.
@return MessageIteratorInterface

Add a message to the mailbox.
@param string                 $message
@param null|string            $options
@param null|DateTimeInterface $internalDate
@return bool

Returns a tree of threaded message for the current Mailbox.
@return array

Bulk move messages.
@param array|MessageIterator|string $numbers Message numbers
@param MailboxInterface             $mailbox Destination Mailbox to move the messages to
@throws \Ddeboer\Imap\Exception\MessageMoveException

Bulk copy messages.
@param array|MessageIterator|string $numbers Message numbers
@param MailboxInterface             $mailbox Destination Mailbox to copy the messages to
@throws \Ddeboer\Imap\Exception\MessageCopyException

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\MailboxInterface.php`

**Functions/Methods**:
- `getName()`
- `getEncodedName()`
- `getFullEncodedName()`
- `getAttributes()`
- `getDelimiter()`
- `getStatus(int $flags = null)`
- `setFlag(string $flag, $numbers)`
- `clearFlag(string $flag, $numbers)`
- `getMessages(ConditionInterface $search = null, int $sortCriteria = null, bool $descending = false)`
- `getMessageSequence(string $sequence)`
- `getMessage(int $number)`
- `getIterator()`
- `addMessage(string $message, string $options = null, DateTimeInterface $internalDate = null)`
- `getThread()`
- `move($numbers, self $mailbox)`
- `copy($numbers, self $mailbox)`

