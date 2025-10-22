# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\Worksheet.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\Worksheet.php`
- Type: PHP
- Size: 102892 bytes

## Summary (from docblocks)

Maximum 31 characters allowed for sheet title.
@var int

Invalid characters in sheet title.
@var array

Parent spreadsheet.
@var Spreadsheet

Collection of cells.
@var Cells

Collection of row dimensions.
@var RowDimension[]

Default row dimension.
@var RowDimension

Collection of column dimensions.
@var ColumnDimension[]

Default column dimension.
@var ColumnDimension

Collection of drawings.
@var ArrayObject<int, BaseDrawing>

Collection of Chart objects.
@var ArrayObject<int, Chart>

Collection of Table objects.
@var ArrayObject<int, Table>

Worksheet title.
@var string

Sheet state.
@var string

Page setup.
@var PageSetup

Page margins.
@var PageMargins

Page header/footer.
@var HeaderFooter

Sheet view.
@var SheetView

Protection.
@var Protection

Collection of styles.
@var Style[]

Conditional styles. Indexed by cell coordinate, e.g. 'A1'.
@var array

Is the current cell collection sorted already?
@var bool

Collection of breaks.
@var int[]

Collection of merged cell ranges.
@var string[]

Collection of protected cell ranges.
@var string[]

Autofilter Range and selection.
@var AutoFilter

Freeze pane.
@var null|string

Default position of the right bottom pane.
@var null|string

Show gridlines?
@var bool

Print gridlines?
@var bool

Show row and column headers?
@var bool

Show summary below? (Row/Column outline).
@var bool

Show summary right? (Row/Column outline).
@var bool

Collection of comments.
@var Comment[]

Active cell. (Only one!).
@var string

Selected cells.
@var string

Cached highest column.
@var int

Cached highest row.
@var int

Right-to-left?
@var bool

Hyperlinks. Indexed by cell coordinate, e.g. 'A1'.
@var array

Data validation objects. Indexed by cell coordinate, e.g. 'A1'.
@var array

Tab color.
@var null|Color

Dirty flag.
@var bool

Hash.
@var string

CodeName.
@var string

Create a new worksheet.
@param string $title

Disconnect all cells from this Worksheet object,
typically so that the worksheet object can be unset.

Code to execute when this worksheet is unset().

Return the cell collection.
@return Cells

Get array of invalid characters for sheet title.
@return array

Check sheet code name for valid Excel syntax.
@param string $sheetCodeName The string to check
@return string The valid string

Check sheet title for valid Excel syntax.
@param string $sheetTitle The string to check
@return string The valid string

Get a sorted list of all cell coordinates currently held in the collection by row and column.
@param bool $sorted Also sort the cell collection?
@return string[]

Get collection of row dimensions.
@return RowDimension[]

Get default row dimension.
@return RowDimension

Get collection of column dimensions.
@return ColumnDimension[]

Get default column dimension.
@return ColumnDimension

Get collection of drawings.
@return ArrayObject<int, BaseDrawing>

Get collection of charts.
@return ArrayObject<int, Chart>

Add chart.
@param null|int $chartIndex Index where chart should go (0,1,..., or null for last)
@return Chart

Return the count of charts on this worksheet.
@return int The number of charts

Get a chart by its index position.
@param string $index Chart index position
@return Chart|false

Return an array of the names of charts on this worksheet.
@return string[] The names of charts

Get a chart by name.
@param string $chartName Chart name
@return Chart|false

Refresh column dimensions.
@return $this

Refresh row dimensions.
@return $this

Calculate worksheet dimension.
@return string String containing the dimension of this worksheet

Calculate worksheet data dimension.
@return string String containing the dimension of this worksheet that actually contain data

Calculate widths for auto-size columns.
@return $this

Get parent.
@return Spreadsheet

Re-bind parent.
@return $this

Get title.
@return string

Set title.
@param string $title String containing the dimension of this worksheet
@param bool $updateFormulaCellReferences Flag indicating whether cell references in formulae should
           be updated to reflect the new sheet name.
         This should be left as the default true, unless you are
         certain that no formula cells on any worksheet contain
         references to this worksheet
@param bool $validate False to skip validation of new title. WARNING: This should only be set
                      at parse time (by Readers), where titles can be assumed to be valid.
@return $this

Get sheet state.
@return string Sheet state (visible, hidden, veryHidden)

Set sheet state.
@param string $value Sheet state (visible, hidden, veryHidden)
@return $this

Get page setup.
@return PageSetup

Set page setup.
@return $this

Get page margins.
@return PageMargins

Set page margins.
@return $this

Get page header/footer.
@return HeaderFooter

Set page header/footer.
@return $this

Get sheet view.
@return SheetView

Set sheet view.
@return $this

Get Protection.
@return Protection

Set Protection.
@return $this

Get highest worksheet column.
@param null|int|string $row Return the data highest column for the specified row,
                                    or the highest column of any row if no row number is passed
@return string Highest column name

Get highest worksheet column that contains data.
@param null|int|string $row Return the highest data column for the specified row,
                                    or the highest data column of any row if no row number is passed
@return string Highest column name that contains data

Get highest worksheet row.
@param null|string $column Return the highest data row for the specified column,
                                    or the highest row of any column if no column letter is passed
@return int Highest row number

Get highest worksheet row that contains data.
@param null|string $column Return the highest data row for the specified column,
                                    or the highest data row of any column if no column letter is passed
@return int Highest row number that contains data

Get highest worksheet column and highest row that have cell records.
@return array Highest column name and highest row number

Set a cell value.
@param array<int>|CellAddress|string $coordinate Coordinate of the cell as a string, eg: 'C5';
              or as an array of [$columnIndex, $row] (e.g. [3, 5]), or a CellAddress object.
@param mixed $value Value for the cell
@return $this

Set a cell value by using numeric cell coordinates.
@Deprecated 1.23.0
     Use the setCellValue() method with a cell address such as 'C5' instead;,
         or passing in an array of [$columnIndex, $row] (e.g. [3, 5]), or a CellAddress object.
@param int $columnIndex Numeric column coordinate of the cell
@param int $row Numeric row coordinate of the cell
@param mixed $value Value of the cell
@return $this

Set a cell value.
@param array<int>|CellAddress|string $coordinate Coordinate of the cell as a string, eg: 'C5';
              or as an array of [$columnIndex, $row] (e.g. [3, 5]), or a CellAddress object.
@param mixed $value Value of the cell
@param string $dataType Explicit data type, see DataType::TYPE_*
@return $this

Set a cell value by using numeric cell coordinates.
@Deprecated 1.23.0
     Use the setCellValueExplicit() method with a cell address such as 'C5' instead;,
         or passing in an array of [$columnIndex, $row] (e.g. [3, 5]), or a CellAddress object.
@param int $columnIndex Numeric column coordinate of the cell
@param int $row Numeric row coordinate of the cell
@param mixed $value Value of the cell
@param string $dataType Explicit data type, see DataType::TYPE_*
@return $this

Get cell at a specific coordinate.
@param array<int>|CellAddress|string $coordinate Coordinate of the cell as a string, eg: 'C5';
              or as an array of [$columnIndex, $row] (e.g. [3, 5]), or a CellAddress object.
@return Cell Cell that was found or created

@var Cell $cell

@var Worksheet $sheet

Get the correct Worksheet and coordinate from a coordinate that may
contains reference to another sheet or a named range.
@return array{0: Worksheet, 1: string}

@phpstan-ignore-next-line

Get an existing cell at a specific coordinate, or null.
@param string $coordinate Coordinate of the cell, eg: 'A1'
@return null|Cell Cell that was found or null

Get cell at a specific coordinate by using numeric cell coordinates.
@Deprecated 1.23.0
     Use the getCell() method with a cell address such as 'C5' instead;,
         or passing in an array of [$columnIndex, $row] (e.g. [3, 5]), or a CellAddress object.
@param int $columnIndex Numeric column coordinate of the cell
@param int $row Numeric row coordinate of the cell
@return Cell Cell that was found/created or null

Create a new cell at the specified coordinate.
@param string $coordinate Coordinate of the cell
@return Cell Cell that was created

Does the cell at a specific coordinate exist?
@param array<int>|CellAddress|string $coordinate Coordinate of the cell as a string, eg: 'C5';
              or as an array of [$columnIndex, $row] (e.g. [3, 5]), or a CellAddress object.

@var Worksheet $sheet

Cell at a specific coordinate by using numeric cell coordinates exists?
@Deprecated 1.23.0
     Use the cellExists() method with a cell address such as 'C5' instead;,
         or passing in an array of [$columnIndex, $row] (e.g. [3, 5]), or a CellAddress object.
@param int $columnIndex Numeric column coordinate of the cell
@param int $row Numeric row coordinate of the cell

Get row dimension at a specific row.
@param int $row Numeric index of the row

Get column dimension at a specific column.
@param string $column String index of the column eg: 'A'

Get column dimension at a specific column by using numeric cell coordinates.
@param int $columnIndex Numeric column coordinate of the cell

Get styles.
@return Style[]

Get style for cell.
@param AddressRange|array<int>|CellAddress|int|string $cellCoordinate
             A simple string containing a cell address like 'A1' or a cell range like 'A1:E10'
             or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
             or a CellAddress or AddressRange object.

Get style for cell by using numeric cell coordinates.
@Deprecated 1.23.0
     Use the getStyle() method with a cell address range such as 'C5:F8' instead;,
         or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
         or an AddressRange object.
@param int $columnIndex1 Numeric column coordinate of the cell
@param int $row1 Numeric row coordinate of the cell
@param null|int $columnIndex2 Numeric column coordinate of the range cell
@param null|int $row2 Numeric row coordinate of the range cell
@return Style

Get conditional styles for a cell.
@param string $coordinate eg: 'A1' or 'A1:A3'.
         If a single cell is referenced, then the array of conditional styles will be returned if the cell is
              included in a conditional style range.
         If a range of cells is specified, then the styles will only be returned if the range matches the entire
              range of the conditional.
@return Conditional[]

Do conditional styles exist for this cell?
@param string $coordinate eg: 'A1' or 'A1:A3'.
         If a single cell is specified, then this method will return true if that cell is included in a
              conditional style range.
         If a range of cells is specified, then true will only be returned if the range matches the entire
              range of the conditional.

Removes conditional styles for a cell.
@param string $coordinate eg: 'A1'
@return $this

Get collection of conditional styles.
@return array

Set conditional styles.
@param string $coordinate eg: 'A1'
@param Conditional[] $styles
@return $this

Duplicate cell style to a range of cells.
Please note that this will overwrite existing cell styles for cells in range!
@param Style $style Cell style to duplicate
@param string $range Range of cells (i.e. "A1:B10"), or just one cell (i.e. "A1")
@return $this

Duplicate conditional style to a range of cells.
Please note that this will overwrite existing cell styles for cells in range!
@param Conditional[] $styles Cell style to duplicate
@param string $range Range of cells (i.e. "A1:B10"), or just one cell (i.e. "A1")
@return $this

Set break on a cell.
@param array<int>|CellAddress|string $coordinate Coordinate of the cell as a string, eg: 'C5';
              or as an array of [$columnIndex, $row] (e.g. [3, 5]), or a CellAddress object.
@param int $break Break type (type of Worksheet::BREAK_*)
@return $this

Set break on a cell by using numeric cell coordinates.
@Deprecated 1.23.0
     Use the setBreak() method with a cell address such as 'C5' instead;,
         or passing in an array of [$columnIndex, $row] (e.g. [3, 5]), or a CellAddress object.
@param int $columnIndex Numeric column coordinate of the cell
@param int $row Numeric row coordinate of the cell
@param int $break Break type (type of Worksheet::BREAK_*)
@return $this

Get breaks.
@return int[]

Set merge on a cell range.
@param AddressRange|array<int>|string $range A simple string containing a Cell range like 'A1:E10'
             or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
             or an AddressRange.
@return $this

Set merge on a cell range by using numeric cell coordinates.
@Deprecated 1.23.0
     Use the mergeCells() method with a cell address range such as 'C5:F8' instead;,
         or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
         or an AddressRange object.
@param int $columnIndex1 Numeric column coordinate of the first cell
@param int $row1 Numeric row coordinate of the first cell
@param int $columnIndex2 Numeric column coordinate of the last cell
@param int $row2 Numeric row coordinate of the last cell
@return $this

Remove merge on a cell range.
@param AddressRange|array<int>|string $range A simple string containing a Cell range like 'A1:E10'
             or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
             or an AddressRange.
@return $this

Remove merge on a cell range by using numeric cell coordinates.
@Deprecated 1.23.0
     Use the unmergeCells() method with a cell address range such as 'C5:F8' instead;,
         or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
         or an AddressRange object.
@param int $columnIndex1 Numeric column coordinate of the first cell
@param int $row1 Numeric row coordinate of the first cell
@param int $columnIndex2 Numeric column coordinate of the last cell
@param int $row2 Numeric row coordinate of the last cell
@return $this

Get merge cells array.
@return string[]

Set merge cells array for the entire sheet. Use instead mergeCells() to merge
a single cell range.
@param string[] $mergeCells
@return $this

Set protection on a cell or cell range.
@param AddressRange|array<int>|CellAddress|int|string $range A simple string containing a Cell range like 'A1:E10'
             or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
             or a CellAddress or AddressRange object.
@param string $password Password to unlock the protection
@param bool $alreadyHashed If the password has already been hashed, set this to true
@return $this

Set protection on a cell range by using numeric cell coordinates.
@Deprecated 1.23.0
     Use the protectCells() method with a cell address range such as 'C5:F8' instead;,
         or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
         or an AddressRange object.
@param int $columnIndex1 Numeric column coordinate of the first cell
@param int $row1 Numeric row coordinate of the first cell
@param int $columnIndex2 Numeric column coordinate of the last cell
@param int $row2 Numeric row coordinate of the last cell
@param string $password Password to unlock the protection
@param bool $alreadyHashed If the password has already been hashed, set this to true
@return $this

Remove protection on a cell or cell range.
@param AddressRange|array<int>|CellAddress|int|string $range A simple string containing a Cell range like 'A1:E10'
             or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
             or a CellAddress or AddressRange object.
@return $this

Remove protection on a cell range by using numeric cell coordinates.
@Deprecated 1.23.0
     Use the protectCells() method with a cell address range such as 'C5:F8' instead;,
         or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
         or an AddressRange object.
@param int $columnIndex1 Numeric column coordinate of the first cell
@param int $row1 Numeric row coordinate of the first cell
@param int $columnIndex2 Numeric column coordinate of the last cell
@param int $row2 Numeric row coordinate of the last cell
@return $this

Get protected cells.
@return string[]

Get Autofilter.
@return AutoFilter

Set AutoFilter.
@param AddressRange|array<int>|AutoFilter|string $autoFilterOrRange
           A simple string containing a Cell range like 'A1:E10' is permitted for backward compatibility
             or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
             or an AddressRange.
@return $this

Set Autofilter Range by using numeric cell coordinates.
@Deprecated 1.23.0
     Use the setAutoFilter() method with a cell address range such as 'C5:F8' instead;,
         or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
         or an AddressRange object or AutoFilter object.
@param int $columnIndex1 Numeric column coordinate of the first cell
@param int $row1 Numeric row coordinate of the first cell
@param int $columnIndex2 Numeric column coordinate of the second cell
@param int $row2 Numeric row coordinate of the second cell
@return $this

Remove autofilter.

Get collection of Tables.
@return ArrayObject<int, Table>

Add Table.
@return $this

Remove Table by name.
@param string $name Table name
@return $this

Remove collection of Tables.

Get Freeze Pane.
@return null|string

Freeze Pane.
Examples:
    - A2 will freeze the rows above cell A2 (i.e row 1)
    - B1 will freeze the columns to the left of cell B1 (i.e column A)
    - B2 will freeze the rows above and to the left of cell B2 (i.e row 1 and column A)
@param null|array<int>|CellAddress|string $coordinate Coordinate of the cell as a string, eg: 'C5';
           or as an array of [$columnIndex, $row] (e.g. [3, 5]), or a CellAddress object.
       Passing a null value for this argument will clear any existing freeze pane for this worksheet.
@param null|array<int>|CellAddress|string $topLeftCell default position of the right bottom pane
           Coordinate of the cell as a string, eg: 'C5'; or as an array of [$columnIndex, $row] (e.g. [3, 5]),
           or a CellAddress object.
@return $this

Freeze Pane by using numeric cell coordinates.
@Deprecated 1.23.0
     Use the freezePane() method with a cell address such as 'C5' instead;,
         or passing in an array of [$columnIndex, $row] (e.g. [3, 5]), or a CellAddress object.
@param int $columnIndex Numeric column coordinate of the cell
@param int $row Numeric row coordinate of the cell
@return $this

Unfreeze Pane.
@return $this

Get the default position of the right bottom pane.
@return null|string

Insert a new row, updating all possible related data.
@param int $before Insert before this one
@param int $numberOfRows Number of rows to insert
@return $this

Insert a new column, updating all possible related data.
@param string $before Insert before this one, eg: 'A'
@param int $numberOfColumns Number of columns to insert
@return $this

Insert a new column, updating all possible related data.
@param int $beforeColumnIndex Insert before this one (numeric column coordinate of the cell)
@param int $numberOfColumns Number of columns to insert
@return $this

Delete a row, updating all possible related data.
@param int $row Remove starting with this one
@param int $numberOfRows Number of rows to remove
@return $this

Remove a column, updating all possible related data.
@param string $column Remove starting with this one, eg: 'A'
@param int $numberOfColumns Number of columns to remove
@return $this

Remove a column, updating all possible related data.
@param int $columnIndex Remove starting with this one (numeric column coordinate of the cell)
@param int $numColumns Number of columns to remove
@return $this

Show gridlines?
@return bool

Set show gridlines.
@param bool $showGridLines Show gridlines (true/false)
@return $this

Print gridlines?
@return bool

Set print gridlines.
@param bool $printGridLines Print gridlines (true/false)
@return $this

Show row and column headers?
@return bool

Set show row and column headers.
@param bool $showRowColHeaders Show row and column headers (true/false)
@return $this

Show summary below? (Row/Column outlining).
@return bool

Set show summary below.
@param bool $showSummaryBelow Show summary below (true/false)
@return $this

Show summary right? (Row/Column outlining).
@return bool

Set show summary right.
@param bool $showSummaryRight Show summary right (true/false)
@return $this

Get comments.
@return Comment[]

Set comments array for the entire sheet.
@param Comment[] $comments
@return $this

Get comment for cell.
@param array<int>|CellAddress|string $cellCoordinate Coordinate of the cell as a string, eg: 'C5';
              or as an array of [$columnIndex, $row] (e.g. [3, 5]), or a CellAddress object.
@return Comment

Get comment for cell by using numeric cell coordinates.
@Deprecated 1.23.0
     Use the getComment() method with a cell address such as 'C5' instead;,
         or passing in an array of [$columnIndex, $row] (e.g. [3, 5]), or a CellAddress object.
@param int $columnIndex Numeric column coordinate of the cell
@param int $row Numeric row coordinate of the cell
@return Comment

Get active cell.
@return string Example: 'A1'

Get selected cells.
@return string

Selected cell.
@param string $coordinate Cell (i.e. A1)
@return $this

Select a range of cells.
@param AddressRange|array<int>|CellAddress|int|string $coordinate A simple string containing a Cell range like 'A1:E10'
             or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
             or a CellAddress or AddressRange object.
@return $this

Selected cell by using numeric cell coordinates.
@Deprecated 1.23.0
     Use the setSelectedCells() method with a cell address such as 'C5' instead;,
         or passing in an array of [$columnIndex, $row] (e.g. [3, 5]), or a CellAddress object.
@param int $columnIndex Numeric column coordinate of the cell
@param int $row Numeric row coordinate of the cell
@return $this

Get right-to-left.
@return bool

Set right-to-left.
@param bool $value Right-to-left true/false
@return $this

Fill worksheet from values in array.
@param array $source Source array
@param mixed $nullValue Value in source array that stands for blank cell
@param string $startCell Insert array starting from this cell address as the top left coordinate
@param bool $strictNullComparison Apply strict comparison when testing for null values in the array
@return $this

Create array from a range of cells.
@param string $range Range of cells (i.e. "A1:B10"), or just one cell (i.e. "A1")
@param mixed $nullValue Value returned in the array entry if a cell doesn't exist
@param bool $calculateFormulas Should formulas be calculated?
@param bool $formatData Should formatting be applied to cell values?
@param bool $returnCellRef False - Return a simple array of rows and columns indexed by number counting from zero
                              True - Return rows and columns indexed by their actual row and column IDs
@return array

Create array from a range of cells.
@param string $definedName The Named Range that should be returned
@param mixed $nullValue Value returned in the array entry if a cell doesn't exist
@param bool $calculateFormulas Should formulas be calculated?
@param bool $formatData Should formatting be applied to cell values?
@param bool $returnCellRef False - Return a simple array of rows and columns indexed by number counting from zero
                               True - Return rows and columns indexed by their actual row and column IDs
@return array

@phpstan-ignore-next-line

Create array from worksheet.
@param mixed $nullValue Value returned in the array entry if a cell doesn't exist
@param bool $calculateFormulas Should formulas be calculated?
@param bool $formatData Should formatting be applied to cell values?
@param bool $returnCellRef False - Return a simple array of rows and columns indexed by number counting from zero
                              True - Return rows and columns indexed by their actual row and column IDs
@return array

Get row iterator.
@param int $startRow The row number at which to start iterating
@param int $endRow The row number at which to stop iterating
@return RowIterator

Get column iterator.
@param string $startColumn The column address at which to start iterating
@param string $endColumn The column address at which to stop iterating
@return ColumnIterator

Run PhpSpreadsheet garbage collector.
@return $this

Get hash code.
@return string Hash code

Extract worksheet title from range.
Example: extractSheetTitle("testSheet!A1") ==> 'A1'
Example: extractSheetTitle("'testSheet 1'!A1", true) ==> ['testSheet 1', 'A1'];
@param string $range Range to extract title from
@param bool $returnRange Return range? (see example)
@return mixed

Get hyperlink.
@param string $cellCoordinate Cell coordinate to get hyperlink for, eg: 'A1'
@return Hyperlink

Set hyperlink.
@param string $cellCoordinate Cell coordinate to insert hyperlink, eg: 'A1'
@return $this

Hyperlink at a specific coordinate exists?
@param string $coordinate eg: 'A1'
@return bool

Get collection of hyperlinks.
@return Hyperlink[]

Get data validation.
@param string $cellCoordinate Cell coordinate to get data validation for, eg: 'A1'
@return DataValidation

Set data validation.
@param string $cellCoordinate Cell coordinate to insert data validation, eg: 'A1'
@return $this

Data validation at a specific coordinate exists?
@param string $coordinate eg: 'A1'
@return bool

Get collection of data validations.
@return DataValidation[]

Accepts a range, returning it as a range that falls within the current highest row and column of the worksheet.
@param string $range
@return string Adjusted range value

Get tab color.
@return Color

Reset tab color.
@return $this

Tab color set?
@return bool

Copy worksheet (!= clone!).
@return static

Implement PHP __clone to create a deep clone, not just a shallow copy.

Define the code name of the sheet.
@param string $codeName Same rule as Title minus space not allowed (but, like Excel, change
                      silently space to underscore)
@param bool $validate False to skip validation of new title. WARNING: This should only be set
                      at parse time (by Readers), where titles can be assumed to be valid.
@return $this

Return the code name of the sheet.
@return null|string

Sheet has a code name ?
@return bool

## References

**Database Tables (inferred)**
- `this`
- `the`
- `a`
- `dimensions`
- `row`
- `column`
- `values`
- `zero`
- `within`
- `worksheet`
- `range`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\Worksheet.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Worksheet\Worksheet implements IComparable`

**Functions/Methods**:
- `__construct(?Spreadsheet $parent = null, $title = 'Worksheet')`
- `disconnectCells()`
- `__destruct()`
- `getCellCollection()`
- `getInvalidCharacters()`
- `checkSheetCodeName($sheetCodeName)`
- `checkSheetTitle($sheetTitle)`
- `getCoordinates($sorted = true)`
- `getRowDimensions()`
- `getDefaultRowDimension()`
- `getColumnDimensions()`
- `getDefaultColumnDimension()`
- `getDrawingCollection()`
- `getChartCollection()`
- `addChart(Chart $chart, $chartIndex = null)`
- `getChartCount()`
- `getChartByIndex($index)`
- `getChartNames()`
- `getChartByName($chartName)`
- `refreshColumnDimensions()`
- `refreshRowDimensions()`
- `calculateWorksheetDimension()`
- `calculateWorksheetDataDimension()`
- `calculateColumnWidths()`
- `getParent()`
- `rebindParent(Spreadsheet $parent)`
- `getTitle()`
- `setTitle($title, $updateFormulaCellReferences = true, $validate = true)`
- `getSheetState()`
- `setSheetState($value)`
- `getPageSetup()`
- `setPageSetup(PageSetup $pageSetup)`
- `getPageMargins()`
- `setPageMargins(PageMargins $pageMargins)`
- `getHeaderFooter()`
- `setHeaderFooter(HeaderFooter $headerFooter)`
- `getSheetView()`
- `setSheetView(SheetView $sheetView)`
- `getProtection()`
- `setProtection(Protection $protection)`
- `getHighestColumn($row = null)`
- `getHighestDataColumn($row = null)`
- `getHighestRow($column = null)`
- `getHighestDataRow($column = null)`
- `getHighestRowAndColumn()`
- `setCellValue($coordinate, $value)`
- `setCellValueByColumnAndRow($columnIndex, $row, $value)`
- `setCellValueExplicit($coordinate, $value, $dataType)`
- `setCellValueExplicitByColumnAndRow($columnIndex, $row, $value, $dataType)`
- `getCell($coordinate)`
- `getWorksheetAndCoordinate(string $coordinate)`
- `getCellOrNull($coordinate)`
- `getCellByColumnAndRow($columnIndex, $row)`
- `createNewCell($coordinate)`
- `cellExists($coordinate)`
- `cellExistsByColumnAndRow($columnIndex, $row)`
- `getRowDimension(int $row)`
- `getColumnDimension(string $column)`
- `getColumnDimensionByColumn(int $columnIndex)`
- `getStyles()`
- `getStyle($cellCoordinate)`
- `getStyleByColumnAndRow($columnIndex1, $row1, $columnIndex2 = null, $row2 = null)`
- `getConditionalStyles(string $coordinate)`
- `getConditionalRange(string $coordinate)`
- `conditionalStylesExists($coordinate)`
- `removeConditionalStyles($coordinate)`
- `getConditionalStylesCollection()`
- `setConditionalStyles($coordinate, $styles)`
- `duplicateStyle(Style $style, $range)`
- `duplicateConditionalStyle(array $styles, $range = '')`
- `setBreak($coordinate, $break)`
- `setBreakByColumnAndRow($columnIndex, $row, $break)`
- `getBreaks()`
- `mergeCells($range)`
- `clearMergeCellsByColumn(string $firstColumn, string $lastColumn, int $firstRow, int $lastRow, string $upperLeft)`
- `clearMergeCellsByRow(string $firstColumn, int $lastColumnIndex, int $firstRow, int $lastRow, string $upperLeft)`
- `mergeCellsByColumnAndRow($columnIndex1, $row1, $columnIndex2, $row2)`
- `unmergeCells($range)`
- `unmergeCellsByColumnAndRow($columnIndex1, $row1, $columnIndex2, $row2)`
- `getMergeCells()`
- `setMergeCells(array $mergeCells)`
- `protectCells($range, $password, $alreadyHashed = false)`
- `protectCellsByColumnAndRow($columnIndex1, $row1, $columnIndex2, $row2, $password, $alreadyHashed = false)`
- `unprotectCells($range)`
- `unprotectCellsByColumnAndRow($columnIndex1, $row1, $columnIndex2, $row2)`
- `getProtectedCells()`
- `getAutoFilter()`
- `setAutoFilter($autoFilterOrRange)`
- `setAutoFilterByColumnAndRow($columnIndex1, $row1, $columnIndex2, $row2)`
- `removeAutoFilter()`
- `getTableCollection()`
- `addTable(Table $table)`
- `removeTableByName(string $name)`
- `removeTableCollection()`
- `getFreezePane()`
- `freezePane($coordinate, $topLeftCell = null)`
- `setTopLeftCell(string $topLeftCell)`
- `freezePaneByColumnAndRow($columnIndex, $row)`
- `unfreezePane()`
- `getTopLeftCell()`
- `insertNewRowBefore($before, $numberOfRows = 1)`
- `insertNewColumnBefore($before, $numberOfColumns = 1)`
- `insertNewColumnBeforeByIndex($beforeColumnIndex, $numberOfColumns = 1)`
- `removeRow($row, $numberOfRows = 1)`
- `removeRowDimensions(int $row, int $numberOfRows)`
- `removeColumn($column, $numberOfColumns = 1)`
- `removeColumnDimensions(int $pColumnIndex, int $numberOfColumns)`
- `removeColumnByIndex($columnIndex, $numColumns = 1)`
- `getShowGridlines()`
- `setShowGridlines($showGridLines)`
- `getPrintGridlines()`
- `setPrintGridlines($printGridLines)`
- `getShowRowColHeaders()`
- `setShowRowColHeaders($showRowColHeaders)`
- `getShowSummaryBelow()`
- `setShowSummaryBelow($showSummaryBelow)`
- `getShowSummaryRight()`
- `setShowSummaryRight($showSummaryRight)`
- `getComments()`
- `setComments(array $comments)`
- `getComment($cellCoordinate)`
- `getCommentByColumnAndRow($columnIndex, $row)`
- `getActiveCell()`
- `getSelectedCells()`
- `setSelectedCell($coordinate)`
- `setSelectedCells($coordinate)`
- `setSelectedCellByColumnAndRow($columnIndex, $row)`
- `getRightToLeft()`
- `setRightToLeft($value)`
- `fromArray(array $source, $nullValue = null, $startCell = 'A1', $strictNullComparison = false)`
- `rangeToArray($range, $nullValue = null, $calculateFormulas = true, $formatData = true, $returnCellRef = false)`
- `validateNamedRange(string $definedName, bool $returnNullIfInvalid = false)`
- `namedRangeToArray(string $definedName, $nullValue = null, $calculateFormulas = true, $formatData = true, $returnCellRef = false)`
- `toArray($nullValue = null, $calculateFormulas = true, $formatData = true, $returnCellRef = false)`
- `getRowIterator($startRow = 1, $endRow = null)`
- `getColumnIterator($startColumn = 'A', $endColumn = null)`
- `garbageCollect()`
- `getHashCode()`
- `extractSheetTitle($range, $returnRange = false)`
- `getHyperlink($cellCoordinate)`
- `setHyperlink($cellCoordinate, ?Hyperlink $hyperlink = null)`
- `hyperlinkExists($coordinate)`
- `getHyperlinkCollection()`
- `getDataValidation($cellCoordinate)`
- `setDataValidation($cellCoordinate, ?DataValidation $dataValidation = null)`
- `dataValidationExists($coordinate)`
- `getDataValidationCollection()`
- `shrinkRangeToFit($range)`
- `getTabColor()`
- `resetTabColor()`
- `isTabColorSet()`
- `copy()`
- `__clone()`
- `setCodeName($codeName, $validate = true)`
- `getCodeName()`
- `hasCodeName()`

