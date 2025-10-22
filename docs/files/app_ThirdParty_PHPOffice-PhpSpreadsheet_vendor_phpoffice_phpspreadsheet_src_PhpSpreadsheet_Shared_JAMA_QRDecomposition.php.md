# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\JAMA\QRDecomposition.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\JAMA\QRDecomposition.php`
- Type: PHP
- Size: 6969 bytes

## Summary (from docblocks)

For an m-by-n matrix A with m >= n, the QR decomposition is an m-by-n
   orthogonal matrix Q and an n-by-n upper triangular matrix R so that
   A = Q*R.
   The QR decompostion always exists, even if the matrix does not have
   full rank, so the constructor will never fail.  The primary use of the
   QR decomposition is in the least squares solution of nonsquare systems
   of simultaneous linear equations.  This will fail if isFullRank()
   returns false.
@author  Paul Meagher
@version 1.1

Array for internal storage of decomposition.
@var array

Row dimension.
@var int

Column dimension.
@var int

Array for internal storage of diagonal of R.
@var array

QR Decomposition computed by Householder reflections.
@param Matrix $A Rectangular matrix

Is the matrix full rank?
@return bool true if R, and hence A, has full rank, else false

Return the Householder vectors.
@return Matrix Lower trapezoidal matrix whose columns define the reflections

Return the upper triangular factor.
@return Matrix upper triangular factor

Generate and return the (economy-sized) orthogonal factor.
@return Matrix orthogonal factor

Least squares solution of A*X = B.
@param Matrix $B a Matrix with as many rows as A and any number of columns
@return Matrix matrix that minimizes the two norm of Q*R*X-B

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\JAMA\QRDecomposition.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\JAMA\QRDecomposition`

**Functions/Methods**:
- `__construct(Matrix $A)`
- `__construct()`
- `isFullRank()`
- `isFullRank()`
- `getH()`
- `getH()`
- `getR()`
- `getR()`
- `getQ()`
- `getQ()`
- `solve(Matrix $B)`

