# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xlsx\Chart.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xlsx\Chart.php`
- Type: PHP
- Size: 28279 bytes

## Summary (from docblocks)

@param string $name
@param string $format
@return null|bool|float|int|string

@param string $chartName
@return \PhpOffice\PhpSpreadsheet\Chart\Chart

@param mixed $plotAttributes

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xlsx\Chart.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Reader\Xlsx\Chart`

**Functions/Methods**:
- `getAttribute(SimpleXMLElement $component, $name, $format)`
- `readColor($color, $background = false)`
- `readChart(SimpleXMLElement $chartElements, $chartName)`
- `chartTitle(SimpleXMLElement $titleDetails, array $namespacesChartMeta)`
- `chartLayoutDetails($chartDetail, $namespacesChartMeta)`
- `chartDataSeries($chartDetail, $namespacesChartMeta, $plotType)`
- `chartDataSeriesValueSet($seriesDetail, $namespacesChartMeta, $marker = null)`
- `chartDataSeriesValues($seriesValueSet, $dataType = 'n')`
- `chartDataSeriesValuesMultiLevel($seriesValueSet, $dataType = 'n')`
- `parseRichText(SimpleXMLElement $titleDetailPart)`
- `readChartAttributes($chartDetail)`
- `setChartAttributes(Layout $plotArea, $plotAttributes)`

