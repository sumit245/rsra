# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\TimeParts.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\TimeParts.php`
- Type: PHP
- Size: 4461 bytes

## Summary (from docblocks)

HOUROFDAY.
Returns the hour of a time value.
The hour is given as an integer, ranging from 0 (12:00 A.M.) to 23 (11:00 P.M.).
Excel Function:
       HOUR(timeValue)
@param mixed $timeValue Excel date serial value (float), PHP date timestamp (integer),
                                   PHP DateTime object, or a standard time string
                        Or can be an array of date/time values
@return array|int|string Hour
        If an array of numbers is passed as the argument, then the returned result will also be an array
           with the same dimensions

MINUTE.
Returns the minutes of a time value.
The minute is given as an integer, ranging from 0 to 59.
Excel Function:
       MINUTE(timeValue)
@param mixed $timeValue Excel date serial value (float), PHP date timestamp (integer),
                                   PHP DateTime object, or a standard time string
                        Or can be an array of date/time values
@return array|int|string Minute
        If an array of numbers is passed as the argument, then the returned result will also be an array
           with the same dimensions

SECOND.
Returns the seconds of a time value.
The minute is given as an integer, ranging from 0 to 59.
Excel Function:
       SECOND(timeValue)
@param mixed $timeValue Excel date serial value (float), PHP date timestamp (integer),
                                   PHP DateTime object, or a standard time string
                        Or can be an array of date/time values
@return array|int|string Second
        If an array of numbers is passed as the argument, then the returned result will also be an array
           with the same dimensions

## References

**Database Tables (inferred)**
- `0`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\TimeParts.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\TimeParts`

**Functions/Methods**:
- `hour($timeValue)`
- `minute($timeValue)`
- `second($timeValue)`

