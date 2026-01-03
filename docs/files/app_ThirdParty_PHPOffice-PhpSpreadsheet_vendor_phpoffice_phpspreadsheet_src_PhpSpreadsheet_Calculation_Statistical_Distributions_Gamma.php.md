# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\Gamma.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\Gamma.php`
- Type: PHP
- Size: 5301 bytes

## Summary (from docblocks)

GAMMA.
Return the gamma function value.
@param mixed $value Float value for which we want the probability
                     Or can be an array of values
@return array|float|string The result, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

GAMMADIST.
Returns the gamma distribution.
@param mixed $value Float Value at which you want to evaluate the distribution
                     Or can be an array of values
@param mixed $a Parameter to the distribution as a float
                     Or can be an array of values
@param mixed $b Parameter to the distribution as a float
                     Or can be an array of values
@param mixed $cumulative Boolean value indicating if we want the cdf (true) or the pdf (false)
                     Or can be an array of values
@return array|float|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

GAMMAINV.
Returns the inverse of the Gamma distribution.
@param mixed $probability Float probability at which you want to evaluate the distribution
                     Or can be an array of values
@param mixed $alpha Parameter to the distribution as a float
                     Or can be an array of values
@param mixed $beta Parameter to the distribution as a float
                     Or can be an array of values
@return array|float|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

GAMMALN.
Returns the natural logarithm of the gamma function.
@param mixed $value Float Value at which you want to evaluate the distribution
                     Or can be an array of values
@return array|float|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\Gamma.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\Gamma extends GammaBase`

**Functions/Methods**:
- `gamma($value)`
- `distribution($value, $a, $b, $cumulative)`
- `inverse($probability, $alpha, $beta)`
- `ln($value)`

