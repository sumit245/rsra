# system\Database\ResultInterface.php

- Path: `system\Database\ResultInterface.php`
- Type: PHP
- Size: 4006 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Interface ResultInterface

Retrieve the results of the query. Typically an array of
individual data rows, which can be either an 'array', an
'object', or a custom class name.
@param string $type The row type. Either 'array', 'object', or a class name to use

Returns the results as an array of custom objects.
@param string $className The name of the class to use.
@return mixed

Returns the results as an array of arrays.
If no results, an empty array is returned.

Returns the results as an array of objects.
If no results, an empty array is returned.

Wrapper object to return a row as either an array, an object, or
a custom class.
If row doesn't exist, returns null.
@param mixed  $n    The index of the results to return
@param string $type The type of result object. 'array', 'object' or class name.
@return mixed

Returns a row as a custom class instance.
If row doesn't exists, returns null.
@return mixed

Returns a single row from the results as an array.
If row doesn't exist, returns null.
@return mixed

Returns a single row from the results as an object.
If row doesn't exist, returns null.
@return mixed

Assigns an item into a particular column slot.
@param string $key
@param mixed  $value
@return mixed

Returns the "first" row of the current results.
@return mixed

Returns the "last" row of the current results.
@return mixed

Returns the "next" row of the current results.
@return mixed

Returns the "previous" row of the current results.
@return mixed

Returns an unbuffered row and move the pointer to the next row.
@return mixed

Gets the number of fields in the result set.

Generates an array of column names in the result set.

Generates an array of objects representing field meta-data.

Frees the current result.

Moves the internal pointer to the desired offset. This is called
internally before fetching results to make sure the result set
starts at zero.
@return mixed

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\ResultInterface.php`

**Classes**:
- `CodeIgniter\Database\name`
- `CodeIgniter\Database\name`
- `CodeIgniter\Database\to`
- `CodeIgniter\Database\name`
- `CodeIgniter\Database\instance`

**Functions/Methods**:
- `getResult(string $type = 'object')`
- `getCustomResultObject(string $className)`
- `getResultArray()`
- `getResultObject()`
- `getRow($n = 0, string $type = 'object')`
- `getCustomRowObject(int $n, string $className)`
- `getRowArray(int $n = 0)`
- `getRowObject(int $n = 0)`
- `setRow($key, $value = null)`
- `getFirstRow(string $type = 'object')`
- `getLastRow(string $type = 'object')`
- `getNextRow(string $type = 'object')`
- `getPreviousRow(string $type = 'object')`
- `getUnbufferedRow(string $type = 'object')`
- `getFieldCount()`
- `getFieldNames()`
- `getFieldData()`
- `freeResult()`
- `dataSeek(int $n = 0)`

