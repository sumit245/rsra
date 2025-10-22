# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\InterestRate.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\InterestRate.php`
- Type: PHP
- Size: 2457 bytes

## Summary (from docblocks)

EFFECT.
Returns the effective interest rate given the nominal rate and the number of
       compounding payments per year.
Excel Function:
       EFFECT(nominal_rate,npery)
@param mixed $nominalRate Nominal interest rate as a float
@param mixed $periodsPerYear Integer number of compounding payments per year
@return float|string

NOMINAL.
Returns the nominal interest rate given the effective rate and the number of compounding payments per year.
@param mixed $effectiveRate Effective interest rate as a float
@param mixed $periodsPerYear Integer number of compounding payments per year
@return float|string Result, or a string containing an error

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\InterestRate.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Financial\InterestRate`

**Functions/Methods**:
- `effective($nominalRate = 0, $periodsPerYear = 0)`
- `nominal($effectiveRate = 0, $periodsPerYear = 0)`

