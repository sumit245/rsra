# app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\ImapResource.php

- Path: `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\ImapResource.php`
- Type: PHP
- Size: 2454 bytes

## Summary (from docblocks)

An imap resource stream.

@var resource

@var null|MailboxInterface

@var null|string

Constructor.
@param resource $resource

Get IMAP resource stream.
@throws InvalidResourceException
@return resource

Clear last mailbox used cache.

If connection is not currently in this mailbox, switch it to this mailbox.

Check whether the current mailbox is open.
@return bool

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\ImapResource.php`

**Classes**:
- `Ddeboer\Imap\ImapResource implements ImapResourceInterface`

**Functions/Methods**:
- `__construct($resource, MailboxInterface $mailbox = null)`
- `getStream()`
- `clearLastMailboxUsedCache()`
- `initMailbox()`
- `isMailboxOpen()`

