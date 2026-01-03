# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\WorkDay.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\WorkDay.php`
- Type: PHP
- Size: 7395 bytes

## Summary (from docblocks)

WORKDAY.
Returns the date that is the indicated number of working days before or after a date (the
starting date). Working days exclude weekends and any dates identified as holidays.
Use WORKDAY to exclude weekends or holidays when you calculate invoice due dates, expected
delivery times, or the number of days of work performed.
Excel Function:
       WORKDAY(startDate,endDays[,holidays[,holiday[,...]]])
@param array|mixed $startDate Excel date serial value (float), PHP date timestamp (integer),
                                       PHP DateTime object, or a standard date string
                        Or can be an array of date values
@param array|int $endDays The number of nonweekend and nonholiday days before or after
                                       startDate. A positive value for days yields a future date; a
                                       negative value yields a past date.
                        Or can be an array of int values
@param null|mixed $dateArgs An array of dates (such as holidays) to exclude from the calculation
@return array|mixed Excel date/time serial value, PHP date/time serial value or PHP date/time object,
                       depending on the value of the ReturnDateType flag
        If an array of values is passed for the $startDate or $endDays,arguments, then the returned result
           will also be an array with matching dimensions

Use incrementing logic to determine Workday.
@return mixed

Use decrementing logic to determine Workday.
@return mixed

int $endDoW

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\WorkDay.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\WorkDay`

**Functions/Methods**:
- `date($startDate, $endDays, ...$dateArgs)`
- `incrementing(float $startDate, int $endDays, array $holidayArray)`
- `incrementingArray(float $startDate, float $endDate, array $holidayArray)`
- `decrementing(float $startDate, int $endDays, array $holidayArray)`
- `decrementingArray(float $startDate, float $endDate, array $holidayArray)`
- `getWeekDay(float $date, int $wd)`

