# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\NewRelicHandlerTest.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\NewRelicHandlerTest.php`
- Type: PHP
- Size: 6061 bytes

## Summary (from docblocks)

@expectedException Monolog\Handler\MissingExtensionException

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\NewRelicHandlerTest.php`

**Classes**:
- `Monolog\Handler\NewRelicHandlerTest extends TestCase`
- `Monolog\Handler\StubNewRelicHandlerWithoutExtension extends NewRelicHandler`
- `Monolog\Handler\StubNewRelicHandler extends NewRelicHandler`

**Functions/Methods**:
- `setUp()`
- `testThehandlerThrowsAnExceptionIfTheNRExtensionIsNotLoaded()`
- `testThehandlerCanHandleTheRecord()`
- `testThehandlerCanAddContextParamsToTheNewRelicTrace()`
- `testThehandlerCanAddExplodedContextParamsToTheNewRelicTrace()`
- `testThehandlerCanAddExtraParamsToTheNewRelicTrace()`
- `testThehandlerCanAddExplodedExtraParamsToTheNewRelicTrace()`
- `testThehandlerCanAddExtraContextAndParamsToTheNewRelicTrace()`
- `testThehandlerCanHandleTheRecordsFormattedUsingTheLineFormatter()`
- `testTheAppNameIsNullByDefault()`
- `testTheAppNameCanBeInjectedFromtheConstructor()`
- `testTheAppNameCanBeOverriddenFromEachLog()`
- `testTheTransactionNameIsNullByDefault()`
- `testTheTransactionNameCanBeInjectedFromTheConstructor()`
- `testTheTransactionNameCanBeOverriddenFromEachLog()`
- `isNewRelicEnabled()`
- `isNewRelicEnabled()`
- `newrelic_notice_error()`
- `newrelic_set_appname($appname)`
- `newrelic_name_transaction($transactionName)`
- `newrelic_add_custom_parameter($key, $value)`

