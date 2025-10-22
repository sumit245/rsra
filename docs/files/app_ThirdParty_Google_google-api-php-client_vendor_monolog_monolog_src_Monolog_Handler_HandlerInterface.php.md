# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\HandlerInterface.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\HandlerInterface.php`
- Type: PHP
- Size: 2597 bytes

## Summary (from docblocks)

Interface that all Monolog Handlers must implement
@author Jordi Boggiano <j.boggiano@seld.be>

Checks whether the given record will be handled by this handler.
This is mostly done for performance reasons, to avoid calling processors for nothing.
Handlers should still check the record levels within handle(), returning false in isHandling()
is no guarantee that handle() will not be called, and isHandling() might not be called
for a given record.
@param array $record Partial log record containing only a level key
@return Boolean

Handles a record.
All records may be passed to this method, and the handler should discard
those that it does not want to handle.
The return value of this function controls the bubbling process of the handler stack.
Unless the bubbling is interrupted (by returning true), the Logger class will keep on
calling further handlers in the stack with a given log record.
@param  array   $record The record to handle
@return Boolean true means that this handler handled the record, and that bubbling is not permitted.
                       false means the record was either not processed or that this handler allows bubbling.

Handles a set of records at once.
@param array $records The records to handle (an array of record arrays)

Adds a processor in the stack.
@param  callable $callback
@return self

Removes the processor on top of the stack and returns it.
@return callable

Sets the formatter.
@param  FormatterInterface $formatter
@return self

Gets the formatter.
@return FormatterInterface

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\HandlerInterface.php`

**Classes**:
- `Monolog\Handler\will`

**Functions/Methods**:
- `isHandling(array $record)`
- `handle(array $record)`
- `handleBatch(array $records)`
- `pushProcessor($callback)`
- `popProcessor()`
- `setFormatter(FormatterInterface $formatter)`
- `getFormatter()`

