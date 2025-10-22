# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\DeduplicationHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\DeduplicationHandler.php`
- Type: PHP
- Size: 5479 bytes

## Summary (from docblocks)

Simple handler wrapper that deduplicates log records across multiple requests
It also includes the BufferHandler functionality and will buffer
all messages until the end of the request or flush() is called.
This works by storing all log records' messages above $deduplicationLevel
to the file specified by $deduplicationStore. When further logs come in at the end of the
request (or when flush() is called), all those above $deduplicationLevel are checked
against the existing stored logs. If they match and the timestamps in the stored log is
not older than $time seconds, the new log record is discarded. If no log record is new, the
whole data set is discarded.
This is mainly useful in combination with Mail handlers or things like Slack or HipChat handlers
that send messages to people, to avoid spamming with the same message over and over in case of
a major component failure like a database server being down which makes all requests fail in the
same way.
@author Jordi Boggiano <j.boggiano@seld.be>

@var string

@var int

@var int

@var bool

@param HandlerInterface $handler            Handler.
@param string           $deduplicationStore The file/path where the deduplication log should be kept
@param int              $deduplicationLevel The minimum logging level for log records to be looked at for deduplication purposes
@param int              $time               The period (in seconds) during which duplicate entries should be suppressed after a given log is sent through
@param Boolean          $bubble             Whether the messages that are handled can bubble up the stack or not

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\DeduplicationHandler.php`

**Classes**:
- `Monolog\Handler\DeduplicationHandler extends BufferHandler`

**Functions/Methods**:
- `__construct(HandlerInterface $handler, $deduplicationStore = null, $deduplicationLevel = Logger::ERROR, $time = 60, $bubble = true)`
- `flush()`
- `isDuplicate(array $record)`
- `collectLogs()`
- `appendRecord(array $record)`

