# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\SocketHandlerTest.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\SocketHandlerTest.php`
- Type: PHP
- Size: 8702 bytes

## Summary (from docblocks)

@author Pablo de Leon Belloc <pablolb@gmail.com>

@var Monolog\Handler\SocketHandler

@var resource

@expectedException UnexpectedValueException

@expectedException \InvalidArgumentException

@expectedException \InvalidArgumentException

@expectedException UnexpectedValueException

@expectedException UnexpectedValueException

@expectedException UnexpectedValueException

@expectedException RuntimeException

@expectedException RuntimeException

@expectedException RuntimeException

@expectedException \RuntimeException

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\SocketHandlerTest.php`

**Classes**:
- `Monolog\Handler\SocketHandlerTest extends TestCase`

**Functions/Methods**:
- `testInvalidHostname()`
- `testBadConnectionTimeout()`
- `testSetConnectionTimeout()`
- `testBadTimeout()`
- `testSetTimeout()`
- `testSetWritingTimeout()`
- `testSetConnectionString()`
- `testExceptionIsThrownOnFsockopenError()`
- `testExceptionIsThrownOnPfsockopenError()`
- `testExceptionIsThrownIfCannotSetTimeout()`
- `testWriteFailsOnIfFwriteReturnsFalse()`
- `testWriteFailsIfStreamTimesOut()`
- `testWriteFailsOnIncompleteWrite()`
- `testWriteWithMemoryFile()`
- `testWriteWithMock()`
- `testClose()`
- `testCloseDoesNotClosePersistentSocket()`
- `testAvoidInfiniteLoopWhenNoDataIsWrittenForAWritingTimeoutSeconds()`
- `createHandler($connectionString)`
- `writeRecord($string)`
- `setMockHandler(array $methods = array()`

