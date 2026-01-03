# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\MongoDBFormatter.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\MongoDBFormatter.php`
- Type: PHP
- Size: 3260 bytes

## Summary (from docblocks)

Formats a record for use with the MongoDBHandler.
@author Florian Plattner <me@florianplattner.de>

@param int  $maxNestingLevel        0 means infinite nesting, the $record itself is level 1, $record['context'] is 2
@param bool $exceptionTraceAsString set to false to log exception traces as a sub documents instead of strings

{@inheritDoc}

{@inheritDoc}

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\MongoDBFormatter.php`

**Classes**:
- `Monolog\Formatter\MongoDBFormatter implements FormatterInterface`

**Functions/Methods**:
- `__construct($maxNestingLevel = 3, $exceptionTraceAsString = true)`
- `format(array $record)`
- `formatBatch(array $records)`
- `formatArray(array $record, $nestingLevel = 0)`
- `formatObject($value, $nestingLevel)`
- `formatException(\Exception $exception, $nestingLevel)`
- `formatDate(\DateTime $value, $nestingLevel)`

