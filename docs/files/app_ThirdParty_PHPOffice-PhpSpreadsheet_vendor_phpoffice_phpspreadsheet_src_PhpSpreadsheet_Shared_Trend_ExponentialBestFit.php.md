# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Trend\ExponentialBestFit.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Trend\ExponentialBestFit.php`
- Type: PHP
- Size: 3096 bytes

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

Return the Slope of the line.
@param int $dp Number of places of decimal precision to display
@return float

Return the Value of X where it intersects Y = 0.
@param int $dp Number of places of decimal precision to display
@return float

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

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Trend\ExponentialBestFit.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\Trend\ExponentialBestFit extends BestFit`

**Functions/Methods**:
- `getValueOfYForX($xValue)`
- `getValueOfXForY($yValue)`
- `getEquation($dp = 0)`
- `getSlope($dp = 0)`
- `getIntersect($dp = 0)`
- `exponentialRegression(array $yValues, array $xValues, bool $const)`
- `__construct($yValues, $xValues = [], $const = true)`

