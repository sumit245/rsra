# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\FingersCrossedHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\FingersCrossedHandler.php`
- Type: PHP
- Size: 5637 bytes

## Summary (from docblocks)

Buffers all records until a certain level is reached
The advantage of this approach is that you don't get any clutter in your log files.
Only requests which actually trigger an error (or whatever your actionLevel is) will be
in the logs, but they will contain all records, not only those above the level threshold.
You can find the various activation strategies in the
Monolog\Handler\FingersCrossed\ namespace.
@author Jordi Boggiano <j.boggiano@seld.be>

@param callable|HandlerInterface       $handler            Handler or factory callable($record, $fingersCrossedHandler).
@param int|ActivationStrategyInterface $activationStrategy Strategy which determines when this handler takes action
@param int                             $bufferSize         How many entries should be buffered at most, beyond that the oldest items are removed from the buffer.
@param Boolean                         $bubble             Whether the messages that are handled can bubble up the stack or not
@param Boolean                         $stopBuffering      Whether the handler should stop buffering after being triggered (default true)
@param int                             $passthruLevel      Minimum level to always flush to handler on close, even if strategy not triggered

{@inheritdoc}

Manually activate this logger regardless of the activation strategy

{@inheritdoc}

{@inheritdoc}

Resets the state of the handler. Stops forwarding records to the wrapped handler.

Clears the buffer without flushing any messages down to the wrapped handler.
It also resets the handler to its initial buffering state.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\FingersCrossedHandler.php`

**Classes**:
- `Monolog\Handler\FingersCrossedHandler extends AbstractHandler`

**Functions/Methods**:
- `__construct($handler, $activationStrategy = null, $bufferSize = 0, $bubble = true, $stopBuffering = true, $passthruLevel = null)`
- `isHandling(array $record)`
- `activate()`
- `handle(array $record)`
- `close()`
- `reset()`
- `clear()`

