# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Trend\BestFit.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Trend\BestFit.php`
- Type: PHP
- Size: 11505 bytes

## Summary (from docblocks)

Indicator flag for a calculation error.
@var bool

Algorithm type to use for best-fit.
@var string

Number of entries in the sets of x- and y-value arrays.
@var int

X-value dataseries of values.
@var float[]

Y-value dataseries of values.
@var float[]

Flag indicating whether values should be adjusted to Y=0.
@var bool

Y-value series of best-fit values.
@var float[]

Return the Y-Value for a specified value of X.
@param float $xValue X-Value
@return float Y-Value

Return the X-Value for a specified value of Y.
@param float $yValue Y-Value
@return float X-Value

Return the original set of X-Values.
@return float[] X-Values

Return the Equation of the best-fit line.
@param int $dp Number of places of decimal precision to display
@return string

Return the Slope of the line.
@param int $dp Number of places of decimal precision to display
@return float

Return the standard error of the Slope.
@param int $dp Number of places of decimal precision to display
@return float

Return the Value of X where it intersects Y = 0.
@param int $dp Number of places of decimal precision to display
@return float

Return the standard error of the Intersect.
@param int $dp Number of places of decimal precision to display
@return float

Return the goodness of fit for this regression.
@param int $dp Number of places of decimal precision to return
@return float

Return the goodness of fit for this regression.
@param int $dp Number of places of decimal precision to return
@return float

Return the standard deviation of the residuals for this regression.
@param int $dp Number of places of decimal precision to return
@return float

@param int $dp Number of places of decimal precision to return
@return float

@param int $dp Number of places of decimal precision to return
@return float

@param int $dp Number of places of decimal precision to return
@return float

@param int $dp Number of places of decimal precision to return
@return float

@param int $dp Number of places of decimal precision to return
@return float

@param int $dp Number of places of decimal precision to return
@return float

@return float[]

@param float[] $yValues
@param float[] $xValues

Define the regression.
@param float[] $yValues The set of Y-values for this regression
@param float[] $xValues The set of X-values for this regression

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Trend\BestFit.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\Trend\BestFit`

**Functions/Methods**:
- `getError()`
- `getBestFitType()`
- `getValueOfYForX($xValue)`
- `getValueOfXForY($yValue)`
- `getXValues()`
- `getEquation($dp = 0)`
- `getSlope($dp = 0)`
- `getSlopeSE($dp = 0)`
- `getIntersect($dp = 0)`
- `getIntersectSE($dp = 0)`
- `getGoodnessOfFit($dp = 0)`
- `getGoodnessOfFitPercent($dp = 0)`
- `getStdevOfResiduals($dp = 0)`
- `getSSRegression($dp = 0)`
- `getSSResiduals($dp = 0)`
- `getDFResiduals($dp = 0)`
- `getF($dp = 0)`
- `getCovariance($dp = 0)`
- `getCorrelation($dp = 0)`
- `getYBestFitValues()`
- `calculateGoodnessOfFit($sumX, $sumY, $sumX2, $sumY2, $sumXY, $meanX, $meanY, $const)`
- `sumSquares(array $values)`
- `leastSquareFit(array $yValues, array $xValues, bool $const)`
- `__construct($yValues, $xValues = [])`

