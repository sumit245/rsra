# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\JAMA\CholeskyDecomposition.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\JAMA\CholeskyDecomposition.php`
- Type: PHP
- Size: 3862 bytes

## Summary (from docblocks)

Cholesky decomposition class.
   For a symmetric, positive definite matrix A, the Cholesky decomposition
   is an lower triangular matrix L so that A = L*L'.
   If the matrix is not symmetric or positive definite, the constructor
   returns a partial decomposition and sets an internal flag that may
   be queried by the isSPD() method.
   @author Paul Meagher
   @author Michael Bommarito
   @version 1.2

Decomposition storage.
@var array

Matrix row and column dimension.
@var int

Symmetric positive definite flag.
@var bool

CholeskyDecomposition.
   Class constructor - decomposes symmetric positive definite matrix
@param Matrix $A Matrix square symmetric positive definite matrix

Is the matrix symmetric and positive definite?
@return bool

getL.
Return triangular factor.
@return Matrix Lower triangular matrix

Solve A*X = B.
@param Matrix $B Row-equal matrix
@return Matrix L * L' * X = B

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\JAMA\CholeskyDecomposition.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\JAMA\CholeskyDecomposition`

**Functions/Methods**:
- `__construct(Matrix $A)`
- `isSPD()`
- `getL()`
- `solve(Matrix $B)`

