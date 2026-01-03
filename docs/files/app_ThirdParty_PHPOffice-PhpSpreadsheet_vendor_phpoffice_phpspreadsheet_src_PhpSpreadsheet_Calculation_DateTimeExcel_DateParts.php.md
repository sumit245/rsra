# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\DateParts.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\DateParts.php`
- Type: PHP
- Size: 5205 bytes

## Summary (from docblocks)

DAYOFMONTH.
Returns the day of the month, for a specified date. The day is given as an integer
ranging from 1 to 31.
Excel Function:
       DAY(dateValue)
@param mixed $dateValue Excel date serial value (float), PHP date timestamp (integer),
                                   PHP DateTime object, or a standard date string
                        Or can be an array of date values
@return array|int|string Day of the month
        If an array of numbers is passed as the argument, then the returned result will also be an array
           with the same dimensions

MONTHOFYEAR.
Returns the month of a date represented by a serial number.
The month is given as an integer, ranging from 1 (January) to 12 (December).
Excel Function:
       MONTH(dateValue)
@param mixed $dateValue Excel date serial value (float), PHP date timestamp (integer),
                                   PHP DateTime object, or a standard date string
                        Or can be an array of date values
@return array|int|string Month of the year
        If an array of numbers is passed as the argument, then the returned result will also be an array
           with the same dimensions

YEAR.
Returns the year corresponding to a date.
The year is returned as an integer in the range 1900-9999.
Excel Function:
       YEAR(dateValue)
@param mixed $dateValue Excel date serial value (float), PHP date timestamp (integer),
                                   PHP DateTime object, or a standard date string
                        Or can be an array of date values
@return array|int|string Year
        If an array of numbers is passed as the argument, then the returned result will also be an array
           with the same dimensions

@param mixed $dateValue Excel date serial value (float), PHP date timestamp (integer),
                                   PHP DateTime object, or a standard date string

## References

**Database Tables (inferred)**
- `1`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\DateParts.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\DateParts`

**Functions/Methods**:
- `day($dateValue)`
- `month($dateValue)`
- `year($dateValue)`
- `weirdCondition($dateValue)`

