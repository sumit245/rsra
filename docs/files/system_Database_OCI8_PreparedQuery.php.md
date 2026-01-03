# system\Database\OCI8\PreparedQuery.php

- Path: `system\Database\OCI8\PreparedQuery.php`
- Type: PHP
- Size: 2979 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Prepared query for OCI8

A reference to the db connection to use.
@var Connection

Latest inserted table name.

Prepares the query against the database, and saves the connection
info necessary to execute the query later.
NOTE: This version is based on SQL code. Child classes should
override this method.
@param array $options Passed to the connection's prepare statement.
                      Unused in the OCI8 driver.
@return mixed

Takes a new set of data and runs it against the currently
prepared query. Upon success, will return a Results object.

Returns the result object for the prepared query.
@return mixed

Replaces the ? placeholders with :0, :1, etc parameters for use
within the prepared query.

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\OCI8\PreparedQuery.php`

**Classes**:
- `CodeIgniter\Database\OCI8\PreparedQuery extends BasePreparedQuery implements PreparedQueryInterface`

**Functions/Methods**:
- `_prepare(string $sql, array $options = [])`
- `_execute(array $data)`
- `_getResult()`
- `parameterize(string $sql)`

