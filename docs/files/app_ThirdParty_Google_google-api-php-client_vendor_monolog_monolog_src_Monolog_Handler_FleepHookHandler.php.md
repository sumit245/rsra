# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\FleepHookHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\FleepHookHandler.php`
- Type: PHP
- Size: 3363 bytes

## Summary (from docblocks)

Sends logs to Fleep.io using Webhook integrations
You'll need a Fleep.io account to use this handler.
@see https://fleep.io/integrations/webhooks/ Fleep Webhooks Documentation
@author Ando Roots <ando@sqroot.eu>

@var string Webhook token (specifies the conversation where logs are sent)

Construct a new Fleep.io Handler.
For instructions on how to create a new web hook in your conversations
see https://fleep.io/integrations/webhooks/
@param  string                    $token  Webhook token
@param  bool|int                  $level  The minimum logging level at which this handler will be triggered
@param  bool                      $bubble Whether the messages that are handled can bubble up the stack or not
@throws MissingExtensionException

Returns the default formatter to use with this handler
Overloaded to remove empty context and extra arrays from the end of the log message.
@return LineFormatter

Handles a log record
@param array $record

{@inheritdoc}
@param  array  $record
@return string

Builds the header of the API Call
@param  string $content
@return string

Builds the body of API call
@param  array  $record
@return string

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\FleepHookHandler.php`

**Classes**:
- `Monolog\Handler\FleepHookHandler extends SocketHandler`

**Functions/Methods**:
- `__construct($token, $level = Logger::DEBUG, $bubble = true)`
- `getDefaultFormatter()`
- `write(array $record)`
- `generateDataStream($record)`
- `buildHeader($content)`
- `buildContent($record)`

