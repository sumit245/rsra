# system\Database\PreparedQueryInterface.php

- Path: `system\Database\PreparedQueryInterface.php`
- Type: PHP
- Size: 1274 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Prepared query interface

Takes a new set of data and runs it against the currently
prepared query. Upon success, will return a Results object.
@return ResultInterface

Prepares the query against the database, and saves the connection
info necessary to execute the query later.
@return mixed

Explicity closes the statement.

Returns the SQL that has been prepared.

Returns the error code created while executing this statement.

Returns the error message created while executing this statement.

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\PreparedQueryInterface.php`

**Functions/Methods**:
- `execute(...$data)`
- `prepare(string $sql, array $options = [])`
- `close()`
- `getQueryString()`
- `getErrorCode()`
- `getErrorMessage()`

