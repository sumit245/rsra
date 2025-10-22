# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\FingersCrossed\ChannelLevelActivationStrategy.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\FingersCrossed\ChannelLevelActivationStrategy.php`
- Type: PHP
- Size: 1933 bytes

## Summary (from docblocks)

Channel and Error level based monolog activation strategy. Allows to trigger activation
based on level per channel. e.g. trigger activation on level 'ERROR' by default, except
for records of the 'sql' channel; those should trigger activation on level 'WARN'.
Example:
<code>
  $activationStrategy = new ChannelLevelActivationStrategy(
      Logger::CRITICAL,
      array(
          'request' => Logger::ALERT,
          'sensitive' => Logger::ERROR,
      )
  );
  $handler = new FingersCrossedHandler(new StreamHandler('php://stderr'), $activationStrategy);
</code>
@author Mike Meessen <netmikey@gmail.com>

@param int   $defaultActionLevel   The default action level to be used if the record's category doesn't match any
@param array $channelToActionLevel An array that maps channel names to action levels.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\FingersCrossed\ChannelLevelActivationStrategy.php`

**Classes**:
- `Monolog\Handler\FingersCrossed\ChannelLevelActivationStrategy implements ActivationStrategyInterface`

**Functions/Methods**:
- `__construct($defaultActionLevel, $channelToActionLevel = array()`
- `isHandlerActivated(array $record)`

