# system\Database\OCI8\Result.php

- Path: `system\Database\OCI8\Result.php`
- Type: PHP
- Size: 2868 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Result for OCI8

Gets the number of fields in the result set.

Generates an array of column names in the result set.

Generates an array of objects representing field meta-data.

Frees the current result.
@return void

Moves the internal pointer to the desired offset. This is called
internally before fetching results to make sure the result set
starts at zero.
@return false

Returns the result set as an array.
Overridden by driver classes.
@return mixed

Returns the result set as an object.
Overridden by child classes.
@return bool|Entity|object

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\OCI8\Result.php`

**Classes**:
- `CodeIgniter\Database\OCI8\Result extends BaseResult implements ResultInterface`

**Functions/Methods**:
- `getFieldCount()`
- `getFieldNames()`
- `getFieldData()`
- `freeResult()`
- `dataSeek(int $n = 0)`
- `fetchAssoc()`
- `fetchObject(string $className = 'stdClass')`

