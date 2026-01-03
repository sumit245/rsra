# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xls.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xls.php`
- Type: PHP
- Size: 293452 bytes

## Summary (from docblocks)

Summary Information stream data.
@var string

Extended Summary Information stream data.
@var string

Workbook stream data. (Includes workbook globals substream as well as sheet substreams).
@var string

Size in bytes of $this->data.
@var int

Current position in stream.
@var int

Workbook to be returned by the reader.
@var Spreadsheet

Worksheet that is currently being built by the reader.
@var Worksheet

BIFF version.
@var int

Codepage set in the Excel file being read. Only important for BIFF5 (Excel 5.0 - Excel 95)
For BIFF8 (Excel 97 - Excel 2003) this will always have the value 'UTF-16LE'.
@var string

Shared formats.
@var array

Shared fonts.
@var Font[]

Color palette.
@var array

Worksheets.
@var array

External books.
@var array

REF structures. Only applies to BIFF8.
@var array

External names.
@var array

Defined names.
@var array

Shared strings. Only applies to BIFF8.
@var array

Panes are frozen? (in sheet currently being read). See WINDOW2 record.
@var bool

Fit printout to number of pages? (in sheet currently being read). See SHEETPR record.
@var bool

Objects. One OBJ record contributes with one entry.
@var array

Text Objects. One TXO record corresponds with one entry.
@var array

Cell Annotations (BIFF8).
@var array

The combined MSODRAWINGGROUP data.
@var string

The combined MSODRAWING data (per sheet).
@var string

Keep track of XF index.
@var int

Mapping of XF index (that is a cell XF) to final index in cellXf collection.
@var array

Mapping of XF index (that is a style XF) to final index in cellStyleXf collection.
@var array

The shared formulas in a sheet. One SHAREDFMLA record contributes with one value.
@var array

The shared formula parts in a sheet. One FORMULA record contributes with one value if it
refers to a shared formula.
@var array

The type of encryption in use.
@var int

The position in the stream after which contents are encrypted.
@var int

The current RC4 decryption object.
@var Xls\RC4

The position in the stream that the RC4 decryption object was left at.
@var int

The current MD5 context state.
@var string

@var int

@var string

Create a new Xls Reader instance.

Can the current IReader read the file?

Reads names of the worksheets from a file, without parsing the whole file to a PhpSpreadsheet object.
@param string $filename
@return array

Return worksheet info (Name, Last Column Letter, Last Column Index, Total Rows, Total Columns).
@param string $filename
@return array

Loads PhpSpreadsheet from file.

Read record data from stream, decrypting as required.
@param string $data Data stream to read from
@param int $pos Position to start reading from
@param int $len Record data length
@return string Record data

Use OLE reader to extract the relevant data streams from the OLE file.
@param string $filename

Read summary information.

Read additional document summary information.

Reads a general type of BIFF record. Does nothing except for moving stream pointer forward to next record.

The NOTE record specifies a comment associated with a particular cell. In Excel 95 (BIFF7) and earlier versions,
       this record stores a note (cell note). This feature was significantly enhanced in Excel 97.

The TEXT Object record contains the text associated with a cell annotation.

Read BOF.

FILEPASS.
This record is part of the File Protection Block. It
contains information about the read/write password of the
file. All record contents following this record will be
encrypted.
--    "OpenOffice.org's Documentation of the Microsoft
        Excel File Format"
The decryption functions and objects used from here on in
are based on the source of Spreadsheet-ParseExcel:
https://metacpan.org/release/Spreadsheet-ParseExcel

Make an RC4 decryptor for the given block.
@param int $block Block for which to create decrypto
@param string $valContext MD5 context state
@return Xls\RC4

Verify RC4 file password.
@param string $password Password to check
@param string $docid Document id
@param string $salt_data Salt data
@param string $hashedsalt_data Hashed salt data
@param string $valContext Set to the MD5 context of the value
@return bool Success

CODEPAGE.
This record stores the text encoding used to write byte
strings, stored as MS Windows code page identifier.
--    "OpenOffice.org's Documentation of the Microsoft
        Excel File Format"

DATEMODE.
This record specifies the base date for displaying date
values. All dates are stored as count of days past this
base date. In BIFF2-BIFF4 this record is part of the
Calculation Settings Block. In BIFF5-BIFF8 it is
stored in the Workbook Globals Substream.
--    "OpenOffice.org's Documentation of the Microsoft
        Excel File Format"

Read a FONT record.

FORMAT.
This record contains information about a number format.
All FORMAT records occur together in a sequential list.
In BIFF2-BIFF4 other records referencing a FORMAT record
contain a zero-based index into this list. From BIFF5 on
the FORMAT record contains the index itself that will be
used by other records.
--    "OpenOffice.org's Documentation of the Microsoft
        Excel File Format"

XF - Extended Format.
This record contains formatting information for cells, rows, columns or styles.
According to https://support.microsoft.com/en-us/help/147732 there are always at least 15 cell style XF
and 1 cell XF.
Inspection of Excel files generated by MS Office Excel shows that XF records 0-14 are cell style XF
and XF record 15 is a cell XF
We only read the first cell style XF and skip the remaining cell style XF records
We read all cell XF records.
--    "OpenOffice.org's Documentation of the Microsoft
        Excel File Format"

Read STYLE record.

Read PALETTE record.

SHEET.
This record is  located in the  Workbook Globals
Substream  and represents a sheet inside the workbook.
One SHEET record is written for each sheet. It stores the
sheet name and a stream offset to the BOF record of the
respective Sheet Substream within the Workbook Stream.
--    "OpenOffice.org's Documentation of the Microsoft
        Excel File Format"

Read EXTERNALBOOK record.

Read EXTERNNAME record.

Read EXTERNSHEET record.

DEFINEDNAME.
This record is part of a Link Table. It contains the name
and the token array of an internal defined name. Token
arrays of defined names contain tokens with aberrant
token classes.
--    "OpenOffice.org's Documentation of the Microsoft
        Excel File Format"

Read MSODRAWINGGROUP record.

SST - Shared String Table.
This record contains a list of all strings used anywhere
in the workbook. Each string occurs only once. The
workbook uses indexes into the list to reference the
strings.
--    "OpenOffice.org's Documentation of the Microsoft
        Excel File Format"

Read PRINTGRIDLINES record.

Read DEFAULTROWHEIGHT record.

Read SHEETPR record.

Read HORIZONTALPAGEBREAKS record.

Read VERTICALPAGEBREAKS record.

Read HEADER record.

Read FOOTER record.

Read HCENTER record.

Read VCENTER record.

Read LEFTMARGIN record.

Read RIGHTMARGIN record.

Read TOPMARGIN record.

Read BOTTOMMARGIN record.

Read PAGESETUP record.

PROTECT - Sheet protection (BIFF2 through BIFF8)
  if this record is omitted, then it also means no sheet protection.

SCENPROTECT.

OBJECTPROTECT.

PASSWORD - Sheet protection (hashed) password (BIFF2 through BIFF8).

Read DEFCOLWIDTH record.

Read COLINFO record.

ROW.
This record contains the properties of a single row in a
sheet. Rows and cells in a sheet are divided into blocks
of 32 rows.
--    "OpenOffice.org's Documentation of the Microsoft
        Excel File Format"

Read RK record
This record represents a cell that contains an RK value
(encoded integer or floating-point value). If a
floating-point value cannot be encoded to an RK value,
a NUMBER record will be written. This record replaces the
record INTEGER written in BIFF2.
--    "OpenOffice.org's Documentation of the Microsoft
        Excel File Format"

Read LABELSST record
This record represents a cell that contains a string. It
replaces the LABEL record and RSTRING record used in
BIFF2-BIFF5.
--    "OpenOffice.org's Documentation of the Microsoft
        Excel File Format"

Read MULRK record
This record represents a cell range containing RK value
cells. All cells are located in the same row.
--    "OpenOffice.org's Documentation of the Microsoft
        Excel File Format"

Read NUMBER record
This record represents a cell that contains a
floating-point value.
--    "OpenOffice.org's Documentation of the Microsoft
        Excel File Format"

Read FORMULA record + perhaps a following STRING record if formula result is a string
This record contains the token array and the result of a
formula cell.
--    "OpenOffice.org's Documentation of the Microsoft
        Excel File Format"

Read a SHAREDFMLA record. This function just stores the binary shared formula in the reader,
which usually contains relative references.
These will be used to construct the formula in each shared formula part after the sheet is read.

Read a STRING record from current stream position and advance the stream pointer to next record
This record is used for storing result from FORMULA record when it is a string, and
it occurs directly after the FORMULA record.
@return string The string contents as UTF-8

Read BOOLERR record
This record represents a Boolean value or error value
cell.
--    "OpenOffice.org's Documentation of the Microsoft
        Excel File Format"

Read MULBLANK record
This record represents a cell range of empty cells. All
cells are located in the same row.
--    "OpenOffice.org's Documentation of the Microsoft
        Excel File Format"

Read LABEL record
This record represents a cell that contains a string. In
BIFF8 it is usually replaced by the LABELSST record.
Excel still uses this record, if it copies unformatted
text cells to the clipboard.
--    "OpenOffice.org's Documentation of the Microsoft
        Excel File Format"

Read BLANK record.

Read MSODRAWING record.

Read OBJ record.

Read WINDOW2 record.

Read PLV Record(Created by Excel2007 or upper).

Read SCL record.

Read PANE record.

Read SELECTION record. There is one such record for each pane in the sheet.

MERGEDCELLS.
This record contains the addresses of merged cell ranges
in the current sheet.
--    "OpenOffice.org's Documentation of the Microsoft
        Excel File Format"

Read HYPERLINK record.

Read DATAVALIDATIONS record.

Read DATAVALIDATION record.

Read SHEETLAYOUT record. Stores sheet tab color information.

Read SHEETPROTECTION record (FEATHEADR).

Read RANGEPROTECTION record
Reading of this record is based on Microsoft Office Excel 97-2000 Binary File Format Specification,
where it is referred to as FEAT record.

Read a free CONTINUE record. Free CONTINUE record may be a camouflaged MSODRAWING record
When MSODRAWING data on a sheet exceeds 8224 bytes, CONTINUE records are used instead. Undocumented.
In this case, we must treat the CONTINUE record as a MSODRAWING record.

Reads a record from current position in data stream and continues reading data as long as CONTINUE
records are found. Splices the record data pieces and returns the combined string as if record data
is in one piece.
Moves to next current position in data stream to start of next record different from a CONtINUE record.
@return array

Convert formula structure into human readable Excel formula like 'A3+A5*5'.
@param string $formulaStructure The complete binary data for the formula
@param string $baseCell Base cell, only needed when formula contains tRefN tokens, e.g. with shared formulas
@return string Human readable formula

Take formula data and additional data for formula and return human readable formula.
@param string $formulaData The binary data for the formula itself
@param string $additionalData Additional binary data going with the formula
@param string $baseCell Base cell, only needed when formula contains tRefN tokens, e.g. with shared formulas
@return string Human readable formula

Take array of tokens together with additional data for formula and return human readable formula.
@param array $tokens
@param string $additionalData Additional binary data going with the formula
@return string Human readable formula

Fetch next token from binary formula data.
@param string $formulaData Formula data
@param string $baseCell Base cell, only needed when formula contains tRefN tokens, e.g. with shared formulas
@return array

Reads a cell address in BIFF8 e.g. 'A2' or '$A$2'
section 3.3.4.
@param string $cellAddressStructure
@return string

Reads a cell address in BIFF8 for shared formulas. Uses positive and negative values for row and column
to indicate offsets from a base cell
section 3.3.4.
@param string $cellAddressStructure
@param string $baseCell Base cell, only needed when formula contains tRefN tokens, e.g. with shared formulas
@return string

Reads a cell range address in BIFF5 e.g. 'A2:B6' or 'A1'
always fixed range
section 2.5.14.
@param string $subData
@return string

Reads a cell range address in BIFF8 e.g. 'A2:B6' or 'A1'
always fixed range
section 2.5.14.
@param string $subData
@return string

Reads a cell range address in BIFF8 e.g. 'A2:B6' or '$A$2:$B$6'
there are flags indicating whether column/row index is relative
section 3.3.4.
@param string $subData
@return string

Reads a cell range address in BIFF8 for shared formulas. Uses positive and negative values for row and column
to indicate offsets from a base cell
section 3.3.4.
@param string $subData
@param string $baseCell Base cell
@return string Cell range address

Read BIFF8 cell range address list
section 2.5.15.
@param string $subData
@return array

Read BIFF5 cell range address list
section 2.5.15.
@param string $subData
@return array

Get a sheet range like Sheet1:Sheet3 from REF index
Note: If there is only one sheet in the range, one gets e.g Sheet1
It can also happen that the REF structure uses the -1 (FFFF) code to indicate deleted sheets,
in which case an Exception is thrown.
@param int $index
@return false|string

read BIFF8 constant value array from array data
returns e.g. ['value' => '{1,2;3,4}', 'size' => 40]
section 2.5.8.
@param string $arrayData
@return array

read BIFF8 constant value which may be 'Empty Value', 'Number', 'String Value', 'Boolean Value', 'Error Value'
section 2.5.7
returns e.g. ['value' => '5', 'size' => 9].
@param string $valueData
@return array

Extract RGB color
OpenOffice.org's Documentation of the Microsoft Excel File Format, section 2.5.4.
@param string $rgb Encoded RGB value (4 bytes)
@return array

Read byte string (8-bit string length)
OpenOffice documentation: 2.5.2.
@param string $subData
@return array

Read byte string (16-bit string length)
OpenOffice documentation: 2.5.2.
@param string $subData
@return array

Extracts an Excel Unicode short string (8-bit string length)
OpenOffice documentation: 2.5.3
function will automatically find out where the Unicode string ends.
@param string $subData
@return array

Extracts an Excel Unicode long string (16-bit string length)
OpenOffice documentation: 2.5.3
this function is under construction, needs to support rich text, and Asian phonetic settings.
@param string $subData
@return array

Read Unicode string with no string length field, but with known character count
this function is under construction, needs to support rich text, and Asian phonetic settings
OpenOffice.org's Documentation of the Microsoft Excel File Format, section 2.5.3.
@param string $subData
@param int $characterCount
@return array

Convert UTF-8 string to string surounded by double quotes. Used for explicit string tokens in formulas.
Example:  hello"world  -->  "hello""world".
@param string $value UTF-8 encoded string
@return string

Reads first 8 bytes of a string and return IEEE 754 float.
@param string $data Binary string that is at least 8 bytes long
@return float

@param int $rknum
@return float

Get UTF-8 string from (compressed or uncompressed) UTF-16 string.
@param string $string
@param bool $compressed
@return string

Convert UTF-16 string in compressed notation to uncompressed form. Only used for BIFF8.
@param string $string
@return string

Convert string to UTF-8. Only used for BIFF5.
@param string $string
@return string

Read 16-bit unsigned integer.
@param string $data
@param int $pos
@return int

Read 16-bit signed integer.
@param string $data
@param int $pos
@return int

Read 32-bit signed integer.
@param string $data
@param int $pos
@return int

Phpstan 1.4.4 complains that this property is never read.
So, we might be able to get rid of it altogether.
For now, however, this function makes it readable,
which satisfies Phpstan.
@codeCoverageIgnore

@return null|float|int|string

@param null|float|int|string $formula1
@param null|float|int|string $formula2

## References

**Database Tables (inferred)**
- `Excel_Spreadsheet_Reader`
- `a`
- `file`
- `stream`
- `the`
- `beginning`
- `here`
- `BIFF5`
- `top`
- `bottom`
- `current`
- `FORMULA`
- `left`
- `right`
- `binary`
- `REF`
- `array`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xls.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Reader\Xls extends BaseReader`
- `PhpOffice\PhpSpreadsheet\Reader\id`
- `PhpOffice\PhpSpreadsheet\Reader\id`

**Functions/Methods**:
- `__construct()`
- `canRead(string $filename)`
- `setCodepage(string $codepage)`
- `listWorksheetNames($filename)`
- `listWorksheetInfo($filename)`
- `loadSpreadsheetFromFile(string $filename)`
- `readRecordData($data, $pos, $len)`
- `loadOLE($filename)`
- `readSummaryInformation()`
- `readDocumentSummaryInformation()`
- `readDefault()`
- `readNote()`
- `readTextObject()`
- `readBof()`
- `readFilepass()`
- `makeKey($block, $valContext)`
- `verifyPassword($password, $docid, $salt_data, $hashedsalt_data, &$valContext)`
- `readCodepage()`
- `readDateMode()`
- `readFont()`
- `readFormat()`
- `readXf()`
- `readXfExt()`
- `readStyle()`
- `readPalette()`
- `readSheet()`
- `readExternalBook()`
- `readExternName()`
- `readExternSheet()`
- `readDefinedName()`
- `readMsoDrawingGroup()`
- `readSst()`
- `readPrintGridlines()`
- `readDefaultRowHeight()`
- `readSheetPr()`
- `readHorizontalPageBreaks()`
- `readVerticalPageBreaks()`
- `readHeader()`
- `readFooter()`
- `readHcenter()`
- `readVcenter()`
- `readLeftMargin()`
- `readRightMargin()`
- `readTopMargin()`
- `readBottomMargin()`
- `readPageSetup()`
- `readProtect()`
- `readScenProtect()`
- `readObjectProtect()`
- `readPassword()`
- `readDefColWidth()`
- `readColInfo()`
- `readRow()`
- `readRk()`
- `readLabelSst()`
- `readMulRk()`
- `readNumber()`
- `readFormula()`
- `readSharedFmla()`
- `readString()`
- `readBoolErr()`
- `readMulBlank()`
- `readLabel()`
- `readBlank()`
- `readMsoDrawing()`
- `readObj()`
- `readWindow2()`
- `readPageLayoutView()`
- `readScl()`
- `readPane()`
- `readSelection()`
- `includeCellRangeFiltered($cellRangeAddress)`
- `readMergedCells()`
- `readHyperLink()`
- `readDataValidations()`
- `readDataValidation()`
- `readSheetLayout()`
- `readSheetProtection()`
- `readRangeProtection()`
- `readContinue()`
- `getSplicedRecordData()`
- `getFormulaFromStructure($formulaStructure, $baseCell = 'A1')`
- `getFormulaFromData($formulaData, $additionalData = '', $baseCell = 'A1')`
- `createFormulaFromTokens($tokens, $additionalData)`
- `getNextToken($formulaData, $baseCell = 'A1')`
- `switch(self::getUInt2d($formulaData, 1)`
- `readBIFF8CellAddress($cellAddressStructure)`
- `readBIFF8CellAddressB($cellAddressStructure, $baseCell = 'A1')`
- `readBIFF5CellRangeAddressFixed($subData)`
- `readBIFF8CellRangeAddressFixed($subData)`
- `readBIFF8CellRangeAddress($subData)`
- `readBIFF8CellRangeAddressB($subData, $baseCell = 'A1')`
- `readBIFF8CellRangeAddressList($subData)`
- `readBIFF5CellRangeAddressList($subData)`
- `readSheetRangeByRefIndex($index)`
- `readBIFF8ConstantArray($arrayData)`
- `readBIFF8Constant($valueData)`
- `readRGB($rgb)`
- `readByteStringShort($subData)`
- `readByteStringLong($subData)`
- `readUnicodeStringShort($subData)`
- `readUnicodeStringLong($subData)`
- `readUnicodeString($subData, $characterCount)`
- `UTF8toExcelDoubleQuoted($value)`
- `extractNumber($data)`
- `getIEEE754($rknum)`
- `encodeUTF16($string, $compressed = false)`
- `uncompressByteString($string)`
- `decodeCodepage($string)`
- `getUInt2d($data, $pos)`
- `getInt2d($data, $pos)`
- `getInt4d($data, $pos)`
- `parseRichText($is)`
- `getMapCellStyleXfIndex()`
- `readCFHeader()`
- `readCFRule(array $cellRangeAddresses)`
- `getCFStyleOptions(int $options, Style $style)`
- `getCFFontStyle(string $options, Style $style)`
- `getCFAlignmentStyle(string $options, Style $style)`
- `getCFBorderStyle(string $options, Style $style)`
- `getCFFillStyle(string $options, Style $style)`
- `getCFProtectionStyle(string $options, Style $style)`
- `readCFFormula(string $recordData, int $offset, int $size)`
- `setCFRules(array $cellRanges, string $type, string $operator, $formula1, $formula2, Style $style)`

