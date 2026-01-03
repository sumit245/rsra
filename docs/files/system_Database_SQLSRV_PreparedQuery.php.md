# system\Database\SQLSRV\PreparedQuery.php

- Path: `system\Database\SQLSRV\PreparedQuery.php`
- Type: PHP
- Size: 2796 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Prepared query for Postgre

Parameters array used to store the dynamic variables.
@var array

The result boolean from a sqlsrv_execute.
@var bool

Prepares the query against the database, and saves the connection
info necessary to execute the query later.
NOTE: This version is based on SQL code. Child classes should
override this method.
@param array $options Options takes an associative array;
@throws Exception
@return mixed

Takes a new set of data and runs it against the currently
prepared query. Upon success, will return a Results object.

Returns the result object for the prepared query.
@return mixed

Handle parameters

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\SQLSRV\PreparedQuery.php`

**Classes**:
- `CodeIgniter\Database\SQLSRV\PreparedQuery extends BasePreparedQuery`

**Functions/Methods**:
- `_prepare(string $sql, array $options = [])`
- `_execute(array $data)`
- `_getResult()`
- `parameterize(string $queryString)`

