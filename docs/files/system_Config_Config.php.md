# system\Config\Config.php

- Path: `system\Config\Config.php`
- Type: PHP
- Size: 1139 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

@deprecated Use CodeIgniter\Config\Factories::config()

Create new configuration instances or return
a shared instance
@param string $name      Configuration name
@param bool   $getShared Use shared instance
@return mixed|null

Helper method for injecting mock instances while testing.
@param object $instance

Resets the static arrays

## Symbols

# Symbols

**Files documented**: 1

## `system\Config\Config.php`

**Classes**:
- `CodeIgniter\Config\Config`

**Functions/Methods**:
- `get(string $name, bool $getShared = true)`
- `injectMock(string $name, $instance)`
- `reset()`

