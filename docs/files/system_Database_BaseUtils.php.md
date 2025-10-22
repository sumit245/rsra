# system\Database\BaseUtils.php

- Path: `system\Database\BaseUtils.php`
- Type: PHP
- Size: 8249 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class BaseUtils

Database object
@var object

List databases statement
@var bool|string

OPTIMIZE TABLE statement
@var bool|string

REPAIR TABLE statement
@var bool|string

Class constructor

List databases
@throws DatabaseException
@return array|bool

Determine if a particular database exists

Optimize Table
@throws DatabaseException
@return bool

Optimize Database
@throws DatabaseException
@return mixed

Repair Table
@throws DatabaseException
@return mixed

Generate CSV from a query result object
@return string

Generate XML data from a query result object

Database Backup
@param array|string $params
@throws DatabaseException
@return mixed

Platform dependent version of the backup function.
@return mixed

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\BaseUtils.php`

**Classes**:
- `CodeIgniter\Database\BaseUtils`

**Functions/Methods**:
- `__construct(ConnectionInterface $db)`
- `listDatabases()`
- `databaseExists(string $databaseName)`
- `optimizeTable(string $tableName)`
- `optimizeDatabase()`
- `repairTable(string $tableName)`
- `getCSVFromResult(ResultInterface $query, string $delim = ',', string $newline = "\n", string $enclosure = '"')`
- `getXMLFromResult(ResultInterface $query, array $params = [])`
- `backup($params = [])`
- `_backup(?array $prefs = null)`

