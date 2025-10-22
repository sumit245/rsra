# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\Slack\SlackRecordTest.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\Slack\SlackRecordTest.php`
- Type: PHP
- Size: 13532 bytes

## Summary (from docblocks)

@coversDefaultClass Monolog\Handler\Slack\SlackRecord

@dataProvider dataGetAttachmentColor
@param  int $logLevel
@param  string $expectedColour RGB hex color or name of Slack color
@covers ::getAttachmentColor

@return array

@dataProvider dataStringify

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\Slack\SlackRecordTest.php`

**Classes**:
- `Monolog\Handler\Slack\SlackRecordTest extends TestCase`

**Functions/Methods**:
- `setUp()`
- `dataGetAttachmentColor()`
- `testGetAttachmentColor($logLevel, $expectedColour)`
- `testAddsChannel()`
- `testNoUsernameByDefault()`
- `dataStringify()`
- `testStringify($fields, $expectedResult)`
- `testAddsCustomUsername()`
- `testNoIcon()`
- `testAddsIcon()`
- `testAttachmentsNotPresentIfNoAttachment()`
- `testAddsOneAttachment()`
- `testTextEqualsMessageIfNoAttachment()`
- `testTextEqualsFormatterOutput()`
- `testAddsFallbackAndTextToAttachment()`
- `testMapsLevelToColorAttachmentColor()`
- `testAddsShortAttachmentWithoutContextAndExtra()`
- `testAddsShortAttachmentWithContextAndExtra()`
- `testAddsLongAttachmentWithoutContextAndExtra()`
- `testAddsLongAttachmentWithContextAndExtra()`
- `testAddsTimestampToAttachment()`
- `testExcludeExtraAndContextFields()`

