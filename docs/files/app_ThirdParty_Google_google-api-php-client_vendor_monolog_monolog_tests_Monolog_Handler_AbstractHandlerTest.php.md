# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\AbstractHandlerTest.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\AbstractHandlerTest.php`
- Type: PHP
- Size: 4089 bytes

## Summary (from docblocks)

@covers Monolog\Handler\AbstractHandler::__construct
@covers Monolog\Handler\AbstractHandler::getLevel
@covers Monolog\Handler\AbstractHandler::setLevel
@covers Monolog\Handler\AbstractHandler::getBubble
@covers Monolog\Handler\AbstractHandler::setBubble
@covers Monolog\Handler\AbstractHandler::getFormatter
@covers Monolog\Handler\AbstractHandler::setFormatter

@covers Monolog\Handler\AbstractHandler::handleBatch

@covers Monolog\Handler\AbstractHandler::isHandling

@covers Monolog\Handler\AbstractHandler::__construct

@covers Monolog\Handler\AbstractHandler::getFormatter
@covers Monolog\Handler\AbstractHandler::getDefaultFormatter

@covers Monolog\Handler\AbstractHandler::pushProcessor
@covers Monolog\Handler\AbstractHandler::popProcessor
@expectedException LogicException

@covers Monolog\Handler\AbstractHandler::pushProcessor
@expectedException InvalidArgumentException

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\AbstractHandlerTest.php`

**Classes**:
- `Monolog\Handler\AbstractHandlerTest extends TestCase`

**Functions/Methods**:
- `testConstructAndGetSet()`
- `testHandleBatch()`
- `testIsHandling()`
- `testHandlesPsrStyleLevels()`
- `testGetFormatterInitializesDefault()`
- `testPushPopProcessor()`
- `testPushProcessorWithNonCallable()`

