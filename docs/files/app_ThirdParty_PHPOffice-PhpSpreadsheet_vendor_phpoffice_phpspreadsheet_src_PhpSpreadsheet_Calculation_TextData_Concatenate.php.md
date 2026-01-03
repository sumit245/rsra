# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\TextData\Concatenate.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\TextData\Concatenate.php`
- Type: PHP
- Size: 3192 bytes

## Summary (from docblocks)

CONCATENATE.
@param array $args

TEXTJOIN.
@param mixed $delimiter The delimter to use between the joined arguments
                        Or can be an array of values
@param mixed $ignoreEmpty true/false Flag indicating whether empty arguments should be skipped
                        Or can be an array of values
@param mixed $args The values to join
@return array|string The joined string
        If an array of values is passed for the $delimiter or $ignoreEmpty arguments, then the returned result
           will also be an array with matching dimensions

REPT.
Returns the result of builtin function round after validating args.
@param mixed $stringValue The value to repeat
                        Or can be an array of values
@param mixed $repeatCount The number of times the string value should be repeated
                        Or can be an array of values
@return array|string The repeated string
        If an array of values is passed for the $stringValue or $repeatCount arguments, then the returned result
           will also be an array with matching dimensions

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\TextData\Concatenate.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\TextData\Concatenate`

**Functions/Methods**:
- `CONCATENATE(...$args)`
- `TEXTJOIN($delimiter, $ignoreEmpty, ...$args)`
- `builtinREPT($stringValue, $repeatCount)`

