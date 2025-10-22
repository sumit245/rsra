# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\RegistryTest.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\RegistryTest.php`
- Type: PHP
- Size: 3972 bytes

## Summary (from docblocks)

@dataProvider hasLoggerProvider
@covers Monolog\Registry::hasLogger

@covers Monolog\Registry::clear

@dataProvider removedLoggerProvider
@covers Monolog\Registry::addLogger
@covers Monolog\Registry::removeLogger

@covers Monolog\Registry::addLogger
@covers Monolog\Registry::getInstance
@covers Monolog\Registry::__callStatic

@expectedException \InvalidArgumentException
@covers Monolog\Registry::getInstance

@covers Monolog\Registry::addLogger

@expectedException \InvalidArgumentException
@covers Monolog\Registry::addLogger

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\RegistryTest.php`

**Classes**:
- `Monolog\RegistryTest extends \PHPUnit_Framework_TestCase`

**Functions/Methods**:
- `setUp()`
- `testHasLogger(array $loggersToAdd, array $loggersToCheck, array $expectedResult)`
- `hasLoggerProvider()`
- `testClearClears()`
- `testRemovesLogger($loggerToAdd, $remove)`
- `removedLoggerProvider()`
- `testGetsSameLogger()`
- `testFailsOnNonExistantLogger()`
- `testReplacesLogger()`
- `testFailsOnUnspecifiedReplacement()`

