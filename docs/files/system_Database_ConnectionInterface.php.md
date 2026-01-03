# system\Database\ConnectionInterface.php

- Path: `system\Database\ConnectionInterface.php`
- Type: PHP
- Size: 3885 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Interface ConnectionInterface

Initializes the database connection/settings.
@return mixed

Connect to the database.
@return mixed

Create a persistent database connection.
@return mixed

Keep or establish the connection if no queries have been sent for
a length of time exceeding the server's idle timeout.
@return mixed

Returns the actual connection object. If both a 'read' and 'write'
connection has been specified, you can pass either term in to
get that connection. If you pass either alias in and only a single
connection is present, it must return the sole connection.
@return mixed

Select a specific database table to use.
@return mixed

Returns the name of the current database being used.

Returns the last error encountered by this connection.
Must return this format: ['code' => string|int, 'message' => string]
intval(code) === 0 means "no error".
@return array<string, int|string>

The name of the platform in use (MySQLi, mssql, etc)

Returns a string containing the version of the database being used.

Orchestrates a query against the database. Queries must use
Database\Statement objects to store the query and build it.
This method works with the cache.
Should automatically handle different connections for read/write
queries if needed.
@param mixed ...$binds
@return BaseResult|bool|Query

Performs a basic query against the database. No binding or caching
is performed, nor are transactions handled. Simply takes a raw
query string and returns the database-specific result id.
@return mixed

Returns an instance of the query builder for this connection.
@param array|string $tableName Table name.
@return BaseBuilder Builder.

Returns the last query's statement object.
@return mixed

"Smart" Escaping
Escapes data based on type.
Sets boolean and null types.
@param mixed $str
@return mixed

Allows for custom calls to the database engine that are not
supported through our database layer.
@param array ...$params
@return mixed

Determines if the statement is a write-type query or not.
@param string $sql

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\ConnectionInterface.php`

**Functions/Methods**:
- `initialize()`
- `connect(bool $persistent = false)`
- `persistentConnect()`
- `reconnect()`
- `getConnection(?string $alias = null)`
- `setDatabase(string $databaseName)`
- `getDatabase()`
- `error()`
- `getPlatform()`
- `getVersion()`
- `query(string $sql, $binds = null)`
- `simpleQuery(string $sql)`
- `table($tableName)`
- `getLastQuery()`
- `escape($str)`
- `callFunction(string $functionName, ...$params)`
- `isWriteType($sql)`

