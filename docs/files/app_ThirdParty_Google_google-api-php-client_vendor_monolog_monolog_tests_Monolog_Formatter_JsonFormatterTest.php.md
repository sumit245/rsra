# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Formatter\JsonFormatterTest.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Formatter\JsonFormatterTest.php`
- Type: PHP
- Size: 6113 bytes

## Summary (from docblocks)

@covers Monolog\Formatter\JsonFormatter::__construct
@covers Monolog\Formatter\JsonFormatter::getBatchMode
@covers Monolog\Formatter\JsonFormatter::isAppendingNewlines

@covers Monolog\Formatter\JsonFormatter::format

@covers Monolog\Formatter\JsonFormatter::formatBatch
@covers Monolog\Formatter\JsonFormatter::formatBatchJson

@covers Monolog\Formatter\JsonFormatter::formatBatch
@covers Monolog\Formatter\JsonFormatter::formatBatchNewlines

@param string $expected
@param string $actual
@internal param string $exception

@param JsonFormatter $formatter
@param \Exception|\Throwable $exception
@return string

@param \Exception|\Throwable $exception
@return string

@param \Exception|\Throwable $exception
@param null|string $previous
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Formatter\JsonFormatterTest.php`

**Classes**:
- `Monolog\Formatter\JsonFormatterTest extends TestCase`

**Functions/Methods**:
- `testConstruct()`
- `testFormat()`
- `testFormatBatch()`
- `testFormatBatchNewlines()`
- `testDefFormatWithException()`
- `testDefFormatWithPreviousException()`
- `testDefFormatWithThrowable()`
- `assertContextContainsFormattedException($expected, $actual)`
- `formatRecordWithExceptionInContext(JsonFormatter $formatter, $exception)`
- `formatExceptionFilePathWithLine($exception)`
- `formatException($exception, $previous = null)`

