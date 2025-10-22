# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\Days360.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\Days360.php`
- Type: PHP
- Size: 5285 bytes

## Summary (from docblocks)

DAYS360.
Returns the number of days between two dates based on a 360-day year (twelve 30-day months),
which is used in some accounting calculations. Use this function to help compute payments if
your accounting system is based on twelve 30-day months.
Excel Function:
       DAYS360(startDate,endDate[,method])
@param array|mixed $startDate Excel date serial value (float), PHP date timestamp (integer),
                                       PHP DateTime object, or a standard date string
                        Or can be an array of date values
@param array|mixed $endDate Excel date serial value (float), PHP date timestamp (integer),
                                       PHP DateTime object, or a standard date string
                        Or can be an array of date values
@param array|mixed $method US or European Method as a bool
                                       FALSE or omitted: U.S. (NASD) method. If the starting date is
                                       the last day of a month, it becomes equal to the 30th of the
                                       same month. If the ending date is the last day of a month and
                                       the starting date is earlier than the 30th of a month, the
                                       ending date becomes equal to the 1st of the next month;
                                       otherwise the ending date becomes equal to the 30th of the
                                       same month.
                                       TRUE: European method. Starting dates and ending dates that
                                       occur on the 31st of a month become equal to the 30th of the
                                       same month.
                        Or can be an array of methods
@return array|int|string Number of days between start date and end date
        If an array of values is passed for the $startDate or $endDays,arguments, then the returned result
           will also be an array with matching dimensions

Return the number of days between two dates based on a 360 day calendar.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\Days360.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Days360`

**Functions/Methods**:
- `between($startDate = 0, $endDate = 0, $method = false)`
- `dateDiff360(int $startDay, int $startMonth, int $startYear, int $endDay, int $endMonth, int $endYear, bool $methodUS)`
- `getStartDay(int $startDay, int $startMonth, int $startYear, bool $methodUS)`
- `getEndDay(int $endDay, int &$endMonth, int &$endYear, int $startDay, bool $methodUS)`

