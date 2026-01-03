# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Decomposition\LU.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Decomposition\LU.php`
- Type: PHP
- Size: 6969 bytes

## Summary (from docblocks)

Get lower triangular factor.
@return Matrix Lower triangular factor

Get upper triangular factor.
@return Matrix Upper triangular factor

Return pivot permutation vector.
@return Matrix Pivot matrix

Return pivot permutation vector.
@return array Pivot vector

Is the matrix nonsingular?
@return bool true if U, and hence A, is nonsingular

Solve A*X = B.
@param Matrix $B a Matrix with as many rows as A and any number of columns
@throws Exception
@return Matrix X so that L*U*X = B(piv,:)

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Decomposition\LU.php`

**Classes**:
- `Matrix\Decomposition\LU`

**Functions/Methods**:
- `__construct(Matrix $matrix)`
- `getL()`
- `getU()`
- `getP()`
- `getPivot()`
- `isNonsingular()`
- `buildPivot()`
- `localisedReferenceColumn($column)`
- `applyTransformations($column, array $luColumn)`
- `findPivot($column, array $luColumn)`
- `pivotExchange($pivot, $column)`
- `computeMultipliers($diagonal)`
- `pivotB(Matrix $B)`
- `solve(Matrix $B)`

