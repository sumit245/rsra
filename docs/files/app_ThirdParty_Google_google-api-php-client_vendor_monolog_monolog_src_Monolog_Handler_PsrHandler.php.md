# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\PsrHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\PsrHandler.php`
- Type: PHP
- Size: 1433 bytes

## Summary (from docblocks)

Proxies log messages to an existing PSR-3 compliant logger.
@author Michael Moussa <michael.moussa@gmail.com>

PSR-3 compliant logger
@var LoggerInterface

@param LoggerInterface $logger The underlying PSR-3 compliant logger to which messages will be proxied
@param int             $level  The minimum logging level at which this handler will be triggered
@param Boolean         $bubble Whether the messages that are handled can bubble up the stack or not

{@inheritDoc}

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\PsrHandler.php`

**Classes**:
- `Monolog\Handler\PsrHandler extends AbstractHandler`

**Functions/Methods**:
- `__construct(LoggerInterface $logger, $level = Logger::DEBUG, $bubble = true)`
- `handle(array $record)`

