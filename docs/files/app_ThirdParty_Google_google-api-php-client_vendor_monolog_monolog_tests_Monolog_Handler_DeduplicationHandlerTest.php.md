# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\DeduplicationHandlerTest.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\DeduplicationHandlerTest.php`
- Type: PHP
- Size: 6134 bytes

## Summary (from docblocks)

@covers Monolog\Handler\DeduplicationHandler::flush

@covers Monolog\Handler\DeduplicationHandler::flush
@covers Monolog\Handler\DeduplicationHandler::appendRecord

@covers Monolog\Handler\DeduplicationHandler::flush
@covers Monolog\Handler\DeduplicationHandler::appendRecord
@covers Monolog\Handler\DeduplicationHandler::isDuplicate
@depends testFlushPassthruIfEmptyLog

@covers Monolog\Handler\DeduplicationHandler::flush
@covers Monolog\Handler\DeduplicationHandler::appendRecord
@covers Monolog\Handler\DeduplicationHandler::isDuplicate
@depends testFlushPassthruIfEmptyLog

@covers Monolog\Handler\DeduplicationHandler::flush
@covers Monolog\Handler\DeduplicationHandler::appendRecord
@covers Monolog\Handler\DeduplicationHandler::isDuplicate
@covers Monolog\Handler\DeduplicationHandler::collectLogs

## References

**Database Tables (inferred)**
- `yesterday`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\DeduplicationHandlerTest.php`

**Classes**:
- `Monolog\Handler\DeduplicationHandlerTest extends TestCase`

**Functions/Methods**:
- `testFlushPassthruIfAllRecordsUnderTrigger()`
- `testFlushPassthruIfEmptyLog()`
- `testFlushSkipsIfLogExists()`
- `testFlushPassthruIfLogTooOld()`
- `testGcOldLogs()`
- `tearDownAfterClass()`

