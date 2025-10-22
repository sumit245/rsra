# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\RedisHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\RedisHandler.php`
- Type: PHP
- Size: 2889 bytes

## Summary (from docblocks)

Logs to a Redis key using rpush
usage example:
  $log = new Logger('application');
  $redis = new RedisHandler(new Predis\Client("tcp://localhost:6379"), "logs", "prod");
  $log->pushHandler($redis);
@author Thomas Tourlourat <thomas@tourlourat.com>

@param \Predis\Client|\Redis $redis   The redis instance
@param string                $key     The key name to push records to
@param int                   $level   The minimum logging level at which this handler will be triggered
@param bool                  $bubble  Whether the messages that are handled can bubble up the stack or not
@param int                   $capSize Number of entries to limit list size to

{@inheritDoc}

Write and cap the collection
Writes the record to the redis list and caps its
@param  array $record associative record array
@return void

{@inheritDoc}

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\RedisHandler.php`

**Classes**:
- `Monolog\Handler\RedisHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `__construct($redis, $key, $level = Logger::DEBUG, $bubble = true, $capSize = false)`
- `write(array $record)`
- `writeCapped(array $record)`
- `getDefaultFormatter()`

