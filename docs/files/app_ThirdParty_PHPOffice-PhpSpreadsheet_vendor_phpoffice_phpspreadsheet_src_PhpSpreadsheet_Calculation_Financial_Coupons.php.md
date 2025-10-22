# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\Coupons.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\Coupons.php`
- Type: PHP
- Size: 18585 bytes

## Summary (from docblocks)

COUPDAYBS.
Returns the number of days from the beginning of the coupon period to the settlement date.
Excel Function:
       COUPDAYBS(settlement,maturity,frequency[,basis])
@param mixed $settlement The security's settlement date.
                             The security settlement date is the date after the issue
                                 date when the security is traded to the buyer.
@param mixed $maturity The security's maturity date.
                           The maturity date is the date when the security expires.
@param mixed $frequency The number of coupon payments per year (int).
                            Valid frequency values are:
                              1    Annual
                              2    Semi-Annual
                              4    Quarterly
@param mixed $basis The type of day count to use (int).
                        0 or omitted    US (NASD) 30/360
                        1               Actual/actual
                        2               Actual/360
                        3               Actual/365
                        4               European 30/360
@return float|string

COUPDAYS.
Returns the number of days in the coupon period that contains the settlement date.
Excel Function:
       COUPDAYS(settlement,maturity,frequency[,basis])
@param mixed $settlement The security's settlement date.
                             The security settlement date is the date after the issue
                                 date when the security is traded to the buyer.
@param mixed $maturity The security's maturity date.
                           The maturity date is the date when the security expires.
@param mixed $frequency The number of coupon payments per year.
                            Valid frequency values are:
                              1    Annual
                              2    Semi-Annual
                              4    Quarterly
@param mixed $basis The type of day count to use (int).
                        0 or omitted    US (NASD) 30/360
                        1               Actual/actual
                        2               Actual/360
                        3               Actual/365
                        4               European 30/360
@return float|string

COUPDAYSNC.
Returns the number of days from the settlement date to the next coupon date.
Excel Function:
       COUPDAYSNC(settlement,maturity,frequency[,basis])
@param mixed $settlement The security's settlement date.
                             The security settlement date is the date after the issue
                                 date when the security is traded to the buyer.
@param mixed $maturity The security's maturity date.
                           The maturity date is the date when the security expires.
@param mixed $frequency The number of coupon payments per year.
                            Valid frequency values are:
                              1    Annual
                              2    Semi-Annual
                              4    Quarterly
@param mixed $basis The type of day count to use (int) .
                        0 or omitted    US (NASD) 30/360
                        1               Actual/actual
                        2               Actual/360
                        3               Actual/365
                        4               European 30/360
@return float|string

@var int

COUPNCD.
Returns the next coupon date after the settlement date.
Excel Function:
       COUPNCD(settlement,maturity,frequency[,basis])
@param mixed $settlement The security's settlement date.
                             The security settlement date is the date after the issue
                                 date when the security is traded to the buyer.
@param mixed $maturity The security's maturity date.
                           The maturity date is the date when the security expires.
@param mixed $frequency The number of coupon payments per year.
                            Valid frequency values are:
                              1    Annual
                              2    Semi-Annual
                              4    Quarterly
@param mixed $basis The type of day count to use (int).
                        0 or omitted    US (NASD) 30/360
                        1               Actual/actual
                        2               Actual/360
                        3               Actual/365
                        4               European 30/360
@return mixed Excel date/time serial value, PHP date/time serial value or PHP date/time object,
                    depending on the value of the ReturnDateType flag

COUPNUM.
Returns the number of coupons payable between the settlement date and maturity date,
rounded up to the nearest whole coupon.
Excel Function:
       COUPNUM(settlement,maturity,frequency[,basis])
@param mixed $settlement The security's settlement date.
                             The security settlement date is the date after the issue
                                 date when the security is traded to the buyer.
@param mixed $maturity The security's maturity date.
                           The maturity date is the date when the security expires.
@param mixed $frequency The number of coupon payments per year.
                            Valid frequency values are:
                              1    Annual
                              2    Semi-Annual
                              4    Quarterly
@param mixed $basis The type of day count to use (int).
                        0 or omitted    US (NASD) 30/360
                        1               Actual/actual
                        2               Actual/360
                        3               Actual/365
                        4               European 30/360
@return int|string

COUPPCD.
Returns the previous coupon date before the settlement date.
Excel Function:
       COUPPCD(settlement,maturity,frequency[,basis])
@param mixed $settlement The security's settlement date.
                             The security settlement date is the date after the issue
                             date when the security is traded to the buyer.
@param mixed $maturity The security's maturity date.
                           The maturity date is the date when the security expires.
@param mixed $frequency The number of coupon payments per year.
                            Valid frequency values are:
                              1    Annual
                              2    Semi-Annual
                              4    Quarterly
@param mixed $basis The type of day count to use (int).
                        0 or omitted    US (NASD) 30/360
                        1               Actual/actual
                        2               Actual/360
                        3               Actual/365
                        4               European 30/360
@return mixed Excel date/time serial value, PHP date/time serial value or PHP date/time object,
                    depending on the value of the ReturnDateType flag

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\Coupons.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Financial\Coupons`

**Functions/Methods**:
- `COUPDAYBS($settlement,
        $maturity,
        $frequency,
        $basis = FinancialConstants::BASIS_DAYS_PER_YEAR_NASD)`
- `COUPDAYS($settlement,
        $maturity,
        $frequency,
        $basis = FinancialConstants::BASIS_DAYS_PER_YEAR_NASD)`
- `COUPDAYSNC($settlement,
        $maturity,
        $frequency,
        $basis = FinancialConstants::BASIS_DAYS_PER_YEAR_NASD)`
- `COUPNCD($settlement,
        $maturity,
        $frequency,
        $basis = FinancialConstants::BASIS_DAYS_PER_YEAR_NASD)`
- `COUPNUM($settlement,
        $maturity,
        $frequency,
        $basis = FinancialConstants::BASIS_DAYS_PER_YEAR_NASD)`
- `COUPPCD($settlement,
        $maturity,
        $frequency,
        $basis = FinancialConstants::BASIS_DAYS_PER_YEAR_NASD)`
- `monthsDiff(DateTime $result, int $months, string $plusOrMinus, int $day, bool $lastDayFlag)`
- `couponFirstPeriodDate(float $settlement, float $maturity, int $frequency, bool $next)`
- `validateCouponPeriod(float $settlement, float $maturity)`

