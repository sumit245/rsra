# system\Database\Migration.php

- Path: `system\Database\Migration.php`
- Type: PHP
- Size: 1335 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class Migration

The name of the database group to use.
@var string

Database Connection instance
@var ConnectionInterface

Database Forge instance.
@var Forge

Constructor.
@param Forge $forge

Returns the database group name this migration uses.
@return string

Perform a migration step.

Revert a migration step.

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\Migration.php`

**Classes**:
- `CodeIgniter\Database\Migration`

**Functions/Methods**:
- `__construct(?Forge $forge = null)`
- `getDBGroup()`
- `up()`
- `down()`

