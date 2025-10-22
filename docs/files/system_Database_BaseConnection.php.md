# system\Database\BaseConnection.php

- Path: `system\Database\BaseConnection.php`
- Type: PHP
- Size: 44194 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

@property array      $aliasedTables
@property string     $charset
@property bool       $compress
@property float      $connectDuration
@property float      $connectTime
@property string     $database
@property string     $DBCollat
@property bool       $DBDebug
@property string     $DBDriver
@property string     $DBPrefix
@property string     $DSN
@property mixed      $encrypt
@property array      $failover
@property string     $hostname
@property mixed      $lastQuery
@property string     $password
@property bool       $pConnect
@property int|string $port
@property bool       $pretend
@property string     $queryClass
@property array      $reservedIdentifiers
@property bool       $strictOn
@property string     $subdriver
@property string     $swapPre
@property int        $transDepth
@property bool       $transFailure
@property bool       $transStatus

Data Source Name / Connect string
@var string

Database port
@var int|string

Hostname
@var string

Username
@var string

Password
@var string

Database name
@var string

Database driver
@var string

Sub-driver
@used-by CI_DB_pdo_driver
@var string

Table prefix
@var string

Persistent connection flag
@var bool

Debug flag
Whether to display error messages.
@var bool

Character set
@var string

Collation
@var string

Swap Prefix
@var string

Encryption flag/data
@var mixed

Compression flag
@var bool

Strict ON flag
Whether we're running in strict SQL mode.
@var bool

Settings for a failover connection.
@var array

The last query object that was executed
on this connection.
@var mixed

Connection ID
@var bool|object|resource

Result ID
@var bool|object|resource

Protect identifiers flag
@var bool

List of reserved identifiers
Identifiers that must NOT be escaped.
@var array

Identifier escape character
@var array|string

ESCAPE statement string
@var string

ESCAPE character
@var string

RegExp used to escape identifiers
@var array

Holds previously looked up data
for performance reasons.
@var array

Microtime when connection was made
@var float

How long it took to establish connection.
@var float

If true, no queries will actually be
ran against the database.
@var bool

Transaction enabled flag
@var bool

Strict transaction mode flag
@var bool

Transaction depth level
@var int

Transaction status flag
Used with transactions to determine if a rollback should occur.
@var bool

Transaction failure flag
Used with transactions to determine if a transaction has failed.
@var bool

Array of table aliases.
@var array

Query Class
@var string

Saves our connection settings.

Initializes the database connection/settings.
@throws DatabaseException
@return mixed

Connect to the database.
@return mixed

Close the database connection.

Platform dependent way method for closing the connection.
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

Set DB Prefix
Set's the DB Prefix to something new without needing to reconnect
@param string $prefix The prefix

Returns the database prefix.

The name of the platform in use (MySQLi, Postgre, SQLite3, OCI8, etc)

Returns a string containing the version of the database being used.

Sets the Table Aliases to use. These are typically
collected during use of the Builder, and set here
so queries are built correctly.
@return $this

Add a table alias to our list.
@return $this

Executes the query against the database.
@return mixed

Orchestrates a query against the database. Queries must use
Database\Statement objects to store the query and build it.
This method works with the cache.
Should automatically handle different connections for read/write
queries if needed.
@param mixed ...$binds
@return BaseResult|bool|Query BaseResult when “read” type query, bool when “write” type query, Query when prepared query
@todo BC set $queryClass default as null in 4.1

@var Query $query

Performs a basic query against the database. No binding or caching
is performed, nor are transactions handled. Simply takes a raw
query string and returns the database-specific result id.
@return mixed

Disable Transactions
This permits transactions to be disabled at run-time.

Enable/disable Transaction Strict Mode
When strict mode is enabled, if you are running multiple groups of
transactions, if one group fails all subsequent groups will be
rolled back.
If strict mode is disabled, each group is treated autonomously,
meaning a failure of one group will not affect any others
@param bool $mode = true
@return $this

Start Transaction

Complete Transaction

Lets you retrieve the transaction flag to determine if it has failed

Begin Transaction

Commit Transaction

Rollback Transaction

Begin Transaction

Commit Transaction

Rollback Transaction

Returns a non-shared new instance of the query builder for this connection.
@param array|string $tableName
@throws DatabaseException
@return BaseBuilder

Returns a new instance of the BaseBuilder class with a cleared FROM clause.

Creates a prepared statement with the database that can then
be used to execute multiple statements against. Within the
closure, you would build the query in any normal way, though
the Query Builder is the expected manner.
Example:
   $stmt = $db->prepare(function($db)
          {
            return $db->table('users')
                  ->where('id', 1)
                    ->get();
          })
@return BasePreparedQuery|null

@var BasePreparedQuery $class

Returns the last query's statement object.
@return mixed

Returns a string representation of the last query's statement object.

Returns the time we started to connect to this database in
seconds with microseconds.
Used by the Debug Toolbar's timeline.

Returns the number of seconds with microseconds that it took
to connect to the database.
Used by the Debug Toolbar's timeline.

Protect Identifiers
This function is used extensively by the Query Builder class, and by
a couple functions in this class.
It takes a column or table name (optionally with an alias) and inserts
the table prefix onto it. Some logic is necessary in order to deal with
column names that include the path. Consider a query like this:
SELECT hostname.database.table.column AS c FROM hostname.database.table
Or a query with aliasing:
SELECT m.member_id, m.member_name FROM members AS m
Since the column name can include up to four segments (host, DB, table, column)
or also have an alias prefix, we need to do a bit of work to figure this out and
insert the table prefix (if it exists) in the proper position, and escape only
the correct identifiers.
@param array|string $item
@param bool         $prefixSingle       Prefix a table name with no segments?
@param bool         $protectIdentifiers Protect table or column names?
@param bool         $fieldExists        Supplied $item contains a column name?
@return array|string
@phpstan-return ($item is array ? array : string)

Escape the SQL Identifiers
This function escapes column and table names
@param mixed $item
@return mixed

Prepends a database prefix if one exists in configuration
@throws DatabaseException

Returns the total number of rows affected by this query.

"Smart" Escape String
Escapes data based on type.
Sets boolean and null types
@param mixed $str
@return mixed

Escape String
@param string|string[] $str  Input string
@param bool            $like Whether or not the string will be used in a LIKE condition
@return string|string[]

Escape LIKE String
Calls the individual driver for platform
specific escaping for LIKE conditions
@param string|string[] $str
@return string|string[]

Platform independent string escape.
Will likely be overridden in child classes.

This function enables you to call PHP database functions that are not natively included
in CodeIgniter, in a platform independent manner.
@param array ...$params
@throws DatabaseException

Get the prefix of the function to access the DB.

Returns an array of table names
@throws DatabaseException
@return array|bool

Determine if a particular table exists

Fetch Field Names
@throws DatabaseException
@return array|false

Determine if a particular field exists

Returns an object with field data
@return stdClass[]

Returns an object with key data
@return array

Returns an object with foreign key data
@return array

Disables foreign key checks temporarily.

Enables foreign key checks temporarily.

Allows the engine to be set into a mode where queries are not
actually executed, but they are still generated, timed, etc.
This is primarily used by the prepared query functionality.
@return $this

Empties our data cache. Especially helpful during testing.
@return $this

Determines if the statement is a write-type query or not.
@param string $sql

Returns the last error code and message.
Must return an array with keys 'code' and 'message':
@return array<string, int|string|null>
@phpstan-return array{code: int|string|null, message: string|null}

Insert ID
@return int|string

Generates the SQL for listing tables in a platform-dependent manner.
@return false|string

Generates a platform-specific query string so that the column names can be fetched.
@return false|string

Platform-specific field data information.
@see    getFieldData()

Platform-specific index data.
@see    getIndexData()

Platform-specific foreign keys data.
@see    getForeignKeyData()

Accessor for properties if they exist.
@return mixed

Checker for properties existence.

## References

**Database Tables (inferred)**
- `clause`
- `hostname`
- `members`
- `breaking`
- `a`
- `which`
- `where`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\BaseConnection.php`

**Classes**:
- `CodeIgniter\Database\BaseConnection implements ConnectionInterface`
- `CodeIgniter\Database\with`

**Functions/Methods**:
- `__construct(array $params)`
- `initialize()`
- `connect(bool $persistent = false)`
- `close()`
- `_close()`
- `persistentConnect()`
- `reconnect()`
- `getConnection(?string $alias = null)`
- `setDatabase(string $databaseName)`
- `getDatabase()`
- `setPrefix(string $prefix = '')`
- `getPrefix()`
- `getPlatform()`
- `getVersion()`
- `setAliasedTables(array $aliases)`
- `addTableAlias(string $table)`
- `execute(string $sql)`
- `query(string $sql, $binds = null, bool $setEscapeFlags = true, string $queryClass = '')`
- `simpleQuery(string $sql)`
- `transOff()`
- `transStrict(bool $mode = true)`
- `transStart(bool $testMode = false)`
- `transComplete()`
- `transStatus()`
- `transBegin(bool $testMode = false)`
- `transCommit()`
- `transRollback()`
- `_transBegin()`
- `_transCommit()`
- `_transRollback()`
- `table($tableName)`
- `newQuery()`
- `prepare(Closure $func, array $options = [])`
- `getLastQuery()`
- `showLastQuery()`
- `getConnectStart()`
- `getConnectDuration(int $decimals = 6)`
- `protectIdentifiers($item, bool $prefixSingle = false, ?bool $protectIdentifiers = null, bool $fieldExists = true)`
- `escapeIdentifiers($item)`
- `prefixTable(string $table = '')`
- `affectedRows()`
- `escape($str)`
- `escapeString($str, bool $like = false)`
- `escapeLikeString($str)`
- `_escapeString(string $str)`
- `callFunction(string $functionName, ...$params)`
- `getDriverFunctionPrefix()`
- `listTables(bool $constrainByPrefix = false)`
- `tableExists(string $tableName)`
- `getFieldNames(string $table)`
- `fieldExists(string $fieldName, string $tableName)`
- `getFieldData(string $table)`
- `getIndexData(string $table)`
- `getForeignKeyData(string $table)`
- `disableForeignKeyChecks()`
- `enableForeignKeyChecks()`
- `pretend(bool $pretend = true)`
- `resetDataCache()`
- `isWriteType($sql)`
- `error()`
- `insertID()`
- `_listTables(bool $constrainByPrefix = false)`
- `_listColumns(string $table = '')`
- `_fieldData(string $table)`
- `_indexData(string $table)`
- `_foreignKeyData(string $table)`
- `__get(string $key)`
- `__isset(string $key)`

