# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Arabic.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Arabic.php`
- Type: PHP
- Size: 2977 bytes

## Summary (from docblocks)

Recursively calculate the arabic value of a roman numeral.
@param int $sum
@param int $subtract
@return int

@param mixed $value

ARABIC.
Converts a Roman numeral to an Arabic numeral.
Excel Function:
       ARABIC(text)
@param mixed $roman Should be a string, or can be an array of strings
@return array|int|string the arabic numberal contrived from the roman numeral
        If an array of numbers is passed as the argument, then the returned result will also be an array
           with the same dimensions

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Arabic.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Arabic`

**Functions/Methods**:
- `calculateArabic(array $roman, &$sum = 0, $subtract = 0)`
- `mollifyScrutinizer($value)`
- `strSplit(string $roman)`
- `evaluate($roman)`

