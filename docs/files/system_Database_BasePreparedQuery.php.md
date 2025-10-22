# system\Database\BasePreparedQuery.php

- Path: `system\Database\BasePreparedQuery.php`
- Type: PHP
- Size: 4502 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Base prepared query

The prepared statement itself.
@var object|resource

The error code, if any.
@var int

The error message, if any.
@var string

Holds the prepared query object
that is cloned during execute.
@var Query

A reference to the db connection to use.
@var BaseConnection

Prepares the query against the database, and saves the connection
info necessary to execute the query later.
NOTE: This version is based on SQL code. Child classes should
override this method.
@return mixed

@var Query $query

The database-dependent portion of the prepare statement.
@return mixed

Takes a new set of data and runs it against the currently
prepared query. Upon success, will return a Results object.
@return ResultInterface

The database dependant version of the execute method.

Returns the result object for the prepared query.
@return mixed

Explicitly closes the statement.

Returns the SQL that has been prepared.

A helper to determine if any error exists.

Returns the error code created while executing this statement.

Returns the error message created while executing this statement.

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\BasePreparedQuery.php`

**Classes**:
- `CodeIgniter\Database\BasePreparedQuery implements PreparedQueryInterface`

**Functions/Methods**:
- `__construct(BaseConnection $db)`
- `prepare(string $sql, array $options = [], string $queryClass = Query::class)`
- `_prepare(string $sql, array $options = [])`
- `execute(...$data)`
- `_execute(array $data)`
- `_getResult()`
- `close()`
- `getQueryString()`
- `hasError()`
- `getErrorCode()`
- `getErrorMessage()`

