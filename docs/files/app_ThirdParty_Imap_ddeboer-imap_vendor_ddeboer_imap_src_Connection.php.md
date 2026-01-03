# app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Connection.php

- Path: `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Connection.php`
- Type: PHP
- Size: 5360 bytes

## Summary (from docblocks)

A connection to an IMAP server that is authenticated for a user.

@var ImapResourceInterface

@var string

@var null|array

@var null|array

Constructor.
@param ImapResourceInterface $resource
@param string                $server
@throws \InvalidArgumentException

Get IMAP resource.
@return ImapResourceInterface

Delete all messages marked for deletion.
@return bool

Close connection.
@param int $flag
@return bool

Get a list of mailboxes (also known as folders).
@return MailboxInterface[]

Check that a mailbox with the given name exists.
@param string $name Mailbox name
@return bool

Get a mailbox by its name.
@param string $name Mailbox name
@throws MailboxDoesNotExistException If mailbox does not exist
@return MailboxInterface

Count number of messages not in any mailbox.
@return int

Check if the connection is still active.
@throws InvalidResourceException If connection was closed
@return bool

Create mailbox.
@param string $name
@throws CreateMailboxException
@return MailboxInterface

Create mailbox.
@param MailboxInterface $mailbox
@throws DeleteMailboxException

Get mailbox names.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Connection.php`

**Classes**:
- `Ddeboer\Imap\Connection implements ConnectionInterface`

**Functions/Methods**:
- `__construct(ImapResourceInterface $resource, string $server)`
- `getResource()`
- `expunge()`
- `close(int $flag = 0)`
- `getMailboxes()`
- `hasMailbox(string $name)`
- `getMailbox(string $name)`
- `count()`
- `ping()`
- `createMailbox(string $name)`
- `deleteMailbox(MailboxInterface $mailbox)`
- `initMailboxNames()`

