# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\Securities\Rates.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\Securities\Rates.php`
- Type: PHP
- Size: 5883 bytes

## Summary (from docblocks)

DISC.
Returns the discount rate for a security.
Excel Function:
       DISC(settlement,maturity,price,redemption[,basis])
@param mixed $settlement The security's settlement date.
                             The security settlement date is the date after the issue
                                 date when the security is traded to the buyer.
@param mixed $maturity The security's maturity date.
                           The maturity date is the date when the security expires.
@param mixed $price The security's price per $100 face value
@param mixed $redemption The security's redemption value per $100 face value
@param mixed $basis The type of day count to use.
                        0 or omitted    US (NASD) 30/360
                        1               Actual/actual
                        2               Actual/360
                        3               Actual/365
                        4               European 30/360
@return float|string

INTRATE.
Returns the interest rate for a fully invested security.
Excel Function:
       INTRATE(settlement,maturity,investment,redemption[,basis])
@param mixed $settlement The security's settlement date.
                             The security settlement date is the date after the issue date when the security
                                 is traded to the buyer.
@param mixed $maturity The security's maturity date.
                           The maturity date is the date when the security expires.
@param mixed $investment the amount invested in the security
@param mixed $redemption the amount to be received at maturity
@param mixed $basis The type of day count to use.
                        0 or omitted    US (NASD) 30/360
                        1               Actual/actual
                        2               Actual/360
                        3               Actual/365
                        4               European 30/360
@return float|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\Securities\Rates.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Financial\Securities\Rates`

**Functions/Methods**:
- `discount($settlement,
        $maturity,
        $price,
        $redemption,
        $basis = FinancialConstants::BASIS_DAYS_PER_YEAR_NASD)`
- `interest($settlement,
        $maturity,
        $investment,
        $redemption,
        $basis = FinancialConstants::BASIS_DAYS_PER_YEAR_NASD)`

