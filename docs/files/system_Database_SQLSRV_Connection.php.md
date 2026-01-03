# system\Database\SQLSRV\Connection.php

- Path: `system\Database\SQLSRV\Connection.php`
- Type: PHP
- Size: 15021 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Connection for SQLSRV

Database driver
@var string

Database name
@var string

Scrollable flag
Determines what cursor type to use when executing queries.
FALSE or SQLSRV_CURSOR_FORWARD would increase performance,
but would disable num_rows() (and possibly insert_id())
@var mixed

Identifier escape character
@var string

Database schema
@var string

Quoted identifier flag
Whether to use SQL-92 standard quoted identifier
(double quotes) or brackets for identifier escaping.
@var bool

List of reserved identifiers
Identifiers that must NOT be escaped.
@var string[]

Class constructor

Connect to the database.
@throws DatabaseException
@return mixed

Keep or establish the connection if no queries have been sent for
a length of time exceeding the server's idle timeout.

Close the database connection.

Platform-dependant string escape

Insert ID

Generates the SQL for listing tables in a platform-dependent manner.

Generates a platform-specific query string so that the column names can be fetched.

Returns an array of objects with index data
@throws DatabaseException
@return stdClass[]

Returns an array of objects with Foreign key data
referenced_object_id  parent_object_id
@throws DatabaseException
@return stdClass[]

Disables foreign key checks temporarily.
@return string

Enables foreign key checks temporarily.
@return string

Returns an array of objects with field data
@throws DatabaseException
@return stdClass[]

Begin Transaction

Commit Transaction

Rollback Transaction

Returns the last error code and message.
Must return this format: ['code' => string|int, 'message' => string]
intval(code) === 0 means "no error".
@return array<string, int|string>

Returns the total number of rows affected by this query.

Select a specific database table to use.
@return mixed

Executes the query against the database.
@return mixed

Returns the last error encountered by this connection.
@return mixed
@deprecated Use `error()` instead.

The name of the platform in use (MySQLi, mssql, etc)

Returns a string containing the version of the database being used.

Determines if a query is a "write" type.
Overrides BaseConnection::isWriteType, adding additional read query types.
@param mixed $sql

## References

**Database Tables (inferred)**
- `INFORMATION_SCHEMA`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\SQLSRV\Connection.php`

**Classes**:
- `CodeIgniter\Database\SQLSRV\Connection extends BaseConnection`

**Functions/Methods**:
- `__construct(array $params)`
- `connect(bool $persistent = false)`
- `reconnect()`
- `_close()`
- `_escapeString(string $str)`
- `insertID()`
- `_listTables(bool $prefixLimit = false)`
- `_listColumns(string $table = '')`
- `_indexData(string $table)`
- `_foreignKeyData(string $table)`
- `_disableForeignKeyChecks()`
- `_enableForeignKeyChecks()`
- `_fieldData(string $table)`
- `_transBegin()`
- `_transCommit()`
- `_transRollback()`
- `error()`
- `affectedRows()`
- `setDatabase(?string $databaseName = null)`
- `execute(string $sql)`
- `getError()`
- `getPlatform()`
- `getVersion()`
- `isWriteType($sql)`

