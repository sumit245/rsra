# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\Fisher.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\Fisher.php`
- Type: PHP
- Size: 2462 bytes

## Summary (from docblocks)

FISHER.
Returns the Fisher transformation at x. This transformation produces a function that
       is normally distributed rather than skewed. Use this function to perform hypothesis
       testing on the correlation coefficient.
@param mixed $value Float value for which we want the probability
                     Or can be an array of values
@return array|float|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

FISHERINV.
Returns the inverse of the Fisher transformation. Use this transformation when
       analyzing correlations between ranges or arrays of data. If y = FISHER(x), then
       FISHERINV(y) = x.
@param mixed $probability Float probability at which you want to evaluate the distribution
                     Or can be an array of values
@return array|float|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\Fisher.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\Fisher`

**Functions/Methods**:
- `distribution($value)`
- `inverse($probability)`

