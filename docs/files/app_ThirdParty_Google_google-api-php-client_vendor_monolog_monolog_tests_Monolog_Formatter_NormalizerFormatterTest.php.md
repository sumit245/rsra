# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Formatter\NormalizerFormatterTest.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Formatter\NormalizerFormatterTest.php`
- Type: PHP
- Size: 13946 bytes

## Summary (from docblocks)

@covers Monolog\Formatter\NormalizerFormatter

Test issue #137

@expectedException RuntimeException

@param mixed $in     Input
@param mixed $expect Expected output
@covers Monolog\Formatter\NormalizerFormatter::detectAndCleanUtf8
@dataProvider providesDetectAndCleanUtf8

@param int    $code
@param string $msg
@dataProvider providesHandleJsonErrorFailure

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Formatter\NormalizerFormatterTest.php`

**Classes**:
- `Monolog\Formatter\NormalizerFormatterTest extends \PHPUnit_Framework_TestCase`
- `Monolog\Formatter\TestFooNorm`
- `Monolog\Formatter\TestBarNorm`
- `Monolog\Formatter\TestStreamFoo`
- `Monolog\Formatter\TestToStringError`

**Functions/Methods**:
- `tearDown()`
- `testFormat()`
- `testFormatExceptions()`
- `testFormatSoapFaultException()`
- `testFormatToStringExceptionHandle()`
- `testBatchFormat()`
- `testIgnoresRecursiveObjectReferences()`
- `testIgnoresInvalidTypes()`
- `testNormalizeHandleLargeArrays()`
- `testThrowsOnInvalidEncoding()`
- `testConvertsInvalidEncodingAsLatin9()`
- `testDetectAndCleanUtf8($in, $expect)`
- `providesDetectAndCleanUtf8()`
- `testHandleJsonErrorFailure($code, $msg)`
- `providesHandleJsonErrorFailure()`
- `testExceptionTraceWithArgs()`
- `set_error_handler(function ($errno, $errstr, $errfile, $errline)`
- `__toString()`
- `__construct($resource)`
- `__toString()`
- `__toString()`

