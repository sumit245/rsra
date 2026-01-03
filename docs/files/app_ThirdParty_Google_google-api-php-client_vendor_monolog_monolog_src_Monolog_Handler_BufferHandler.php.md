# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\BufferHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\BufferHandler.php`
- Type: PHP
- Size: 3436 bytes

## Summary (from docblocks)

Buffers all records until closing the handler and then pass them as batch.
This is useful for a MailHandler to send only one mail per request instead of
sending one per log message.
@author Christophe Coevoet <stof@notk.org>

@param HandlerInterface $handler         Handler.
@param int              $bufferLimit     How many entries should be buffered at most, beyond that the oldest items are removed from the buffer.
@param int              $level           The minimum logging level at which this handler will be triggered
@param Boolean          $bubble          Whether the messages that are handled can bubble up the stack or not
@param Boolean          $flushOnOverflow If true, the buffer is flushed when the max size has been reached, by default oldest entries are discarded

{@inheritdoc}

{@inheritdoc}

Clears the buffer without flushing any messages down to the wrapped handler.

## References

**Database Tables (inferred)**
- `the`
- `being`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\BufferHandler.php`

**Classes**:
- `Monolog\Handler\BufferHandler extends AbstractHandler`

**Functions/Methods**:
- `__construct(HandlerInterface $handler, $bufferLimit = 0, $level = Logger::DEBUG, $bubble = true, $flushOnOverflow = false)`
- `handle(array $record)`
- `flush()`
- `__destruct()`
- `close()`
- `clear()`

