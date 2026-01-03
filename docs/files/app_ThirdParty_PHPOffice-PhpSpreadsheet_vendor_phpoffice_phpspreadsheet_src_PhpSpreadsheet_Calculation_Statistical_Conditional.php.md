# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Conditional.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Conditional.php`
- Type: PHP
- Size: 9242 bytes

## Summary (from docblocks)

AVERAGEIF.
Returns the average value from a range of cells that contain numbers within the list of arguments
Excel Function:
       AVERAGEIF(range,condition[, average_range])
@param mixed[] $range Data values
@param string $condition the criteria that defines which cells will be checked
@param mixed[] $averageRange Data values
@return null|float|string

AVERAGEIFS.
Counts the number of cells that contain numbers within the list of arguments
Excel Function:
       AVERAGEIFS(average_range, criteria_range1, criteria1, [criteria_range2, criteria2]…)
@param mixed $args Pairs of Ranges and Criteria
@return null|float|string

COUNTIF.
Counts the number of cells that contain numbers within the list of arguments
Excel Function:
       COUNTIF(range,condition)
@param mixed[] $range Data values
@param string $condition the criteria that defines which cells will be counted
@return int

COUNTIFS.
Counts the number of cells that contain numbers within the list of arguments
Excel Function:
       COUNTIFS(criteria_range1, criteria1, [criteria_range2, criteria2]…)
@param mixed $args Pairs of Ranges and Criteria
@return int

MAXIFS.
Returns the maximum value within a range of cells that contain numbers within the list of arguments
Excel Function:
       MAXIFS(max_range, criteria_range1, criteria1, [criteria_range2, criteria2]…)
@param mixed $args Pairs of Ranges and Criteria
@return null|float|string

MINIFS.
Returns the minimum value within a range of cells that contain numbers within the list of arguments
Excel Function:
       MINIFS(min_range, criteria_range1, criteria1, [criteria_range2, criteria2]…)
@param mixed $args Pairs of Ranges and Criteria
@return null|float|string

SUMIF.
Totals the values of cells that contain numbers within the list of arguments
Excel Function:
       SUMIF(range, criteria, [sum_range])
@param mixed $range Data values
@param mixed $sumRange
@param mixed $condition
@return float|string

SUMIFS.
Counts the number of cells that contain numbers within the list of arguments
Excel Function:
       SUMIFS(average_range, criteria_range1, criteria1, [criteria_range2, criteria2]…)
@param mixed $args Pairs of Ranges and Criteria
@return null|float|string

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Conditional.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Statistical\Conditional`

**Functions/Methods**:
- `AVERAGEIF($range, $condition, $averageRange = [])`
- `AVERAGEIFS(...$args)`
- `COUNTIF($range, $condition)`
- `COUNTIFS(...$args)`
- `MAXIFS(...$args)`
- `MINIFS(...$args)`
- `SUMIF($range, $condition, $sumRange = [])`
- `SUMIFS(...$args)`
- `buildConditionSet(...$args)`
- `buildConditionSetForValueRange(...$args)`
- `buildConditions(int $startOffset, ...$args)`
- `buildDatabase(...$args)`
- `buildDatabaseWithValueRange(...$args)`
- `buildDataSet(int $startOffset, array $database, ...$args)`
- `databaseFromRangeAndValue(array $range, array $valueRange = [])`

