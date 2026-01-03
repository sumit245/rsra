# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\Helpers.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\Helpers.php`
- Type: PHP
- Size: 9293 bytes

## Summary (from docblocks)

Identify if a year is a leap year or not.
@param int|string $year The year to test
@return bool TRUE if the year is a leap year, otherwise FALSE

getDateValue.
@param mixed $dateValue
@return float Excel date/time serial value

getTimeValue.
@param string $timeValue
@return mixed Excel date/time serial value, or string if error

Adjust date by given months.
@param mixed $dateValue

Help reduce perceived complexity of some tests.
@param mixed $value
@param mixed $altValue

Adjust year in ambiguous situations.

Return result in one of three formats.
@return mixed

Return result in one of three formats.
@return mixed

Return result in one of three formats.
@return mixed

Many functions accept null/false/true argument treated as 0/0/1.
@param mixed $number

Many functions accept null argument treated as 0.
@param mixed $number
@return float|int

Many functions accept null/false/true argument treated as 0/0/1.
@param mixed $number
@return float

Despite documentation, date_parse probably never returns false.
Just in case, this routine helps guarantee it.
@param array|false $dateArray

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\Helpers.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Helpers`

**Functions/Methods**:
- `isLeapYear($year)`
- `getDateValue($dateValue, bool $allowBool = true)`
- `getTimeValue($timeValue)`
- `adjustDateByMonths($dateValue = 0, float $adjustmentMonths = 0)`
- `replaceIfEmpty(&$value, $altValue)`
- `adjustYear(string $testVal1, string $testVal2, string &$testVal3)`
- `returnIn3FormatsArray(array $dateArray, bool $noFrac = false)`
- `returnIn3FormatsFloat(float $excelDateValue)`
- `returnIn3FormatsObject(DateTime $PHPDateObject)`
- `baseDate()`
- `nullFalseTrueToNumber(&$number, bool $allowBool = true)`
- `validateNumericNull($number)`
- `validateNotNegative($number)`
- `silly1900(DateTime $PHPDateObject, string $mod = '-1 day')`
- `dateParse(string $string)`
- `dateParseSucceeded(array $dateArray)`
- `forceArray($dateArray)`

