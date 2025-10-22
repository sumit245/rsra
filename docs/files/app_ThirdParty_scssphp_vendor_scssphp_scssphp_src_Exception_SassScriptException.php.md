# app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Exception\SassScriptException.php

- Path: `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Exception\SassScriptException.php`
- Type: PHP
- Size: 915 bytes

## Summary (from docblocks)

An exception thrown by SassScript.
This class does not implement SassException on purpose, as it should
never be returned to the outside code. The compilation will catch it
and replace it with a SassException reporting the location of the
error.

Creates a SassScriptException with support for an argument name.
This helper ensures a consistent handling of argument names in the
error message, without duplicating it.
@param string      $message
@param string|null $name    The argument name, without $
@return SassScriptException

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Exception\SassScriptException.php`

**Classes**:
- `ScssPhp\ScssPhp\Exception\does`
- `ScssPhp\ScssPhp\Exception\SassScriptException extends \Exception`

**Functions/Methods**:
- `forArgument($message, $name = null)`

