# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Trend\PolynomialBestFit.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Trend\PolynomialBestFit.php`
- Type: PHP
- Size: 5723 bytes

## Summary (from docblocks)

Algorithm type to use for best-fit
(Name of this Trend class).
@var string

Polynomial order.
@var int

Return the order of this polynomial.
@return int

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

Execute the regression and calculate the goodness of fit for a set of X and Y data values.
@param int $order Order of Polynomial for this regression
@param float[] $yValues The set of Y-values for this regression
@param float[] $xValues The set of X-values for this regression

Define the regression and calculate the goodness of fit for a set of X and Y data values.
@param int $order Order of Polynomial for this regression
@param float[] $yValues The set of Y-values for this regression
@param float[] $xValues The set of X-values for this regression

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Trend\PolynomialBestFit.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\Trend\PolynomialBestFit extends BestFit`

**Functions/Methods**:
- `getOrder()`
- `getValueOfYForX($xValue)`
- `getValueOfXForY($yValue)`
- `getEquation($dp = 0)`
- `getSlope($dp = 0)`
- `getCoefficients($dp = 0)`
- `polynomialRegression($order, $yValues, $xValues)`
- `__construct($order, $yValues, $xValues = [])`

