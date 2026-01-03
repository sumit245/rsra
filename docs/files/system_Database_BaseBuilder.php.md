# system\Database\BaseBuilder.php

- Path: `system\Database\BaseBuilder.php`
- Type: PHP
- Size: 80538 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class BaseBuilder
Provides the core Query Builder methods.
Database-specific Builders might need to override
certain methods to make them work.

Reset DELETE data flag
@var bool

QB SELECT data
@var array

QB DISTINCT flag
@var bool

QB FROM data
@var array

QB JOIN data
@var array

QB WHERE data
@var array

QB GROUP BY data
@var array

QB HAVING data
@var array

QB keys
@var array

QB LIMIT data
@var bool|int

QB OFFSET data
@var bool|int

QB ORDER BY data
@var array|string|null

QB UNION data
@var array<string>

QB NO ESCAPE data
@var array

QB data sets
@var array

QB WHERE group started flag
@var bool

QB WHERE group count
@var int

Ignore data that cause certain
exceptions, for example in case of
duplicate keys.
@var bool

A reference to the database connection.
@var BaseConnection

Name of the primary table for this instance.
Tracked separately because $QBFrom gets escaped
and prefixed.
When $tableName to the constructor has multiple tables,
the value is empty string.
@var string

ORDER BY random keyword
@var array

COUNT string
@used-by CI_DB_driver::count_all()
@used-by BaseBuilder::count_all_results()
@var string

Collects the named parameters and
their values for later binding
in the Query object.
@var array

Collects the key count for named parameters
in the Query object.
@var array

Some databases, like SQLite, do not by default
allow limiting of delete clauses.
@var bool

Some databases do not by default
allow limit update queries with WHERE.
@var bool

Specifies which sql statements
support the ignore option.
@var array

Builder testing mode status.
@var bool

Tables relation types
@var array

Strings that determine if a string represents a literal value or a field name
@var string[]

RegExp used to get operators
@var string[]

Constructor
@param array|string $tableName tablename or tablenames with or without aliases
Examples of $tableName: `mytable`, `jobs j`, `jobs j, users u`, `['jobs j','users u']`
@throws DatabaseException

@var BaseConnection $db

Returns the current database connection
@return BaseConnection|ConnectionInterface

Sets a test mode status.
@return $this

Gets the name of the primary table.

Returns an array of bind values and their
named parameters for binding in the Query object later.

Ignore
Set ignore Flag for next insert,
update or delete query.
@return $this

Generates the SELECT portion of the query
@param array|RawSql|string $select
@return $this

Generates a SELECT MAX(field) portion of a query
@return $this

Generates a SELECT MIN(field) portion of a query
@return $this

Generates a SELECT AVG(field) portion of a query
@return $this

Generates a SELECT SUM(field) portion of a query
@return $this

Generates a SELECT COUNT(field) portion of a query
@return $this

Adds a subquery to the selection

SELECT [MAX|MIN|AVG|SUM|COUNT]()
@used-by selectMax()
@used-by selectMin()
@used-by selectAvg()
@used-by selectSum()
@throws DatabaseException
@throws DataException
@return $this

Determines the alias name based on the table

Sets a flag which tells the query string compiler to add DISTINCT
@return $this

Generates the FROM portion of the query
@param array|string $from
@return $this

@param BaseBuilder $from  Expected subquery
@param string      $alias Subquery alias
@return $this

Generates the JOIN portion of the query
@param RawSql|string $cond
@return $this

Generates the WHERE portion of the query.
Separates multiple calls with 'AND'.
@param array|RawSql|string $key
@param mixed               $value
@return $this

OR WHERE
Generates the WHERE portion of the query.
Separates multiple calls with 'OR'.
@param array|RawSql|string $key
@param mixed               $value
@param bool                $escape
@return $this

@used-by where()
@used-by orWhere()
@used-by having()
@used-by orHaving()
@param array|RawSql|string $key
@param mixed               $value
@return $this

Generates a WHERE field IN('item', 'item') SQL query,
joined with 'AND' if appropriate.
@param array|BaseBuilder|Closure|string $values The values searched on, or anonymous function with subquery
@return $this

Generates a WHERE field IN('item', 'item') SQL query,
joined with 'OR' if appropriate.
@param array|BaseBuilder|Closure|string $values The values searched on, or anonymous function with subquery
@return $this

Generates a WHERE field NOT IN('item', 'item') SQL query,
joined with 'AND' if appropriate.
@param array|BaseBuilder|Closure|string $values The values searched on, or anonymous function with subquery
@return $this

Generates a WHERE field NOT IN('item', 'item') SQL query,
joined with 'OR' if appropriate.
@param array|BaseBuilder|Closure|string $values The values searched on, or anonymous function with subquery
@return $this

Generates a HAVING field IN('item', 'item') SQL query,
joined with 'AND' if appropriate.
@param array|BaseBuilder|Closure|string $values The values searched on, or anonymous function with subquery
@return $this

Generates a HAVING field IN('item', 'item') SQL query,
joined with 'OR' if appropriate.
@param array|BaseBuilder|Closure|string $values The values searched on, or anonymous function with subquery
@return $this

Generates a HAVING field NOT IN('item', 'item') SQL query,
joined with 'AND' if appropriate.
@param array|BaseBuilder|Closure|string $values The values searched on, or anonymous function with subquery
@return $this

Generates a HAVING field NOT IN('item', 'item') SQL query,
joined with 'OR' if appropriate.
@param array|BaseBuilder|Closure|string $values The values searched on, or anonymous function with subquery
@return $this

@used-by WhereIn()
@used-by orWhereIn()
@used-by whereNotIn()
@used-by orWhereNotIn()
@param array|BaseBuilder|Closure|null $values The values searched on, or anonymous function with subquery
@throws InvalidArgumentException
@return $this

Generates a %LIKE% portion of the query.
Separates multiple calls with 'AND'.
@param array|RawSql|string $field
@return $this

Generates a NOT LIKE portion of the query.
Separates multiple calls with 'AND'.
@param array|RawSql|string $field
@return $this

Generates a %LIKE% portion of the query.
Separates multiple calls with 'OR'.
@param array|RawSql|string $field
@return $this

Generates a NOT LIKE portion of the query.
Separates multiple calls with 'OR'.
@param array|RawSql|string $field
@return $this

Generates a %LIKE% portion of the query.
Separates multiple calls with 'AND'.
@param array|RawSql|string $field
@return $this

Generates a NOT LIKE portion of the query.
Separates multiple calls with 'AND'.
@param array|RawSql|string $field
@return $this

Generates a %LIKE% portion of the query.
Separates multiple calls with 'OR'.
@param array|RawSql|string $field
@return $this

Generates a NOT LIKE portion of the query.
Separates multiple calls with 'OR'.
@param array|RawSql|string $field
@return $this

@used-by like()
@used-by orLike()
@used-by notLike()
@used-by orNotLike()
@used-by havingLike()
@used-by orHavingLike()
@used-by notHavingLike()
@used-by orNotHavingLike()
@param array|RawSql|string $field
@return $this

Platform independent LIKE statement builder.

Add UNION statement
@param BaseBuilder|Closure $union
@return $this

Add UNION ALL statement
@param BaseBuilder|Closure $union
@return $this

@used-by union()
@used-by unionAll()
@param BaseBuilder|Closure $union
@return $this

Starts a query group.
@return $this

Starts a query group, but ORs the group
@return $this

Starts a query group, but NOTs the group
@return $this

Starts a query group, but OR NOTs the group
@return $this

Ends a query group
@return $this

Starts a query group for HAVING clause.
@return $this

Starts a query group for HAVING clause, but ORs the group.
@return $this

Starts a query group for HAVING clause, but NOTs the group.
@return $this

Starts a query group for HAVING clause, but OR NOTs the group.
@return $this

Ends a query group for HAVING clause.
@return $this

Prepate a query group start.
@return $this

Prepate a query group end.
@return $this

@used-by groupStart()
@used-by _like()
@used-by whereHaving()
@used-by _whereIn()
@used-by havingGroupStart()

@param array|string $by
@return $this

Separates multiple calls with 'AND'.
@param array|RawSql|string $key
@param mixed               $value
@return $this

Separates multiple calls with 'OR'.
@param array|RawSql|string $key
@param mixed               $value
@return $this

@param string $direction ASC, DESC or RANDOM
@return $this

@return $this

Sets the OFFSET value
@return $this

Generates a platform-specific LIMIT clause.

Allows key/value pairs to be set for insert(), update() or replace().
@param array|object|string $key    Field name, or an array of field/value pairs
@param mixed               $value  Field value, if $key is a single field
@param bool|null           $escape Whether to escape values
@return $this

Returns the previously set() data, alternatively resetting it if needed.

Compiles a SELECT query string and returns the sql.

Returns a finalized, compiled query string with the bindings
inserted and prefixes swapped out.

Compiles the select statement based on the other functions called
and runs the query
@return false|ResultInterface

Generates a platform-specific query string that counts all records in
the particular table
@return int|string

Generates a platform-specific query string that counts all records
returned by an Query Builder query.
@return int|string

Compiles the set conditions and returns the sql statement
@return array

Allows the where clause, limit and offset to be added directly
@param array|string $where
@return ResultInterface

Compiles batch insert strings and runs the queries
@throws DatabaseException
@return false|int|string[] Number of rows inserted or FALSE on failure, SQL array when testMode

Generates a platform-specific insert string from the supplied data.

Allows key/value pairs to be set for batch inserts
@param mixed $key
@return $this|null

Compiles an insert query and returns the sql
@throws DatabaseException
@return bool|string

Compiles an insert string and runs the query
@throws DatabaseException
@return bool|Query

This method is used by both insert() and getCompiledInsert() to
validate that the there data is actually being set and that table
has been chosen to be inserted into.
@throws DatabaseException

Generates a platform-specific insert string from the supplied data

Compiles an replace into string and runs the query
@throws DatabaseException
@return BaseResult|false|Query|string

Generates a platform-specific replace string from the supplied data

Groups tables in FROM clauses if needed, so there is no confusion
about operator precedence.
Note: This is only used (and overridden) by MySQL and SQLSRV.

Compiles an update query and returns the sql
@return bool|string

Compiles an update string and runs the query.
@param mixed $where
@throws DatabaseException

Generates a platform-specific update string from the supplied data

This method is used by both update() and getCompiledUpdate() to
validate that data is actually being set and that a table has been
chosen to be update.
@throws DatabaseException

Compiles an update string and runs the query
@throws DatabaseException
@return false|int|string[] Number of rows affected or FALSE on failure, SQL array when testMode

Generates a platform-specific batch update string from the supplied data

Allows key/value pairs to be set for batch updating
@param array|object $key
@throws DatabaseException
@return $this|null

Compiles a delete string and runs "DELETE FROM table"
@return bool|string TRUE on success, FALSE on failure, string on testMode

Compiles a truncate string and runs the query
If the database does not support the truncate() command
This function maps to "DELETE FROM table"
@return bool|string TRUE on success, FALSE on failure, string on testMode

Generates a platform-specific truncate string from the supplied data
If the database does not support the truncate() command,
then this method maps to 'DELETE FROM table'

Compiles a delete query string and returns the sql

Compiles a delete string and runs the query
@param mixed $where
@throws DatabaseException
@return bool|string

Increments a numeric column by the specified value.
@return bool

Decrements a numeric column by the specified value.
@return bool

Generates a platform-specific delete string from the supplied data

Used to track SQL statements written with aliased tables.
@param array|string $table The table to inspect
@return string|void

Compile the SELECT statement
Generates a query string based on which functions were used.
Should not be called directly.
@param mixed $selectOverride

Checks if the ignore option is supported by
the Database Driver for the specific statement.
@return string

Escapes identifiers in WHERE and HAVING statements at execution time.
Required so that aliases are tracked properly, regardless of whether
where(), orWhere(), having(), orHaving are called prior to from(),
join() and prefixTable is added only if needed.
@param string $qbKey 'QBWhere' or 'QBHaving'
@return string SQL statement

Escapes identifiers in GROUP BY statements at execution time.
Required so that aliases are tracked properly, regardless of whether
groupBy() is called prior to from(), join() and prefixTable is added
only if needed.

Escapes identifiers in ORDER BY statements at execution time.
Required so that aliases are tracked properly, regardless of whether
orderBy() is called prior to from(), join() and prefixTable is added
only if needed.

Takes an object as input and converts the class variables to array key/vals
@param object $object
@return array

Takes an object as input and converts the class variables to array key/vals
@param object $object
@return array

Determines if a string represents a literal value or a field name

Publicly-visible method to reset the QB values.
@return $this

Resets the query builder values.  Called by the get() function
@param array $qbResetItems An array of fields to reset

Resets the query builder values.  Called by the get() function

Resets the query builder "write" values.
Called by the insert() update() insertBatch() updateBatch() and delete() functions

Tests whether the string has an SQL operator

Returns the SQL string operator
@return mixed

Stores a bind value after ensuring that it's unique.
While it might be nicer to have named keys for our binds array
with PHP 7+ we get a huge memory/performance gain with indexed
arrays instead, so lets take advantage of that here.
@param mixed $value

Returns a clone of a Base Builder with reset query builder values.
@return $this
@deprecated

@param mixed $value

@param BaseBuilder|Closure $builder
@param bool                $wrapped Wrap the subquery in brackets
@param string              $alias   Subquery alias

## References

**Database Tables (inferred)**
- `data`
- `gets`
- `table`
- `portion`
- `as`
- `Expected`
- `statement`
- `the`
- `clauses`
- `part`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\BaseBuilder.php`

**Classes**:
- `CodeIgniter\Database\BaseBuilder`
- `CodeIgniter\Database\variables`
- `CodeIgniter\Database\variables`

**Functions/Methods**:
- `__construct($tableName, ConnectionInterface $db, ?array $options = null)`
- `db()`
- `testMode(bool $mode = true)`
- `getTable()`
- `getBinds()`
- `ignore(bool $ignore = true)`
- `select($select = '*', ?bool $escape = null)`
- `selectMax(string $select = '', string $alias = '')`
- `selectMin(string $select = '', string $alias = '')`
- `selectAvg(string $select = '', string $alias = '')`
- `selectSum(string $select = '', string $alias = '')`
- `selectCount(string $select = '', string $alias = '')`
- `selectSubquery(BaseBuilder $subquery, string $as)`
- `maxMinAvgSum(string $select = '', string $alias = '', string $type = 'MAX')`
- `createAliasFromTable(string $item)`
- `distinct(bool $val = true)`
- `from($from, bool $overwrite = false)`
- `fromSubquery(BaseBuilder $from, string $alias)`
- `join(string $table, $cond, string $type = '', ?bool $escape = null)`
- `where($key, $value = null, ?bool $escape = null)`
- `orWhere($key, $value = null, ?bool $escape = null)`
- `whereHaving(string $qbKey, $key, $value = null, string $type = 'AND ', ?bool $escape = null)`
- `whereIn(?string $key = null, $values = null, ?bool $escape = null)`
- `orWhereIn(?string $key = null, $values = null, ?bool $escape = null)`
- `whereNotIn(?string $key = null, $values = null, ?bool $escape = null)`
- `orWhereNotIn(?string $key = null, $values = null, ?bool $escape = null)`
- `havingIn(?string $key = null, $values = null, ?bool $escape = null)`
- `orHavingIn(?string $key = null, $values = null, ?bool $escape = null)`
- `havingNotIn(?string $key = null, $values = null, ?bool $escape = null)`
- `orHavingNotIn(?string $key = null, $values = null, ?bool $escape = null)`
- `_whereIn(?string $key = null, $values = null, bool $not = false, string $type = 'AND ', ?bool $escape = null, string $clause = 'QBWhere')`
- `like($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)`
- `notLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)`
- `orLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)`
- `orNotLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)`
- `havingLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)`
- `notHavingLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)`
- `orHavingLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)`
- `orNotHavingLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)`
- `_like($field, string $match = '', string $type = 'AND ', string $side = 'both', string $not = '', ?bool $escape = null, bool $insensitiveSearch = false, string $clause = 'QBWhere')`
- `_like_statement(?string $prefix, string $column, ?string $not, string $bind, bool $insensitiveSearch = false)`
- `union($union)`
- `unionAll($union)`
- `addUnionStatement($union, bool $all = false)`
- `groupStart()`
- `orGroupStart()`
- `notGroupStart()`
- `orNotGroupStart()`
- `groupEnd()`
- `havingGroupStart()`
- `orHavingGroupStart()`
- `notHavingGroupStart()`
- `orNotHavingGroupStart()`
- `havingGroupEnd()`
- `groupStartPrepare(string $not = '', string $type = 'AND ', string $clause = 'QBWhere')`
- `groupEndPrepare(string $clause = 'QBWhere')`
- `groupGetType(string $type)`
- `groupBy($by, ?bool $escape = null)`
- `having($key, $value = null, ?bool $escape = null)`
- `orHaving($key, $value = null, ?bool $escape = null)`
- `orderBy(string $orderBy, string $direction = '', ?bool $escape = null)`
- `limit(?int $value = null, ?int $offset = 0)`
- `offset(int $offset)`
- `_limit(string $sql, bool $offsetIgnore = false)`
- `set($key, $value = '', ?bool $escape = null)`
- `getSetData(bool $clean = false)`
- `getCompiledSelect(bool $reset = true)`
- `compileFinalQuery(string $sql)`
- `get(?int $limit = null, int $offset = 0, bool $reset = true)`
- `countAll(bool $reset = true)`
- `countAllResults(bool $reset = true)`
- `getCompiledQBWhere()`
- `getWhere($where = null, ?int $limit = null, ?int $offset = 0, bool $reset = true)`
- `insertBatch(?array $set = null, ?bool $escape = null, int $batchSize = 100)`
- `_insertBatch(string $table, array $keys, array $values)`
- `setInsertBatch($key, string $value = '', ?bool $escape = null)`
- `getCompiledInsert(bool $reset = true)`
- `insert(?array $set = null, ?bool $escape = null)`
- `validateInsert()`
- `_insert(string $table, array $keys, array $unescapedKeys)`
- `replace(?array $set = null)`
- `_replace(string $table, array $keys, array $values)`
- `_fromTables()`
- `getCompiledUpdate(bool $reset = true)`
- `update(?array $set = null, $where = null, ?int $limit = null)`
- `_update(string $table, array $values)`
- `validateUpdate()`
- `updateBatch(?array $set = null, ?string $index = null, int $batchSize = 100)`
- `_updateBatch(string $table, array $values, string $index)`
- `setUpdateBatch($key, string $index = '', ?bool $escape = null)`
- `emptyTable()`
- `truncate()`
- `_truncate(string $table)`
- `getCompiledDelete(bool $reset = true)`
- `delete($where = '', ?int $limit = null, bool $resetData = true)`
- `increment(string $column, int $value = 1)`
- `decrement(string $column, int $value = 1)`
- `_delete(string $table)`
- `trackAliases($table)`
- `compileSelect($selectOverride = false)`
- `compileIgnore(string $statement)`
- `compileWhereHaving(string $qbKey)`
- `compileGroupBy()`
- `compileOrderBy()`
- `unionInjection(string $sql)`
- `objectToArray($object)`
- `batchObjectToArray($object)`
- `isLiteral(string $str)`
- `resetQuery()`
- `resetRun(array $qbResetItems)`
- `resetSelect()`
- `resetWrite()`
- `hasOperator(string $str)`
- `getOperator(string $str, bool $list = false)`
- `setBind(string $key, $value = null, bool $escape = true)`
- `cleanClone()`
- `isSubquery($value)`
- `buildSubquery($builder, bool $wrapped = false, string $alias = '')`

