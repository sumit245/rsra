# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\Chart.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\Chart.php`
- Type: PHP
- Size: 61594 bytes

## Summary (from docblocks)

@var int

Write charts to XML format.
@param mixed $calculateCellValues
@return string XML Output

Write Chart Title.

Write Chart Legend.

Write Chart Plot Area.

Write Data Labels.

Write Category Axis.
@param string $id1
@param string $id2
@param bool $isMultiLevelSeries

Write Value Axis.
@param null|string $groupType Chart type
@param string $id1
@param string $id2
@param bool $isMultiLevelSeries

Get the data series type(s) for a chart plot series.
@return string[]

Method writing plot series values.
@param int $val value for idx (default: 3)
@param string $fillColor hex color (default: FF9900)

Write Plot Group (series of related plots).
@param string $groupType Type of plot for dataseries
@param bool $catIsMultiLevelSeries Is category a multi-series category
@param bool $valIsMultiLevelSeries Is value set a multi-series set
@param string $plotGroupingType Type of grouping for multi-series values

Write Plot Series Label.

Write Plot Series Values.
@param string $groupType Type of plot for dataseries
@param string $dataType Datatype of series values

Write Bubble Chart Details.

Write Layout.

Write Alternate Content block.

Write Printer Settings.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\Chart.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Writer\Xlsx\Chart extends WriterPart`

**Functions/Methods**:
- `writeChart(\PhpOffice\PhpSpreadsheet\Chart\Chart $chart, $calculateCellValues = true)`
- `writeTitle(XMLWriter $objWriter, ?Title $title = null)`
- `writeLegend(XMLWriter $objWriter, ?Legend $legend = null)`
- `writePlotArea(XMLWriter $objWriter, PlotArea $plotArea, ?Title $xAxisLabel = null, ?Title $yAxisLabel = null, ?Axis $xAxis = null, ?Axis $yAxis = null, ?GridLines $majorGridlines = null, ?GridLines $minorGridlines = null)`
- `writeDataLabels(XMLWriter $objWriter, ?Layout $chartLayout = null)`
- `writeCategoryAxis(XMLWriter $objWriter, ?Title $xAxisLabel, $id1, $id2, $isMultiLevelSeries, Axis $yAxis)`
- `writeValueAxis(XMLWriter $objWriter, ?Title $yAxisLabel, $groupType, $id1, $id2, $isMultiLevelSeries, Axis $xAxis, GridLines $majorGridlines, GridLines $minorGridlines)`
- `getChartType(PlotArea $plotArea)`
- `writePlotSeriesValuesElement(XMLWriter $objWriter, $val = 3, $fillColor = 'FF9900')`
- `writePlotGroup(?DataSeries $plotGroup, $groupType, XMLWriter $objWriter, &$catIsMultiLevelSeries, &$valIsMultiLevelSeries, &$plotGroupingType)`
- `writePlotSeriesLabel(?DataSeriesValues $plotSeriesLabel, XMLWriter $objWriter)`
- `writePlotSeriesValues(?DataSeriesValues $plotSeriesValues, XMLWriter $objWriter, $groupType, $dataType = 'str')`
- `writeBubbles(?DataSeriesValues $plotSeriesValues, XMLWriter $objWriter)`
- `writeLayout(XMLWriter $objWriter, ?Layout $layout = null)`
- `writeAlternateContent(XMLWriter $objWriter)`
- `writePrintSettings(XMLWriter $objWriter)`

