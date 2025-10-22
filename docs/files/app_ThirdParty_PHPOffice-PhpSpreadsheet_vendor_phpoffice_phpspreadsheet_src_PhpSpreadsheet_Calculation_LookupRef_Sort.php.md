# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\Sort.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\Sort.php`
- Type: PHP
- Size: 12411 bytes

## Summary (from docblocks)

SORT
The SORT function returns a sorted array of the elements in an array.
The returned array is the same shape as the provided array argument.
Both $sortIndex and $sortOrder can be arrays, to provide multi-level sorting.
@param mixed $sortArray The range of cells being sorted
@param mixed $sortIndex The column or row number within the sortArray to sort on
@param mixed $sortOrder Flag indicating whether to sort ascending or descending
                         Ascending = 1 (self::ORDER_ASCENDING)
                         Descending = -1 (self::ORDER_DESCENDING)
@param mixed $byColumn Whether the sort should be determined by row (the default) or by column
@return mixed The sorted values from the sort range

SORTBY
The SORTBY function sorts the contents of a range or array based on the values in a corresponding range or array.
The returned array is the same shape as the provided array argument.
Both $sortIndex and $sortOrder can be arrays, to provide multi-level sorting.
@param mixed $sortArray The range of cells being sorted
@param mixed $args
             At least one additional argument must be provided, The vector or range to sort on
             After that, arguments are passed as pairs:
                   sort order: ascending or descending
                        Ascending = 1 (self::ORDER_ASCENDING)
                        Descending = -1 (self::ORDER_DESCENDING)
                   additional arrays or ranges for multi-level sorting
@return mixed The sorted values from the sort range

@param mixed $sortIndex
@param mixed $sortOrder

@param mixed $sortVector

@param mixed $sortOrder

@param array $sortIndex
@param mixed $sortOrder

@param array[] $sortIndex
@param int[] $sortOrder

@param int[] $sortIndex
@param int[] $sortOrder

@param int[] $sortIndex
@param int[] $sortOrder

@param int[] $sortIndex
@param int[] $sortOrder

Hack to handle PHP 7:
From PHP 8.0.0, If two members compare as equal in a sort, they retain their original order;
     but prior to PHP 8.0.0, their relative order in the sorted array was undefined.
MS Excel replicates the PHP 8.0.0 behaviour, retaining the original order of matching elements.
To replicate that behaviour with PHP 7, we add an extra sort based on the row index.

## References

**Database Tables (inferred)**
- `the`
- `PHP`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\Sort.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\LookupRef\Sort extends LookupRefValidations`

**Functions/Methods**:
- `sort($sortArray, $sortIndex = 1, $sortOrder = self::ORDER_ASCENDING, $byColumn = false)`
- `sortBy($sortArray, ...$args)`
- `enumerateArrayKeys(array $sortArray)`
- `validateScalarArgumentsForSort(&$sortIndex, &$sortOrder, int $sortArraySize)`
- `validateSortVector($sortVector, int $sortArraySize)`
- `validateSortOrder($sortOrder)`
- `validateArrayArgumentsForSort(&$sortIndex, &$sortOrder, int $sortArraySize)`
- `prepareSortVectorValues(array $sortVector)`
- `processSortBy(array $sortArray, array $sortIndex, $sortOrder)`
- `sortByRow(array $sortArray, array $sortIndex, array $sortOrder)`
- `sortByColumn(array $sortArray, array $sortIndex, array $sortOrder)`
- `buildVectorForSort(array $sortArray, array $sortIndex, array $sortOrder)`
- `executeVectorSortQuery(array $sortData, array $sortArguments)`
- `sortLookupArrayFromVector(array $sortArray, array $sortVector)`
- `applyPHP7Patch(array $sortArray, array $sortArguments)`

