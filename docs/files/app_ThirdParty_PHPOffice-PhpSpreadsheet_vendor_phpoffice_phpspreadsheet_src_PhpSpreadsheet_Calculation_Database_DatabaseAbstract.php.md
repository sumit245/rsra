# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Database\DatabaseAbstract.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Database\DatabaseAbstract.php`
- Type: PHP
- Size: 7371 bytes

## Summary (from docblocks)

fieldExtract.
Extracts the column ID to use for the data field.
@param mixed[] $database The range of cells that makes up the list or database.
                                       A database is a list of related data in which rows of related
                                       information are records, and columns of data are fields. The
                                       first row of the list contains labels for each column.
@param mixed $field Indicates which column is used in the function. Enter the
                                       column label enclosed between double quotation marks, such as
                                       "Age" or "Yield," or a number (without quotation marks) that
                                       represents the position of the column within the list: 1 for
                                       the first column, 2 for the second column, and so on.

filter.
Parses the selection criteria, extracts the database rows that match those criteria, and
returns that subset of rows.
@param mixed[] $database The range of cells that makes up the list or database.
                                       A database is a list of related data in which rows of related
                                       information are records, and columns of data are fields. The
                                       first row of the list contains labels for each column.
@param mixed[] $criteria The range of cells that contains the conditions you specify.
                                       You can use any range for the criteria argument, as long as it
                                       includes at least one column label and at least one cell below
                                       the column label in which you specify a condition for the
                                       column.
@return mixed[]

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Database\DatabaseAbstract.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Database\DatabaseAbstract`

**Functions/Methods**:
- `evaluate($database, $field, $criteria)`
- `fieldExtract(array $database, $field)`
- `filter(array $database, array $criteria)`
- `getFilteredColumn(array $database, ?int $field, array $criteria)`
- `buildQuery(array $criteriaNames, array $criteria)`
- `buildCondition($criterion, string $criterionName)`
- `executeQuery(array $database, string $query, array $criteria, array $fields)`
- `processCondition(string $criterion, array $fields, array $dataValues, string $conditions)`

