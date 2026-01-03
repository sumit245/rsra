# system\Database\Postgre\Connection.php

- Path: `system\Database\Postgre\Connection.php`
- Type: PHP
- Size: 14226 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Connection for Postgre

Database driver
@var string

Database schema
@var string

Identifier escape character
@var string

Connect to the database.
@return mixed

Keep or establish the connection if no queries have been sent for
a length of time exceeding the server's idle timeout.

Close the database connection.

Select a specific database table to use.

Returns a string containing the version of the database being used.

Executes the query against the database.
@return mixed

Get the prefix of the function to access the DB.

Returns the total number of rows affected by this query.

"Smart" Escape String
Escapes data based on type
@param mixed $str
@return mixed

Platform-dependant string escape

Generates the SQL for listing tables in a platform-dependent manner.

Generates a platform-specific query string so that the column names can be fetched.

Returns an array of objects with field data
@throws DatabaseException
@return stdClass[]

Returns an array of objects with index data
@throws DatabaseException
@return stdClass[]

Returns an array of objects with Foreign key data
@throws DatabaseException
@return stdClass[]

Returns platform-specific SQL to disable foreign key checks.
@return string

Returns platform-specific SQL to enable foreign key checks.
@return string

Returns the last error code and message.
Must return this format: ['code' => string|int, 'message' => string]
intval(code) === 0 means "no error".
@return array<string, int|string>

@return int|string

Build a DSN from the provided parameters

Set client encoding

Begin Transaction

Commit Transaction

Rollback Transaction

Determines if a query is a "write" type.
Overrides BaseConnection::isWriteType, adding additional read query types.
@param mixed $sql

## References

**Database Tables (inferred)**
- `information_schema`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\Postgre\Connection.php`

**Classes**:
- `CodeIgniter\Database\Postgre\Connection extends BaseConnection`

**Functions/Methods**:
- `connect(bool $persistent = false)`
- `reconnect()`
- `_close()`
- `setDatabase(string $databaseName)`
- `getVersion()`
- `execute(string $sql)`
- `getDriverFunctionPrefix()`
- `affectedRows()`
- `escape($str)`
- `_escapeString(string $str)`
- `_listTables(bool $prefixLimit = false)`
- `_listColumns(string $table = '')`
- `_fieldData(string $table)`
- `_indexData(string $table)`
- `_foreignKeyData(string $table)`
- `_disableForeignKeyChecks()`
- `_enableForeignKeyChecks()`
- `error()`
- `insertID()`
- `buildDSN()`
- `setClientEncoding(string $charset)`
- `_transBegin()`
- `_transCommit()`
- `_transRollback()`
- `isWriteType($sql)`

