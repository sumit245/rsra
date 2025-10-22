# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Chart\DataSeries.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Chart\DataSeries.php`
- Type: PHP
- Size: 8629 bytes

## Summary (from docblocks)

Series Plot Type.
@var string

Plot Grouping Type.
@var string

Plot Direction.
@var string

Plot Style.
@var null|string

Order of plots in Series.
@var int[]

Plot Label.
@var DataSeriesValues[]

Plot Category.
@var DataSeriesValues[]

Smooth Line.
@var bool

Plot Values.
@var DataSeriesValues[]

Create a new DataSeries.
@param null|mixed $plotType
@param null|mixed $plotGrouping
@param int[] $plotOrder
@param DataSeriesValues[] $plotLabel
@param DataSeriesValues[] $plotCategory
@param DataSeriesValues[] $plotValues
@param null|string $plotDirection
@param bool $smoothLine
@param null|string $plotStyle

Get Plot Type.
@return string

Set Plot Type.
@param string $plotType
@return $this

Get Plot Grouping Type.
@return string

Set Plot Grouping Type.
@param string $groupingType
@return $this

Get Plot Direction.
@return string

Set Plot Direction.
@param string $plotDirection
@return $this

Get Plot Order.
@return int[]

Get Plot Labels.
@return DataSeriesValues[]

Get Plot Label by Index.
@param mixed $index
@return DataSeriesValues|false

Get Plot Categories.
@return DataSeriesValues[]

Get Plot Category by Index.
@param mixed $index
@return DataSeriesValues|false

Get Plot Style.
@return null|string

Set Plot Style.
@param null|string $plotStyle
@return $this

Get Plot Values.
@return DataSeriesValues[]

Get Plot Values by Index.
@param mixed $index
@return DataSeriesValues|false

Get Number of Plot Series.
@return int

Get Smooth Line.
@return bool

Set Smooth Line.
@param bool $smoothLine
@return $this

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Chart\DataSeries.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Chart\DataSeries`

**Functions/Methods**:
- `__construct($plotType = null, $plotGrouping = null, array $plotOrder = [], array $plotLabel = [], array $plotCategory = [], array $plotValues = [], $plotDirection = null, $smoothLine = false, $plotStyle = null)`
- `getPlotType()`
- `setPlotType($plotType)`
- `getPlotGrouping()`
- `setPlotGrouping($groupingType)`
- `getPlotDirection()`
- `setPlotDirection($plotDirection)`
- `getPlotOrder()`
- `getPlotLabels()`
- `getPlotLabelByIndex($index)`
- `getPlotCategories()`
- `getPlotCategoryByIndex($index)`
- `getPlotStyle()`
- `setPlotStyle($plotStyle)`
- `getPlotValues()`
- `getPlotValuesByIndex($index)`
- `getPlotSeriesCount()`
- `getSmoothLine()`
- `setSmoothLine($smoothLine)`
- `refresh(Worksheet $worksheet)`

