# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\Depreciation.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\Depreciation.php`
- Type: PHP
- Size: 9593 bytes

## Summary (from docblocks)

DB.
Returns the depreciation of an asset for a specified period using the
fixed-declining balance method.
This form of depreciation is used if you want to get a higher depreciation value
at the beginning of the depreciation (as opposed to linear depreciation). The
depreciation value is reduced with every depreciation period by the depreciation
already deducted from the initial cost.
Excel Function:
       DB(cost,salvage,life,period[,month])
@param mixed $cost Initial cost of the asset
@param mixed $salvage Value at the end of the depreciation.
                            (Sometimes called the salvage value of the asset)
@param mixed $life Number of periods over which the asset is depreciated.
                          (Sometimes called the useful life of the asset)
@param mixed $period The period for which you want to calculate the
                         depreciation. Period must use the same units as life.
@param mixed $month Number of months in the first year. If month is omitted,
                        it defaults to 12.
@return float|string

DDB.
Returns the depreciation of an asset for a specified period using the
double-declining balance method or some other method you specify.
Excel Function:
       DDB(cost,salvage,life,period[,factor])
@param mixed $cost Initial cost of the asset
@param mixed $salvage Value at the end of the depreciation.
                               (Sometimes called the salvage value of the asset)
@param mixed $life Number of periods over which the asset is depreciated.
                               (Sometimes called the useful life of the asset)
@param mixed $period The period for which you want to calculate the
                               depreciation. Period must use the same units as life.
@param mixed $factor The rate at which the balance declines.
                               If factor is omitted, it is assumed to be 2 (the
                               double-declining balance method).
@return float|string

SLN.
Returns the straight-line depreciation of an asset for one period
@param mixed $cost Initial cost of the asset
@param mixed $salvage Value at the end of the depreciation
@param mixed $life Number of periods over which the asset is depreciated
@return float|string Result, or a string containing an error

SYD.
Returns the sum-of-years' digits depreciation of an asset for a specified period.
@param mixed $cost Initial cost of the asset
@param mixed $salvage Value at the end of the depreciation
@param mixed $life Number of periods over which the asset is depreciated
@param mixed $period Period
@return float|string Result, or a string containing an error

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial\Depreciation.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Financial\Depreciation`

**Functions/Methods**:
- `DB($cost, $salvage, $life, $period, $month = 12)`
- `DDB($cost, $salvage, $life, $period, $factor = 2.0)`
- `SLN($cost, $salvage, $life)`
- `SYD($cost, $salvage, $life, $period)`
- `validateCost($cost, bool $negativeValueAllowed = false)`
- `validateSalvage($salvage, bool $negativeValueAllowed = false)`
- `validateLife($life, bool $negativeValueAllowed = false)`
- `validatePeriod($period, bool $negativeValueAllowed = false)`
- `validateMonth($month)`
- `validateFactor($factor)`

