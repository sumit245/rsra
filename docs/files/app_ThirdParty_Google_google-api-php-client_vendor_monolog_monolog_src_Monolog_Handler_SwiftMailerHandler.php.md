# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SwiftMailerHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SwiftMailerHandler.php`
- Type: PHP
- Size: 3095 bytes

## Summary (from docblocks)

SwiftMailerHandler uses Swift_Mailer to send the emails
@author Gyula Sallai

@param \Swift_Mailer           $mailer  The mailer to use
@param callable|\Swift_Message $message An example message for real messages, only the body will be replaced
@param int                     $level   The minimum logging level at which this handler will be triggered
@param Boolean                 $bubble  Whether the messages that are handled can bubble up the stack or not

{@inheritdoc}

Creates instance of Swift_Message to be sent
@param  string         $content formatted email body to be sent
@param  array          $records Log records that formed the content
@return \Swift_Message

BC getter, to be removed in 2.0

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SwiftMailerHandler.php`

**Classes**:
- `Monolog\Handler\SwiftMailerHandler extends MailHandler`

**Functions/Methods**:
- `__construct(\Swift_Mailer $mailer, $message, $level = Logger::ERROR, $bubble = true)`
- `send($content, array $records)`
- `buildMessage($content, array $records)`
- `__get($name)`

