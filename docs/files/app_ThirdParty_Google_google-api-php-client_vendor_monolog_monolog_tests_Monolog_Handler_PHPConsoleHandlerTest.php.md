# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\PHPConsoleHandlerTest.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\PHPConsoleHandlerTest.php`
- Type: PHP
- Size: 9892 bytes

## Summary (from docblocks)

@covers Monolog\Handler\PHPConsoleHandler
@author Sergey Barbushin https://www.linkedin.com/in/barbushin

@var  Connector|PHPUnit_Framework_MockObject_MockObject

@var  DebugDispatcher|PHPUnit_Framework_MockObject_MockObject

@var  ErrorDispatcher|PHPUnit_Framework_MockObject_MockObject

@expectedException Exception

@dataProvider provideConnectorMethodsOptionsSets

@dataProvider provideDumperOptionsValues

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\PHPConsoleHandlerTest.php`

**Classes**:
- `Monolog\Handler\PHPConsoleHandlerTest extends TestCase`

**Functions/Methods**:
- `setUp()`
- `initDebugDispatcherMock(Connector $connector)`
- `initErrorDispatcherMock(Connector $connector)`
- `initConnectorMock()`
- `getHandlerDefaultOption($name)`
- `initLogger($handlerOptions = array()`
- `testInitWithDefaultConnector()`
- `testInitWithCustomConnector()`
- `testDebug()`
- `testDebugContextInMessage()`
- `testDebugTags($tagsContextKeys = null)`
- `testError($classesPartialsTraceIgnore = null)`
- `testException()`
- `testWrongOptionsThrowsException()`
- `testOptionEnabled()`
- `testOptionClassesPartialsTraceIgnore()`
- `testOptionDebugTagsKeysInContext()`
- `testOptionUseOwnErrorsAndExceptionsHandler()`
- `provideConnectorMethodsOptionsSets()`
- `testOptionCallsConnectorMethod($option, $method, $value, $isArgument = true)`
- `testOptionDetectDumpTraceAndSource()`
- `provideDumperOptionsValues()`
- `testDumperOptions($option, $dumperProperty, $value)`

