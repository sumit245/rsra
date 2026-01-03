# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\Beta.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\Beta.php`
- Type: PHP
- Size: 9567 bytes

## Summary (from docblocks)

BETADIST.
Returns the beta distribution.
@param mixed $value Float value at which you want to evaluate the distribution
                     Or can be an array of values
@param mixed $alpha Parameter to the distribution as a float
                     Or can be an array of values
@param mixed $beta Parameter to the distribution as a float
                     Or can be an array of values
@param mixed $rMin as an float
                     Or can be an array of values
@param mixed $rMax as an float
                     Or can be an array of values
@return array|float|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

BETAINV.
Returns the inverse of the Beta distribution.
@param mixed $probability Float probability at which you want to evaluate the distribution
                     Or can be an array of values
@param mixed $alpha Parameter to the distribution as a float
                     Or can be an array of values
@param mixed $beta Parameter to the distribution as a float
                     Or can be an array of values
@param mixed $rMin Minimum value as a float
                     Or can be an array of values
@param mixed $rMax Maximum value as a float
                     Or can be an array of values
@return array|float|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

@return float|string

Incomplete beta function.
@author Jaco van Kooten
@author Paul Meagher
The computation is based on formulas from Numerical Recipes, Chapter 6.4 (W.H. Press et al, 1992).
@param float $x require 0<=x<=1
@param float $p require p>0
@param float $q require q>0
@return float 0 if x<0, p<=0, q<=0 or p+q>2.55E305 and 1 if x>1 to avoid errors and over/underflow

The natural logarithm of the beta function.
@param float $p require p>0
@param float $q require q>0
@return float 0 if p<=0, q<=0 or p+q>2.55E305 to avoid errors and over/underflow
@author Jaco van Kooten

Evaluates of continued fraction part of incomplete beta function.
Based on an idea from Numerical Recipes (W.H. Press et al, 1992).
@author Jaco van Kooten

## References

**Database Tables (inferred)**
- `Numerical`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\Beta.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\Beta`

**Functions/Methods**:
- `distribution($value, $alpha, $beta, $rMin = 0.0, $rMax = 1.0)`
- `inverse($probability, $alpha, $beta, $rMin = 0.0, $rMax = 1.0)`
- `calculateInverse(float $probability, float $alpha, float $beta, float $rMin, float $rMax)`
- `incompleteBeta(float $x, float $p, float $q)`
- `logBeta(float $p, float $q)`
- `betaFraction(float $x, float $p, float $q)`
- `betaValue(float $a, float $b)`
- `regularizedIncompleteBeta(float $value, float $a, float $b)`

