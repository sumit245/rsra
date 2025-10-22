# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Operators\Operator.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Operators\Operator.php`
- Type: PHP
- Size: 2001 bytes

## Summary (from docblocks)

Stored internally as a 2-dimension array of values
@property mixed[][] $matrix

Number of rows in the matrix
@property integer $rows

Number of columns in the matrix
@property integer $columns

Create an new handler object for the operation
@param Matrix $matrix The base Matrix object on which the operation will be performed

Compare the dimensions of the matrices being operated on to see if they are valid for addition/subtraction
@param Matrix $matrix The second Matrix object on which the operation will be performed
@throws Exception

Compare the dimensions of the matrices being operated on to see if they are valid for multiplication/division
@param Matrix $matrix The second Matrix object on which the operation will be performed
@throws Exception

Return the result of the operation
@return Matrix

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Operators\Operator.php`

**Classes**:
- `Matrix\Operators\Operator`

**Functions/Methods**:
- `__construct(Matrix $matrix)`
- `validateMatchingDimensions(Matrix $matrix)`
- `validateReflectingDimensions(Matrix $matrix)`
- `result()`

