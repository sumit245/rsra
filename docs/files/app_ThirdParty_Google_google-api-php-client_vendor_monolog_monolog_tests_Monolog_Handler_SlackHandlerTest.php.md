# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\SlackHandlerTest.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\SlackHandlerTest.php`
- Type: PHP
- Size: 5434 bytes

## Summary (from docblocks)

@author Greg Kedzierski <greg@gregkedzierski.com>
@see    https://api.slack.com/

@var resource

@var SlackHandler

@dataProvider provideLevelColors

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\tests\Monolog\Handler\SlackHandlerTest.php`

**Classes**:
- `Monolog\Handler\SlackHandlerTest extends TestCase`

**Functions/Methods**:
- `setUp()`
- `testWriteHeader()`
- `testWriteContent()`
- `testWriteContentUsesFormatterIfProvided()`
- `testWriteContentWithEmoji()`
- `testWriteContentWithColors($level, $expectedColor)`
- `testWriteContentWithPlainTextMessage()`
- `provideLevelColors()`
- `createHandler($token = 'myToken', $channel = 'channel1', $username = 'Monolog', $useAttachment = true, $iconEmoji = null, $useShortAttachment = false, $includeExtra = false)`

