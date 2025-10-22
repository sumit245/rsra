# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\Difference.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\Difference.php`
- Type: PHP
- Size: 6091 bytes

## Summary (from docblocks)

DATEDIF.
@param mixed $startDate Excel date serial value, PHP date/time stamp, PHP DateTime object
                                   or a standard date string
                        Or can be an array of date values
@param mixed $endDate Excel date serial value, PHP date/time stamp, PHP DateTime object
                                   or a standard date string
                        Or can be an array of date values
@param array|string $unit
                        Or can be an array of unit values
@return array|int|string Interval between the dates
        If an array of values is passed for the $startDate or $endDays,arguments, then the returned result
           will also be an array with matching dimensions

Decide whether it's time to set retVal.
@param bool|int $retVal
@return null|bool|int

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\Difference.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Difference`

**Functions/Methods**:
- `interval($startDate, $endDate, $unit = 'D')`
- `initialDiff(float $startDate, float $endDate)`
- `replaceRetValue($retVal, string $unit, string $compare)`
- `datedifD(float $difference)`
- `datedifM(DateInterval $PHPDiffDateObject)`
- `datedifMD(int $startDays, int $endDays, DateTime $PHPEndDateObject, DateInterval $PHPDiffDateObject)`
- `datedifY(DateInterval $PHPDiffDateObject)`
- `datedifYD(float $difference, int $startYears, int $endYears, DateTime $PHPStartDateObject, DateTime $PHPEndDateObject)`
- `datedifYM(DateInterval $PHPDiffDateObject)`

