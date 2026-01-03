# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\CashFlow\Single.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\CashFlow\Single.php`
- Type: PHP
- Size: 3767 bytes

## Summary (from docblocks)

FVSCHEDULE.
Returns the future value of an initial principal after applying a series of compound interest rates.
Use FVSCHEDULE to calculate the future value of an investment with a variable or adjustable rate.
Excel Function:
       FVSCHEDULE(principal,schedule)
@param mixed $principal the present value
@param float[] $schedule an array of interest rates to apply
@return float|string

PDURATION.
Calculates the number of periods required for an investment to reach a specified value.
@param mixed $rate Interest rate per period
@param mixed $presentValue Present Value
@param mixed $futureValue Future Value
@return float|string Result, or a string containing an error

RRI.
Calculates the interest rate required for an investment to grow to a specified future value .
@param float $periods The number of periods over which the investment is made
@param float $presentValue Present Value
@param float $futureValue Future Value
@return float|string Result, or a string containing an error

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\CashFlow\Single.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Financial\CashFlow\Single`

**Functions/Methods**:
- `futureValue($principal, $schedule)`
- `periods($rate, $presentValue, $futureValue)`
- `interestRate($periods = 0.0, $presentValue = 0.0, $futureValue = 0.0)`

