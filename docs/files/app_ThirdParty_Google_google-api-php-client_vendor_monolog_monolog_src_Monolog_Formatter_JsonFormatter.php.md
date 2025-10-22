# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\JsonFormatter.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\JsonFormatter.php`
- Type: PHP
- Size: 5482 bytes

## Summary (from docblocks)

Encodes whatever record data is passed to it as json
This can be useful to log to databases or remote APIs
@author Jordi Boggiano <j.boggiano@seld.be>

@var bool

@param int $batchMode
@param bool $appendNewline

The batch mode option configures the formatting style for
multiple records. By default, multiple records will be
formatted as a JSON-encoded array. However, for
compatibility with some API endpoints, alternative styles
are available.
@return int

True if newlines are appended to every formatted record
@return bool

{@inheritdoc}

{@inheritdoc}

@param bool $include

Return a JSON-encoded array of records.
@param  array  $records
@return string

Use new lines to separate records instead of a
JSON-encoded array.
@param  array  $records
@return string

Normalizes given $data.
@param mixed $data
@return mixed

Normalizes given exception with or without its own stack trace based on
`includeStacktraces` property.
@param Exception|Throwable $e
@return array

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\JsonFormatter.php`

**Classes**:
- `Monolog\Formatter\JsonFormatter extends NormalizerFormatter`

**Functions/Methods**:
- `__construct($batchMode = self::BATCH_MODE_JSON, $appendNewline = true)`
- `getBatchMode()`
- `isAppendingNewlines()`
- `format(array $record)`
- `formatBatch(array $records)`
- `includeStacktraces($include = true)`
- `formatBatchJson(array $records)`
- `formatBatchNewlines(array $records)`
- `normalize($data)`
- `normalizeException($e)`

