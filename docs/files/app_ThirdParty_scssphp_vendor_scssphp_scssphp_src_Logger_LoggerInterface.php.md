# app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Logger\LoggerInterface.php

- Path: `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Logger\LoggerInterface.php`
- Type: PHP
- Size: 1141 bytes

## Summary (from docblocks)

SCSSPHP
@copyright 2012-2020 Leaf Corcoran
@license http://opensource.org/licenses/MIT MIT
@link http://scssphp.github.io/scssphp

Interface implemented by loggers for warnings and debug messages.
The official Sass implementation recommends that loggers report the
messages immediately rather than waiting for the end of the
compilation, to provide a better debugging experience when the
compilation does not end (error or infinite loop after the warning
for instance).

Emits a warning with the given message.
If $deprecation is true, it indicates that this is a deprecation
warning. Implementations should surface all this information to
the end user.
@param string $message
@param bool  $deprecation
@return void

Emits a debugging message.
@param string $message
@return void

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Logger\LoggerInterface.php`

**Functions/Methods**:
- `warn($message, $deprecation = false)`
- `debug($message)`

