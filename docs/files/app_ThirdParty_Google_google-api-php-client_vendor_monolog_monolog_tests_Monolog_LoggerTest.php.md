# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\LoggerTest.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\LoggerTest.php`
- Type: PHP
- Size: 16714 bytes

## Summary (from docblocks)

@covers Monolog\Logger::getName

@covers Monolog\Logger::getLevelName

@covers Monolog\Logger::withName

@covers Monolog\Logger::toMonologLevel

@covers Monolog\Logger::getLevelName
@expectedException InvalidArgumentException

@covers Monolog\Logger::__construct

@covers Monolog\Logger::addRecord

@covers Monolog\Logger::addRecord

@covers Monolog\Logger::pushHandler
@covers Monolog\Logger::popHandler
@expectedException LogicException

@covers Monolog\Logger::setHandlers

@covers Monolog\Logger::pushProcessor
@covers Monolog\Logger::popProcessor
@expectedException LogicException

@covers Monolog\Logger::pushProcessor
@expectedException InvalidArgumentException

@covers Monolog\Logger::addRecord

@covers Monolog\Logger::addRecord

@covers Monolog\Logger::addRecord

@covers Monolog\Logger::addRecord

@covers Monolog\Logger::addRecord

@covers Monolog\Logger::addRecord

@covers Monolog\Logger::addRecord

@covers Monolog\Logger::isHandling

@dataProvider logMethodProvider
@covers Monolog\Logger::addDebug
@covers Monolog\Logger::addInfo
@covers Monolog\Logger::addNotice
@covers Monolog\Logger::addWarning
@covers Monolog\Logger::addError
@covers Monolog\Logger::addCritical
@covers Monolog\Logger::addAlert
@covers Monolog\Logger::addEmergency
@covers Monolog\Logger::debug
@covers Monolog\Logger::info
@covers Monolog\Logger::notice
@covers Monolog\Logger::warn
@covers Monolog\Logger::err
@covers Monolog\Logger::crit
@covers Monolog\Logger::alert
@covers Monolog\Logger::emerg

@dataProvider setTimezoneProvider
@covers Monolog\Logger::setTimezone

@dataProvider useMicrosecondTimestampsProvider
@covers Monolog\Logger::useMicrosecondTimestamps
@covers Monolog\Logger::addRecord

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\LoggerTest.php`

**Classes**:
- `Monolog\LoggerTest extends \PHPUnit_Framework_TestCase`

**Functions/Methods**:
- `testGetName()`
- `testGetLevelName()`
- `testWithName()`
- `testConvertPSR3ToMonologLevel()`
- `testGetLevelNameThrows()`
- `testChannel()`
- `testLog()`
- `testLogNotHandled()`
- `testHandlersInCtor()`
- `testProcessorsInCtor()`
- `testPushPopHandler()`
- `testSetHandlers()`
- `testPushPopProcessor()`
- `testPushProcessorWithNonCallable()`
- `testProcessorsAreExecuted()`
- `testProcessorsAreCalledOnlyOnce()`
- `testProcessorsNotCalledWhenNotHandled()`
- `testHandlersNotCalledBeforeFirstHandling()`
- `testHandlersNotCalledBeforeFirstHandlingWithAssocArray()`
- `testBubblingWhenTheHandlerReturnsFalse()`
- `testNotBubblingWhenTheHandlerReturnsTrue()`
- `testIsHandling()`
- `testLogMethods($method, $expectedLevel)`
- `logMethodProvider()`
- `testSetTimezone($tz)`
- `setTimezoneProvider()`
- `testUseMicrosecondTimestamps($micro, $assert)`
- `useMicrosecondTimestampsProvider()`

