# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\LogglyFormatter.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\LogglyFormatter.php`
- Type: PHP
- Size: 1322 bytes

## Summary (from docblocks)

Encodes message information into JSON in a format compatible with Loggly.
@author Adam Pancutt <adam@pancutt.com>

Overrides the default batch mode to new lines for compatibility with the
Loggly bulk API.
@param int $batchMode

Appends the 'timestamp' parameter for indexing by Loggly.
@see https://www.loggly.com/docs/automated-parsing/#json
@see \Monolog\Formatter\JsonFormatter::format()

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\LogglyFormatter.php`

**Classes**:
- `Monolog\Formatter\LogglyFormatter extends JsonFormatter`

**Functions/Methods**:
- `__construct($batchMode = self::BATCH_MODE_NEWLINES, $appendNewline = false)`
- `format(array $record)`

