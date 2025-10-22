# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Decomposition\QR.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Decomposition\QR.php`
- Type: PHP
- Size: 5615 bytes

## Summary (from docblocks)

QR Decomposition computed by Householder reflections.

Least squares solution of A*X = B.
@param Matrix $B a Matrix with as many rows as A and any number of columns
@throws Exception
@return Matrix matrix that minimizes the two norm of Q*R*X-B

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Decomposition\QR.php`

**Classes**:
- `Matrix\Decomposition\QR`

**Functions/Methods**:
- `__construct(Matrix $matrix)`
- `getHouseholdVectors()`
- `getQ()`
- `getR()`
- `hypo($a, $b)`
- `decompose()`
- `isFullRank()`
- `solve(Matrix $B)`

