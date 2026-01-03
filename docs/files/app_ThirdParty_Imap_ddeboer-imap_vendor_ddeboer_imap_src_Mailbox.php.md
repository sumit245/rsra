# app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Mailbox.php

- Path: `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Mailbox.php`
- Type: PHP
- Size: 8682 bytes

## Summary (from docblocks)

An IMAP mailbox (commonly referred to as a 'folder').

@var ImapResourceInterface

@var string

@var \stdClass

Constructor.
@param ImapResourceInterface $resource IMAP resource
@param string                $name     Mailbox decoded name
@param \stdClass             $info     Mailbox info

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

Get number of messages in this mailbox.
@return int

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

Prepare message ids for the use with bulk functions.
@param array|MessageIterator|string $messageIds Message numbers
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Mailbox.php`

**Classes**:
- `Ddeboer\Imap\Mailbox implements MailboxInterface`

**Functions/Methods**:
- `__construct(ImapResourceInterface $resource, string $name, \stdClass $info)`
- `getName()`
- `getEncodedName()`
- `getFullEncodedName()`
- `getAttributes()`
- `getDelimiter()`
- `count()`
- `getStatus(int $flags = null)`
- `setFlag(string $flag, $numbers)`
- `clearFlag(string $flag, $numbers)`
- `getMessages(ConditionInterface $search = null, int $sortCriteria = null, bool $descending = false)`
- `getMessageSequence(string $sequence)`
- `getMessage(int $number)`
- `getIterator()`
- `addMessage(string $message, string $options = null, DateTimeInterface $internalDate = null)`
- `getThread()`
- `move($numbers, MailboxInterface $mailbox)`
- `copy($numbers, MailboxInterface $mailbox)`
- `prepareMessageIds($messageIds)`

