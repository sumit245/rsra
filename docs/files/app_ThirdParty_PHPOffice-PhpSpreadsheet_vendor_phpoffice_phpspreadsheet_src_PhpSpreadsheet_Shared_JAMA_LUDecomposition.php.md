# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\JAMA\LUDecomposition.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\JAMA\LUDecomposition.php`
- Type: PHP
- Size: 7748 bytes

## Summary (from docblocks)

For an m-by-n matrix A with m >= n, the LU decomposition is an m-by-n
   unit lower triangular matrix L, an n-by-n upper triangular matrix U,
   and a permutation vector piv of length m so that A(piv,:) = L*U.
   If m < n, then L is m-by-m and U is m-by-n.
   The LU decompostion with pivoting always exists, even if the matrix is
   singular, so the constructor will never fail. The primary use of the
   LU decomposition is in the solution of square systems of simultaneous
   linear equations. This will fail if isNonsingular() returns false.
   @author Paul Meagher
   @author Bartosz Matosiuk
   @author Michael Bommarito
   @version 1.1

Decomposition storage.
@var array

Row dimension.
@var int

Column dimension.
@var int

Pivot sign.
@var int

Internal storage of pivot vector.
@var array

LU Decomposition constructor.
@param Matrix $A Rectangular matrix

Get lower triangular factor.
@return Matrix Lower triangular factor

Get upper triangular factor.
@return Matrix Upper triangular factor

Return pivot permutation vector.
@return array Pivot vector

Alias for getPivot.
   @see getPivot

Is the matrix nonsingular?
@return bool true if U, and hence A, is nonsingular

Count determinants.
@return float

Solve A*X = B.
@param Matrix $B a Matrix with as many rows as A and any number of columns
@return Matrix X so that L*U*X = B(piv,:)

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\JAMA\LUDecomposition.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\JAMA\LUDecomposition`

**Functions/Methods**:
- `__construct($A)`
- `__construct()`
- `getL()`
- `getL()`
- `getU()`
- `getU()`
- `getPivot()`
- `getPivot()`
- `getDoublePivot()`
- `getDoublePivot()`
- `isNonsingular()`
- `isNonsingular()`
- `det()`
- `det()`
- `solve(Matrix $B)`

