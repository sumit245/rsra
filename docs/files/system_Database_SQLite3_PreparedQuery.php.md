# system\Database\SQLite3\PreparedQuery.php

- Path: `system\Database\SQLite3\PreparedQuery.php`
- Type: PHP
- Size: 2406 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Prepared query for SQLite3

The SQLite3Result resource, or false.
@var bool|Result

Prepares the query against the database, and saves the connection
info necessary to execute the query later.
NOTE: This version is based on SQL code. Child classes should
override this method.
@param array $options Passed to the connection's prepare statement.
                      Unused in the MySQLi driver.
@return $this

Takes a new set of data and runs it against the currently
prepared query. Upon success, will return a Results object.
@todo finalize()

Returns the result object for the prepared query.
@return mixed

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\SQLite3\PreparedQuery.php`

**Classes**:
- `CodeIgniter\Database\SQLite3\PreparedQuery extends BasePreparedQuery`

**Functions/Methods**:
- `_prepare(string $sql, array $options = [])`
- `_execute(array $data)`
- `_getResult()`

