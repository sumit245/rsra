# system\Database\OCI8\Forge.php

- Path: `system\Database\OCI8\Forge.php`
- Type: PHP
- Size: 9117 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Forge for OCI8

DROP INDEX statement
@var string

CREATE DATABASE statement
@var false

CREATE TABLE IF statement
@var false

DROP TABLE IF EXISTS statement
@var false

DROP DATABASE statement
@var false

UNSIGNED support
@var array|bool

NULL value representation in CREATE/ALTER TABLE statements
@var string

RENAME TABLE statement
@var string

DROP CONSTRAINT statement
@var string

ALTER TABLE
@param string $alterType ALTER type
@param string $table     Table name
@param mixed  $field     Column definition
@return string|string[]

Field attribute AUTO_INCREMENT
@return void

Process column

Performs a data type mapping between different databases.
@return void

Generates a platform-specific DROP TABLE string
@return bool|string

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\OCI8\Forge.php`

**Classes**:
- `CodeIgniter\Database\OCI8\Forge extends BaseForge`

**Functions/Methods**:
- `_alterTable(string $alterType, string $table, $field)`
- `_attributeAutoIncrement(array &$attributes, array &$field)`
- `_processColumn(array $field)`
- `_attributeType(array &$attributes)`
- `_dropTable(string $table, bool $ifExists, bool $cascade)`
- `_processForeignKeys(string $table)`

