# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Builder.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Builder.php`
- Type: PHP
- Size: 1712 bytes

## Summary (from docblocks)

Class for the creating "special" Matrices
@copyright  Copyright (c) 2018 Mark Baker (https://github.com/MarkBaker/PHPMatrix)
@license    https://opensource.org/licenses/MIT    MIT

Matrix Builder class.
@package Matrix

Create a new matrix of specified dimensions, and filled with a specified value
If the column argument isn't provided, then a square matrix will be created
@param mixed $fillValue
@param int $rows
@param int|null $columns
@return Matrix
@throws Exception

Create a new identity matrix of specified dimensions
This will always be a square matrix, with the number of rows and columns matching the provided dimension
@param int $dimensions
@return Matrix
@throws Exception

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Builder.php`

**Classes**:
- `Matrix\Builder`

**Functions/Methods**:
- `createFilledMatrix($fillValue, $rows, $columns = null)`
- `createIdentityMatrix($dimensions, $fillValue = null)`

