# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\MatrixFunctions.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\MatrixFunctions.php`
- Type: PHP
- Size: 5305 bytes

## Summary (from docblocks)

Convert parameter to Matrix.
@param mixed $matrixValues A matrix of values

SEQUENCE.
Generates a list of sequential numbers in an array.
Excel Function:
     SEQUENCE(rows,[columns],[start],[step])
@param mixed $rows the number of rows to return, defaults to 1
@param mixed $columns the number of columns to return, defaults to 1
@param mixed $start the first number in the sequence, defaults to 1
@param mixed $step the amount to increment each subsequent value in the array, defaults to 1
@return array|string The resulting array, or a string containing an error

MDETERM.
Returns the matrix determinant of an array.
Excel Function:
       MDETERM(array)
@param mixed $matrixValues A matrix of values
@return float|string The result, or a string containing an error

MINVERSE.
Returns the inverse matrix for the matrix stored in an array.
Excel Function:
       MINVERSE(array)
@param mixed $matrixValues A matrix of values
@return array|string The result, or a string containing an error

MMULT.
@param mixed $matrixData1 A matrix of values
@param mixed $matrixData2 A matrix of values
@return array|string The result, or a string containing an error

MUnit.
@param mixed $dimension Number of rows and columns
@return array|string The result, or a string containing an error

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\MatrixFunctions.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\MathTrig\MatrixFunctions`

**Functions/Methods**:
- `getMatrix($matrixValues)`
- `sequence($rows = 1, $columns = 1, $start = 1, $step = 1)`
- `determinant($matrixValues)`
- `inverse($matrixValues)`
- `multiply($matrixData1, $matrixData2)`
- `identity($dimension)`

