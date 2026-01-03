# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Trends.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Trends.php`
- Type: PHP
- Size: 14290 bytes

## Summary (from docblocks)

CORREL.
Returns covariance, the average of the products of deviations for each data point pair.
@param mixed $yValues array of mixed Data Series Y
@param null|mixed $xValues array of mixed Data Series X
@return float|string

COVAR.
Returns covariance, the average of the products of deviations for each data point pair.
@param mixed $yValues array of mixed Data Series Y
@param mixed $xValues array of mixed Data Series X
@return float|string

FORECAST.
Calculates, or predicts, a future value by using existing values.
The predicted value is a y-value for a given x-value.
@param mixed $xValue Float value of X for which we want to find Y
                     Or can be an array of values
@param mixed $yValues array of mixed Data Series Y
@param mixed $xValues of mixed Data Series X
@return array|bool|float|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

GROWTH.
Returns values along a predicted exponential Trend
@param mixed[] $yValues Data Series Y
@param mixed[] $xValues Data Series X
@param mixed[] $newValues Values of X for which we want to find Y
@param mixed $const A logical (boolean) value specifying whether to force the intersect to equal 0 or not
@return float[]

INTERCEPT.
Calculates the point at which a line will intersect the y-axis by using existing x-values and y-values.
@param mixed[] $yValues Data Series Y
@param mixed[] $xValues Data Series X
@return float|string

LINEST.
Calculates the statistics for a line by using the "least squares" method to calculate a straight line
    that best fits your data, and then returns an array that describes the line.
@param mixed[] $yValues Data Series Y
@param null|mixed[] $xValues Data Series X
@param mixed $const A logical (boolean) value specifying whether to force the intersect to equal 0 or not
@param mixed $stats A logical (boolean) value specifying whether to return additional regression statistics
@return array|int|string The result, or a string containing an error

LOGEST.
Calculates an exponential curve that best fits the X and Y data series,
       and then returns an array that describes the line.
@param mixed[] $yValues Data Series Y
@param null|mixed[] $xValues Data Series X
@param mixed $const A logical (boolean) value specifying whether to force the intersect to equal 0 or not
@param mixed $stats A logical (boolean) value specifying whether to return additional regression statistics
@return array|int|string The result, or a string containing an error

RSQ.
Returns the square of the Pearson product moment correlation coefficient through data points
    in known_y's and known_x's.
@param mixed[] $yValues Data Series Y
@param mixed[] $xValues Data Series X
@return float|string The result, or a string containing an error

SLOPE.
Returns the slope of the linear regression line through data points in known_y's and known_x's.
@param mixed[] $yValues Data Series Y
@param mixed[] $xValues Data Series X
@return float|string The result, or a string containing an error

STEYX.
Returns the standard error of the predicted y-value for each x in the regression.
@param mixed[] $yValues Data Series Y
@param mixed[] $xValues Data Series X
@return float|string

TREND.
Returns values along a linear Trend
@param mixed[] $yValues Data Series Y
@param mixed[] $xValues Data Series X
@param mixed[] $newValues Values of X for which we want to find Y
@param mixed $const A logical (boolean) value specifying whether to force the intersect to equal 0 or not
@return float[]

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Trends.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Statistical\Trends`

**Functions/Methods**:
- `filterTrendValues(array &$array1, array &$array2)`
- `checkTrendArrays(&$array1, &$array2)`
- `validateTrendArrays(array $yValues, array $xValues)`
- `CORREL($yValues, $xValues = null)`
- `COVAR($yValues, $xValues)`
- `FORECAST($xValue, $yValues, $xValues)`
- `GROWTH($yValues, $xValues = [], $newValues = [], $const = true)`
- `INTERCEPT($yValues, $xValues)`
- `LINEST($yValues, $xValues = null, $const = true, $stats = false)`
- `LOGEST($yValues, $xValues = null, $const = true, $stats = false)`
- `RSQ($yValues, $xValues)`
- `SLOPE($yValues, $xValues)`
- `STEYX($yValues, $xValues)`
- `TREND($yValues, $xValues = [], $newValues = [], $const = true)`

