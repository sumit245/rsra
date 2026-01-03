# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\ChiSquared.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\ChiSquared.php`
- Type: PHP
- Size: 10963 bytes

## Summary (from docblocks)

CHIDIST.
Returns the one-tailed probability of the chi-squared distribution.
@param mixed $value Float value for which we want the probability
                     Or can be an array of values
@param mixed $degrees Integer degrees of freedom
                     Or can be an array of values
@return array|float|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

CHIDIST.
Returns the one-tailed probability of the chi-squared distribution.
@param mixed $value Float value for which we want the probability
                     Or can be an array of values
@param mixed $degrees Integer degrees of freedom
                     Or can be an array of values
@param mixed $cumulative Boolean value indicating if we want the cdf (true) or the pdf (false)
                     Or can be an array of values
@return array|float|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

CHIINV.
Returns the inverse of the right-tailed probability of the chi-squared distribution.
@param mixed $probability Float probability at which you want to evaluate the distribution
                     Or can be an array of values
@param mixed $degrees Integer degrees of freedom
                     Or can be an array of values
@return array|float|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

CHIINV.
Returns the inverse of the left-tailed probability of the chi-squared distribution.
@param mixed $probability Float probability at which you want to evaluate the distribution
                     Or can be an array of values
@param mixed $degrees Integer degrees of freedom
                     Or can be an array of values
@return array|float|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

CHITEST.
Uses the chi-square test to calculate the probability that the differences between two supplied data sets
     (of observed and expected frequencies), are likely to be simply due to sampling error,
     or if they are likely to be real.
@param mixed $actual an array of observed frequencies
@param mixed $expected an array of expected frequencies
@return float|string

@var float

@var float

## References

**Database Tables (inferred)**
- `numerical`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\ChiSquared.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\ChiSquared`

**Functions/Methods**:
- `distributionRightTail($value, $degrees)`
- `distributionLeftTail($value, $degrees, $cumulative)`
- `inverseRightTail($probability, $degrees)`
- `inverseLeftTail($probability, $degrees)`
- `test($actual, $expected)`
- `degrees(int $rows, int $columns)`
- `inverseLeftTailCalculation(float $probability, int $degrees)`
- `pchisq($chi2, $degrees)`
- `gammp($n, $x)`
- `P(n/2,x)`
- `gser($n, $x)`
- `Q(n/2,x)`
- `gcf($n, $x)`

