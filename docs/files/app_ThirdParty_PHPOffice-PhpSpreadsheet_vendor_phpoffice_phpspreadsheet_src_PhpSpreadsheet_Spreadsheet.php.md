# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Spreadsheet.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Spreadsheet.php`
- Type: PHP
- Size: 44456 bytes

## Summary (from docblocks)

Unique ID.
@var string

Document properties.
@var Document\Properties

Document security.
@var Document\Security

Collection of Worksheet objects.
@var Worksheet[]

Calculation Engine.
@var null|Calculation

Active sheet index.
@var int

Named ranges.
@var DefinedName[]

CellXf supervisor.
@var Style

CellXf collection.
@var Style[]

CellStyleXf collection.
@var Style[]

hasMacros : this workbook have macros ?
@var bool

macrosCode : all macros code as binary data (the vbaProject.bin file, this include form, code,  etc.), null if no macro.
@var null|string

macrosCertificate : if macros are signed, contains binary data vbaProjectSignature.bin file, null if not signed.
@var null|string

ribbonXMLData : null if workbook is'nt Excel 2007 or not contain a customized UI.
@var null|array{target: string, data: string}

ribbonBinObjects : null if workbook is'nt Excel 2007 or not contain embedded objects (picture(s)) for Ribbon Elements
ignored if $ribbonXMLData is null.
@var null|array

List of unparsed loaded data for export to same format with better compatibility.
It has to be minimized when the library start to support currently unparsed data.
@var array

Controls visibility of the horizonal scroll bar in the application.
@var bool

Controls visibility of the horizonal scroll bar in the application.
@var bool

Controls visibility of the sheet tabs in the application.
@var bool

Specifies a boolean value that indicates whether the workbook window
is minimized.
@var bool

Specifies a boolean value that indicates whether to group dates
when presenting the user with filtering optiomd in the user
interface.
@var bool

Specifies the index to the first sheet in the book view.
@var int

Specifies the visible status of the workbook.
@var string

Specifies the ratio between the workbook tabs bar and the horizontal
scroll bar.  TabRatio is assumed to be out of 1000 of the horizontal
window width.
@var int

The workbook has macros ?
@return bool

Define if a workbook has macros.
@param bool $hasMacros true|false

Set the macros code.
@param string $macroCode string|null

Return the macros code.
@return null|string

Set the macros certificate.
@param null|string $certificate

Is the project signed ?
@return bool true|false

Return the macros certificate.
@return null|string

Remove all macros, certificate from spreadsheet.

set ribbon XML data.
@param null|mixed $target
@param null|mixed $xmlData

retrieve ribbon XML Data.
@param string $what
@return null|array|string

store binaries ribbon objects (pictures).
@param null|mixed $BinObjectsNames
@param null|mixed $BinObjectsData

List of unparsed loaded data for export to same format with better compatibility.
It has to be minimized when the library start to support currently unparsed data.
@internal
@return array

List of unparsed loaded data for export to same format with better compatibility.
It has to be minimized when the library start to support currently unparsed data.
@internal

return the extension of a filename. Internal use for a array_map callback (php<5.3 don't like lambda function).
@param mixed $path
@return string

retrieve Binaries Ribbon Objects.
@param string $what
@return null|array

This workbook have a custom UI ?
@return bool

This workbook have additionnal object for the ribbon ?
@return bool

Check if a sheet with a specified code name already exists.
@param string $codeName Name of the worksheet to check
@return bool

Get sheet by code name. Warning : sheet don't have always a code name !
@param string $codeName Sheet name
@return null|Worksheet

Create a new PhpSpreadsheet with one Worksheet.

Code to execute when this worksheet is unset().

Disconnect all worksheets from this PhpSpreadsheet workbook object,
typically so that the PhpSpreadsheet object can be unset.

Return the calculation engine for this worksheet.
@return null|Calculation

Get properties.
@return Document\Properties

Set properties.

Get security.
@return Document\Security

Set security.

Get active sheet.
@return Worksheet

Create sheet and add it to this workbook.
@param null|int $sheetIndex Index where sheet should go (0,1,..., or null for last)
@return Worksheet

Check if a sheet with a specified name already exists.
@param string $worksheetName Name of the worksheet to check
@return bool

Add sheet.
@param Worksheet $worksheet The worksheet to add
@param null|int $sheetIndex Index where sheet should go (0,1,..., or null for last)
@return Worksheet

Remove sheet by index.
@param int $sheetIndex Index position of the worksheet to remove

Get sheet by index.
@param int $sheetIndex Sheet index
@return Worksheet

Get all sheets.
@return Worksheet[]

Get sheet by name.
@param string $worksheetName Sheet name
@return null|Worksheet

Get index for sheet.
@return int index

Set index for sheet by sheet name.
@param string $worksheetName Sheet name to modify index for
@param int $newIndexPosition New index for the sheet
@return int New sheet index

Get sheet count.
@return int

Get active sheet index.
@return int Active sheet index

Set active sheet index.
@param int $worksheetIndex Active sheet index
@return Worksheet

Set active sheet index by name.
@param string $worksheetName Sheet title
@return Worksheet

Get sheet names.
@return string[]

Add external sheet.
@param Worksheet $worksheet External sheet to add
@param null|int $sheetIndex Index where sheet should go (0,1,..., or null for last)
@return Worksheet

Get an array of all Named Ranges.
@return DefinedName[]

Get an array of all Named Formulae.
@return DefinedName[]

Get an array of all Defined Names (both named ranges and named formulae).
@return DefinedName[]

Add a named range.
If a named range with this name already exists, then this will replace the existing value.

Add a named formula.
If a named formula with this name already exists, then this will replace the existing value.

Add a defined name (either a named range or a named formula).
If a defined named with this name already exists, then this will replace the existing value.

Get named range.
@param null|Worksheet $worksheet Scope. Use null for global scope

Get named formula.
@param null|Worksheet $worksheet Scope. Use null for global scope

Get named range.
@param null|Worksheet $worksheet Scope. Use null for global scope

Remove named range.
@param null|Worksheet $worksheet scope: use null for global scope
@return $this

Remove named formula.
@param null|Worksheet $worksheet scope: use null for global scope
@return $this

Remove defined name.
@param null|Worksheet $worksheet scope: use null for global scope
@return $this

Get worksheet iterator.
@return Iterator

Copy workbook (!= clone!).
@return Spreadsheet

Implement PHP __clone to create a deep clone, not just a shallow copy.

Get the workbook collection of cellXfs.
@return Style[]

Get cellXf by index.
@param int $cellStyleIndex
@return Style

Get cellXf by hash code.
@param string $hashcode
@return false|Style

Check if style exists in style collection.
@return bool

Get default style.
@return Style

Add a cellXf to the workbook.

Remove cellXf by index. It is ensured that all cells get their xf index updated.
@param int $cellStyleIndex Index to cellXf

Get the cellXf supervisor.
@return Style

Get the workbook collection of cellStyleXfs.
@return Style[]

Get cellStyleXf by index.
@param int $cellStyleIndex Index to cellXf
@return Style

Get cellStyleXf by hash code.
@param string $hashcode
@return false|Style

Add a cellStyleXf to the workbook.

Remove cellStyleXf by index.
@param int $cellStyleIndex Index to cellXf

Eliminate all unneeded cellXf and afterwards update the xfIndex for all cells
and columns in the workbook.

Return the unique ID value assigned to this spreadsheet workbook.
@return string

Get the visibility of the horizonal scroll bar in the application.
@return bool True if horizonal scroll bar is visible

Set the visibility of the horizonal scroll bar in the application.
@param bool $showHorizontalScroll True if horizonal scroll bar is visible

Get the visibility of the vertical scroll bar in the application.
@return bool True if vertical scroll bar is visible

Set the visibility of the vertical scroll bar in the application.
@param bool $showVerticalScroll True if vertical scroll bar is visible

Get the visibility of the sheet tabs in the application.
@return bool True if the sheet tabs are visible

Set the visibility of the sheet tabs  in the application.
@param bool $showSheetTabs True if sheet tabs are visible

Return whether the workbook window is minimized.
@return bool true if workbook window is minimized

Set whether the workbook window is minimized.
@param bool $minimized true if workbook window is minimized

Return whether to group dates when presenting the user with
filtering optiomd in the user interface.
@return bool true if workbook window is minimized

Set whether to group dates when presenting the user with
filtering optiomd in the user interface.
@param bool $autoFilterDateGrouping true if workbook window is minimized

Return the first sheet in the book view.
@return int First sheet in book view

Set the first sheet in the book view.
@param int $firstSheetIndex First sheet in book view

Return the visibility status of the workbook.
This may be one of the following three values:
- visibile
@return string Visible status

Set the visibility status of the workbook.
Valid values are:
 - 'visible' (self::VISIBILITY_VISIBLE):
      Workbook window is visible
 - 'hidden' (self::VISIBILITY_HIDDEN):
      Workbook window is hidden, but can be shown by the user
      via the user interface
 - 'veryHidden' (self::VISIBILITY_VERY_HIDDEN):
      Workbook window is hidden and cannot be shown in the
      user interface.
@param string $visibility visibility status of the workbook

Get the ratio between the workbook tabs bar and the horizontal scroll bar.
TabRatio is assumed to be out of 1000 of the horizontal window width.
@return int Ratio between the workbook tabs bar and the horizontal scroll bar

Set the ratio between the workbook tabs bar and the horizontal scroll bar
TabRatio is assumed to be out of 1000 of the horizontal window width.
@param int $tabRatio Ratio between the tabs bar and the horizontal scroll bar

Silliness to mollify Scrutinizer.
@codeCoverageIgnore

## References

**Database Tables (inferred)**
- `spreadsheet`
- `this`
- `the`
- `cells`
- `row`
- `column`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Spreadsheet.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Spreadsheet`

**Functions/Methods**:
- `hasMacros()`
- `setHasMacros($hasMacros)`
- `setMacrosCode($macroCode)`
- `getMacrosCode()`
- `setMacrosCertificate($certificate)`
- `hasMacrosCertificate()`
- `getMacrosCertificate()`
- `discardMacros()`
- `setRibbonXMLData($target, $xmlData)`
- `getRibbonXMLData($what = 'all')`
- `setRibbonBinObjects($BinObjectsNames, $BinObjectsData)`
- `getUnparsedLoadedData()`
- `setUnparsedLoadedData(array $unparsedLoadedData)`
- `getExtensionOnly($path)`
- `getRibbonBinObjects($what = 'all')`
- `hasRibbon()`
- `hasRibbonBinObjects()`
- `sheetCodeNameExists($codeName)`
- `getSheetByCodeName($codeName)`
- `__construct()`
- `__destruct()`
- `disconnectWorksheets()`
- `getCalculationEngine()`
- `getProperties()`
- `setProperties(Document\Properties $documentProperties)`
- `getSecurity()`
- `setSecurity(Document\Security $documentSecurity)`
- `getActiveSheet()`
- `createSheet($sheetIndex = null)`
- `sheetNameExists($worksheetName)`
- `addSheet(Worksheet $worksheet, $sheetIndex = null)`
- `removeSheetByIndex($sheetIndex)`
- `getSheet($sheetIndex)`
- `getAllSheets()`
- `getSheetByName($worksheetName)`
- `getIndex(Worksheet $worksheet)`
- `setIndexByName($worksheetName, $newIndexPosition)`
- `getSheetCount()`
- `getActiveSheetIndex()`
- `setActiveSheetIndex($worksheetIndex)`
- `setActiveSheetIndexByName($worksheetName)`
- `getSheetNames()`
- `addExternalSheet(Worksheet $worksheet, $sheetIndex = null)`
- `getNamedRanges()`
- `getNamedFormulae()`
- `getDefinedNames()`
- `addNamedRange(NamedRange $namedRange)`
- `addNamedFormula(NamedFormula $namedFormula)`
- `addDefinedName(DefinedName $definedName)`
- `getNamedRange(string $namedRange, ?Worksheet $worksheet = null)`
- `getNamedFormula(string $namedFormula, ?Worksheet $worksheet = null)`
- `getGlobalDefinedNameByType(string $name, bool $type)`
- `getLocalDefinedNameByType(string $name, bool $type, ?Worksheet $worksheet = null)`
- `getDefinedName(string $definedName, ?Worksheet $worksheet = null)`
- `removeNamedRange(string $namedRange, ?Worksheet $worksheet = null)`
- `removeNamedFormula(string $namedFormula, ?Worksheet $worksheet = null)`
- `removeDefinedName(string $definedName, ?Worksheet $worksheet = null)`
- `getWorksheetIterator()`
- `copy()`
- `__clone()`
- `getCellXfCollection()`
- `getCellXfByIndex($cellStyleIndex)`
- `getCellXfByHashCode($hashcode)`
- `cellXfExists(Style $cellStyleIndex)`
- `getDefaultStyle()`
- `addCellXf(Style $style)`
- `removeCellXfByIndex($cellStyleIndex)`
- `getCellXfSupervisor()`
- `getCellStyleXfCollection()`
- `getCellStyleXfByIndex($cellStyleIndex)`
- `getCellStyleXfByHashCode($hashcode)`
- `addCellStyleXf(Style $style)`
- `removeCellStyleXfByIndex($cellStyleIndex)`
- `garbageCollect()`
- `getID()`
- `getShowHorizontalScroll()`
- `setShowHorizontalScroll($showHorizontalScroll)`
- `getShowVerticalScroll()`
- `setShowVerticalScroll($showVerticalScroll)`
- `getShowSheetTabs()`
- `setShowSheetTabs($showSheetTabs)`
- `getMinimized()`
- `setMinimized($minimized)`
- `getAutoFilterDateGrouping()`
- `setAutoFilterDateGrouping($autoFilterDateGrouping)`
- `getFirstSheetIndex()`
- `setFirstSheetIndex($firstSheetIndex)`
- `getVisibility()`
- `setVisibility($visibility)`
- `getTabRatio()`
- `setTabRatio($tabRatio)`
- `reevaluateAutoFilters(bool $resetToMax)`
- `getSharedComponent()`

