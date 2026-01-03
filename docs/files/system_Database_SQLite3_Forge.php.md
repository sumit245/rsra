# system\Database\SQLite3\Forge.php

- Path: `system\Database\SQLite3\Forge.php`
- Type: PHP
- Size: 6973 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Forge for SQLite3

DROP INDEX statement
@var string

@var Connection

UNSIGNED support
@var array|bool

NULL value representation in CREATE/ALTER TABLE statements
@var string
@internal

Constructor.

Create database
@param bool $ifNotExists Whether to add IF NOT EXISTS condition

Drop database
@throws DatabaseException

@param mixed $field
@return array|string|null

Process column

Process indexes

Field attribute TYPE
Performs a data type mapping between different databases.

Field attribute AUTO_INCREMENT

Foreign Key Drop
@throws DatabaseException

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\SQLite3\Forge.php`

**Classes**:
- `CodeIgniter\Database\SQLite3\Forge extends BaseForge`

**Functions/Methods**:
- `__construct(BaseConnection $db)`
- `createDatabase(string $dbName, bool $ifNotExists = false)`
- `dropDatabase(string $dbName)`
- `_alterTable(string $alterType, string $table, $field)`
- `_processColumn(array $field)`
- `_processIndexes(string $table)`
- `_attributeType(array &$attributes)`
- `_attributeAutoIncrement(array &$attributes, array &$field)`
- `dropForeignKey(string $table, string $foreignName)`

