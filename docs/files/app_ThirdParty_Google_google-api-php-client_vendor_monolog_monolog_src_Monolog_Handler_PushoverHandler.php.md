# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\PushoverHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\PushoverHandler.php`
- Type: PHP
- Size: 6629 bytes

## Summary (from docblocks)

Sends notifications through the pushover api to mobile phones
@author Sebastian Göttschkes <sebastian.goettschkes@googlemail.com>
@see    https://www.pushover.net/api

All parameters that can be sent to Pushover
@see https://pushover.net/api
@var array

Sounds the api supports by default
@see https://pushover.net/api#sounds
@var array

@param string       $token             Pushover api token
@param string|array $users             Pushover user id or array of ids the message will be sent to
@param string       $title             Title sent to the Pushover API
@param int          $level             The minimum logging level at which this handler will be triggered
@param Boolean      $bubble            Whether the messages that are handled can bubble up the stack or not
@param Boolean      $useSSL            Whether to connect via SSL. Required when pushing messages to users that are not
                                       the pushover.net app owner. OpenSSL is required for this option.
@param int          $highPriorityLevel The minimum logging level at which this handler will start
                                       sending "high priority" requests to the Pushover API
@param int          $emergencyLevel    The minimum logging level at which this handler will start
                                       sending "emergency" requests to the Pushover API
@param int          $retry             The retry parameter specifies how often (in seconds) the Pushover servers will send the same notification to the user.
@param int          $expire            The expire parameter specifies how many seconds your notification will continue to be retried for (every retry seconds).

Use the formatted message?
@param bool $value

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\PushoverHandler.php`

**Classes**:
- `Monolog\Handler\PushoverHandler extends SocketHandler`

**Functions/Methods**:
- `__construct($token, $users, $title = null, $level = Logger::CRITICAL, $bubble = true, $useSSL = true, $highPriorityLevel = Logger::CRITICAL, $emergencyLevel = Logger::EMERGENCY, $retry = 30, $expire = 25200)`
- `generateDataStream($record)`
- `buildContent($record)`
- `buildHeader($content)`
- `write(array $record)`
- `setHighPriorityLevel($value)`
- `setEmergencyLevel($value)`
- `useFormattedMessage($value)`

