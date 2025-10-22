# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\StreamHandlerTest.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\StreamHandlerTest.php`
- Type: PHP
- Size: 5939 bytes

## Summary (from docblocks)

@covers Monolog\Handler\StreamHandler::__construct
@covers Monolog\Handler\StreamHandler::write

@covers Monolog\Handler\StreamHandler::close

@covers Monolog\Handler\StreamHandler::close

@covers Monolog\Handler\StreamHandler::write

@covers Monolog\Handler\StreamHandler::__construct
@covers Monolog\Handler\StreamHandler::write

@expectedException LogicException
@covers Monolog\Handler\StreamHandler::__construct
@covers Monolog\Handler\StreamHandler::write

@dataProvider invalidArgumentProvider
@expectedException InvalidArgumentException
@covers Monolog\Handler\StreamHandler::__construct

@expectedException UnexpectedValueException
@covers Monolog\Handler\StreamHandler::__construct
@covers Monolog\Handler\StreamHandler::write

@expectedException UnexpectedValueException
@covers Monolog\Handler\StreamHandler::__construct
@covers Monolog\Handler\StreamHandler::write

@covers Monolog\Handler\StreamHandler::__construct
@covers Monolog\Handler\StreamHandler::write

@covers Monolog\Handler\StreamHandler::__construct
@covers Monolog\Handler\StreamHandler::write

@expectedException Exception
@expectedExceptionMessageRegExp /There is no existing directory at/
@covers Monolog\Handler\StreamHandler::__construct
@covers Monolog\Handler\StreamHandler::write

@expectedException Exception
@expectedExceptionMessageRegExp /There is no existing directory at/
@covers Monolog\Handler\StreamHandler::__construct
@covers Monolog\Handler\StreamHandler::write

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\StreamHandlerTest.php`

**Classes**:
- `Monolog\Handler\StreamHandlerTest extends TestCase`

**Functions/Methods**:
- `testWrite()`
- `testCloseKeepsExternalHandlersOpen()`
- `testClose()`
- `testWriteCreatesTheStreamResource()`
- `testWriteLocking()`
- `testWriteMissingResource()`
- `invalidArgumentProvider()`
- `testWriteInvalidArgument($invalidArgument)`
- `testWriteInvalidResource()`
- `testWriteNonExistingResource()`
- `testWriteNonExistingPath()`
- `testWriteNonExistingFileResource()`
- `testWriteNonExistingAndNotCreatablePath()`
- `testWriteNonExistingAndNotCreatableFileResource()`

