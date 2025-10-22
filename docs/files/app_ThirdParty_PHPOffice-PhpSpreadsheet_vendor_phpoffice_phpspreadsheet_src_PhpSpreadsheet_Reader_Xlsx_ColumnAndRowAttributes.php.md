# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xlsx\ColumnAndRowAttributes.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xlsx\ColumnAndRowAttributes.php`
- Type: PHP
- Size: 8140 bytes

## Summary (from docblocks)

Set Worksheet column attributes by attributes array passed.
@param string $columnAddress A, B, ... DX, ...
@param array $columnAttributes array of attributes (indexes are attribute name, values are value)
                              'xfIndex', 'visible', 'collapsed', 'outlineLevel', 'width', ... ?

Set Worksheet row attributes by attributes array passed.
@param int $rowNumber 1, 2, 3, ... 99, ...
@param array $rowAttributes array of attributes (indexes are attribute name, values are value)
                              'xfIndex', 'visible', 'collapsed', 'outlineLevel', 'rowHeight', ... ?

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xlsx\ColumnAndRowAttributes.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Reader\Xlsx\ColumnAndRowAttributes extends BaseParserClass`

**Functions/Methods**:
- `__construct(Worksheet $workSheet, ?SimpleXMLElement $worksheetXml = null)`
- `setColumnAttributes($columnAddress, array $columnAttributes)`
- `setRowAttributes($rowNumber, array $rowAttributes)`
- `load(?IReadFilter $readFilter = null, bool $readDataOnly = false)`
- `isFilteredColumn(IReadFilter $readFilter, $columnCoordinate, array $rowsAttributes)`
- `readColumnAttributes(SimpleXMLElement $worksheetCols, $readDataOnly)`
- `readColumnRangeAttributes(SimpleXMLElement $column, $readDataOnly)`
- `isFilteredRow(IReadFilter $readFilter, $rowCoordinate, array $columnsAttributes)`
- `readRowAttributes(SimpleXMLElement $worksheetRow, $readDataOnly)`

