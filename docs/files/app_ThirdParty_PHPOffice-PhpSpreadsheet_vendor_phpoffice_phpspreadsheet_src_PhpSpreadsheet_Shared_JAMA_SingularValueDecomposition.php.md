# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\JAMA\SingularValueDecomposition.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\JAMA\SingularValueDecomposition.php`
- Type: PHP
- Size: 18530 bytes

## Summary (from docblocks)

For an m-by-n matrix A with m >= n, the singular value decomposition is
   an m-by-n orthogonal matrix U, an n-by-n diagonal matrix S, and
   an n-by-n orthogonal matrix V so that A = U*S*V'.
   The singular values, sigma[$k] = S[$k][$k], are ordered so that
   sigma[0] >= sigma[1] >= ... >= sigma[n-1].
   The singular value decompostion always exists, so the constructor will
   never fail.  The matrix condition number and the effective numerical
   rank can be computed from this decomposition.
   @author  Paul Meagher
   @version 1.1

Internal storage of U.
@var array

Internal storage of V.
@var array

Internal storage of singular values.
@var array

Row dimension.
@var int

Column dimension.
@var int

Construct the singular value decomposition.
Derived from LINPACK code.
@param mixed $Arg Rectangular matrix

Return the left singular vectors.
@return Matrix U

Return the right singular vectors.
@return Matrix V

Return the one-dimensional array of singular values.
@return array diagonal of S

Return the diagonal matrix of singular values.
@return Matrix S

Two norm.
@return float max(S)

Two norm condition number.
@return float max(S)/min(S)

Effective numerical matrix rank.
@return int Number of nonnegligible singular values

## References

**Database Tables (inferred)**
- `this`
- `LINPACK`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\JAMA\SingularValueDecomposition.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\JAMA\SingularValueDecomposition`

**Functions/Methods**:
- `__construct($Arg)`
- `getU()`
- `getV()`
- `getSingularValues()`
- `getS()`
- `norm2()`
- `cond()`
- `rank()`

