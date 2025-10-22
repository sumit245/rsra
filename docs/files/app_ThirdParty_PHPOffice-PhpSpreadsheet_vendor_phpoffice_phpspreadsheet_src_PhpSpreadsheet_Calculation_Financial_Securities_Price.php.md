# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\Securities\Price.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\Securities\Price.php`
- Type: PHP
- Size: 13138 bytes

## Summary (from docblocks)

PRICE.
Returns the price per $100 face value of a security that pays periodic interest.
@param mixed $settlement The security's settlement date.
                             The security settlement date is the date after the issue date when the security
                             is traded to the buyer.
@param mixed $maturity The security's maturity date.
                               The maturity date is the date when the security expires.
@param mixed $rate the security's annual coupon rate
@param mixed $yield the security's annual yield
@param mixed $redemption The number of coupon payments per year.
                             For annual payments, frequency = 1;
                             for semiannual, frequency = 2;
                             for quarterly, frequency = 4.
@param mixed $frequency
@param mixed $basis The type of day count to use.
                        0 or omitted    US (NASD) 30/360
                        1               Actual/actual
                        2               Actual/360
                        3               Actual/365
                        4               European 30/360
@return float|string Result, or a string containing an error

PRICEDISC.
Returns the price per $100 face value of a discounted security.
@param mixed $settlement The security's settlement date.
                             The security settlement date is the date after the issue date when the security
                             is traded to the buyer.
@param mixed $maturity The security's maturity date.
                               The maturity date is the date when the security expires.
@param mixed $discount The security's discount rate
@param mixed $redemption The security's redemption value per $100 face value
@param mixed $basis The type of day count to use.
                        0 or omitted    US (NASD) 30/360
                        1               Actual/actual
                        2               Actual/360
                        3               Actual/365
                        4               European 30/360
@return float|string Result, or a string containing an error

PRICEMAT.
Returns the price per $100 face value of a security that pays interest at maturity.
@param mixed $settlement The security's settlement date.
                             The security's settlement date is the date after the issue date when the
                             security is traded to the buyer.
@param mixed $maturity The security's maturity date.
                               The maturity date is the date when the security expires.
@param mixed $issue The security's issue date
@param mixed $rate The security's interest rate at date of issue
@param mixed $yield The security's annual yield
@param mixed $basis The type of day count to use.
                        0 or omitted    US (NASD) 30/360
                        1               Actual/actual
                        2               Actual/360
                        3               Actual/365
                        4               European 30/360
@return float|string Result, or a string containing an error

RECEIVED.
Returns the amount received at maturity for a fully invested Security.
@param mixed $settlement The security's settlement date.
                             The security settlement date is the date after the issue date when the security
                                 is traded to the buyer.
@param mixed $maturity The security's maturity date.
                           The maturity date is the date when the security expires.
@param mixed $investment The amount invested in the security
@param mixed $discount The security's discount rate
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

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\Securities\Price.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Financial\Securities\Price`

**Functions/Methods**:
- `price($settlement,
        $maturity,
        $rate,
        $yield,
        $redemption,
        $frequency,
        $basis = FinancialConstants::BASIS_DAYS_PER_YEAR_NASD)`
- `priceDiscounted($settlement,
        $maturity,
        $discount,
        $redemption,
        $basis = FinancialConstants::BASIS_DAYS_PER_YEAR_NASD)`
- `priceAtMaturity($settlement,
        $maturity,
        $issue,
        $rate,
        $yield,
        $basis = FinancialConstants::BASIS_DAYS_PER_YEAR_NASD)`
- `received($settlement,
        $maturity,
        $investment,
        $discount,
        $basis = FinancialConstants::BASIS_DAYS_PER_YEAR_NASD)`

