# system\Database\ModelFactory.php

- Path: `system\Database\ModelFactory.php`
- Type: PHP
- Size: 1178 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Returns new or shared Model instances
@deprecated Use CodeIgniter\Config\Factories::models()
@codeCoverageIgnore

Creates new Model instances or returns a shared instance
@return mixed

Helper method for injecting mock instances while testing.
@param object $instance

Resets the static arrays

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\ModelFactory.php`

**Classes**:
- `CodeIgniter\Database\ModelFactory`

**Functions/Methods**:
- `get(string $name, bool $getShared = true, ?ConnectionInterface $connection = null)`
- `injectMock(string $name, $instance)`
- `reset()`

