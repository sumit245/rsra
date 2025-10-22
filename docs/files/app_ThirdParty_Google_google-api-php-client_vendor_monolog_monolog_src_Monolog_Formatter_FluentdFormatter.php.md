# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\FluentdFormatter.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\FluentdFormatter.php`
- Type: PHP
- Size: 2118 bytes

## Summary (from docblocks)

Class FluentdFormatter
Serializes a log message to Fluentd unix socket protocol
Fluentd config:
<source>
 type unix
 path /var/run/td-agent/td-agent.sock
</source>
Monolog setup:
$logger = new Monolog\Logger('fluent.tag');
$fluentHandler = new Monolog\Handler\SocketHandler('unix:///var/run/td-agent/td-agent.sock');
$fluentHandler->setFormatter(new Monolog\Formatter\FluentdFormatter());
$logger->pushHandler($fluentHandler);
@author Andrius Putna <fordnox@gmail.com>

@var bool $levelTag should message level be a part of the fluentd tag

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\FluentdFormatter.php`

**Classes**:
- `Monolog\Formatter\FluentdFormatter implements FormatterInterface`

**Functions/Methods**:
- `__construct($levelTag = false)`
- `isUsingLevelsInTag()`
- `format(array $record)`
- `formatBatch(array $records)`

