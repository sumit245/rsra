# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Trend\LogarithmicBestFit.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Trend\LogarithmicBestFit.php`
- Type: PHP
- Size: 2394 bytes

## Summary (from docblocks)

Algorithm type to use for best-fit
(Name of this Trend class).
@var string

Return the Y-Value for a specified value of X.
@param float $xValue X-Value
@return float Y-Value

Return the X-Value for a specified value of Y.
@param float $yValue Y-Value
@return float X-Value

Return the Equation of the best-fit line.
@param int $dp Number of places of decimal precision to display
@return string

Execute the regression and calculate the goodness of fit for a set of X and Y data values.
@param float[] $yValues The set of Y-values for this regression
@param float[] $xValues The set of X-values for this regression

Define the regression and calculate the goodness of fit for a set of X and Y data values.
@param float[] $yValues The set of Y-values for this regression
@param float[] $xValues The set of X-values for this regression
@param bool $const

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Trend\LogarithmicBestFit.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\Trend\LogarithmicBestFit extends BestFit`

**Functions/Methods**:
- `getValueOfYForX($xValue)`
- `getValueOfXForY($yValue)`
- `getEquation($dp = 0)`
- `logarithmicRegression(array $yValues, array $xValues, bool $const)`
- `__construct($yValues, $xValues = [], $const = true)`

