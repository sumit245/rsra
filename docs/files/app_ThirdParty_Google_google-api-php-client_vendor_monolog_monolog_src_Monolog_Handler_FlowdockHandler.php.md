# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\FlowdockHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\FlowdockHandler.php`
- Type: PHP
- Size: 3357 bytes

## Summary (from docblocks)

Sends notifications through the Flowdock push API
This must be configured with a FlowdockFormatter instance via setFormatter()
Notes:
API token - Flowdock API token
@author Dominik Liebler <liebler.dominik@gmail.com>
@see https://www.flowdock.com/api/push

@var string

@param string   $apiToken
@param bool|int $level    The minimum logging level at which this handler will be triggered
@param bool     $bubble   Whether the messages that are handled can bubble up the stack or not
@throws MissingExtensionException if OpenSSL is missing

{@inheritdoc}

Gets the default formatter.
@return FormatterInterface

{@inheritdoc}
@param array $record

{@inheritdoc}
@param  array  $record
@return string

Builds the body of API call
@param  array  $record
@return string

Builds the header of the API Call
@param  string $content
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\FlowdockHandler.php`

**Classes**:
- `Monolog\Handler\FlowdockHandler extends SocketHandler`

**Functions/Methods**:
- `__construct($apiToken, $level = Logger::DEBUG, $bubble = true)`
- `setFormatter(FormatterInterface $formatter)`
- `getDefaultFormatter()`
- `write(array $record)`
- `generateDataStream($record)`
- `buildContent($record)`
- `buildHeader($content)`

