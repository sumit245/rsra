# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\Normal.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\Normal.php`
- Type: PHP
- Size: 7151 bytes

## Summary (from docblocks)

NORMDIST.
Returns the normal distribution for the specified mean and standard deviation. This
function has a very wide range of applications in statistics, including hypothesis
testing.
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

NORMINV.
Returns the inverse of the normal cumulative distribution for the specified mean and standard deviation.
@param mixed $probability Float probability for which we want the value
                     Or can be an array of values
@param mixed $mean Mean Value as a float
                     Or can be an array of values
@param mixed $stdDev Standard Deviation as a float
                     Or can be an array of values
@return array|float|string The result, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\Normal.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\Normal`

**Functions/Methods**:
- `distribution($value, $mean, $stdDev, $cumulative)`
- `inverse($probability, $mean, $stdDev)`
- `inverseNcdf($p)`

