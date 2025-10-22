# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\ArrayEnabled.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\ArrayEnabled.php`
- Type: PHP
- Size: 5032 bytes

## Summary (from docblocks)

@var ArrayArgumentHelper

@param array|false $arguments Can be changed to array for Php8.1+

Handles array argument processing when the function accepts a single argument that can be an array argument.
Example use for:
        DAYOFMONTH() or FACT().

Handles array argument processing when the function accepts multiple arguments,
    and any of them can be an array argument.
Example use for:
        ROUND() or DATE().
@param mixed ...$arguments

Handles array argument processing when the function accepts multiple arguments,
    but only the first few (up to limit) can be an array arguments.
Example use for:
        NETWORKDAYS() or CONCATENATE(), where the last argument is a matrix (or a series of values) that need
                                        to be treated as a such rather than as an array arguments.
@param mixed ...$arguments

@param mixed $value

Handles array argument processing when the function accepts multiple arguments,
    but only the last few (from start) can be an array arguments.
Example use for:
        Z.TEST() or INDEX(), where the first argument 1 is a matrix that needs to be treated as a dataset
                  rather than as an array argument.
@param mixed ...$arguments

Handles array argument processing when the function accepts multiple arguments,
    and any of them can be an array argument except for the one specified by ignore.
Example use for:
        HLOOKUP() and VLOOKUP(), where argument 1 is a matrix that needs to be treated as a database
                                 rather than as an array argument.
@param mixed ...$arguments

## References

**Database Tables (inferred)**
- `start`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\ArrayEnabled.php`

**Functions/Methods**:
- `initialiseHelper($arguments)`
- `evaluateSingleArgumentArray(callable $method, array $values)`
- `evaluateArrayArguments(callable $method, ...$arguments)`
- `evaluateArrayArgumentsSubset(callable $method, int $limit, ...$arguments)`
- `testFalse($value)`
- `evaluateArrayArgumentsSubsetFrom(callable $method, int $start, ...$arguments)`
- `evaluateArrayArgumentsIgnore(callable $method, int $ignore, ...$arguments)`

