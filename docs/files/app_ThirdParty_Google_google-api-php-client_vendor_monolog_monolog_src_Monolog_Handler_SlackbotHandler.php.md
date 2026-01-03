# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SlackbotHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SlackbotHandler.php`
- Type: PHP
- Size: 2029 bytes

## Summary (from docblocks)

Sends notifications through Slack's Slackbot
@author Haralan Dobrev <hkdobrev@gmail.com>
@see    https://slack.com/apps/A0F81R8ET-slackbot

The slug of the Slack team
@var string

Slackbot token
@var string

Slack channel name
@var string

@param  string $slackTeam Slack team slug
@param  string $token     Slackbot token
@param  string $channel   Slack channel (encoded ID or name)
@param  int    $level     The minimum logging level at which this handler will be triggered
@param  bool   $bubble    Whether the messages that are handled can bubble up the stack or not

{@inheritdoc}
@param array $record

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SlackbotHandler.php`

**Classes**:
- `Monolog\Handler\SlackbotHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `__construct($slackTeam, $token, $channel, $level = Logger::CRITICAL, $bubble = true)`
- `write(array $record)`

