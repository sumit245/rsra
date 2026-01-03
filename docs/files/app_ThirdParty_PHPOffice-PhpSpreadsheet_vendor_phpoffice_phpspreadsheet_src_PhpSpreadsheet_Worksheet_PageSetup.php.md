# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\PageSetup.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\PageSetup.php`
- Type: PHP
- Size: 27821 bytes

## Summary (from docblocks)

<code>
Paper size taken from Office Open XML Part 4 - Markup Language Reference, page 1988:.
1 = Letter paper (8.5 in. by 11 in.)
2 = Letter small paper (8.5 in. by 11 in.)
3 = Tabloid paper (11 in. by 17 in.)
4 = Ledger paper (17 in. by 11 in.)
5 = Legal paper (8.5 in. by 14 in.)
6 = Statement paper (5.5 in. by 8.5 in.)
7 = Executive paper (7.25 in. by 10.5 in.)
8 = A3 paper (297 mm by 420 mm)
9 = A4 paper (210 mm by 297 mm)
10 = A4 small paper (210 mm by 297 mm)
11 = A5 paper (148 mm by 210 mm)
12 = B4 paper (250 mm by 353 mm)
13 = B5 paper (176 mm by 250 mm)
14 = Folio paper (8.5 in. by 13 in.)
15 = Quarto paper (215 mm by 275 mm)
16 = Standard paper (10 in. by 14 in.)
17 = Standard paper (11 in. by 17 in.)
18 = Note paper (8.5 in. by 11 in.)
19 = #9 envelope (3.875 in. by 8.875 in.)
20 = #10 envelope (4.125 in. by 9.5 in.)
21 = #11 envelope (4.5 in. by 10.375 in.)
22 = #12 envelope (4.75 in. by 11 in.)
23 = #14 envelope (5 in. by 11.5 in.)
24 = C paper (17 in. by 22 in.)
25 = D paper (22 in. by 34 in.)
26 = E paper (34 in. by 44 in.)
27 = DL envelope (110 mm by 220 mm)
28 = C5 envelope (162 mm by 229 mm)
29 = C3 envelope (324 mm by 458 mm)
30 = C4 envelope (229 mm by 324 mm)
31 = C6 envelope (114 mm by 162 mm)
32 = C65 envelope (114 mm by 229 mm)
33 = B4 envelope (250 mm by 353 mm)
34 = B5 envelope (176 mm by 250 mm)
35 = B6 envelope (176 mm by 125 mm)
36 = Italy envelope (110 mm by 230 mm)
37 = Monarch envelope (3.875 in. by 7.5 in.).
38 = 6 3/4 envelope (3.625 in. by 6.5 in.)
39 = US standard fanfold (14.875 in. by 11 in.)
40 = German standard fanfold (8.5 in. by 12 in.)
41 = German legal fanfold (8.5 in. by 13 in.)
42 = ISO B4 (250 mm by 353 mm)
43 = Japanese double postcard (200 mm by 148 mm)
44 = Standard paper (9 in. by 11 in.)
45 = Standard paper (10 in. by 11 in.)
46 = Standard paper (15 in. by 11 in.)
47 = Invite envelope (220 mm by 220 mm)
50 = Letter extra paper (9.275 in. by 12 in.)
51 = Legal extra paper (9.275 in. by 15 in.)
52 = Tabloid extra paper (11.69 in. by 18 in.)
53 = A4 extra paper (236 mm by 322 mm)
54 = Letter transverse paper (8.275 in. by 11 in.)
55 = A4 transverse paper (210 mm by 297 mm)
56 = Letter extra transverse paper (9.275 in. by 12 in.)
57 = SuperA/SuperA/A4 paper (227 mm by 356 mm)
58 = SuperB/SuperB/A3 paper (305 mm by 487 mm)
59 = Letter plus paper (8.5 in. by 12.69 in.)
60 = A4 plus paper (210 mm by 330 mm)
61 = A5 transverse paper (148 mm by 210 mm)
62 = JIS B5 transverse paper (182 mm by 257 mm)
63 = A3 extra paper (322 mm by 445 mm)
64 = A5 extra paper (174 mm by 235 mm)
65 = ISO B5 extra paper (201 mm by 276 mm)
66 = A2 paper (420 mm by 594 mm)
67 = A3 transverse paper (297 mm by 420 mm)
68 = A3 extra transverse paper (322 mm by 445 mm)
</code>

Paper size default.
@var int

Paper size.
@var ?int

Orientation default.
@var string

Orientation.
@var string

Scale (Print Scale).
Print scaling. Valid values range from 10 to 400
This setting is overridden when fitToWidth and/or fitToHeight are in use
@var null|int

Fit To Page
Whether scale or fitToWith / fitToHeight applies.
@var bool

Fit To Height
Number of vertical pages to fit on.
@var null|int

Fit To Width
Number of horizontal pages to fit on.
@var null|int

Columns to repeat at left.
@var array Containing start column and end column, empty array if option unset

Rows to repeat at top.
@var array Containing start row number and end row number, empty array if option unset

Center page horizontally.
@var bool

Center page vertically.
@var bool

Print area.
@var null|string

First page number.
@var int

Create a new PageSetup.

Get Paper Size.
@return int

Set Paper Size.
@param int $paperSize see self::PAPERSIZE_*
@return $this

Get Paper Size default.

Set Paper Size Default.

Get Orientation.
@return string

Set Orientation.
@param string $orientation see self::ORIENTATION_*
@return $this

Get Scale.
@return null|int

Set Scale.
Print scaling. Valid values range from 10 to 400
This setting is overridden when fitToWidth and/or fitToHeight are in use.
@param null|int $scale
@param bool $update Update fitToPage so scaling applies rather than fitToHeight / fitToWidth
@return $this

Get Fit To Page.
@return bool

Set Fit To Page.
@param bool $fitToPage
@return $this

Get Fit To Height.
@return null|int

Set Fit To Height.
@param null|int $fitToHeight
@param bool $update Update fitToPage so it applies rather than scaling
@return $this

Get Fit To Width.
@return null|int

Set Fit To Width.
@param null|int $value
@param bool $update Update fitToPage so it applies rather than scaling
@return $this

Is Columns to repeat at left set?
@return bool

Get Columns to repeat at left.
@return array Containing start column and end column, empty array if option unset

Set Columns to repeat at left.
@param array $columnsToRepeatAtLeft Containing start column and end column, empty array if option unset
@return $this

Set Columns to repeat at left by start and end.
@param string $start eg: 'A'
@param string $end eg: 'B'
@return $this

Is Rows to repeat at top set?
@return bool

Get Rows to repeat at top.
@return array Containing start column and end column, empty array if option unset

Set Rows to repeat at top.
@param array $rowsToRepeatAtTop Containing start column and end column, empty array if option unset
@return $this

Set Rows to repeat at top by start and end.
@param int $start eg: 1
@param int $end eg: 1
@return $this

Get center page horizontally.
@return bool

Set center page horizontally.
@param bool $value
@return $this

Get center page vertically.
@return bool

Set center page vertically.
@param bool $value
@return $this

Get print area.
@param int $index Identifier for a specific print area range if several ranges have been set
                           Default behaviour, or a index value of 0, will return all ranges as a comma-separated string
                           Otherwise, the specific range identified by the value of $index will be returned
                           Print areas are numbered from 1
@return string

@phpstan-ignore-next-line

Is print area set?
@param int $index Identifier for a specific print area range if several ranges have been set
                           Default behaviour, or an index value of 0, will identify whether any print range is set
                           Otherwise, existence of the range identified by the value of $index will be returned
                           Print areas are numbered from 1
@return bool

@phpstan-ignore-next-line

Clear a print area.
@param int $index Identifier for a specific print area range if several ranges have been set
                           Default behaviour, or an index value of 0, will clear all print ranges that are set
                           Otherwise, the range identified by the value of $index will be removed from the series
                           Print areas are numbered from 1
@return $this

@phpstan-ignore-next-line

Set print area. e.g. 'A1:D10' or 'A1:D10,G5:M20'.
@param string $value
@param int $index Identifier for a specific print area range allowing several ranges to be set
                           When the method is "O"verwrite, then a positive integer index will overwrite that indexed
                               entry in the print areas list; a negative index value will identify which entry to
                               overwrite working bacward through the print area to the list, with the last entry as -1.
                               Specifying an index value of 0, will overwrite <b>all</b> existing print ranges.
                           When the method is "I"nsert, then a positive index will insert after that indexed entry in
                               the print areas list, while a negative index will insert before the indexed entry.
                               Specifying an index value of 0, will always append the new print range at the end of the
                               list.
                           Print areas are numbered from 1
@param string $method Determines the method used when setting multiple print areas
                           Default behaviour, or the "O" method, overwrites existing print area
                           The "I" method, inserts the new print area before any specified index, or at the end of the list
@return $this

@phpstan-ignore-next-line

@phpstan-ignore-next-line

Add a new print area (e.g. 'A1:D10' or 'A1:D10,G5:M20') to the list of print areas.
@param string $value
@param int $index Identifier for a specific print area range allowing several ranges to be set
                           A positive index will insert after that indexed entry in the print areas list, while a
                               negative index will insert before the indexed entry.
                               Specifying an index value of 0, will always append the new print range at the end of the
                               list.
                           Print areas are numbered from 1
@return $this

Set print area.
@param int $column1 Column 1
@param int $row1 Row 1
@param int $column2 Column 2
@param int $row2 Row 2
@param int $index Identifier for a specific print area range allowing several ranges to be set
                               When the method is "O"verwrite, then a positive integer index will overwrite that indexed
                                   entry in the print areas list; a negative index value will identify which entry to
                                   overwrite working backward through the print area to the list, with the last entry as -1.
                                   Specifying an index value of 0, will overwrite <b>all</b> existing print ranges.
                               When the method is "I"nsert, then a positive index will insert after that indexed entry in
                                   the print areas list, while a negative index will insert before the indexed entry.
                                   Specifying an index value of 0, will always append the new print range at the end of the
                                   list.
                               Print areas are numbered from 1
@param string $method Determines the method used when setting multiple print areas
                               Default behaviour, or the "O" method, overwrites existing print area
                               The "I" method, inserts the new print area before any specified index, or at the end of the list
@return $this

Add a new print area to the list of print areas.
@param int $column1 Start Column for the print area
@param int $row1 Start Row for the print area
@param int $column2 End Column for the print area
@param int $row2 End Row for the print area
@param int $index Identifier for a specific print area range allowing several ranges to be set
                               A positive index will insert after that indexed entry in the print areas list, while a
                                   negative index will insert before the indexed entry.
                                   Specifying an index value of 0, will always append the new print range at the end of the
                                   list.
                               Print areas are numbered from 1
@return $this

Get first page number.
@return int

Set first page number.
@param int $value
@return $this

Reset first page number.
@return $this

Implement PHP __clone to create a deep clone, not just a shallow copy.

## References

**Database Tables (inferred)**
- `Office`
- `10`
- `1`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\PageSetup.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Worksheet\PageSetup`

**Functions/Methods**:
- `__construct()`
- `getPaperSize()`
- `setPaperSize($paperSize)`
- `getPaperSizeDefault()`
- `setPaperSizeDefault(int $paperSize)`
- `getOrientation()`
- `setOrientation($orientation)`
- `getOrientationDefault()`
- `setOrientationDefault(string $orientation)`
- `getScale()`
- `setScale($scale, $update = true)`
- `getFitToPage()`
- `setFitToPage($fitToPage)`
- `getFitToHeight()`
- `setFitToHeight($fitToHeight, $update = true)`
- `getFitToWidth()`
- `setFitToWidth($value, $update = true)`
- `isColumnsToRepeatAtLeftSet()`
- `getColumnsToRepeatAtLeft()`
- `setColumnsToRepeatAtLeft(array $columnsToRepeatAtLeft)`
- `setColumnsToRepeatAtLeftByStartAndEnd($start, $end)`
- `isRowsToRepeatAtTopSet()`
- `getRowsToRepeatAtTop()`
- `setRowsToRepeatAtTop(array $rowsToRepeatAtTop)`
- `setRowsToRepeatAtTopByStartAndEnd($start, $end)`
- `getHorizontalCentered()`
- `setHorizontalCentered($value)`
- `getVerticalCentered()`
- `setVerticalCentered($value)`
- `getPrintArea($index = 0)`
- `isPrintAreaSet($index = 0)`
- `clearPrintArea($index = 0)`
- `setPrintArea($value, $index = 0, $method = self::SETPRINTRANGE_OVERWRITE)`
- `addPrintArea($value, $index = -1)`
- `setPrintAreaByColumnAndRow($column1, $row1, $column2, $row2, $index = 0, $method = self::SETPRINTRANGE_OVERWRITE)`
- `addPrintAreaByColumnAndRow($column1, $row1, $column2, $row2, $index = -1)`
- `getFirstPageNumber()`
- `setFirstPageNumber($value)`
- `resetFirstPageNumber()`
- `getPageOrder()`
- `setPageOrder(?string $pageOrder)`
- `__clone()`

