# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\NetworkDays.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\NetworkDays.php`
- Type: PHP
- Size: 4289 bytes

## Summary (from docblocks)

NETWORKDAYS.
Returns the number of whole working days between start_date and end_date. Working days
exclude weekends and any dates identified in holidays.
Use NETWORKDAYS to calculate employee benefits that accrue based on the number of days
worked during a specific term.
Excel Function:
       NETWORKDAYS(startDate,endDate[,holidays[,holiday[,...]]])
@param mixed $startDate Excel date serial value (float), PHP date timestamp (integer),
                                           PHP DateTime object, or a standard date string
                        Or can be an array of date values
@param mixed $endDate Excel date serial value (float), PHP date timestamp (integer),
                                           PHP DateTime object, or a standard date string
                        Or can be an array of date values
@param mixed $dateArgs An array of dates (such as holidays) to exclude from the calculation
@return array|int|string Interval between the dates
        If an array of values is passed for the $startDate or $endDate arguments, then the returned result
           will also be an array with matching dimensions

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\NetworkDays.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\NetworkDays`

**Functions/Methods**:
- `count($startDate, $endDate, ...$dateArgs)`
- `calcStartDow(float $startDate)`
- `calcEndDow(float $endDate)`
- `calcPartWeekDays(int $startDow, int $endDow)`
- `applySign(int $result, float $sDate, float $eDate)`

