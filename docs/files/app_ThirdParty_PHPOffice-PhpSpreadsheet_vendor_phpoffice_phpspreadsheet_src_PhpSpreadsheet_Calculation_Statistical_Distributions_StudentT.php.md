# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\StudentT.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\StudentT.php`
- Type: PHP
- Size: 4858 bytes

## Summary (from docblocks)

TDIST.
Returns the probability of Student's T distribution.
@param mixed $value Float value for the distribution
                     Or can be an array of values
@param mixed $degrees Integer value for degrees of freedom
                     Or can be an array of values
@param mixed $tails Integer value for the number of tails (1 or 2)
                     Or can be an array of values
@return array|float|string The result, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

TINV.
Returns the one-tailed probability of the chi-squared distribution.
@param mixed $probability Float probability for the function
                     Or can be an array of values
@param mixed $degrees Integer value for degrees of freedom
                     Or can be an array of values
@return array|float|string The result, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

@return float

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\StudentT.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\StudentT`

**Functions/Methods**:
- `distribution($value, $degrees, $tails)`
- `inverse($probability, $degrees)`
- `calculateDistribution(float $value, int $degrees, int $tails)`

