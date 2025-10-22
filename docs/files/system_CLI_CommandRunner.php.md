# system\CLI\CommandRunner.php

- Path: `system\CLI\CommandRunner.php`
- Type: PHP
- Size: 1507 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Command runner

Instance of class managing the collection of commands
@var Commands

Constructor

We map all un-routed CLI methods through this function
so we have the chance to look for a Command first.
@param string $method
@param array  $params
@throws ReflectionException
@return mixed

Default command.
@throws ReflectionException
@return mixed

Allows access to the current commands that have been found.

## Symbols

# Symbols

**Files documented**: 1

## `system\CLI\CommandRunner.php`

**Classes**:
- `CodeIgniter\CLI\CommandRunner extends Controller`
- `CodeIgniter\CLI\managing`

**Functions/Methods**:
- `__construct()`
- `_remap($method, $params)`
- `index(array $params)`
- `getCommands()`

