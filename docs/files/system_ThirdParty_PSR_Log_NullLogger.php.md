# system\ThirdParty\PSR\Log\NullLogger.php

- Path: `system\ThirdParty\PSR\Log\NullLogger.php`
- Type: PHP
- Size: 707 bytes

## Summary (from docblocks)

This Logger can be used to avoid conditional log calls.
Logging should always be optional, and if no logger is provided to your
library creating a NullLogger instance to have something to throw logs at
is a good way to avoid littering your code with `if ($this->logger) { }`
blocks.

Logs with an arbitrary level.
@param mixed  $level
@param string $message
@param array  $context
@return void
@throws \Psr\Log\InvalidArgumentException

## Symbols

# Symbols

**Files documented**: 1

## `system\ThirdParty\PSR\Log\NullLogger.php`

**Classes**:
- `Psr\Log\NullLogger extends AbstractLogger`

**Functions/Methods**:
- `log($level, $message, array $context = array()`

