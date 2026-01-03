# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Database\DGet.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Database\DGet.php`
- Type: PHP
- Size: 2253 bytes

## Summary (from docblocks)

DGET.
Extracts a single value from a column of a list or database that matches conditions that you
specify.
Excel Function:
       DGET(database,field,criteria)
@param mixed[] $database The range of cells that makes up the list or database.
                                       A database is a list of related data in which rows of related
                                       information are records, and columns of data are fields. The
                                       first row of the list contains labels for each column.
@param int|string $field Indicates which column is used in the function. Enter the
                                       column label enclosed between double quotation marks, such as
                                       "Age" or "Yield," or a number (without quotation marks) that
                                       represents the position of the column within the list: 1 for
                                       the first column, 2 for the second column, and so on.
@param mixed[] $criteria The range of cells that contains the conditions you specify.
                                       You can use any range for the criteria argument, as long as it
                                       includes at least one column label and at least one cell below
                                       the column label in which you specify a condition for the
                                       column.
@return mixed

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Database\DGet.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Database\DGet extends DatabaseAbstract`

**Functions/Methods**:
- `evaluate($database, $field, $criteria)`

