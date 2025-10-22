# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Chart\Chart.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Chart\Chart.php`
- Type: PHP
- Size: 12736 bytes

## Summary (from docblocks)

Chart Name.
@var string

Worksheet.
@var Worksheet

Chart Title.
@var Title

Chart Legend.
@var Legend

X-Axis Label.
@var Title

Y-Axis Label.
@var Title

Chart Plot Area.
@var PlotArea

Plot Visible Only.
@var bool

Display Blanks as.
@var string

Chart Asix Y as.
@var Axis

Chart Asix X as.
@var Axis

Chart Major Gridlines as.
@var GridLines

Chart Minor Gridlines as.
@var GridLines

Top-Left Cell Position.
@var string

Top-Left X-Offset.
@var int

Top-Left Y-Offset.
@var int

Bottom-Right Cell Position.
@var string

Bottom-Right X-Offset.
@var int

Bottom-Right Y-Offset.
@var int

Create a new Chart.
@param mixed $name
@param mixed $plotVisibleOnly
@param string $displayBlanksAs

Get Name.
@return string

Get Worksheet.
@return Worksheet

Set Worksheet.
@return $this

Get Title.
@return Title

Set Title.
@return $this

Get Legend.
@return Legend

Set Legend.
@return $this

Get X-Axis Label.
@return Title

Set X-Axis Label.
@return $this

Get Y-Axis Label.
@return Title

Set Y-Axis Label.
@return $this

Get Plot Area.
@return PlotArea

Get Plot Visible Only.
@return bool

Set Plot Visible Only.
@param bool $plotVisibleOnly
@return $this

Get Display Blanks as.
@return string

Set Display Blanks as.
@param string $displayBlanksAs
@return $this

Get yAxis.
@return Axis

Get xAxis.
@return Axis

Get Major Gridlines.
@return GridLines

Get Minor Gridlines.
@return GridLines

Set the Top Left position for the chart.
@param string $cell
@param int $xOffset
@param int $yOffset
@return $this

Get the top left position of the chart.
@return array{cell: string, xOffset: int, yOffset: int} an associative array containing the cell address, X-Offset and Y-Offset from the top left of that cell

Get the cell address where the top left of the chart is fixed.
@return string

Set the Top Left cell position for the chart.
@param string $cell
@return $this

Set the offset position within the Top Left cell for the chart.
@param int $xOffset
@param int $yOffset
@return $this

Get the offset position within the Top Left cell for the chart.
@return int[]

Set the Bottom Right position of the chart.
@param string $cell
@param int $xOffset
@param int $yOffset
@return $this

Get the bottom right position of the chart.
@return array an associative array containing the cell address, X-Offset and Y-Offset from the top left of that cell

Get the cell address where the bottom right of the chart is fixed.
@return string

Set the offset position within the Bottom Right cell for the chart.
@param int $xOffset
@param int $yOffset
@return $this

Get the offset position within the Bottom Right cell for the chart.
@return int[]

Render the chart to given file (or stream).
@param string $outputDestination Name of the file render to
@return bool true on success

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Chart\Chart.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Chart\Chart`

**Functions/Methods**:
- `__construct($name, ?Title $title = null, ?Legend $legend = null, ?PlotArea $plotArea = null, $plotVisibleOnly = true, $displayBlanksAs = DataSeries::EMPTY_AS_GAP, ?Title $xAxisLabel = null, ?Title $yAxisLabel = null, ?Axis $xAxis = null, ?Axis $yAxis = null, ?GridLines $majorGridlines = null, ?GridLines $minorGridlines = null)`
- `getName()`
- `getWorksheet()`
- `setWorksheet(?Worksheet $worksheet = null)`
- `getTitle()`
- `setTitle(Title $title)`
- `getLegend()`
- `setLegend(Legend $legend)`
- `getXAxisLabel()`
- `setXAxisLabel(Title $label)`
- `getYAxisLabel()`
- `setYAxisLabel(Title $label)`
- `getPlotArea()`
- `getPlotVisibleOnly()`
- `setPlotVisibleOnly($plotVisibleOnly)`
- `getDisplayBlanksAs()`
- `setDisplayBlanksAs($displayBlanksAs)`
- `getChartAxisY()`
- `getChartAxisX()`
- `getMajorGridlines()`
- `getMinorGridlines()`
- `setTopLeftPosition($cell, $xOffset = null, $yOffset = null)`
- `getTopLeftPosition()`
- `getTopLeftCell()`
- `setTopLeftCell($cell)`
- `setTopLeftOffset($xOffset, $yOffset)`
- `getTopLeftOffset()`
- `setTopLeftXOffset($xOffset)`
- `getTopLeftXOffset()`
- `setTopLeftYOffset($yOffset)`
- `getTopLeftYOffset()`
- `setBottomRightPosition($cell, $xOffset = null, $yOffset = null)`
- `getBottomRightPosition()`
- `setBottomRightCell($cell)`
- `getBottomRightCell()`
- `setBottomRightOffset($xOffset, $yOffset)`
- `getBottomRightOffset()`
- `setBottomRightXOffset($xOffset)`
- `getBottomRightXOffset()`
- `setBottomRightYOffset($yOffset)`
- `getBottomRightYOffset()`
- `refresh()`
- `render($outputDestination = null)`

