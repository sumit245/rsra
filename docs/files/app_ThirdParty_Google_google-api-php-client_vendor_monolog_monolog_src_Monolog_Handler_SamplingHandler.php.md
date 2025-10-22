# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SamplingHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SamplingHandler.php`
- Type: PHP
- Size: 2674 bytes

## Summary (from docblocks)

Sampling handler
A sampled event stream can be useful for logging high frequency events in
a production environment where you only need an idea of what is happening
and are not concerned with capturing every occurrence. Since the decision to
handle or not handle a particular event is determined randomly, the
resulting sampled log is not guaranteed to contain 1/N of the events that
occurred in the application, but based on the Law of large numbers, it will
tend to be close to this ratio with a large number of attempts.
@author Bryan Davis <bd808@wikimedia.org>
@author Kunal Mehta <legoktm@gmail.com>

@var callable|HandlerInterface $handler

@var int $factor

@param callable|HandlerInterface $handler Handler or factory callable($record, $fingersCrossedHandler).
@param int                       $factor  Sample factor

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SamplingHandler.php`

**Classes**:
- `Monolog\Handler\SamplingHandler extends AbstractHandler`

**Functions/Methods**:
- `__construct($handler, $factor)`
- `isHandling(array $record)`
- `handle(array $record)`

