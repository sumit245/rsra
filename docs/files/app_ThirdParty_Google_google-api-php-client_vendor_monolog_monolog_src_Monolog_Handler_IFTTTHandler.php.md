# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\IFTTTHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\IFTTTHandler.php`
- Type: PHP
- Size: 2118 bytes

## Summary (from docblocks)

IFTTTHandler uses cURL to trigger IFTTT Maker actions
Register a secret key and trigger/event name at https://ifttt.com/maker
value1 will be the channel from monolog's Logger constructor,
value2 will be the level name (ERROR, WARNING, ..)
value3 will be the log record's message
@author Nehal Patel <nehal@nehalpatel.me>

@param string  $eventName The name of the IFTTT Maker event that should be triggered
@param string  $secretKey A valid IFTTT secret key
@param int     $level     The minimum logging level at which this handler will be triggered
@param Boolean $bubble    Whether the messages that are handled can bubble up the stack or not

{@inheritdoc}

## References

**Database Tables (inferred)**
- `monolog`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\IFTTTHandler.php`

**Classes**:
- `Monolog\Handler\IFTTTHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `__construct($eventName, $secretKey, $level = Logger::ERROR, $bubble = true)`
- `write(array $record)`

