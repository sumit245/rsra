# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SyslogUdpHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SyslogUdpHandler.php`
- Type: PHP
- Size: 2580 bytes

## Summary (from docblocks)

A Handler for logging to a remote syslogd server.
@author Jesper Skovgaard Nielsen <nulpunkt@gmail.com>

@param string  $host
@param int     $port
@param mixed   $facility
@param int     $level    The minimum logging level at which this handler will be triggered
@param Boolean $bubble   Whether the messages that are handled can bubble up the stack or not
@param string  $ident    Program name or tag for each log message.

Make common syslog header (see rfc5424)

Inject your own socket, mainly used for testing

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SyslogUdpHandler.php`

**Classes**:
- `Monolog\Handler\SyslogUdpHandler extends AbstractSyslogHandler`

**Functions/Methods**:
- `__construct($host, $port = 514, $facility = LOG_USER, $level = Logger::DEBUG, $bubble = true, $ident = 'php')`
- `write(array $record)`
- `close()`
- `splitMessageIntoLines($message)`
- `makeCommonSyslogHeader($severity)`
- `getDateTime()`
- `setSocket($socket)`

