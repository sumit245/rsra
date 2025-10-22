# system\Database\Postgre\PreparedQuery.php

- Path: `system\Database\Postgre\PreparedQuery.php`
- Type: PHP
- Size: 2841 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Prepared query for Postgre

Stores the name this query can be
used under by postgres. Only used internally.
@var string

The result resource from a successful
pg_exec. Or false.
@var bool|Result

Prepares the query against the database, and saves the connection
info necessary to execute the query later.
NOTE: This version is based on SQL code. Child classes should
override this method.
@param array $options Passed to the connection's prepare statement.
                      Unused in the MySQLi driver.
@throws Exception
@return mixed

Takes a new set of data and runs it against the currently
prepared query. Upon success, will return a Results object.

Returns the result object for the prepared query.
@return mixed

Replaces the ? placeholders with $1, $2, etc parameters for use
within the prepared query.

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\Postgre\PreparedQuery.php`

**Classes**:
- `CodeIgniter\Database\Postgre\PreparedQuery extends BasePreparedQuery`

**Functions/Methods**:
- `_prepare(string $sql, array $options = [])`
- `_execute(array $data)`
- `_getResult()`
- `parameterize(string $sql)`

