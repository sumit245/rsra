# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Registry.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Registry.php`
- Type: PHP
- Size: 4024 bytes

## Summary (from docblocks)

Monolog log registry
Allows to get `Logger` instances in the global scope
via static method calls on this class.
<code>
$application = new Monolog\Logger('application');
$api = new Monolog\Logger('api');
Monolog\Registry::addLogger($application);
Monolog\Registry::addLogger($api);
function testLogger()
{
    Monolog\Registry::api()->addError('Sent to $api Logger instance');
    Monolog\Registry::application()->addError('Sent to $application Logger instance');
}
</code>
@author Tomas Tatarko <tomas@tatarko.sk>

List of all loggers in the registry (by named indexes)
@var Logger[]

Adds new logging channel to the registry
@param  Logger                    $logger    Instance of the logging channel
@param  string|null               $name      Name of the logging channel ($logger->getName() by default)
@param  bool                      $overwrite Overwrite instance in the registry if the given name already exists?
@throws \InvalidArgumentException If $overwrite set to false and named Logger instance already exists

Checks if such logging channel exists by name or instance
@param string|Logger $logger Name or logger instance

Removes instance from registry by name or instance
@param string|Logger $logger Name or logger instance

Clears the registry

Gets Logger instance from the registry
@param  string                    $name Name of the requested Logger instance
@throws \InvalidArgumentException If named Logger instance is not in the registry
@return Logger                    Requested instance of Logger

Gets Logger instance from the registry via static method call
@param  string                    $name      Name of the requested Logger instance
@param  array                     $arguments Arguments passed to static method call
@throws \InvalidArgumentException If named Logger instance is not in the registry
@return Logger                    Requested instance of Logger

## References

**Database Tables (inferred)**
- `registry`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Registry.php`

**Classes**:
- `Monolog\Registry`

**Functions/Methods**:
- `testLogger()`
- `addLogger(Logger $logger, $name = null, $overwrite = false)`
- `hasLogger($logger)`
- `removeLogger($logger)`
- `clear()`
- `getInstance($name)`
- `__callStatic($name, $arguments)`

