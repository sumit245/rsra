# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Matrix.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Matrix.php`
- Type: PHP
- Size: 11560 bytes

## Summary (from docblocks)

Class for the management of Matrices
@copyright  Copyright (c) 2018 Mark Baker (https://github.com/MarkBaker/PHPMatrix)
@license    https://opensource.org/licenses/MIT    MIT

Matrix object.
@package Matrix
@property-read int $rows The number of rows in the matrix
@property-read int $columns The number of columns in the matrix
@method Matrix antidiagonal()
@method Matrix adjoint()
@method Matrix cofactors()
@method float determinant()
@method Matrix diagonal()
@method Matrix identity()
@method Matrix inverse()
@method Matrix minors()
@method float trace()
@method Matrix transpose()
@method Matrix add(...$matrices)
@method Matrix subtract(...$matrices)
@method Matrix multiply(...$matrices)
@method Matrix divideby(...$matrices)
@method Matrix divideinto(...$matrices)
@method Matrix directsum(...$matrices)

Validate that a row number is a positive integer
@param int $row
@return int
@throws Exception

Validate that a column number is a positive integer
@param int $column
@return int
@throws Exception

Validate that a row number falls within the set of rows for this matrix
@param int $row
@return int
@throws Exception

Validate that a column number falls within the set of columns for this matrix
@param int $column
@return int
@throws Exception

Return a new matrix as a subset of rows from this matrix, starting at row number $row, and $rowCount rows
A $rowCount value of 0 will return all rows of the matrix from $row
A negative $rowCount value will return rows until that many rows from the end of the matrix
Note that row numbers start from 1, not from 0
@param int $row
@param int $rowCount
@return static
@throws Exception

Return a new matrix as a subset of columns from this matrix, starting at column number $column, and $columnCount columns
A $columnCount value of 0 will return all columns of the matrix from $column
A negative $columnCount value will return columns until that many columns from the end of the matrix
Note that column numbers start from 1, not from 0
@param int $column
@param int $columnCount
@return Matrix
@throws Exception

Return a new matrix as a subset of rows from this matrix, dropping rows starting at row number $row,
    and $rowCount rows
A negative $rowCount value will drop rows until that many rows from the end of the matrix
A $rowCount value of 0 will remove all rows of the matrix from $row
Note that row numbers start from 1, not from 0
@param int $row
@param int $rowCount
@return static
@throws Exception

Return a new matrix as a subset of columns from this matrix, dropping columns starting at column number $column,
    and $columnCount columns
A negative $columnCount value will drop columns until that many columns from the end of the matrix
A $columnCount value of 0 will remove all columns of the matrix from $column
Note that column numbers start from 1, not from 0
@param int $column
@param int $columnCount
@return static
@throws Exception

Return a value from this matrix, from the "cell" identified by the row and column numbers
Note that row and column numbers start from 1, not from 0
@param int $row
@param int $column
@return mixed
@throws Exception

Returns a Generator that will yield each row of the matrix in turn as a vector matrix
    or the value of each cell if the matrix is a column vector
@return Generator|Matrix[]|mixed[]

Returns a Generator that will yield each column of the matrix in turn as a vector matrix
    or the value of each cell if the matrix is a row vector
@return Generator|Matrix[]|mixed[]

Identify if the row and column dimensions of this matrix are equal,
    i.e. if it is a "square" matrix
@return bool

Identify if this matrix is a vector
    i.e. if it comprises only a single row or a single column
@return bool

Return the matrix as a 2-dimensional array
@return array

Solve A*X = B.
@param Matrix $B Right hand side
@throws Exception
@return Matrix ... Solution if A is square, least squares solution otherwise

Access specific properties as read-only (no setters)
@param string $propertyName
@return mixed
@throws Exception

Returns the result of the function call or operation
@param string $functionName
@param mixed[] $arguments
@return Matrix|float
@throws Exception

## References

**Database Tables (inferred)**
- `an`
- `this`
- `the`
- `1`
- `0`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Matrix.php`

**Classes**:
- `Matrix\Matrix`

**Functions/Methods**:
- `__construct(array $grid)`
- `buildFromArray(array $grid)`
- `validateRow(int $row)`
- `validateColumn(int $column)`
- `validateRowInRange(int $row)`
- `validateColumnInRange(int $column)`
- `getRows(int $row, int $rowCount = 1)`
- `getColumns(int $column, int $columnCount = 1)`
- `dropRows(int $row, int $rowCount = 1)`
- `dropColumns(int $column, int $columnCount = 1)`
- `getValue(int $row, int $column)`
- `rows()`
- `columns()`
- `isSquare()`
- `isVector()`
- `toArray()`
- `solve(Matrix $B)`
- `__get(string $propertyName)`
- `__call(string $functionName, $arguments)`

