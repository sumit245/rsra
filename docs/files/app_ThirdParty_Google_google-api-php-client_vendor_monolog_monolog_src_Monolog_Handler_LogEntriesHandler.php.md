# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\LogEntriesHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\LogEntriesHandler.php`
- Type: PHP
- Size: 1601 bytes

## Summary (from docblocks)

@author Robert Kaufmann III <rok3@rok3.me>

@var string

@param string $token  Log token supplied by LogEntries
@param bool   $useSSL Whether or not SSL encryption should be used.
@param int    $level  The minimum logging level to trigger this handler
@param bool   $bubble Whether or not messages that are handled should bubble up the stack.
@throws MissingExtensionException If SSL encryption is set to true and OpenSSL is missing

{@inheritdoc}
@param  array  $record
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\LogEntriesHandler.php`

**Classes**:
- `Monolog\Handler\LogEntriesHandler extends SocketHandler`

**Functions/Methods**:
- `__construct($token, $useSSL = true, $level = Logger::DEBUG, $bubble = true)`
- `generateDataStream($record)`

