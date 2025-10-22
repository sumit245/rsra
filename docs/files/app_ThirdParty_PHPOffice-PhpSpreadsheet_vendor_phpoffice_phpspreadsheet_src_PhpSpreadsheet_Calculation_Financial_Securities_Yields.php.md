# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\Securities\Yields.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\Securities\Yields.php`
- Type: PHP
- Size: 7191 bytes

## Summary (from docblocks)

YIELDDISC.
Returns the annual yield of a security that pays interest at maturity.
@param mixed $settlement The security's settlement date.
                             The security's settlement date is the date after the issue date when the security
                             is traded to the buyer.
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
@return float|string Result, or a string containing an error

YIELDMAT.
Returns the annual yield of a security that pays interest at maturity.
@param mixed $settlement The security's settlement date.
                             The security's settlement date is the date after the issue date when the security
                             is traded to the buyer.
@param mixed $maturity The security's maturity date.
                           The maturity date is the date when the security expires.
@param mixed $issue The security's issue date
@param mixed $rate The security's interest rate at date of issue
@param mixed $price The security's price per $100 face value
@param mixed $basis The type of day count to use.
                      0 or omitted    US (NASD) 30/360
                      1               Actual/actual
                      2               Actual/360
                      3               Actual/365
                      4               European 30/360
@return float|string Result, or a string containing an error

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\Securities\Yields.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Financial\Securities\Yields`

**Functions/Methods**:
- `yieldDiscounted($settlement,
        $maturity,
        $price,
        $redemption,
        $basis = FinancialConstants::BASIS_DAYS_PER_YEAR_NASD)`
- `yieldAtMaturity($settlement,
        $maturity,
        $issue,
        $rate,
        $price,
        $basis = FinancialConstants::BASIS_DAYS_PER_YEAR_NASD)`

