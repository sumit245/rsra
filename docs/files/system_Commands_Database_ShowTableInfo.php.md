# system\Commands\Database\ShowTableInfo.php

- Path: `system\Commands\Database\ShowTableInfo.php`
- Type: PHP
- Size: 7595 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Get table data if it exists in the database.

The group the command is lumped under
when listing commands.
@var string

The Command's name
@var string

the Command's short description
@var string

the Command's usage
@var string

The Command's arguments
@var array<string, string>

The Command's options
@var array<string, string>

@phpstan-var  list<list<string|int>> Table Data.

@var bool Sort the table rows in DESC order or not.

## Symbols

# Symbols

**Files documented**: 1

## `system\Commands\Database\ShowTableInfo.php`

**Classes**:
- `CodeIgniter\Commands\Database\ShowTableInfo extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`
- `removeDBPrefix()`
- `restoreDBPrefix()`
- `showDataOfTable(string $tableName, int $limitRows, int $limitFieldValue)`
- `showAllTables(array $tables)`
- `makeTbodyForShowAllTables(array $tables)`
- `makeTableRows(string $tableName,
        int $limitRows,
        int $limitFieldValue,
        ?string $sortField = null)`
- `showFieldMetaData(string $tableName)`
- `setYesOrNo(bool $fieldValue)`

