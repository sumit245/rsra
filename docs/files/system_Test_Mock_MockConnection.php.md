# system\Test\Mock\MockConnection.php

- Path: `system\Test\Mock\MockConnection.php`
- Type: PHP
- Size: 5305 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Orchestrates a query against the database. Queries must use
Database\Statement objects to store the query and build it.
This method works with the cache.
Should automatically handle different connections for read/write
queries if needed.
@param mixed ...$binds
@return BaseResult|bool|Query
@todo BC set $queryClass default as null in 4.1

Connect to the database.
@return mixed

Keep or establish the connection if no queries have been sent for
a length of time exceeding the server's idle timeout.

Select a specific database table to use.
@return mixed

Returns a string containing the version of the database being used.

Executes the query against the database.
@return mixed

Returns the total number of rows affected by this query.

Returns the last error code and message.
Must return an array with keys 'code' and 'message':
 return ['code' => null, 'message' => null);

Insert ID

Generates the SQL for listing tables in a platform-dependent manner.

Generates a platform-specific query string so that the column names can be fetched.

Close the connection.

Begin Transaction

Commit Transaction

Rollback Transaction

## Symbols

# Symbols

**Files documented**: 1

## `system\Test\Mock\MockConnection.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockConnection extends BaseConnection`

**Functions/Methods**:
- `shouldReturn(string $method, $return)`
- `query(string $sql, $binds = null, bool $setEscapeFlags = true, string $queryClass = '')`
- `connect(bool $persistent = false)`
- `reconnect()`
- `setDatabase(string $databaseName)`
- `getVersion()`
- `execute(string $sql)`
- `affectedRows()`
- `error()`
- `insertID()`
- `_listTables(bool $constrainByPrefix = false)`
- `_listColumns(string $table = '')`
- `_fieldData(string $table)`
- `_indexData(string $table)`
- `_foreignKeyData(string $table)`
- `_close()`
- `_transBegin()`
- `_transCommit()`
- `_transRollback()`

