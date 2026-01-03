# system\Database\Postgre\Builder.php

- Path: `system\Database\Postgre\Builder.php`
- Type: PHP
- Size: 8938 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Builder for Postgre

ORDER BY random keyword
@var array

Specifies which sql statements
support the ignore option.
@var array

Checks if the ignore option is supported by
the Database Driver for the specific statement.
@return string

ORDER BY
@param string $direction ASC, DESC or RANDOM
@return BaseBuilder

Increments a numeric column by the specified value.
@throws DatabaseException
@return mixed

Decrements a numeric column by the specified value.
@throws DatabaseException
@return mixed

Compiles an replace into string and runs the query.
Because PostgreSQL doesn't support the replace into command,
we simply do a DELETE and an INSERT on the first key/value
combo, assuming that it's either the primary key or a unique key.
@param array|null $set An associative array of insert values
@throws DatabaseException
@return mixed

Generates a platform-specific insert string from the supplied data

Generates a platform-specific insert string from the supplied data.

Compiles a delete string and runs the query
@param mixed $where
@throws DatabaseException
@return mixed

Generates a platform-specific LIMIT clause.

Generates a platform-specific update string from the supplied data
@throws DatabaseException

Generates a platform-specific batch update string from the supplied data

Generates a platform-specific delete string from the supplied data

Generates a platform-specific truncate string from the supplied data
If the database does not support the truncate() command,
then this method maps to 'DELETE FROM table'

Platform independent LIKE statement builder.
In PostgreSQL, the ILIKE operator will perform case insensitive
searches according to the current locale.
@see https://www.postgresql.org/docs/9.2/static/functions-matching.html

Generates the JOIN portion of the query
@param RawSql|string $cond
@return BaseBuilder

## References

**Database Tables (inferred)**
- `the`
- `table`
- `portion`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\Postgre\Builder.php`

**Classes**:
- `CodeIgniter\Database\Postgre\Builder extends BaseBuilder`

**Functions/Methods**:
- `compileIgnore(string $statement)`
- `orderBy(string $orderBy, string $direction = '', ?bool $escape = null)`
- `increment(string $column, int $value = 1)`
- `decrement(string $column, int $value = 1)`
- `replace(?array $set = null)`
- `_insert(string $table, array $keys, array $unescapedKeys)`
- `_insertBatch(string $table, array $keys, array $values)`
- `delete($where = '', ?int $limit = null, bool $resetData = true)`
- `_limit(string $sql, bool $offsetIgnore = false)`
- `_update(string $table, array $values)`
- `_updateBatch(string $table, array $values, string $index)`
- `_delete(string $table)`
- `_truncate(string $table)`
- `_like_statement(?string $prefix, string $column, ?string $not, string $bind, bool $insensitiveSearch = false)`
- `join(string $table, $cond, string $type = '', ?bool $escape = null)`

