# system\ThirdParty\PSR\Log\LoggerTrait.php

- Path: `system\ThirdParty\PSR\Log\LoggerTrait.php`
- Type: PHP
- Size: 3415 bytes

## Summary (from docblocks)

This is a simple Logger trait that classes unable to extend AbstractLogger
(because they extend another class, etc) can include.
It simply delegates all log-level-specific methods to the `log` method to
reduce boilerplate code that a simple Logger that does the same thing with
messages regardless of the error level has to implement.

System is unusable.
@param string $message
@param array  $context
@return void

Action must be taken immediately.
Example: Entire website down, database unavailable, etc. This should
trigger the SMS alerts and wake you up.
@param string $message
@param array  $context
@return void

Critical conditions.
Example: Application component unavailable, unexpected exception.
@param string $message
@param array  $context
@return void

Runtime errors that do not require immediate action but should typically
be logged and monitored.
@param string $message
@param array  $context
@return void

Exceptional occurrences that are not errors.
Example: Use of deprecated APIs, poor use of an API, undesirable things
that are not necessarily wrong.
@param string $message
@param array  $context
@return void

Normal but significant events.
@param string $message
@param array  $context
@return void

Interesting events.
Example: User logs in, SQL logs.
@param string $message
@param array  $context
@return void

Detailed debug information.
@param string $message
@param array  $context
@return void

Logs with an arbitrary level.
@param mixed  $level
@param string $message
@param array  $context
@return void
@throws \Psr\Log\InvalidArgumentException

## Symbols

# Symbols

**Files documented**: 1

## `system\ThirdParty\PSR\Log\LoggerTrait.php`

**Functions/Methods**:
- `emergency($message, array $context = array()`
- `alert($message, array $context = array()`
- `critical($message, array $context = array()`
- `error($message, array $context = array()`
- `warning($message, array $context = array()`
- `notice($message, array $context = array()`
- `info($message, array $context = array()`
- `debug($message, array $context = array()`
- `log($level, $message, array $context = array()`

