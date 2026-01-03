# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\ErrorLogHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\ErrorLogHandler.php`
- Type: PHP
- Size: 2380 bytes

## Summary (from docblocks)

Stores to PHP error_log() handler.
@author Elan Ruusamäe <glen@delfi.ee>

@param int     $messageType    Says where the error should go.
@param int     $level          The minimum logging level at which this handler will be triggered
@param Boolean $bubble         Whether the messages that are handled can bubble up the stack or not
@param Boolean $expandNewlines If set to true, newlines in the message will be expanded to be take multiple log entries

@return array With all available types

{@inheritDoc}

{@inheritdoc}

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\ErrorLogHandler.php`

**Classes**:
- `Monolog\Handler\ErrorLogHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `__construct($messageType = self::OPERATING_SYSTEM, $level = Logger::DEBUG, $bubble = true, $expandNewlines = false)`
- `getAvailableTypes()`
- `getDefaultFormatter()`
- `write(array $record)`

