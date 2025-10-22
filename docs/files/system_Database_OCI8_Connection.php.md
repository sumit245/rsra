# system\Database\OCI8\Connection.php

- Path: `system\Database\OCI8\Connection.php`
- Type: PHP
- Size: 21255 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Connection for OCI8

Database driver
@var string

Identifier escape character
@var string

List of reserved identifiers
Identifiers that must NOT be escaped.
@var array

Reset $stmtId flag
Used by storedProcedure() to prevent execute() from
re-setting the statement ID.

Statement ID
@var resource

Commit mode flag
@used-by PreparedQuery::_execute()
@var int

Cursor ID
@var resource

Latest inserted table name.
@used-by PreparedQuery::_execute()
@var string|null

confirm DNS format.

Connect to the database.
@return mixed

Keep or establish the connection if no queries have been sent for
a length of time exceeding the server's idle timeout.
@return void

Close the database connection.
@return void

Select a specific database table to use.

Returns a string containing the version of the database being used.

Executes the query against the database.
@return false|resource

Get the table name for the insert statement from sql.

Returns the total number of rows affected by this query.

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

Get cursor. Returns a cursor from the database
@return resource

Executes a stored procedure
@param string $procedureName procedure name to execute
@param array  $params        params array keys
                             KEY      OPTIONAL  NOTES
                             name     no        the name of the parameter should be in :<param_name> format
                             value    no        the value of the parameter.  If this is an OUT or IN OUT parameter,
                             this should be a reference to a variable
                             type     yes       the type of the parameter
                             length   yes       the max size of the parameter
@return bool|Query|Result

Bind parameters
@param array $params
@return void

Returns the last error code and message.
Must return an array with keys 'code' and 'message':
 return ['code' => null, 'message' => null);

Build a DSN from the provided parameters
@return void

Begin Transaction

Commit Transaction

Rollback Transaction

Returns the name of the current database being used.

Get the prefix of the function to access the DB.

## References

**Database Tables (inferred)**
- `sql`
- `ALL_TAB_COLUMNS`
- `ALL_IND_COLUMNS`
- `USER_CONSTRAINTS`
- `all_cons_columns`
- `all_constraints`
- `user_constraints`
- `the`
- `USER_TAB_COLUMNS`
- `DUAL`
- `these`
- `USER_USERS`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\OCI8\Connection.php`

**Classes**:
- `CodeIgniter\Database\OCI8\Connection extends BaseConnection implements ConnectionInterface`

**Functions/Methods**:
- `isValidDSN()`
- `connect(bool $persistent = false)`
- `reconnect()`
- `_close()`
- `setDatabase(string $databaseName)`
- `getVersion()`
- `execute(string $sql)`
- `parseInsertTableName(string $sql)`
- `affectedRows()`
- `_listTables(bool $prefixLimit = false)`
- `_listColumns(string $table = '')`
- `_fieldData(string $table)`
- `_indexData(string $table)`
- `_foreignKeyData(string $table)`
- `_disableForeignKeyChecks()`
- `_enableForeignKeyChecks()`
- `getCursor()`
- `storedProcedure(string $procedureName, array $params)`
- `bindParams($params)`
- `error()`
- `insertID()`
- `buildDSN()`
- `_transBegin()`
- `_transCommit()`
- `_transRollback()`
- `getDatabase()`
- `getDriverFunctionPrefix()`

