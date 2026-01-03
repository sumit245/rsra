# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic\Payments.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic\Payments.php`
- Type: PHP
- Size: 4819 bytes

## Summary (from docblocks)

PMT.
Returns the constant payment (annuity) for a cash flow with a constant interest rate.
@param mixed $interestRate Interest rate per period
@param mixed $numberOfPeriods Number of periods
@param mixed $presentValue Present Value
@param mixed $futureValue Future Value
@param mixed $type Payment type: 0 = at the end of each period, 1 = at the beginning of each period
@return float|string Result, or a string containing an error

PPMT.
Returns the interest payment for a given period for an investment based on periodic, constant payments
        and a constant interest rate.
@param mixed $interestRate Interest rate per period
@param mixed $period Period for which we want to find the interest
@param mixed $numberOfPeriods Number of periods
@param mixed $presentValue Present Value
@param mixed $futureValue Future Value
@param mixed $type Payment type: 0 = at the end of each period, 1 = at the beginning of each period
@return float|string Result, or a string containing an error

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic\Payments.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic\Payments`

**Functions/Methods**:
- `annuity($interestRate,
        $numberOfPeriods,
        $presentValue,
        $futureValue = 0,
        $type = FinancialConstants::PAYMENT_END_OF_PERIOD)`
- `interestPayment($interestRate,
        $period,
        $numberOfPeriods,
        $presentValue,
        $futureValue = 0,
        $type = FinancialConstants::PAYMENT_END_OF_PERIOD)`

