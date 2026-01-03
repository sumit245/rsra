# system\Database\MySQLi\Forge.php

- Path: `system\Database\MySQLi\Forge.php`
- Type: PHP
- Size: 6501 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Forge for MySQLi

CREATE DATABASE statement
@var string

CREATE DATABASE IF statement
@var string

DROP CONSTRAINT statement
@var string

CREATE TABLE keys flag
Whether table keys are created from within the
CREATE TABLE statement.
@var bool

UNSIGNED support
@var array

Table Options list which required to be quoted
@var array

NULL value representation in CREATE/ALTER TABLE statements
@var string
@internal

CREATE TABLE attributes
@param array $attributes Associative array of table attributes

ALTER TABLE
@param string $alterType ALTER type
@param string $table     Table name
@param mixed  $field     Column definition
@return string|string[]

Process column

Process indexes
@param string $table (ignored)

Drop Key
@return bool

## References

**Database Tables (inferred)**
- `within`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\MySQLi\Forge.php`

**Classes**:
- `CodeIgniter\Database\MySQLi\Forge extends BaseForge`

**Functions/Methods**:
- `_createTableAttributes(array $attributes)`
- `_alterTable(string $alterType, string $table, $field)`
- `_processColumn(array $field)`
- `_processIndexes(string $table)`
- `dropKey(string $table, string $keyName)`

