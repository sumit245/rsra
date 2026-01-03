# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Information\Value.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Information\Value.php`
- Type: PHP
- Size: 10090 bytes

## Summary (from docblocks)

IS_BLANK.
@param mixed $value Value to check
                     Or can be an array of values
@return array|bool
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

IS_REF.
@param mixed $value Value to check
@return bool

IS_EVEN.
@param mixed $value Value to check
                     Or can be an array of values
@return array|bool|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

IS_ODD.
@param mixed $value Value to check
                     Or can be an array of values
@return array|bool|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

IS_NUMBER.
@param mixed $value Value to check
                     Or can be an array of values
@return array|bool
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

IS_LOGICAL.
@param mixed $value Value to check
                     Or can be an array of values
@return array|bool
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

IS_TEXT.
@param mixed $value Value to check
                     Or can be an array of values
@return array|bool
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

IS_NONTEXT.
@param mixed $value Value to check
                     Or can be an array of values
@return array|bool
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

ISFORMULA.
@param mixed $cellReference The cell to check
@param ?Cell $cell The current cell (containing this formula)
@return array|bool|string

N.
Returns a value converted to a number
@param null|mixed $value The value you want converted
@return number N converts values listed in the following table
       If value is or refers to N returns
       A number            That number value
       A date              The Excel serialized number of that date
       TRUE                1
       FALSE               0
       An error value      The error value
       Anything else       0

TYPE.
Returns a number that identifies the type of a value
@param null|mixed $value The value you want tested
@return number N converts values listed in the following table
       If value is or refers to N returns
       A number            1
       Text                2
       Logical Value       4
       An error value      16
       Array or Matrix     64

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Information\Value.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Information\Value`

**Functions/Methods**:
- `isBlank($value = null)`
- `isRef($value, ?Cell $cell = null)`
- `isEven($value = null)`
- `isOdd($value = null)`
- `isNumber($value = null)`
- `isLogical($value = null)`
- `isText($value = null)`
- `isNonText($value = null)`
- `isFormula($cellReference = '', ?Cell $cell = null)`
- `asNumber($value = null)`
- `type($value = null)`

