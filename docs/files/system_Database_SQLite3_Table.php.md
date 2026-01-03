# system\Database\SQLite3\Table.php

- Path: `system\Database\SQLite3\Table.php`
- Type: PHP
- Size: 9041 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class Table
Provides missing features for altering tables that are common
in other supported databases, but are missing from SQLite.
These are needed in order to support migrations during testing
when another database is used as the primary engine, but
SQLite in memory databases are used for faster test execution.

All of the fields this table represents.
@var array
@phpstan-var array<string, array<string, bool|int|string|null>>

All of the unique/primary keys in the table.
@var array

All of the foreign keys in the table.
@var array

The name of the table we're working with.
@var string

The name of the table, with database prefix
@var string

Database connection.
@var Connection

Handle to our forge.
@var Forge

Table constructor.

Reads an existing database table and
collects all of the information needed to
recreate this table.
@return Table

Called after `fromTable` and any actions, like `dropColumn`, etc,
to finalize the action. It creates a temp table, creates the new
table with modifications, and copies the data over to the new table.
Resets the connection dataCache to be sure changes are collected.

Drops columns from the table.
@param array|string $columns
@return Table

Modifies a field, including changing data type,
renaming, etc.
@return Table

Drops a foreign key from this table so that
it won't be recreated in the future.
@return Table

Creates the new table based on our current fields.
@return mixed

Copies data from our old table to the new one,
taking care map data correctly based on any columns
that have been renamed.

Converts fields retrieved from the database to
the format needed for creating fields with Forge.
@param array|bool $fields
@return mixed
@phpstan-return ($fields is array ? array : mixed)

Converts keys retrieved from the database to
the format needed to create later.
@param mixed $keys
@return mixed

Attempts to drop all indexes and constraints
from the database for this table.

## References

**Database Tables (inferred)**
- `SQLite`
- `the`
- `this`
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\SQLite3\Table.php`

**Classes**:
- `CodeIgniter\Database\SQLite3\Table`

**Functions/Methods**:
- `__construct(Connection $db, Forge $forge)`
- `fromTable(string $table)`
- `run()`
- `dropColumn($columns)`
- `modifyColumn(array $field)`
- `dropForeignKey(string $column)`
- `createTable()`
- `copyData()`
- `formatFields($fields)`
- `formatKeys($keys)`
- `dropIndexes()`

