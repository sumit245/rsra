# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SyslogHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SyslogHandler.php`
- Type: PHP
- Size: 1848 bytes

## Summary (from docblocks)

Logs to syslog service.
usage example:
  $log = new Logger('application');
  $syslog = new SyslogHandler('myfacility', 'local6');
  $formatter = new LineFormatter("%channel%.%level_name%: %message% %extra%");
  $syslog->setFormatter($formatter);
  $log->pushHandler($syslog);
@author Sven Paulus <sven@karlsruhe.org>

@param string  $ident
@param mixed   $facility
@param int     $level    The minimum logging level at which this handler will be triggered
@param Boolean $bubble   Whether the messages that are handled can bubble up the stack or not
@param int     $logopts  Option flags for the openlog() call, defaults to LOG_PID

{@inheritdoc}

{@inheritdoc}

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SyslogHandler.php`

**Classes**:
- `Monolog\Handler\SyslogHandler extends AbstractSyslogHandler`

**Functions/Methods**:
- `__construct($ident, $facility = LOG_USER, $level = Logger::DEBUG, $bubble = true, $logopts = LOG_PID)`
- `close()`
- `write(array $record)`

