# system\Database\OCI8\Builder.php

- Path: `system\Database\OCI8\Builder.php`
- Type: PHP
- Size: 7011 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Builder for OCI8

Identifier escape character
@var string

ORDER BY random keyword
@var array

COUNT string
@used-by CI_DB_driver::count_all()
@used-by BaseBuilder::count_all_results()
@var string

Limit used flag
If we use LIMIT, we'll add a field that will
throw off num_fields later.
@var bool

A reference to the database connection.
@var Connection

Generates a platform-specific insert string from the supplied data.

Generates a platform-specific replace string from the supplied data

Generates a platform-specific truncate string from the supplied data
If the database does not support the truncate() command,
then this method maps to 'DELETE FROM table'

Compiles a delete string and runs the query
@param mixed $where
@throws DatabaseException
@return mixed

Generates a platform-specific delete string from the supplied data

Generates a platform-specific update string from the supplied data

Generates a platform-specific LIMIT clause.

Resets the query builder values.  Called by the get() function

## References

**Database Tables (inferred)**
- `the`
- `DUAL`
- `table`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\OCI8\Builder.php`

**Classes**:
- `CodeIgniter\Database\OCI8\Builder extends BaseBuilder`

**Functions/Methods**:
- `_insertBatch(string $table, array $keys, array $values)`
- `_replace(string $table, array $keys, array $values)`
- `_truncate(string $table)`
- `delete($where = '', ?int $limit = null, bool $resetData = true)`
- `_delete(string $table)`
- `_update(string $table, array $values)`
- `_limit(string $sql, bool $offsetIgnore = false)`
- `resetSelect()`

