# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Logical\Operations.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Logical\Operations.php`
- Type: PHP
- Size: 7448 bytes

## Summary (from docblocks)

LOGICAL_AND.
Returns boolean TRUE if all its arguments are TRUE; returns FALSE if one or more argument is FALSE.
Excel Function:
       =AND(logical1[,logical2[, ...]])
       The arguments must evaluate to logical values such as TRUE or FALSE, or the arguments must be arrays
           or references that contain logical values.
       Boolean arguments are treated as True or False as appropriate
       Integer or floating point arguments are treated as True, except for 0 or 0.0 which are False
       If any argument value is a string, or a Null, the function returns a #VALUE! error, unless the string
           holds the value TRUE or FALSE, in which case it is evaluated as the corresponding boolean value
@param mixed ...$args Data values
@return bool|string the logical AND of the arguments

LOGICAL_OR.
Returns boolean TRUE if any argument is TRUE; returns FALSE if all arguments are FALSE.
Excel Function:
       =OR(logical1[,logical2[, ...]])
       The arguments must evaluate to logical values such as TRUE or FALSE, or the arguments must be arrays
           or references that contain logical values.
       Boolean arguments are treated as True or False as appropriate
       Integer or floating point arguments are treated as True, except for 0 or 0.0 which are False
       If any argument value is a string, or a Null, the function returns a #VALUE! error, unless the string
           holds the value TRUE or FALSE, in which case it is evaluated as the corresponding boolean value
@param mixed $args Data values
@return bool|string the logical OR of the arguments

LOGICAL_XOR.
Returns the Exclusive Or logical operation for one or more supplied conditions.
i.e. the Xor function returns TRUE if an odd number of the supplied conditions evaluate to TRUE,
     and FALSE otherwise.
Excel Function:
       =XOR(logical1[,logical2[, ...]])
       The arguments must evaluate to logical values such as TRUE or FALSE, or the arguments must be arrays
           or references that contain logical values.
       Boolean arguments are treated as True or False as appropriate
       Integer or floating point arguments are treated as True, except for 0 or 0.0 which are False
       If any argument value is a string, or a Null, the function returns a #VALUE! error, unless the string
           holds the value TRUE or FALSE, in which case it is evaluated as the corresponding boolean value
@param mixed $args Data values
@return bool|string the logical XOR of the arguments

NOT.
Returns the boolean inverse of the argument.
Excel Function:
       =NOT(logical)
       The argument must evaluate to a logical value such as TRUE or FALSE
       Boolean arguments are treated as True or False as appropriate
       Integer or floating point arguments are treated as True, except for 0 or 0.0 which are False
       If any argument value is a string, or a Null, the function returns a #VALUE! error, unless the string
           holds the value TRUE or FALSE, in which case it is evaluated as the corresponding boolean value
@param mixed $logical A value or expression that can be evaluated to TRUE or FALSE
                     Or can be an array of values
@return array|bool|string the boolean inverse of the argument
        If an array of values is passed as an argument, then the returned result will also be an array
           with the same dimensions

@return int|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Logical\Operations.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Logical\Operations`

**Functions/Methods**:
- `logicalAnd(...$args)`
- `logicalOr(...$args)`
- `logicalXor(...$args)`
- `NOT($logical = false)`
- `countTrueValues(array $args)`

