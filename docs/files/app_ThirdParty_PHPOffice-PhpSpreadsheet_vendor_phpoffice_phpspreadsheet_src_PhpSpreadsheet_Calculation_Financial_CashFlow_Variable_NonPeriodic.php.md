# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\CashFlow\Variable\NonPeriodic.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\CashFlow\Variable\NonPeriodic.php`
- Type: PHP
- Size: 8814 bytes

## Summary (from docblocks)

XIRR.
Returns the internal rate of return for a schedule of cash flows that is not necessarily periodic.
Excel Function:
       =XIRR(values,dates,guess)
@param float[] $values     A series of cash flow payments
                               The series of values must contain at least one positive value & one negative value
@param mixed[] $dates      A series of payment dates
                               The first payment date indicates the beginning of the schedule of payments
                               All other dates must be later than this date, but they may occur in any order
@param mixed $guess        An optional guess at the expected answer
@return float|string

XNPV.
Returns the net present value for a schedule of cash flows that is not necessarily periodic.
To calculate the net present value for a series of cash flows that is periodic, use the NPV function.
Excel Function:
       =XNPV(rate,values,dates)
@param float $rate the discount rate to apply to the cash flows
@param float[] $values A series of cash flows that corresponds to a schedule of payments in dates.
                         The first payment is optional and corresponds to a cost or payment that occurs
                             at the beginning of the investment.
                         If the first value is a cost or payment, it must be a negative value.
                            All succeeding payments are discounted based on a 365-day year.
                         The series of values must contain at least one positive value and one negative value.
@param mixed[] $dates A schedule of payment dates that corresponds to the cash flow payments.
                        The first payment date indicates the beginning of the schedule of payments.
                        All other dates must be later than this date, but they may occur in any order.
@return float|string

@param mixed $values
@param mixed $dates

@return float|string

@param mixed $rate
@param mixed $values
@param mixed $dates
@return float|string

@param mixed $rate

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\CashFlow\Variable\NonPeriodic.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Financial\CashFlow\Variable\NonPeriodic`

**Functions/Methods**:
- `rate($values, $dates, $guess = self::DEFAULT_GUESS)`
- `presentValue($rate, $values, $dates)`
- `bothNegAndPos(bool $neg, bool $pos)`
- `xirrPart1(&$values, &$dates)`
- `xirrPart2(array &$values)`
- `xirrPart3(array $values, array $dates, float $x1, float $x2)`
- `xnpvOrdered($rate, $values, $dates, bool $ordered = true)`
- `validateXnpv($rate, array $values, array $dates)`

