# system\Database\Exceptions\DataException.php

- Path: `system\Database\Exceptions\DataException.php`
- Type: PHP
- Size: 2364 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Used by the Model's trigger() method when the callback cannot be found.
@return DataException

Used by Model's insert/update methods when there isn't
any data to actually work with.
@return DataException

Used by Model's insert/update methods when there is no
primary key defined and Model has option `useAutoIncrement`
set to false.
@return DataException

Thrown when an argument for one of the Model's methods
were empty or otherwise invalid, and they could not be
to work correctly for that method.
@return DataException

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\Exceptions\DataException.php`

**Classes**:
- `CodeIgniter\Database\Exceptions\DataException extends RuntimeException implements ExceptionInterface`

**Functions/Methods**:
- `forInvalidMethodTriggered(string $method)`
- `forEmptyDataset(string $mode)`
- `forEmptyPrimaryKey(string $mode)`
- `forInvalidArgument(string $argument)`
- `forInvalidAllowedFields(string $model)`
- `forTableNotFound(string $table)`
- `forEmptyInputGiven(string $argument)`
- `forFindColumnHaveMultipleColumns()`

