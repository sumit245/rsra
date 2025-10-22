# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\GelfMessageFormatter.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\GelfMessageFormatter.php`
- Type: PHP
- Size: 4408 bytes

## Summary (from docblocks)

Serializes a log message to GELF
@see http://www.graylog2.org/about/gelf
@author Matt Lehner <mlehner@gmail.com>

@var string the name of the system for the Gelf log message

@var string a prefix for 'extra' fields from the Monolog record (optional)

@var string a prefix for 'context' fields from the Monolog record (optional)

@var int max length per field

Translates Monolog log levels to Graylog2 log priorities.

{@inheritdoc}

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\GelfMessageFormatter.php`

**Classes**:
- `Monolog\Formatter\GelfMessageFormatter extends NormalizerFormatter`

**Functions/Methods**:
- `__construct($systemName = null, $extraPrefix = null, $contextPrefix = 'ctxt_', $maxLength = null)`
- `format(array $record)`

