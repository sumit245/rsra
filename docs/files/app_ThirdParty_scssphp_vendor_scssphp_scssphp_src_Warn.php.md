# app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Warn.php

- Path: `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Warn.php`
- Type: PHP
- Size: 1991 bytes

## Summary (from docblocks)

SCSSPHP
@copyright 2012-2020 Leaf Corcoran
@license http://opensource.org/licenses/MIT MIT
@link http://scssphp.github.io/scssphp

@var callable|null
@phpstan-var (callable(string, bool): void)|null

Prints a warning message associated with the current `@import` or function call.
This may only be called within a custom function or importer callback.
@param string $message
@return void

Prints a deprecation warning message associated with the current `@import` or function call.
This may only be called within a custom function or importer callback.
@param string $message
@return void

@param callable|null $callback
@return callable|null The previous warn callback
@phpstan-param (callable(string, bool): void)|null $callback
@phpstan-return (callable(string, bool): void)|null
@internal

@param string $message
@param bool   $deprecation
@return void

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Warn.php`

**Classes**:
- `ScssPhp\ScssPhp\Warn`

**Functions/Methods**:
- `warning($message)`
- `deprecation($message)`
- `setCallback(callable $callback = null)`
- `reportWarning($message, $deprecation)`

