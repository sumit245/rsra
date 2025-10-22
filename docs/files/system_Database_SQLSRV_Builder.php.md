# system\Database\SQLSRV\Builder.php

- Path: `system\Database\SQLSRV\Builder.php`
- Type: PHP
- Size: 18961 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Builder for SQLSRV
@todo auto check for TextCastToInt
@todo auto check for InsertIndexValue
@todo replace: delete index entries before insert

ORDER BY random keyword
@var array

Quoted identifier flag
Whether to use SQL-92 standard quoted identifier
(double quotes) or brackets for identifier escaping.
@var bool

Handle increment/decrement on text
@var bool

Handle IDENTITY_INSERT property/
@var bool

Groups tables in FROM clauses if needed, so there is no confusion
about operator precedence.

Generates a platform-specific truncate string from the supplied data
If the database does not support the truncate() command,
then this method maps to 'DELETE FROM table'

Generates the JOIN portion of the query
@param RawSql|string $cond
@return $this

Generates a platform-specific insert string from the supplied data
@todo implement check for this instead static $insertKeyPermission

Insert batch statement
Generates a platform-specific insert string from the supplied data.

Generates a platform-specific update string from the supplied data

Update_Batch statement
Generates a platform-specific batch update string from the supplied data

Increments a numeric column by the specified value.
@return bool

Decrements a numeric column by the specified value.
@return bool

Get full name of the table

Add permision statements for index value inserts

Local implementation of limit

Compiles a replace into string and runs the query
@throws DatabaseException
@return mixed

Generates a platform-specific replace string from the supplied data
on match delete and insert

SELECT [MAX|MIN|AVG|SUM|COUNT]()
Handle float return value
@return BaseBuilder

"Count All" query
Generates a platform-specific query string that counts all records in
the particular table
@param bool $reset Are we want to clear query builder values?
@return int|string when $test = true

Delete statement

Compiles a delete string and runs the query
@param mixed $where
@throws DatabaseException
@return mixed

Compile the SELECT statement
Generates a query string based on which functions were used.
@param bool $selectOverride

Compiles the select statement based on the other functions called
and runs the query
@return ResultInterface

## References

**Database Tables (inferred)**
- `clauses`
- `as`
- `the`
- `table`
- `portion`
- `statement`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\SQLSRV\Builder.php`

**Classes**:
- `CodeIgniter\Database\SQLSRV\Builder extends BaseBuilder`

**Functions/Methods**:
- `_fromTables()`
- `_truncate(string $table)`
- `join(string $table, $cond, string $type = '', ?bool $escape = null)`
- `_insert(string $table, array $keys, array $unescapedKeys)`
- `_insertBatch(string $table, array $keys, array $values)`
- `_update(string $table, array $values)`
- `_updateBatch(string $table, array $values, string $index)`
- `increment(string $column, int $value = 1)`
- `decrement(string $column, int $value = 1)`
- `getFullName(string $table)`
- `addIdentity(string $fullTable, string $insert)`
- `_limit(string $sql, bool $offsetIgnore = false)`
- `replace(?array $set = null)`
- `_replace(string $table, array $keys, array $values)`
- `maxMinAvgSum(string $select = '', string $alias = '', string $type = 'MAX')`
- `countAll(bool $reset = true)`
- `_delete(string $table)`
- `delete($where = '', ?int $limit = null, bool $resetData = true)`
- `compileSelect($selectOverride = false)`
- `get(?int $limit = null, int $offset = 0, bool $reset = true)`

