# system\Test\Mock\MockResult.php

- Path: `system\Test\Mock\MockResult.php`
- Type: PHP
- Size: 1816 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Gets the number of fields in the result set.

Generates an array of column names in the result set.

Generates an array of objects representing field meta-data.

Frees the current result.
@return mixed

Moves the internal pointer to the desired offset. This is called
internally before fetching results to make sure the result set
starts at zero.
@param int $n
@return mixed

Returns the result set as an array.
Overridden by driver classes.
@return mixed

Returns the result set as an object.
Overridden by child classes.
@param string $className
@return object

Gets the number of fields in the result set.

## Symbols

# Symbols

**Files documented**: 1

## `system\Test\Mock\MockResult.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockResult extends BaseResult`

**Functions/Methods**:
- `getFieldCount()`
- `getFieldNames()`
- `getFieldData()`
- `freeResult()`
- `dataSeek($n = 0)`
- `fetchAssoc()`
- `fetchObject($className = 'stdClass')`
- `getNumRows()`

