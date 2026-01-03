# system\Database\MySQLi\Connection.php

- Path: `system\Database\MySQLi\Connection.php`
- Type: PHP
- Size: 17890 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Connection for MySQLi

Database driver
@var string

DELETE hack flag
Whether to use the MySQL "delete hack" which allows the number
of affected rows to be shown. Uses a preg_replace when enabled,
adding a bit more processing to all queries.
@var bool

Identifier escape character
@var string

MySQLi object
Has to be preserved without being assigned to $conn_id.
@var MySQLi

MySQLi constant
For unbuffered queries use `MYSQLI_USE_RESULT`.
Default mode for buffered queries uses `MYSQLI_STORE_RESULT`.
@var int

Connect to the database.
@throws DatabaseException
@return mixed

Keep or establish the connection if no queries have been sent for
a length of time exceeding the server's idle timeout.

Close the database connection.

Select a specific database table to use.

Returns a string containing the version of the database being used.

Executes the query against the database.
@return mixed

Prep the query. If needed, each database adapter can prep the query string

Returns the total number of rows affected by this query.

Platform-dependant string escape

Escape Like String Direct
There are a few instances where MySQLi queries cannot take the
additional "ESCAPE x" parameter for specifying the escape character
in "LIKE" strings, and this handles those directly with a backslash.
@param string|string[] $str Input string
@return string|string[]

Generates the SQL for listing tables in a platform-dependent manner.
Uses escapeLikeStringDirect().

Generates a platform-specific query string so that the column names can be fetched.

Returns an array of objects with field data
@throws DatabaseException
@return stdClass[]

Returns an array of objects with index data
@throws DatabaseException
@throws LogicException
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

Insert ID

Begin Transaction

Commit Transaction

Rollback Transaction

## References

**Database Tables (inferred)**
- `errors`
- `TABLE`
- `information_schema`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\MySQLi\Connection.php`

**Classes**:
- `CodeIgniter\Database\MySQLi\Connection extends BaseConnection`

**Functions/Methods**:
- `connect(bool $persistent = false)`
- `reconnect()`
- `_close()`
- `setDatabase(string $databaseName)`
- `getVersion()`
- `execute(string $sql)`
- `prepQuery(string $sql)`
- `affectedRows()`
- `_escapeString(string $str)`
- `escapeLikeStringDirect($str)`
- `_listTables(bool $prefixLimit = false)`
- `_listColumns(string $table = '')`
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

