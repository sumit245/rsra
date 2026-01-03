# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\MongoDBHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\MongoDBHandler.php`
- Type: PHP
- Size: 1606 bytes

## Summary (from docblocks)

Logs to a MongoDB database.
usage example:
  $log = new Logger('application');
  $mongodb = new MongoDBHandler(new \Mongo("mongodb://localhost:27017"), "logs", "prod");
  $log->pushHandler($mongodb);
@author Thomas Tourlourat <thomas@tourlourat.com>

{@inheritDoc}

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\MongoDBHandler.php`

**Classes**:
- `Monolog\Handler\MongoDBHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `__construct($mongo, $database, $collection, $level = Logger::DEBUG, $bubble = true)`
- `write(array $record)`
- `getDefaultFormatter()`

