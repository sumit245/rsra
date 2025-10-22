# system\Database\SQLSRV\Forge.php

- Path: `system\Database\SQLSRV\Forge.php`
- Type: PHP
- Size: 12847 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Forge for SQLSRV

DROP CONSTRAINT statement
@var string

DROP INDEX statement
@var string

CREATE DATABASE IF statement
@todo missing charset, collat & check for existent
@var string

CREATE DATABASE IF statement
@todo missing charset & collat
@var string

CHECK DATABASE EXIST statement
@var string

RENAME TABLE statement
While the below statement would work, it returns an error.
Also MS recommends dropping and dropping and re-creating the table.
@see https://docs.microsoft.com/en-us/sql/relational-databases/system-stored-procedures/sp-rename-transact-sql?view=sql-server-2017
'EXEC sp_rename %s , %s ;'
@var string

UNSIGNED support
@var array

CREATE TABLE IF statement
@var string

CREATE TABLE statement
@var string

CREATE TABLE attributes

@param mixed $field
@return false|string|string[]

Drop index for table
@return mixed

Process indexes
@return array|string

Process column

Process foreign keys
@param string $table Table name

Process primary keys

Performs a data type mapping between different databases.

Field attribute AUTO_INCREMENT

Generates a platform-specific DROP TABLE string
@todo Support for cascade

## References

**Database Tables (inferred)**
- `sys`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\SQLSRV\Forge.php`

**Classes**:
- `CodeIgniter\Database\SQLSRV\Forge extends BaseForge`

**Functions/Methods**:
- `__construct(BaseConnection $db)`
- `_createTableAttributes(array $attributes)`
- `_alterTable(string $alterType, string $table, $field)`
- `_dropIndex(string $table, object $indexData)`
- `_processIndexes(string $table)`
- `_processColumn(array $field)`
- `_processForeignKeys(string $table)`
- `_processPrimaryKeys(string $table)`
- `_attributeType(array &$attributes)`
- `_attributeAutoIncrement(array &$attributes, array &$field)`
- `_dropTable(string $table, bool $ifExists, bool $cascade)`

