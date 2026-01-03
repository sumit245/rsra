# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Functions.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Functions.php`
- Type: PHP
- Size: 10898 bytes

## Summary (from docblocks)

Validates an array of matrix, converting an array to a matrix if required.
@param Matrix|array $matrix Matrix or an array to treat as a matrix.
@return Matrix The new matrix
@throws Exception If argument isn't a valid matrix or array.

Calculate the adjoint of the matrix
@param Matrix $matrix The matrix whose adjoint we wish to calculate
@return Matrix
@throws Exception

Return the adjoint of this matrix
The adjugate, classical adjoint, or adjunct of a square matrix is the transpose of its cofactor matrix.
The adjugate has sometimes been called the "adjoint", but today the "adjoint" of a matrix normally refers
    to its corresponding adjoint operator, which is its conjugate transpose.
@param Matrix|array $matrix The matrix whose adjoint we wish to calculate
@return Matrix
@throws Exception

Calculate the cofactors of the matrix
@param Matrix $matrix The matrix whose cofactors we wish to calculate
@return Matrix
@throws Exception

Return the cofactors of this matrix
@param Matrix|array $matrix The matrix whose cofactors we wish to calculate
@return Matrix
@throws Exception

@param Matrix $matrix
@param int $row
@param int $column
@return float
@throws Exception

Calculate the determinant of the matrix
@param Matrix $matrix The matrix whose determinant we wish to calculate
@return float
@throws Exception

Return the determinant of this matrix
@param Matrix|array $matrix The matrix whose determinant we wish to calculate
@return float
@throws Exception

Return the diagonal of this matrix
@param Matrix|array $matrix The matrix whose diagonal we wish to calculate
@return Matrix
@throws Exception

Return the antidiagonal of this matrix
@param Matrix|array $matrix The matrix whose antidiagonal we wish to calculate
@return Matrix
@throws Exception

Return the identity matrix
The identity matrix, or sometimes ambiguously called a unit matrix, of size n is the n × n square matrix
  with ones on the main diagonal and zeros elsewhere
@param Matrix|array $matrix The matrix whose identity we wish to calculate
@return Matrix
@throws Exception

Return the inverse of this matrix
@param Matrix|array $matrix The matrix whose inverse we wish to calculate
@return Matrix
@throws Exception

Calculate the minors of the matrix
@param Matrix $matrix The matrix whose minors we wish to calculate
@return array[]
@throws Exception

Return the minors of the matrix
The minor of a matrix A is the determinant of some smaller square matrix, cut down from A by removing one or
    more of its rows or columns.
Minors obtained by removing just one row and one column from square matrices (first minors) are required for
    calculating matrix cofactors, which in turn are useful for computing both the determinant and inverse of
    square matrices.
@param Matrix|array $matrix The matrix whose minors we wish to calculate
@return Matrix
@throws Exception

Return the trace of this matrix
The trace is defined as the sum of the elements on the main diagonal (the diagonal from the upper left to the lower right)
    of the matrix
@param Matrix|array $matrix The matrix whose trace we wish to calculate
@return float
@throws Exception

Return the transpose of this matrix
@param Matrix|\a $matrix The matrix whose transpose we wish to calculate
@return Matrix

## References

**Database Tables (inferred)**
- `a`
- `A`
- `square`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Functions.php`

**Classes**:
- `Matrix\Functions`

**Functions/Methods**:
- `validateMatrix($matrix)`
- `getAdjoint(Matrix $matrix)`
- `adjoint($matrix)`
- `getCofactors(Matrix $matrix)`
- `cofactors($matrix)`
- `getDeterminantSegment(Matrix $matrix, $row, $column)`
- `getDeterminant(Matrix $matrix)`
- `determinant($matrix)`
- `diagonal($matrix)`
- `antidiagonal($matrix)`
- `identity($matrix)`
- `inverse($matrix, string $type = 'inverse')`
- `getMinors(Matrix $matrix)`
- `minors($matrix)`
- `trace($matrix)`
- `transpose($matrix)`

