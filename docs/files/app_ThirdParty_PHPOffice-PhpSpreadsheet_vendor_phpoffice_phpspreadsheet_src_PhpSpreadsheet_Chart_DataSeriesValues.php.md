# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Chart\DataSeriesValues.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Chart\DataSeriesValues.php`
- Type: PHP
- Size: 9293 bytes

## Summary (from docblocks)

Series Data Type.
@var string

Series Data Source.
@var string

Format Code.
@var string

Series Point Marker.
@var string

Point Count (The number of datapoints in the dataseries).
@var int

Data Values.
@var mixed[]

Fill color (can be array with colors if dataseries have custom colors).
@var string|string[]

Line Width.
@var int

Create a new DataSeriesValues object.
@param string $dataType
@param string $dataSource
@param null|mixed $formatCode
@param int $pointCount
@param mixed $dataValues
@param null|mixed $marker
@param null|string|string[] $fillColor

Get Series Data Type.
@return string

Set Series Data Type.
@param string $dataType Datatype of this data series
                               Typical values are:
                                   DataSeriesValues::DATASERIES_TYPE_STRING
                                       Normally used for axis point values
                                   DataSeriesValues::DATASERIES_TYPE_NUMBER
                                       Normally used for chart data values
@return $this

Get Series Data Source (formula).
@return string

Set Series Data Source (formula).
@param string $dataSource
@return $this

Get Point Marker.
@return string

Set Point Marker.
@param string $marker
@return $this

Get Series Format Code.
@return string

Set Series Format Code.
@param string $formatCode
@return $this

Get Series Point Count.
@return int

Get fill color.
@return string|string[] HEX color or array with HEX colors

Set fill color for series.
@param string|string[] $color HEX color or array with HEX colors
@return   DataSeriesValues

Method for validating hex color.
@param string $color value for color
@return bool true if validation was successful

Get line width for series.
@return int

Set line width for the series.
@param int $width
@return $this

Identify if the Data Series is a multi-level or a simple series.
@return null|bool

Return the level count of a multi-level Data Series.
@return int

Get Series Data Values.
@return mixed[]

Get the first Series Data value.
@return mixed

Set Series Data Values.
@param array $dataValues
@return $this

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Chart\DataSeriesValues.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Chart\DataSeriesValues`

**Functions/Methods**:
- `__construct($dataType = self::DATASERIES_TYPE_NUMBER, $dataSource = null, $formatCode = null, $pointCount = 0, $dataValues = [], $marker = null, $fillColor = null)`
- `getDataType()`
- `setDataType($dataType)`
- `getDataSource()`
- `setDataSource($dataSource)`
- `getPointMarker()`
- `setPointMarker($marker)`
- `getFormatCode()`
- `setFormatCode($formatCode)`
- `getPointCount()`
- `getFillColor()`
- `setFillColor($color)`
- `validateColor($color)`
- `getLineWidth()`
- `setLineWidth($width)`
- `isMultiLevelSeries()`
- `multiLevelCount()`
- `getDataValues()`
- `getDataValue()`
- `setDataValues($dataValues)`
- `refresh(Worksheet $worksheet, $flatten = true)`

