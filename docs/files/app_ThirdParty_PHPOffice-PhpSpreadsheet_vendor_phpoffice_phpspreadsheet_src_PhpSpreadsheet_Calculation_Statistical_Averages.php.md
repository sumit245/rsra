# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Averages.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Averages.php`
- Type: PHP
- Size: 7725 bytes

## Summary (from docblocks)

AVEDEV.
Returns the average of the absolute deviations of data points from their mean.
AVEDEV is a measure of the variability in a data set.
Excel Function:
       AVEDEV(value1[,value2[, ...]])
@param mixed ...$args Data values
@return float|string (string if result is an error)

AVERAGE.
Returns the average (arithmetic mean) of the arguments
Excel Function:
       AVERAGE(value1[,value2[, ...]])
@param mixed ...$args Data values
@return float|string (string if result is an error)

AVERAGEA.
Returns the average of its arguments, including numbers, text, and logical values
Excel Function:
       AVERAGEA(value1[,value2[, ...]])
@param mixed ...$args Data values
@return float|string (string if result is an error)

MEDIAN.
Returns the median of the given numbers. The median is the number in the middle of a set of numbers.
Excel Function:
       MEDIAN(value1[,value2[, ...]])
@param mixed ...$args Data values
@return float|string The result, or a string containing an error

MODE.
Returns the most frequently occurring, or repetitive, value in an array or range of data
Excel Function:
       MODE(value1[,value2[, ...]])
@param mixed ...$args Data values
@return float|string The result, or a string containing an error

## References

**Database Tables (inferred)**
- `their`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Averages.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Statistical\Averages extends AggregateBase`

**Functions/Methods**:
- `averageDeviations(...$args)`
- `average(...$args)`
- `averageA(...$args)`
- `median(...$args)`
- `mode(...$args)`
- `filterArguments($args)`
- `modeCalc($data)`

