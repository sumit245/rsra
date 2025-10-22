# system\Database\Config.php

- Path: `system\Database\Config.php`
- Type: PHP
- Size: 3628 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class Config

Cache for instance of any connections that
have been requested as a "shared" instance.
@var array

The main instance used to manage all of
our open database connections.
@var Database|null

Creates the default
@param array|string $group     The name of the connection group to use, or an array of configuration settings.
@param bool         $getShared Whether to return a shared instance of the connection.
@return BaseConnection

Returns an array of all db connections currently made.

Loads and returns an instance of the Forge for the specified
database group, and loads the group if it hasn't been loaded yet.
@param array|ConnectionInterface|string|null $group
@return Forge

Returns a new instance of the Database Utilities class.
@param array|string|null $group
@return BaseUtils

Returns a new instance of the Database Seeder.
@return Seeder

Ensures the database Connection Manager/Factory is loaded and ready to use.

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\Config.php`

**Classes**:
- `CodeIgniter\Database\Config extends BaseConfig`

**Functions/Methods**:
- `connect($group = null, bool $getShared = true)`
- `getConnections()`
- `forge($group = null)`
- `utils($group = null)`
- `seeder(?string $group = null)`
- `ensureFactory()`

