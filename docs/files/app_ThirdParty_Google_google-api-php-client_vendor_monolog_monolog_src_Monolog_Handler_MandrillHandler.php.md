# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\MandrillHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\MandrillHandler.php`
- Type: PHP
- Size: 2156 bytes

## Summary (from docblocks)

MandrillHandler uses cURL to send the emails to the Mandrill API
@author Adam Nicholson <adamnicholson10@gmail.com>

@param string                  $apiKey  A valid Mandrill API key
@param callable|\Swift_Message $message An example message for real messages, only the body will be replaced
@param int                     $level   The minimum logging level at which this handler will be triggered
@param Boolean                 $bubble  Whether the messages that are handled can bubble up the stack or not

{@inheritdoc}

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\MandrillHandler.php`

**Classes**:
- `Monolog\Handler\MandrillHandler extends MailHandler`

**Functions/Methods**:
- `__construct($apiKey, $message, $level = Logger::ERROR, $bubble = true)`
- `send($content, array $records)`

