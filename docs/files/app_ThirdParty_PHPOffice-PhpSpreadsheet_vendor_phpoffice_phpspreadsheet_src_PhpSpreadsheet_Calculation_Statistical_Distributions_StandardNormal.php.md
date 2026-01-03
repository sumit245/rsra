# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\StandardNormal.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\StandardNormal.php`
- Type: PHP
- Size: 6070 bytes

## Summary (from docblocks)

NORMSDIST.
Returns the standard normal cumulative distribution function. The distribution has
a mean of 0 (zero) and a standard deviation of one. Use this function in place of a
table of standard normal curve areas.
NOTE: We don't need to check for arrays to array-enable this function, because that is already
      handled by the logic in Normal::distribution()
      All we need to do is pass the value through as scalar or as array.
@param mixed $value Float value for which we want the probability
                     Or can be an array of values
@return array|float|string The result, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

NORM.S.DIST.
Returns the standard normal cumulative distribution function. The distribution has
a mean of 0 (zero) and a standard deviation of one. Use this function in place of a
table of standard normal curve areas.
NOTE: We don't need to check for arrays to array-enable this function, because that is already
      handled by the logic in Normal::distribution()
      All we need to do is pass the value and cumulative through as scalar or as array.
@param mixed $value Float value for which we want the probability
                     Or can be an array of values
@param mixed $cumulative Boolean value indicating if we want the cdf (true) or the pdf (false)
                     Or can be an array of values
@return array|float|string The result, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

NORMSINV.
Returns the inverse of the standard normal cumulative distribution
@param mixed $value float probability for which we want the value
                     Or can be an array of values
NOTE: We don't need to check for arrays to array-enable this function, because that is already
      handled by the logic in Normal::inverse()
      All we need to do is pass the value through as scalar or as array
@return array|float|string The result, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

GAUSS.
Calculates the probability that a member of a standard normal population will fall between
    the mean and z standard deviations from the mean.
@param mixed $value
                     Or can be an array of values
@return array|float|string The result, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

@var float

ZTEST.
Returns the one-tailed P-value of a z-test.
For a given hypothesized population mean, x, Z.TEST returns the probability that the sample mean would be
    greater than the average of observations in the data set (array) — that is, the observed sample mean.
@param mixed $dataSet The dataset should be an array of float values for the observations
@param mixed $m0 Alpha Parameter
                     Or can be an array of values
@param mixed $sigma A null or float value for the Beta (Standard Deviation) Parameter;
                      if null, we use the standard deviation of the dataset
                     Or can be an array of values
@return array|float|string (string if result is an error)
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

@var float

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\StandardNormal.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\StandardNormal`

**Functions/Methods**:
- `cumulative($value)`
- `distribution($value, $cumulative)`
- `inverse($value)`
- `gauss($value)`
- `zTest($dataSet, $m0, $sigma = null)`

