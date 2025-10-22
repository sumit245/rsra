# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\TextData\Format.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\TextData\Format.php`
- Type: PHP
- Size: 10186 bytes

## Summary (from docblocks)

DOLLAR.
This function converts a number to text using currency format, with the decimals rounded to the specified place.
The format used is $#,##0.00_);($#,##0.00)..
@param mixed $value The value to format
                        Or can be an array of values
@param mixed $decimals The number of digits to display to the right of the decimal point (as an integer).
                           If decimals is negative, number is rounded to the left of the decimal point.
                           If you omit decimals, it is assumed to be 2
                        Or can be an array of values
@return array|string
        If an array of values is passed for either of the arguments, then the returned result
           will also be an array with matching dimensions

FIXED.
@param mixed $value The value to format
                        Or can be an array of values
@param mixed $decimals Integer value for the number of decimal places that should be formatted
                        Or can be an array of values
@param mixed $noCommas Boolean value indicating whether the value should have thousands separators or not
                        Or can be an array of values
@return array|string
        If an array of values is passed for either of the arguments, then the returned result
           will also be an array with matching dimensions

TEXT.
@param mixed $value The value to format
                        Or can be an array of values
@param mixed $format A string with the Format mask that should be used
                        Or can be an array of values
@return array|string
        If an array of values is passed for either of the arguments, then the returned result
           will also be an array with matching dimensions

@param mixed $value Value to check
@return mixed

VALUE.
@param mixed $value Value to check
                        Or can be an array of values
@return array|DateTimeInterface|float|int|string A string if arguments are invalid
        If an array of values is passed for the argument, then the returned result
           will also be an array with matching dimensions

@param mixed $decimalSeparator

@param mixed $groupSeparator

NUMBERVALUE.
@param mixed $value The value to format
                        Or can be an array of values
@param mixed $decimalSeparator A string with the decimal separator to use, defaults to locale defined value
                        Or can be an array of values
@param mixed $groupSeparator A string with the group/thousands separator to use, defaults to locale defined value
                        Or can be an array of values
@return array|float|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\TextData\Format.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\TextData\Format`

**Functions/Methods**:
- `DOLLAR($value = 0, $decimals = 2)`
- `FIXEDFORMAT($value, $decimals = 2, $noCommas = false)`
- `TEXTFORMAT($value, $format)`
- `convertValue($value)`
- `VALUE($value = '')`
- `getDecimalSeparator($decimalSeparator)`
- `getGroupSeparator($groupSeparator)`
- `NUMBERVALUE($value = '', $decimalSeparator = null, $groupSeparator = null)`

