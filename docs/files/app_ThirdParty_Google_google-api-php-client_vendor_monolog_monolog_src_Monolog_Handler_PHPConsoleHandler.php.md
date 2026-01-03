# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\PHPConsoleHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\PHPConsoleHandler.php`
- Type: PHP
- Size: 9990 bytes

## Summary (from docblocks)

Monolog handler for Google Chrome extension "PHP Console"
Display PHP error/debug log messages in Google Chrome console and notification popups, executes PHP code remotely
Usage:
1. Install Google Chrome extension https://chrome.google.com/webstore/detail/php-console/nfhmhhlpfleoednkpnnnkolmclajemef
2. See overview https://github.com/barbushin/php-console#overview
3. Install PHP Console library https://github.com/barbushin/php-console#installation
4. Example (result will looks like http://i.hizliresim.com/vg3Pz4.png)
     $logger = new \Monolog\Logger('all', array(new \Monolog\Handler\PHPConsoleHandler()));
     \Monolog\ErrorHandler::register($logger);
     echo $undefinedVar;
     $logger->addDebug('SELECT * FROM users', array('db', 'time' => 0.012));
     PC::debug($_SERVER); // PHP Console debugger for any type of vars
@author Sergey Barbushin https://www.linkedin.com/in/barbushin

@var Connector

@param  array          $options   See \Monolog\Handler\PHPConsoleHandler::$options for more details
@param  Connector|null $connector Instance of \PhpConsole\Connector class (optional)
@param  int            $level
@param  bool           $bubble
@throws Exception

Writes the record down to the log of the implementing handler
@param  array $record
@return void

{@inheritDoc}

## References

**Database Tables (inferred)**
- `users`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\PHPConsoleHandler.php`

**Classes**:
- `Monolog\Handler\PHPConsoleHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `__construct(array $options = array()`
- `initOptions(array $options)`
- `initConnector(Connector $connector = null)`
- `getConnector()`
- `getOptions()`
- `handle(array $record)`
- `write(array $record)`
- `handleDebugRecord(array $record)`
- `handleExceptionRecord(array $record)`
- `handleErrorRecord(array $record)`
- `getRecordTags(array &$record)`
- `getDefaultFormatter()`

