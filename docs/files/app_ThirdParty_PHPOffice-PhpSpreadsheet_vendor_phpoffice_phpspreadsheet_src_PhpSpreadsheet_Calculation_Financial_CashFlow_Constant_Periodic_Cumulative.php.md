# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic\Cumulative.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic\Cumulative.php`
- Type: PHP
- Size: 5265 bytes

## Summary (from docblocks)

CUMIPMT.
Returns the cumulative interest paid on a loan between the start and end periods.
Excel Function:
       CUMIPMT(rate,nper,pv,start,end[,type])
@param mixed $rate The Interest rate
@param mixed $periods The total number of payment periods
@param mixed $presentValue Present Value
@param mixed $start The first period in the calculation.
                      Payment periods are numbered beginning with 1.
@param mixed $end the last period in the calculation
@param mixed $type A number 0 or 1 and indicates when payments are due:
                   0 or omitted    At the end of the period.
                   1               At the beginning of the period.
@return float|string

CUMPRINC.
Returns the cumulative principal paid on a loan between the start and end periods.
Excel Function:
       CUMPRINC(rate,nper,pv,start,end[,type])
@param mixed $rate The Interest rate
@param mixed $periods The total number of payment periods as an integer
@param mixed $presentValue Present Value
@param mixed $start The first period in the calculation.
                      Payment periods are numbered beginning with 1.
@param mixed $end the last period in the calculation
@param mixed $type A number 0 or 1 and indicates when payments are due:
                   0 or omitted    At the end of the period.
                   1               At the beginning of the period.
@return float|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic\Cumulative.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic\Cumulative`

**Functions/Methods**:
- `interest($rate,
        $periods,
        $presentValue,
        $start,
        $end,
        $type = FinancialConstants::PAYMENT_END_OF_PERIOD)`
- `principal($rate,
        $periods,
        $presentValue,
        $start,
        $end,
        $type = FinancialConstants::PAYMENT_END_OF_PERIOD)`

