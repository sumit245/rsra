# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\GammaBase.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\GammaBase.php`
- Type: PHP
- Size: 11469 bytes

## Summary (from docblocks)

logGamma function.
@version 1.1
@author Jaco van Kooten
Original author was Jaco van Kooten. Ported to PHP by Paul Meagher.
The natural logarithm of the gamma function. <br />
Based on public domain NETLIB (Fortran) code by W. J. Cody and L. Stoltz <br />
Applied Mathematics Division <br />
Argonne National Laboratory <br />
Argonne, IL 60439 <br />
<p>
References:
<ol>
<li>W. J. Cody and K. E. Hillstrom, 'Chebyshev Approximations for the Natural
    Logarithm of the Gamma Function,' Math. Comp. 21, 1967, pp. 198-203.</li>
<li>K. E. Hillstrom, ANL/AMD Program ANLC366S, DGAMMA/DLGAMA, May, 1969.</li>
<li>Hart, Et. Al., Computer Approximations, Wiley and sons, New York, 1968.</li>
</ol>
</p>
<p>
From the original documentation:
</p>
<p>
This routine calculates the LOG(GAMMA) function for a positive real argument X.
Computation is based on an algorithm outlined in references 1 and 2.
The program uses rational functions that theoretically approximate LOG(GAMMA)
to at least 18 significant decimal digits. The approximation for X > 12 is from
reference 3, while approximations for X < 12.0 are similar to those in reference
1, but are unpublished. The accuracy achieved depends on the arithmetic system,
the compiler, the intrinsic functions, and proper selection of the
machine-dependent constants.
</p>
<p>
Error returns: <br />
The program returns the value XINF for X .LE. 0.0 or when overflow would occur.
The computation is believed to be free of underflow and overflow.
</p>
@return float MAX_VALUE for x < 0.0 or when overflow would occur, i.e. x > 2.55E305

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Distributions\GammaBase.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\GammaBase`

**Functions/Methods**:
- `calculateDistribution(float $value, float $a, float $b, bool $cumulative)`
- `calculateInverse(float $probability, float $alpha, float $beta)`
- `incompleteGamma(float $a, float $x)`
- `gammaValue(float $value)`
- `logGamma(float $x)`
- `logGamma1(float $y)`
- `logGamma2(float $y)`
- `logGamma3(float $y)`
- `logGamma4(float $y)`

