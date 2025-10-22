# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\Matrix.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\Matrix.php`
- Type: PHP
- Size: 4237 bytes

## Summary (from docblocks)

Helper function; NOT an implementation of any Excel Function.

Helper function; NOT an implementation of any Excel Function.

TRANSPOSE.
@param array|mixed $matrixData A matrix of values
@return array

INDEX.
Uses an index to choose a value from a reference or array
Excel Function:
       =INDEX(range_array, row_num, [column_num], [area_num])
@param mixed $matrix A range of cells or an array constant
@param mixed $rowNum The row in the array or range from which to return a value.
                         If row_num is omitted, column_num is required.
                     Or can be an array of values
@param mixed $columnNum The column in the array or range from which to return a value.
                         If column_num is omitted, row_num is required.
                     Or can be an array of values
TODO Provide support for area_num, currently not supported
@return mixed the value of a specified cell or array of cells
        If an array of values is passed as the $rowNum and/or $columnNum arguments, then the returned result
           will also be an array with the same dimensions

## References

**Database Tables (inferred)**
- `a`
- `which`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\Matrix.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\LookupRef\Matrix`

**Functions/Methods**:
- `isColumnVector(array $values)`
- `isRowVector(array $values)`
- `transpose($matrixData)`
- `index($matrix, $rowNum = 0, $columnNum = 0)`
- `extractRowValue(array $matrix, array $rowKeys, int $rowNum)`

