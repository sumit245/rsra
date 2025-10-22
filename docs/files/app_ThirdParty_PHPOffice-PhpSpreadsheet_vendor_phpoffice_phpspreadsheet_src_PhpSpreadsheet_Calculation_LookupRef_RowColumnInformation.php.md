# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\RowColumnInformation.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\RowColumnInformation.php`
- Type: PHP
- Size: 7344 bytes

## Summary (from docblocks)

Test if cellAddress is null or whitespace string.
@param null|array|string $cellAddress A reference to a range of cells

COLUMN.
Returns the column number of the given cell reference
    If the cell reference is a range of cells, COLUMN returns the column numbers of each column
       in the reference as a horizontal array.
    If cell reference is omitted, and the function is being called through the calculation engine,
       then it is assumed to be the reference of the cell in which the COLUMN function appears;
       otherwise this function returns 1.
Excel Function:
       =COLUMN([cellAddress])
@param null|array|string $cellAddress A reference to a range of cells for which you want the column numbers
@return int|int[]

COLUMNS.
Returns the number of columns in an array or reference.
Excel Function:
       =COLUMNS(cellAddress)
@param null|array|string $cellAddress An array or array formula, or a reference to a range of cells
                                         for which you want the number of columns
@return int|string The number of columns in cellAddress, or a string if arguments are invalid

ROW.
Returns the row number of the given cell reference
    If the cell reference is a range of cells, ROW returns the row numbers of each row in the reference
       as a vertical array.
    If cell reference is omitted, and the function is being called through the calculation engine,
       then it is assumed to be the reference of the cell in which the ROW function appears;
       otherwise this function returns 1.
Excel Function:
       =ROW([cellAddress])
@param null|array|string $cellAddress A reference to a range of cells for which you want the row numbers
@return int|mixed[]|string

ROWS.
Returns the number of rows in an array or reference.
Excel Function:
       =ROWS(cellAddress)
@param null|array|string $cellAddress An array or array formula, or a reference to a range of cells
                                         for which you want the number of rows
@return int|string The number of rows in cellAddress, or a string if arguments are invalid

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\RowColumnInformation.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\LookupRef\RowColumnInformation`

**Functions/Methods**:
- `cellAddressNullOrWhitespace($cellAddress)`
- `cellColumn(?Cell $cell)`
- `COLUMN($cellAddress = null, ?Cell $cell = null)`
- `COLUMNS($cellAddress = null)`
- `cellRow(?Cell $cell)`
- `ROW($cellAddress = null, ?Cell $cell = null)`
- `ROWS($cellAddress = null)`

