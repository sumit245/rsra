# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\ReferenceHelper.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\ReferenceHelper.php`
- Type: PHP
- Size: 51624 bytes

## Summary (from docblocks)

Constants

Regular Expressions

Instance of this class.
@var ?ReferenceHelper

@var CellReferenceHelper

Get an instance of this class.
@return ReferenceHelper

Create a new ReferenceHelper.

Compare two column addresses
Intended for use as a Callback function for sorting column addresses by column.
@param string $a First column to test (e.g. 'AA')
@param string $b Second column to test (e.g. 'Z')
@return int

Compare two column addresses
Intended for use as a Callback function for reverse sorting column addresses by column.
@param string $a First column to test (e.g. 'AA')
@param string $b Second column to test (e.g. 'Z')
@return int

Compare two cell addresses
Intended for use as a Callback function for sorting cell addresses by column and row.
@param string $a First cell to test (e.g. 'AA1')
@param string $b Second cell to test (e.g. 'Z1')
@return int

Compare two cell addresses
Intended for use as a Callback function for sorting cell addresses by column and row.
@param string $a First cell to test (e.g. 'AA1')
@param string $b Second cell to test (e.g. 'Z1')
@return int

Update page breaks when inserting/deleting rows/columns.
@param Worksheet $worksheet The worksheet that we're editing
@param int $numberOfColumns Number of columns to insert/delete (negative values indicate deletion)
@param int $numberOfRows Number of rows to insert/delete (negative values indicate deletion)

Update cell comments when inserting/deleting rows/columns.
@param Worksheet $worksheet The worksheet that we're editing

Update hyperlinks when inserting/deleting rows/columns.
@param Worksheet $worksheet The worksheet that we're editing
@param int $numberOfColumns Number of columns to insert/delete (negative values indicate deletion)
@param int $numberOfRows Number of rows to insert/delete (negative values indicate deletion)

Update conditional formatting styles when inserting/deleting rows/columns.
@param Worksheet $worksheet The worksheet that we're editing
@param int $numberOfColumns Number of columns to insert/delete (negative values indicate deletion)
@param int $numberOfRows Number of rows to insert/delete (negative values indicate deletion)

@var Conditional $cfRule

Update data validations when inserting/deleting rows/columns.
@param Worksheet $worksheet The worksheet that we're editing
@param int $numberOfColumns Number of columns to insert/delete (negative values indicate deletion)
@param int $numberOfRows Number of rows to insert/delete (negative values indicate deletion)

Update merged cells when inserting/deleting rows/columns.
@param Worksheet $worksheet The worksheet that we're editing

Update protected cells when inserting/deleting rows/columns.
@param Worksheet $worksheet The worksheet that we're editing
@param int $numberOfColumns Number of columns to insert/delete (negative values indicate deletion)
@param int $numberOfRows Number of rows to insert/delete (negative values indicate deletion)

Update column dimensions when inserting/deleting rows/columns.
@param Worksheet $worksheet The worksheet that we're editing

Update row dimensions when inserting/deleting rows/columns.
@param Worksheet $worksheet The worksheet that we're editing
@param int $beforeRow Number of the row we're inserting/deleting before
@param int $numberOfRows Number of rows to insert/delete (negative values indicate deletion)

Insert a new column or row, updating all possible related data.
@param string $beforeCellAddress Insert before this cell address (e.g. 'A1')
@param int $numberOfColumns Number of columns to insert/delete (negative values indicate deletion)
@param int $numberOfRows Number of rows to insert/delete (negative values indicate deletion)
@param Worksheet $worksheet The worksheet that we're editing

Update references within formulas.
@param string $formula Formula to update
@param string $beforeCellAddress Insert before this one
@param int $numberOfColumns Number of columns to insert
@param int $numberOfRows Number of rows to insert
@param string $worksheetName Worksheet name/title
@return string Updated formula

Update all cell references within a formula, irrespective of worksheet.

Update cell reference.
@param string $cellReference Cell address or range of addresses
@return string Updated cell range

Update named formulas (i.e. containing worksheet references / named ranges).
@param Spreadsheet $spreadsheet Object to update
@param string $oldName Old name (name to replace)
@param string $newName New name

Update cell range.
@param string $cellRange Cell range    (e.g. 'B2:D4', 'B:C' or '2:3')
@return string Updated cell range

__clone implementation. Cloning should not be allowed in a Singleton!

## References

**Database Tables (inferred)**
- `one`
- `beginning`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\ReferenceHelper.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\ReferenceHelper`

**Functions/Methods**:
- `getInstance()`
- `__construct()`
- `columnSort($a, $b)`
- `columnReverseSort($a, $b)`
- `cellSort($a, $b)`
- `cellReverseSort($a, $b)`
- `adjustPageBreaks(Worksheet $worksheet, $numberOfColumns, $numberOfRows)`
- `adjustComments($worksheet)`
- `adjustHyperlinks($worksheet, $numberOfColumns, $numberOfRows)`
- `adjustConditionalFormatting($worksheet, $numberOfColumns, $numberOfRows)`
- `adjustDataValidations(Worksheet $worksheet, $numberOfColumns, $numberOfRows)`
- `adjustMergeCells(Worksheet $worksheet)`
- `adjustProtectedCells(Worksheet $worksheet, $numberOfColumns, $numberOfRows)`
- `adjustColumnDimensions(Worksheet $worksheet)`
- `adjustRowDimensions(Worksheet $worksheet, $beforeRow, $numberOfRows)`
- `insertNewBefore(string $beforeCellAddress,
        int $numberOfColumns,
        int $numberOfRows,
        Worksheet $worksheet)`
- `updateFormulaReferences($formula = '',
        $beforeCellAddress = 'A1',
        $numberOfColumns = 0,
        $numberOfRows = 0,
        $worksheetName = '',
        bool $includeAbsoluteReferences = false)`
- `updateFormulaReferencesAnyWorksheet(string $formula = '', int $numberOfColumns = 0, int $numberOfRows = 0)`
- `updateCellReferencesAllWorksheets(string $formula, int $numberOfColumns, int $numberOfRows)`
- `updateColumnRangesAllWorksheets(string $formula, int $numberOfColumns)`
- `updateRowRangesAllWorksheets(string $formula, int $numberOfRows)`
- `updateCellReference($cellReference = 'A1', bool $includeAbsoluteReferences = false)`
- `updateNamedFormulas(Spreadsheet $spreadsheet, $oldName = '', $newName = '')`
- `updateCellRange(string $cellRange = 'A1:A1', bool $includeAbsoluteReferences = false)`
- `clearColumnStrips(int $highestRow, int $beforeColumn, int $numberOfColumns, Worksheet $worksheet)`
- `clearRowStrips(string $highestColumn, int $beforeColumn, int $beforeRow, int $numberOfRows, Worksheet $worksheet)`
- `adjustAutoFilter(Worksheet $worksheet, string $beforeCellAddress, int $numberOfColumns)`
- `adjustAutoFilterDeleteRules(int $columnIndex, int $numberOfColumns, array $autoFilterColumns, AutoFilter $autoFilter)`
- `adjustAutoFilterInsert(int $startCol, int $numberOfColumns, int $rangeEnd, AutoFilter $autoFilter)`
- `adjustAutoFilterDelete(int $startCol, int $numberOfColumns, int $rangeEnd, AutoFilter $autoFilter)`
- `adjustTable(Worksheet $worksheet, string $beforeCellAddress, int $numberOfColumns)`
- `adjustTableDeleteRules(int $columnIndex, int $numberOfColumns, array $tableColumns, Table $table)`
- `adjustTableInsert(int $startCol, int $numberOfColumns, int $rangeEnd, Table $table)`
- `adjustTableDelete(int $startCol, int $numberOfColumns, int $rangeEnd, Table $table)`
- `duplicateStylesByColumn(Worksheet $worksheet, int $beforeColumn, int $beforeRow, int $highestRow, int $numberOfColumns)`
- `duplicateStylesByRow(Worksheet $worksheet, int $beforeColumn, int $beforeRow, string $highestColumn, int $numberOfRows)`
- `__clone()`

