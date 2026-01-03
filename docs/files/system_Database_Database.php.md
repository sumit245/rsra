# system\Database\Database.php

- Path: `system\Database\Database.php`
- Type: PHP
- Size: 3847 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Database Connection Factory
Creates and returns an instance of the appropriate DatabaseConnection

Maintains an array of the instances of all connections that have
been created.
Helps to keep track of all open connections for performance
monitoring, logging, etc.
@var array

Parses the connection binds and returns an instance of the driver
ready to go.
@throws InvalidArgumentException
@return mixed

Creates a Forge instance for the current database type.

Creates a Utils instance for the current database type.

Parse universal DSN string
@throws InvalidArgumentException

Initialize database driver.
@param array|object $argument

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\Database.php`

**Classes**:
- `CodeIgniter\Database\Database`

**Functions/Methods**:
- `load(array $params = [], string $alias = '')`
- `loadForge(ConnectionInterface $db)`
- `loadUtils(ConnectionInterface $db)`
- `parseDSN(array $params)`
- `initDriver(string $driver, string $class, $argument)`

