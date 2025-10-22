# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\TreasuryBill.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\TreasuryBill.php`
- Type: PHP
- Size: 5956 bytes

## Summary (from docblocks)

TBILLEQ.
Returns the bond-equivalent yield for a Treasury bill.
@param mixed $settlement The Treasury bill's settlement date.
                               The Treasury bill's settlement date is the date after the issue date
                                   when the Treasury bill is traded to the buyer.
@param mixed $maturity The Treasury bill's maturity date.
                               The maturity date is the date when the Treasury bill expires.
@param mixed $discount The Treasury bill's discount rate
@return float|string Result, or a string containing an error

TBILLPRICE.
Returns the price per $100 face value for a Treasury bill.
@param mixed $settlement The Treasury bill's settlement date.
                               The Treasury bill's settlement date is the date after the issue date
                                   when the Treasury bill is traded to the buyer.
@param mixed $maturity The Treasury bill's maturity date.
                               The maturity date is the date when the Treasury bill expires.
@param mixed $discount The Treasury bill's discount rate
@return float|string Result, or a string containing an error

TBILLYIELD.
Returns the yield for a Treasury bill.
@param mixed $settlement The Treasury bill's settlement date.
                               The Treasury bill's settlement date is the date after the issue date when
                                   the Treasury bill is traded to the buyer.
@param mixed $maturity The Treasury bill's maturity date.
                               The maturity date is the date when the Treasury bill expires.
@param mixed $price The Treasury bill's price per $100 face value
@return float|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\TreasuryBill.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Financial\TreasuryBill`

**Functions/Methods**:
- `bondEquivalentYield($settlement, $maturity, $discount)`
- `price($settlement, $maturity, $discount)`
- `yield($settlement, $maturity, $price)`

