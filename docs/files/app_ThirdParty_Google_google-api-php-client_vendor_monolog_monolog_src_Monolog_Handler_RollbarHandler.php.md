# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\RollbarHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\RollbarHandler.php`
- Type: PHP
- Size: 3812 bytes

## Summary (from docblocks)

Sends errors to Rollbar
If the context data contains a `payload` key, that is used as an array
of payload options to RollbarNotifier's report_message/report_exception methods.
Rollbar's context info will contain the context + extra keys from the log record
merged, and then on top of that a few keys:
 - level (rollbar level name)
 - monolog_level (monolog level name, raw level, as rollbar only has 5 but monolog 8)
 - channel
 - datetime (unix timestamp)
@author Paul Statezny <paulstatezny@gmail.com>

Rollbar notifier
@var RollbarNotifier

Records whether any log records have been added since the last flush of the rollbar notifier
@var bool

@param RollbarNotifier $rollbarNotifier RollbarNotifier object constructed with valid token
@param int             $level           The minimum logging level at which this handler will be triggered
@param bool            $bubble          Whether the messages that are handled can bubble up the stack or not

{@inheritdoc}

{@inheritdoc}

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\RollbarHandler.php`

**Classes**:
- `Monolog\Handler\RollbarHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `__construct(RollbarNotifier $rollbarNotifier, $level = Logger::ERROR, $bubble = true)`
- `write(array $record)`
- `flush()`
- `close()`

