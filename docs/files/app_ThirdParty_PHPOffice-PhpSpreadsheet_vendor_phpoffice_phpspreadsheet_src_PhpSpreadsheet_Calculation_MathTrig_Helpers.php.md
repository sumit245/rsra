# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Helpers.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Helpers.php`
- Type: PHP
- Size: 3182 bytes

## Summary (from docblocks)

Many functions accept null/false/true argument treated as 0/0/1.
@return float|string quotient or DIV0 if denominator is too small

Many functions accept null/false/true argument treated as 0/0/1.
@param mixed $number
@return float|int

Validate numeric, but allow substitute for null.
@param mixed $number
@param null|float|int $substitute
@return float|int

Confirm number >= 0.
@param float|int $number

Confirm number > 0.
@param float|int $number

Confirm number != 0.
@param float|int $number

Return NAN or value depending on argument.
@param float $result Number
@return float|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Helpers.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Helpers`

**Functions/Methods**:
- `verySmallDenominator(float $numerator, float $denominator)`
- `validateNumericNullBool($number)`
- `validateNumericNullSubstitution($number, $substitute)`
- `validateNotNegative($number, ?string $except = null)`
- `validatePositive($number, ?string $except = null)`
- `validateNotZero($number)`
- `returnSign(float $number)`
- `getEven(float $number)`
- `numberOrNan($result)`

