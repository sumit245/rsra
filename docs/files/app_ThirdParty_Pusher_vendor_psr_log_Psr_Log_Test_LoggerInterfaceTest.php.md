# app\ThirdParty\Pusher\vendor\psr\log\Psr\Log\Test\LoggerInterfaceTest.php

- Path: `app\ThirdParty\Pusher\vendor\psr\log\Psr\Log\Test\LoggerInterfaceTest.php`
- Type: PHP
- Size: 4649 bytes

## Summary (from docblocks)

Provides a base test class for ensuring compliance with the LoggerInterface.
Implementors can extend the class and implement abstract methods to run this
as part of their test suite.

@return LoggerInterface

This must return the log messages in order.
The simple formatting of the messages is: "<LOG LEVEL> <MESSAGE>".
Example ->error('Foo') would yield "error Foo".
@return string[]

@dataProvider provideLevelsAndMessages

@expectedException \Psr\Log\InvalidArgumentException

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\psr\log\Psr\Log\Test\LoggerInterfaceTest.php`

**Classes**:
- `Psr\Log\Test\for`
- `Psr\Log\Test\and`
- `Psr\Log\Test\LoggerInterfaceTest extends TestCase`

**Functions/Methods**:
- `getLogger()`
- `getLogs()`
- `testImplements()`
- `testLogsAtAllLevels($level, $message)`
- `provideLevelsAndMessages()`
- `testThrowsOnInvalidLevel()`
- `testContextReplacement()`
- `testObjectCastToString()`
- `testContextCanContainAnything()`
- `testContextExceptionKeyCanBeExceptionOrOtherValues()`

