# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\HipChatHandlerTest.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\HipChatHandlerTest.php`
- Type: PHP
- Size: 10473 bytes

## Summary (from docblocks)

@author Rafael Dohms <rafael@doh.ms>
@see    https://www.hipchat.com/docs/api

@var  HipChatHandler

@depends testWriteHeader

@depends testWriteCustomHostHeader

@depends testWriteV2

@depends testWriteV2Notify

@dataProvider provideLevelColors

@dataProvider provideBatchRecords

@expectedException InvalidArgumentException

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\HipChatHandlerTest.php`

**Classes**:
- `Monolog\Handler\HipChatHandlerTest extends TestCase`

**Functions/Methods**:
- `testWriteHeader()`
- `testWriteCustomHostHeader()`
- `testWriteV2()`
- `testWriteV2Notify()`
- `testRoomSpaces()`
- `testWriteContent($content)`
- `testWriteContentV1WithoutName()`
- `testWriteContentNotify($content)`
- `testWriteContentV2($content)`
- `testWriteContentV2Notify($content)`
- `testWriteContentV2WithoutName()`
- `testWriteWithComplexMessage()`
- `testWriteTruncatesLongMessage()`
- `testWriteWithErrorLevelsAndColors($level, $expectedColor)`
- `provideLevelColors()`
- `testHandleBatch($records, $expectedColor)`
- `provideBatchRecords()`
- `createHandler($token = 'myToken', $room = 'room1', $name = 'Monolog', $notify = false, $host = 'api.hipchat.com', $version = 'v1')`
- `testCreateWithTooLongName()`
- `testCreateWithTooLongNameV2()`

