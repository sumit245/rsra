# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\CashFlow\Variable\Periodic.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\CashFlow\Variable\Periodic.php`
- Type: PHP
- Size: 5544 bytes

## Summary (from docblocks)

IRR.
Returns the internal rate of return for a series of cash flows represented by the numbers in values.
These cash flows do not have to be even, as they would be for an annuity. However, the cash flows must occur
at regular intervals, such as monthly or annually. The internal rate of return is the interest rate received
for an investment consisting of payments (negative values) and income (positive values) that occur at regular
periods.
Excel Function:
       IRR(values[,guess])
@param mixed $values An array or a reference to cells that contain numbers for which you want
                                   to calculate the internal rate of return.
                               Values must contain at least one positive value and one negative value to
                                   calculate the internal rate of return.
@param mixed $guess A number that you guess is close to the result of IRR
@return float|string

MIRR.
Returns the modified internal rate of return for a series of periodic cash flows. MIRR considers both
       the cost of the investment and the interest received on reinvestment of cash.
Excel Function:
       MIRR(values,finance_rate, reinvestment_rate)
@param mixed $values An array or a reference to cells that contain a series of payments and
                        income occurring at regular intervals.
                     Payments are negative value, income is positive values.
@param mixed $financeRate The interest rate you pay on the money used in the cash flows
@param mixed $reinvestmentRate The interest rate you receive on the cash flows as you reinvest them
@return float|string Result, or a string containing an error

NPV.
Returns the Net Present Value of a cash flow series given a discount rate.
@param mixed $rate
@return float

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\CashFlow\Variable\Periodic.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Financial\CashFlow\Variable\Periodic`

**Functions/Methods**:
- `rate($values, $guess = 0.1)`
- `modifiedRate($values, $financeRate, $reinvestmentRate)`
- `presentValue($rate, ...$args)`

