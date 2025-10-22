# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\ZendMonitorHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\ZendMonitorHandler.php`
- Type: PHP
- Size: 2240 bytes

## Summary (from docblocks)

Handler sending logs to Zend Monitor
@author  Christian Bergau <cbergau86@gmail.com>

Monolog level / ZendMonitor Custom Event priority map
@var array

Construct
@param  int                       $level
@param  bool                      $bubble
@throws MissingExtensionException

{@inheritdoc}

Write a record to Zend Monitor
@param int    $level
@param string $message
@param array  $formatted

{@inheritdoc}

Get the level map
@return array

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\ZendMonitorHandler.php`

**Classes**:
- `Monolog\Handler\ZendMonitorHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `__construct($level = Logger::DEBUG, $bubble = true)`
- `write(array $record)`
- `writeZendMonitorCustomEvent($level, $message, $formatted)`
- `getDefaultFormatter()`
- `getLevelMap()`

