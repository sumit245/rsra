# system\Database\SQLite3\Connection.php

- Path: `system\Database\SQLite3\Connection.php`
- Type: PHP
- Size: 10780 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Connection for SQLite3

Database driver
@var string

Identifier escape character
@var string

@var bool Enable Foreign Key constraint or not

Connect to the database.
@throws DatabaseException
@return mixed

Keep or establish the connection if no queries have been sent for
a length of time exceeding the server's idle timeout.

Close the database connection.

Select a specific database table to use.

Returns a string containing the version of the database being used.

Execute the query
@return mixed \SQLite3Result object or bool

Returns the total number of rows affected by this query.

Platform-dependant string escape

Generates the SQL for listing tables in a platform-dependent manner.

Generates a platform-specific query string so that the column names can be fetched.

@throws DatabaseException
@return array|false

Returns an array of objects with field data
@throws DatabaseException
@return stdClass[]

Returns an array of objects with index data
@throws DatabaseException
@return stdClass[]

Returns an array of objects with Foreign key data
@return stdClass[]

Returns platform-specific SQL to disable foreign key checks.
@return string

Returns platform-specific SQL to enable foreign key checks.
@return string

Returns the last error code and message.
Must return this format: ['code' => string|int, 'message' => string]
intval(code) === 0 means "no error".
@return array<string, int|string>

Insert ID

Begin Transaction

Commit Transaction

Rollback Transaction

Checks to see if the current install supports Foreign Keys
and has them enabled.

## References

**Database Tables (inferred)**
- `where`
- `sqlite_master`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\SQLite3\Connection.php`

**Classes**:
- `CodeIgniter\Database\SQLite3\Connection extends BaseConnection`

**Functions/Methods**:
- `initialize()`
- `connect(bool $persistent = false)`
- `reconnect()`
- `_close()`
- `setDatabase(string $databaseName)`
- `getVersion()`
- `execute(string $sql)`
- `affectedRows()`
- `_escapeString(string $str)`
- `_listTables(bool $prefixLimit = false)`
- `_listColumns(string $table = '')`
- `getFieldNames(string $table)`
- `_fieldData(string $table)`
- `_indexData(string $table)`
- `_foreignKeyData(string $table)`
- `_disableForeignKeyChecks()`
- `_enableForeignKeyChecks()`
- `error()`
- `insertID()`
- `_transBegin()`
- `_transCommit()`
- `_transRollback()`
- `supportsForeignKeys()`

