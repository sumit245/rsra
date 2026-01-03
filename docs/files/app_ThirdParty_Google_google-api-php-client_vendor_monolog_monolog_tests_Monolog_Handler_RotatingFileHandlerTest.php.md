# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\RotatingFileHandlerTest.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\RotatingFileHandlerTest.php`
- Type: PHP
- Size: 7849 bytes

## Summary (from docblocks)

@covers Monolog\Handler\RotatingFileHandler

This var should be private but then the anonymous function
in the `setUp` method won't be able to set it. `$this` cant't
be used in the anonymous function in `setUp` because PHP 5.3
does not support it.

@dataProvider rotationTests

@dataProvider dateFormatProvider

@dataProvider filenameFormatProvider

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\RotatingFileHandlerTest.php`

**Classes**:
- `Monolog\Handler\RotatingFileHandlerTest extends TestCase`

**Functions/Methods**:
- `setUp()`
- `assertErrorWasTriggered($code, $message)`
- `testRotationCreatesNewFile()`
- `testRotation($createFile, $dateFormat, $timeCallback)`
- `rotationTests()`
- `testAllowOnlyFixedDefinedDateFormats($dateFormat, $valid)`
- `dateFormatProvider()`
- `testDisallowFilenameFormatsWithoutDate($filenameFormat, $valid)`
- `filenameFormatProvider()`
- `testReuseCurrentFile()`
- `tearDown()`

