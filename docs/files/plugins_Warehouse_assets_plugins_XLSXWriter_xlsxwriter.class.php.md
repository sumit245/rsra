# plugins\Warehouse\assets\plugins\XLSXWriter\xlsxwriter.class.php

- Path: `plugins\Warehouse\assets\plugins\XLSXWriter\xlsxwriter.class.php`
- Type: PHP
- Size: 51595 bytes

## Symbols

# Symbols

**Files documented**: 1

## `plugins\Warehouse\assets\plugins\XLSXWriter\xlsxwriter.class.php`

**Classes**:
- `XLSXWriter`
- `does`
- `XLSXWriter_BuffererWriter`

**Functions/Methods**:
- `__construct()`
- `setTitle($title='')`
- `setSubject($subject='')`
- `setAuthor($author='')`
- `setCompany($company='')`
- `setKeywords($keywords='')`
- `setDescription($description='')`
- `setTempDir($tempdir='')`
- `setRightToLeft($isRightToLeft=false)`
- `__destruct()`
- `tempFilename()`
- `writeToStdOut()`
- `writeToString()`
- `writeToFile($filename)`
- `initializeSheet($sheet_name, $col_widths=array()`
- `addCellStyle($number_format, $cell_style_string)`
- `initializeColumnTypes($header_types)`
- `writeSheetHeader($sheet_name, array $header_types, $col_options = null)`
- `writeSheetHeader_v2($sheet_name, array $header_types, $col_options = null, $col_style1 = [], $style1 = null)`
- `writeSheetRow($sheet_name, array $row, $row_options=null)`
- `countSheetRows($sheet_name = '')`
- `finalizeSheet($sheet_name)`
- `markMergedCell($sheet_name, $start_cell_row, $start_cell_column, $end_cell_row, $end_cell_column)`
- `writeSheet(array $data, $sheet_name='', array $header_types=array()`
- `writeCell(XLSXWriter_BuffererWriter &$file, $row_number, $column_number, $value, $num_format_type, $cell_style_idx)`
- `styleFontIndexes()`
- `writeStylesXML()`
- `buildAppXML()`
- `buildCoreXML()`
- `buildRelationshipsXML()`
- `buildWorkbookXML()`
- `buildWorkbookRelsXML()`
- `buildContentTypesXML()`
- `xlsCell($row_number, $column_number, $absolute=false)`
- `log($string)`
- `sanitize_filename($filename)`
- `sanitize_sheetname($sheetname)`
- `xmlspecialchars($val)`
- `array_first_key(array $arr)`
- `determineNumberFormatType($num_format)`
- `numberFormatStandardized($num_format)`
- `add_to_list_get_index(&$haystack, $needle)`
- `convert_date_time($date_input)`
- `__construct($filename, $fd_fopen_flags='w', $check_utf8=false)`
- `write($string)`
- `purge()`
- `close()`
- `__destruct()`
- `ftell()`
- `fseek($pos)`
- `isValidUTF8($string)`

