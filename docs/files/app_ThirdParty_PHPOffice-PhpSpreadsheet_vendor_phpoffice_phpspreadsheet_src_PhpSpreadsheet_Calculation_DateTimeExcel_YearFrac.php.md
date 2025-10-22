# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\YearFrac.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\YearFrac.php`
- Type: PHP
- Size: 5832 bytes

## Summary (from docblocks)

YEARFRAC.
Calculates the fraction of the year represented by the number of whole days between two dates
(the start_date and the end_date).
Use the YEARFRAC worksheet function to identify the proportion of a whole year's benefits or
obligations to assign to a specific term.
Excel Function:
       YEARFRAC(startDate,endDate[,method])
See https://lists.oasis-open.org/archives/office-formula/200806/msg00039.html
    for description of algorithm used in Excel
@param mixed $startDate Excel date serial value (float), PHP date timestamp (integer),
                                   PHP DateTime object, or a standard date string
                        Or can be an array of values
@param mixed $endDate Excel date serial value (float), PHP date timestamp (integer),
                                   PHP DateTime object, or a standard date string
                        Or can be an array of methods
@param array|int $method Method used for the calculation
                                       0 or omitted    US (NASD) 30/360
                                       1                Actual/actual
                                       2                Actual/360
                                       3                Actual/365
                                       4                European 30/360
                        Or can be an array of methods
@return array|float|string fraction of the year, or a string containing an error
        If an array of values is passed for the $startDate or $endDays,arguments, then the returned result
           will also be an array with matching dimensions

Excel 1900 calendar treats date argument of null as 1900-01-00. Really.
@param mixed $startDate
@param mixed $endDate

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\YearFrac.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\YearFrac`

**Functions/Methods**:
- `fraction($startDate, $endDate, $method = 0)`
- `excelBug(float $sDate, $startDate, $endDate, int $method)`
- `method1(float $startDate, float $endDate)`

