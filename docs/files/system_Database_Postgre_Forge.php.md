# system\Database\Postgre\Forge.php

- Path: `system\Database\Postgre\Forge.php`
- Type: PHP
- Size: 5376 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Forge for Postgre

CHECK DATABASE EXIST statement
@var string

DROP CONSTRAINT statement
@var string

DROP INDEX statement
@var string

UNSIGNED support
@var array

NULL value representation in CREATE/ALTER TABLE statements
@var string
@internal

CREATE TABLE attributes
@param array $attributes Associative array of table attributes

@param mixed $field
@return array|bool|string

Process column

Performs a data type mapping between different databases.

Field attribute AUTO_INCREMENT

Generates a platform-specific DROP TABLE string

## References

**Database Tables (inferred)**
- `pg_database`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\Postgre\Forge.php`

**Classes**:
- `CodeIgniter\Database\Postgre\Forge extends BaseForge`

**Functions/Methods**:
- `_createTableAttributes(array $attributes)`
- `_alterTable(string $alterType, string $table, $field)`
- `_processColumn(array $field)`
- `_attributeType(array &$attributes)`
- `_attributeAutoIncrement(array &$attributes, array &$field)`
- `_dropTable(string $table, bool $ifExists, bool $cascade)`

