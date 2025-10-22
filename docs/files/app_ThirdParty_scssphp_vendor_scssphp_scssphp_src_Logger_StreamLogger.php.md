# app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Logger\StreamLogger.php

- Path: `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Logger\StreamLogger.php`
- Type: PHP
- Size: 1274 bytes

## Summary (from docblocks)

SCSSPHP
@copyright 2012-2020 Leaf Corcoran
@license http://opensource.org/licenses/MIT MIT
@link http://scssphp.github.io/scssphp

A logger that prints to a PHP stream (for instance stderr)
@final

@param resource $stream          A stream resource
@param bool     $closeOnDestruct If true, takes ownership of the stream and close it on destruct to avoid leaks.

@internal

@inheritDoc

@inheritDoc

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Logger\StreamLogger.php`

**Classes**:
- `ScssPhp\ScssPhp\Logger\StreamLogger implements LoggerInterface`

**Functions/Methods**:
- `__construct($stream, $closeOnDestruct = false)`
- `__destruct()`
- `warn($message, $deprecation = false)`
- `debug($message)`

