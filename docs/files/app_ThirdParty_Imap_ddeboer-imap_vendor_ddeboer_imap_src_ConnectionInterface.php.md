# app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\ConnectionInterface.php

- Path: `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\ConnectionInterface.php`
- Type: PHP
- Size: 1626 bytes

## Summary (from docblocks)

A connection to an IMAP server that is authenticated for a user.

Get IMAP resource.
@return ImapResourceInterface

Delete all messages marked for deletion.
@return bool

Close connection.
@param int $flag
@return bool

Check if the connection is still active.
@return bool

Get a list of mailboxes (also known as folders).
@return MailboxInterface[]

Check that a mailbox with the given name exists.
@param string $name Mailbox name
@return bool

Get a mailbox by its name.
@param string $name Mailbox name
@return MailboxInterface

Create mailbox.
@param string $name
@return MailboxInterface

Create mailbox.
@param MailboxInterface $mailbox

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\ConnectionInterface.php`

**Functions/Methods**:
- `getResource()`
- `expunge()`
- `close(int $flag = 0)`
- `ping()`
- `getMailboxes()`
- `hasMailbox(string $name)`
- `getMailbox(string $name)`
- `createMailbox(string $name)`
- `deleteMailbox(MailboxInterface $mailbox)`

