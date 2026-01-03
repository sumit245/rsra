# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Processor\IntrospectionProcessor.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Processor\IntrospectionProcessor.php`
- Type: PHP
- Size: 3535 bytes

## Summary (from docblocks)

Injects line/file:class/function where the log message came from
Warning: This only works if the handler processes the logs directly.
If you put the processor on a handler that is behind a FingersCrossedHandler
for example, the processor will only be called once the trigger level is reached,
and all the log records will have the same file/line/.. data from the call that
triggered the FingersCrossedHandler.
@author Jordi Boggiano <j.boggiano@seld.be>

@param  array $record
@return array

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Processor\IntrospectionProcessor.php`

**Classes**:
- `Monolog\Processor\IntrospectionProcessor`

**Functions/Methods**:
- `__construct($level = Logger::DEBUG, array $skipClassesPartials = array()`
- `__invoke(array $record)`
- `isTraceClassOrSkippedFunction(array $trace, $index)`

