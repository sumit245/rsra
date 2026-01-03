# system\Database\Forge.php

- Path: `system\Database\Forge.php`
- Type: PHP
- Size: 30727 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

The Forge class transforms migrations to executable
SQL statements.

The active database connection.
@var BaseConnection

List of fields.
@var array

List of keys.
@var array

List of unique keys.
@var array

List of primary keys.
@var array

List of foreign keys.
@var array

Character set used.
@var string

CREATE DATABASE statement
@var false|string

CREATE DATABASE IF statement
@var string

CHECK DATABASE EXIST statement
@var string

DROP DATABASE statement
@var false|string

CREATE TABLE statement
@var string

CREATE TABLE IF statement
@var bool|string

CREATE TABLE keys flag
Whether table keys are created from within the
CREATE TABLE statement.
@var bool

DROP TABLE IF EXISTS statement
@var bool|string

RENAME TABLE statement
@var false|string

UNSIGNED support
@var array|bool

NULL value representation in CREATE/ALTER TABLE statements
@var string
@internal Used for marking nullable fields. Not covered by BC promise.

DEFAULT value representation in CREATE/ALTER TABLE statements
@var false|string

DROP CONSTRAINT statement
@var string

DROP INDEX statement
@var string

Constructor.

Provides access to the forge's current database connection.
@return ConnectionInterface

Create database
@param bool $ifNotExists Whether to add IF NOT EXISTS condition
@throws DatabaseException

Determine if a database exists
@throws DatabaseException

Drop database
@throws DatabaseException

Add Key
@param array|string $key
@return Forge

Add Primary Key
@param array|string $key
@return Forge

Add Unique Key
@param array|string $key
@return Forge

Add Field
@param array|string $field
@return Forge

Add Foreign Key
@param string|string[] $fieldName
@param string|string[] $tableField
@throws DatabaseException
@return Forge

Drop Key
@throws DatabaseException
@return bool

@throws DatabaseException
@return BaseResult|bool|false|mixed|Query

@throws DatabaseException
@return mixed

@return bool|string

@throws DatabaseException
@return mixed

Generates a platform-specific DROP TABLE string
@return bool|string

@throws DatabaseException
@return mixed

@param array|string $field
@throws DatabaseException

@param array|string $columnName
@throws DatabaseException
@return mixed

@param array|string $field
@throws DatabaseException

@param mixed $fields
@return false|string|string[]

Process fields

Process column

Performs a data type mapping between different databases.

Depending on the unsigned property value:
   - TRUE will always set $field['unsigned'] to 'UNSIGNED'
   - FALSE will always set $field['unsigned'] to ''
   - array(TYPE) will set $field['unsigned'] to 'UNSIGNED',
       if $attributes['TYPE'] is found in the array
   - array(TYPE => UTYPE) will change $field['type'],
       from TYPE to UTYPE in case of a match

Resets table creation vars

## References

**Database Tables (inferred)**
- `within`
- `TYPE`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\Forge.php`

**Classes**:
- `CodeIgniter\Database\transforms`
- `CodeIgniter\Database\Forge`

**Functions/Methods**:
- `__construct(BaseConnection $db)`
- `getConnection()`
- `createDatabase(string $dbName, bool $ifNotExists = false)`
- `databaseExists(string $dbName)`
- `dropDatabase(string $dbName)`
- `addKey($key, bool $primary = false, bool $unique = false)`
- `addPrimaryKey($key)`
- `addUniqueKey($key)`
- `addField($field)`
- `addForeignKey($fieldName = '', string $tableName = '', $tableField = '', string $onUpdate = '', string $onDelete = '')`
- `dropKey(string $table, string $keyName)`
- `dropForeignKey(string $table, string $foreignName)`
- `createTable(string $table, bool $ifNotExists = false, array $attributes = [])`
- `_createTable(string $table, bool $ifNotExists, array $attributes)`
- `_createTableAttributes(array $attributes)`
- `dropTable(string $tableName, bool $ifExists = false, bool $cascade = false)`
- `_dropTable(string $table, bool $ifExists, bool $cascade)`
- `renameTable(string $tableName, string $newTableName)`
- `addColumn(string $table, $field)`
- `dropColumn(string $table, $columnName)`
- `modifyColumn(string $table, $field)`
- `_alterTable(string $alterType, string $table, $fields)`
- `_processFields(bool $createTable = false)`
- `_processColumn(array $field)`
- `_attributeType(array &$attributes)`
- `_attributeUnsigned(array &$attributes, array &$field)`
- `_attributeDefault(array &$attributes, array &$field)`
- `_attributeUnique(array &$attributes, array &$field)`
- `_attributeAutoIncrement(array &$attributes, array &$field)`
- `_processPrimaryKeys(string $table)`
- `_processIndexes(string $table)`
- `_processForeignKeys(string $table)`
- `reset()`

