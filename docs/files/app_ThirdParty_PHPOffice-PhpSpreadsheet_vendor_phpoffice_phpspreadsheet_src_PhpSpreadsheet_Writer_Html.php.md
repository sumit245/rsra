# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Html.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Html.php`
- Type: PHP
- Size: 62297 bytes

## Summary (from docblocks)

Spreadsheet object.
@var Spreadsheet

Sheet index to write.
@var null|int

Images root.
@var string

embed images, or link to images.
@var bool

Use inline CSS?
@var bool

Use embedded CSS?
@var bool

Array of CSS styles.
@var array

Array of column widths in points.
@var array

Default font.
@var Font

Flag whether spans have been calculated.
@var bool

Excel cells that should not be written as HTML cells.
@var array

Excel cells that are upper-left corner in a cell merge.
@var array

Excel rows that should not be written as HTML rows.
@var array

Is the current writer creating PDF?
@var bool

Generate the Navigation block.
@var bool

Callback for editing generated html.
@var null|callable

Create a new HTML.

Save Spreadsheet to file.
@param resource|string $filename

Save Spreadsheet as html to variable.
@return string

Set a callback to edit the entire HTML.
The callback must accept the HTML as string as first parameter,
and it must return the edited HTML as string.

Map VAlign.
@param string $vAlign Vertical alignment
@return string

Map HAlign.
@param string $hAlign Horizontal alignment
@return string

Map border style.
@param int $borderStyle Sheet index
@return string

Get sheet index.

Set sheet index.
@param int $sheetIndex Sheet index
@return $this

Get sheet index.
@return bool

Set sheet index.
@param bool $generateSheetNavigationBlock Flag indicating whether the sheet navigation block should be generated or not
@return $this

Write all sheets (resets sheetIndex to NULL).
@return $this

Generate HTML header.
@param bool $includeStyles Include styles?
@return string

Generate sheet data.
@return string

Generate sheet tabs.
@return string

Extend Row if chart is placed after nominal end of row.
This code should be exercised by sample:
Chart/32_Chart_read_write_PDF.php.
However, that test is suppressed due to out-of-date
Jpgraph code issuing warnings. So, don't measure
code coverage for this function till that is fixed.
@param int $row Row to check for charts
@return array
@codeCoverageIgnore

Convert Windows file name to file protocol URL.
@param string $filename file name on local system
@return string

Generate image tag in cell.
@param Worksheet $worksheet \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet
@param string $coordinates Cell coordinates
@return string

@phpstan-ignore-next-line

Generate chart tag in cell.
This code should be exercised by sample:
Chart/32_Chart_read_write_PDF.php.
However, that test is suppressed due to out-of-date
Jpgraph code issuing warnings. So, don't measure
code coverage for this function till that is fixed.
@codeCoverageIgnore

@phpstan-ignore-next-line

Generate CSS styles.
@param bool $generateSurroundingHTML Generate surrounding HTML tags? (&lt;style&gt; and &lt;/style&gt;)
@return string

Build CSS styles.
@param bool $generateSurroundingHTML Generate surrounding HTML style? (html { })
@return array

Create CSS style.
@return array

Create CSS style.
@return array

Create CSS style.
@return array

Create CSS style.
@param Borders $borders Borders
@return array

Create CSS style.
@param Border $border Border
@return string

Create CSS style (Fill).
@param Fill $fill Fill
@return array

Generate HTML footer.

Generate table header.
@param Worksheet $worksheet The worksheet for the table we are writing
@param bool $showid whether or not to add id to table tag
@return string

Generate table footer.

Generate row start.
@param int $sheetIndex Sheet index (0-based)
@param int $row row number
@return string

Necessary redundant code for the sake of \PhpOffice\PhpSpreadsheet\Writer\Pdf **
            // We must explicitly write the width of the <td> element because TCPDF
            // does not recognize e.g. <col style="width:42pt">
            if ($this->useInlineCss) {
                $xcssClass = $cssClass;
            } else {
                $html .= ' class="' . $cssClass . '"';
                $xcssClass = [];
            }
            $width = 0;
            $i = $colNum - 1;
            $e = $colNum + $colSpan - 1;
            while ($i++ < $e) {
                if (isset($this->columnWidths[$sheetIndex][$i])) {
                    $width += $this->columnWidths[$sheetIndex][$i];
                }
            }
            $xcssClass['width'] = $width . 'pt';

            // We must also explicitly write the height of the <td> element because TCPDF
            // does not recognize e.g. <tr style="height:50pt">
            if (isset($this->cssStyles['table.sheet' . $sheetIndex . ' tr.row' . $row]['height'])) {
                $height = $this->cssStyles['table.sheet' . $sheetIndex . ' tr.row' . $row]['height'];
                $xcssClass['height'] = $height;
            }
            //** end of redundant code **

            if ($htmlx) {
                $xcssClass['position'] = 'relative';
            }
            $html .= ' style="' . $this->assembleCSS($xcssClass) . '"';
        }
        $html = $this->generateRowSpans($html, $rowSpan, $colSpan);

        $html .= '>';
        $html .= $htmlx;

        $html .= $this->writeComment($worksheet, $coordinate);

        // Cell data
        $html .= $cellData;

        // Column end
        $html .= '</' . $cellType . '>' . PHP_EOL;
    }

    /**
Generate row.
@param array $values Array containing cells in a row
@param int $row Row number (0-based)
@param string $cellType eg: 'td'
@return string

Takes array where of CSS properties / values and converts to CSS string.
@return string

Get images root.
@return string

Set images root.
@param string $imagesRoot
@return $this

Get embed images.
@return bool

Set embed images.
@param bool $embedImages
@return $this

Get use inline CSS?
@return bool

Set use inline CSS?
@param bool $useInlineCss
@return $this

Get use embedded CSS?
@return bool
@codeCoverageIgnore
@deprecated no longer used

Set use embedded CSS?
@param bool $useEmbeddedCSS
@return $this
@codeCoverageIgnore
@deprecated no longer used

Add color to formatted string as inline style.
@param string $value Plain formatted value without color
@param string $format Format code
@return string

Calculate information about HTML colspan and rowspan which is not always the same as Excel's.

Write a comment in the same format as LibreOffice.
@see https://github.com/LibreOffice/core/blob/9fc9bf3240f8c62ad7859947ab8a033ac1fe93fa/sc/source/filter/html/htmlexp.cxx#L1073-L1092
@param string $coordinate
@return string

Generate @page declarations.
@param bool $generateSurroundingHTML
@return    string

## References

**Database Tables (inferred)**
- `last`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Html.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Writer\Html extends BaseWriter`

**Functions/Methods**:
- `__construct(Spreadsheet $spreadsheet)`
- `save($filename, int $flags = 0)`
- `generateHtmlAll()`
- `setEditHtmlCallback(?callable $callback)`
- `mapVAlign($vAlign)`
- `mapHAlign($hAlign)`
- `mapBorderStyle($borderStyle)`
- `getSheetIndex()`
- `setSheetIndex($sheetIndex)`
- `getGenerateSheetNavigationBlock()`
- `setGenerateSheetNavigationBlock($generateSheetNavigationBlock)`
- `writeAllSheets()`
- `generateMeta($val, $desc)`
- `generateHTMLHeader($includeStyles = false)`
- `generateSheetPrep()`
- `generateSheetStarts($sheet, $rowMin)`
- `generateSheetTags($row, $theadStart, $theadEnd, $tbodyStart)`
- `generateSheetData()`
- `generateNavigation()`
- `extendRowsForCharts(Worksheet $worksheet, int $row)`
- `extendRowsForChartsAndImages(Worksheet $worksheet, int $row)`
- `winFileToUrl($filename)`
- `writeImageInCell(Worksheet $worksheet, $coordinates)`
- `writeChartInCell(Worksheet $worksheet, string $coordinates)`
- `generateStyles($generateSurroundingHTML = true)`
- `buildCssRowHeights(Worksheet $sheet, array &$css, int $sheetIndex)`
- `buildCssPerSheet(Worksheet $sheet, array &$css)`
- `buildCSS($generateSurroundingHTML = true)`
- `createCSSStyle(Style $style)`
- `createCSSStyleAlignment(Alignment $alignment)`
- `createCSSStyleFont(Font $font)`
- `createCSSStyleBorders(Borders $borders)`
- `createCSSStyleBorder(Border $border)`
- `createCSSStyleFill(Fill $fill)`
- `generateHTMLFooter()`
- `generateTableTagInline(Worksheet $worksheet, $id)`
- `generateTableTag(Worksheet $worksheet, $id, &$html, $sheetIndex)`
- `generateTableHeader(Worksheet $worksheet, $showid = true)`
- `generateTableFooter()`
- `generateRowStart(Worksheet $worksheet, $sheetIndex, $row)`
- `generateRowCellCss(Worksheet $worksheet, $cellAddress, $row, $columnNumber)`
- `generateRowCellDataValueRich($cell, &$cellData)`
- `generateRowCellDataValue(Worksheet $worksheet, $cell, &$cellData)`
- `generateRowCellData(Worksheet $worksheet, $cell, &$cssClass, $cellType)`
- `generateRowIncludeCharts(Worksheet $worksheet, $coordinate)`
- `generateRowSpans($html, $rowSpan, $colSpan)`
- `generateRowWriteCell(&$html, Worksheet $worksheet, $coordinate, $cellType, $cellData, $colSpan, $rowSpan, $cssClass, $colNum, $sheetIndex, $row)`
- `generateRow(Worksheet $worksheet, array $values, $row, $cellType)`
- `assembleCSS(array $values = [])`
- `getImagesRoot()`
- `setImagesRoot($imagesRoot)`
- `getEmbedImages()`
- `setEmbedImages($embedImages)`
- `getUseInlineCss()`
- `setUseInlineCss($useInlineCss)`
- `getUseEmbeddedCSS()`
- `setUseEmbeddedCSS($useEmbeddedCSS)`
- `formatColor($value, $format)`
- `calculateSpans()`
- `calculateSpansOmitRows($sheet, $sheetIndex, $candidateSpannedRow)`
- `writeComment(Worksheet $worksheet, $coordinate)`
- `getOrientation()`
- `generatePageDeclarations($generateSurroundingHTML)`

