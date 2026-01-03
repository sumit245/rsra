# system\Database\SQLite3\Builder.php

- Path: `system\Database\SQLite3\Builder.php`
- Type: PHP
- Size: 1626 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Builder for SQLite3

Default installs of SQLite typically do not
support limiting delete clauses.
@var bool

Default installs of SQLite do no support
limiting update queries in combo with WHERE.
@var bool

ORDER BY random keyword
@var array

@var array

Replace statement
Generates a platform-specific replace string from the supplied data

Generates a platform-specific truncate string from the supplied data
If the database does not support the TRUNCATE statement,
then this method maps to 'DELETE FROM table'

## References

**Database Tables (inferred)**
- `the`
- `table`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\SQLite3\Builder.php`

**Classes**:
- `CodeIgniter\Database\SQLite3\Builder extends BaseBuilder`

**Functions/Methods**:
- `_replace(string $table, array $keys, array $values)`
- `_truncate(string $table)`

