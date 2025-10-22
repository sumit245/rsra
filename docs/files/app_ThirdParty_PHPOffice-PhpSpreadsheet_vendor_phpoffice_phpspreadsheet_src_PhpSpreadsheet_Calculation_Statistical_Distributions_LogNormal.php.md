# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\LogNormal.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\LogNormal.php`
- Type: PHP
- Size: 5554 bytes

## Summary (from docblocks)

LOGNORMDIST.
Returns the cumulative lognormal distribution of x, where ln(x) is normally distributed
with parameters mean and standard_dev.
@param mixed $value Float value for which we want the probability
                     Or can be an array of values
@param mixed $mean Mean value as a float
                     Or can be an array of values
@param mixed $stdDev Standard Deviation as a float
                     Or can be an array of values
@return array|float|string The result, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

LOGNORM.DIST.
Returns the lognormal distribution of x, where ln(x) is normally distributed
with parameters mean and standard_dev.
@param mixed $value Float value for which we want the probability
                     Or can be an array of values
@param mixed $mean Mean value as a float
                     Or can be an array of values
@param mixed $stdDev Standard Deviation as a float
                     Or can be an array of values
@param mixed $cumulative Boolean value indicating if we want the cdf (true) or the pdf (false)
                     Or can be an array of values
@return array|float|string The result, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

LOGINV.
Returns the inverse of the lognormal cumulative distribution
@param mixed $probability Float probability for which we want the value
                     Or can be an array of values
@param mixed $mean Mean Value as a float
                     Or can be an array of values
@param mixed $stdDev Standard Deviation as a float
                     Or can be an array of values
@return array|float|string The result, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions
@TODO    Try implementing P J Acklam's refinement algorithm for greater
           accuracy if I can get my head round the mathematics
           (as described at) http://home.online.no/~pjacklam/notes/invnorm/

@var float

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\LogNormal.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\LogNormal`

**Functions/Methods**:
- `cumulative($value, $mean, $stdDev)`
- `distribution($value, $mean, $stdDev, $cumulative = false)`
- `inverse($probability, $mean, $stdDev)`

