# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic.php`
- Type: PHP
- Size: 7910 bytes

## Summary (from docblocks)

FV.
Returns the Future Value of a cash flow with constant payments and interest rate (annuities).
Excel Function:
       FV(rate,nper,pmt[,pv[,type]])
@param mixed $rate The interest rate per period
@param mixed $numberOfPeriods Total number of payment periods in an annuity as an integer
@param mixed $payment The payment made each period: it cannot change over the
                           life of the annuity. Typically, pmt contains principal
                           and interest but no other fees or taxes.
@param mixed $presentValue present Value, or the lump-sum amount that a series of
                           future payments is worth right now
@param mixed $type A number 0 or 1 and indicates when payments are due:
                     0 or omitted    At the end of the period.
                     1               At the beginning of the period.
@return float|string

PV.
Returns the Present Value of a cash flow with constant payments and interest rate (annuities).
@param mixed $rate Interest rate per period
@param mixed $numberOfPeriods Number of periods as an integer
@param mixed $payment Periodic payment (annuity)
@param mixed $futureValue Future Value
@param mixed $type Payment type: 0 = at the end of each period, 1 = at the beginning of each period
@return float|string Result, or a string containing an error

NPER.
Returns the number of periods for a cash flow with constant periodic payments (annuities), and interest rate.
@param mixed $rate Interest rate per period
@param mixed $payment Periodic payment (annuity)
@param mixed $presentValue Present Value
@param mixed $futureValue Future Value
@param mixed $type Payment type: 0 = at the end of each period, 1 = at the beginning of each period
@return float|string Result, or a string containing an error

@return float|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic`

**Functions/Methods**:
- `futureValue($rate,
        $numberOfPeriods,
        $payment = 0.0,
        $presentValue = 0.0,
        $type = FinancialConstants::PAYMENT_END_OF_PERIOD)`
- `presentValue($rate,
        $numberOfPeriods,
        $payment = 0.0,
        $futureValue = 0.0,
        $type = FinancialConstants::PAYMENT_END_OF_PERIOD)`
- `periods($rate,
        $payment,
        $presentValue,
        $futureValue = 0.0,
        $type = FinancialConstants::PAYMENT_END_OF_PERIOD)`
- `calculateFutureValue(float $rate,
        int $numberOfPeriods,
        float $payment,
        float $presentValue,
        int $type)`
- `calculatePresentValue(float $rate,
        int $numberOfPeriods,
        float $payment,
        float $futureValue,
        int $type)`
- `calculatePeriods(float $rate,
        float $payment,
        float $presentValue,
        float $futureValue,
        int $type)`

