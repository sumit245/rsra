# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\Helpers.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\Helpers.php`
- Type: PHP
- Size: 2044 bytes

## Summary (from docblocks)

daysPerYear.
Returns the number of days in a specified year, as defined by the "basis" value
@param int|string $year The year against which we're testing
@param int|string $basis The type of day count:
                             0 or omitted US (NASD)   360
                             1                        Actual (365 or 366 in a leap year)
                             2                        360
                             3                        365
                             4                        European 360
@return int|string Result, or a string containing an error

isLastDayOfMonth.
Returns a boolean TRUE/FALSE indicating if this date is the last date of the month
@param DateTimeInterface $date The date for testing

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\Helpers.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Financial\Helpers`

**Functions/Methods**:
- `daysPerYear($year, $basis = 0)`
- `isLastDayOfMonth(DateTimeInterface $date)`

