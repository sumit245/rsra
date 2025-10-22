# system\CLI\Commands.php

- Path: `system\CLI\Commands.php`
- Type: PHP
- Size: 4704 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Core functionality for running, listing, etc commands.

The found commands.
@var array

Logger instance.
@var Logger

Constructor
@param Logger|null $logger

Runs a command given

Provide access to the list of commands.
@return array

Discovers all commands in the framework and within user code,
and collects instances of them to work with.

@var FileLocator $locator

@var BaseCommand $class

Verifies if the command being sought is found
in the commands list.

Finds alternative of `$name` among collection
of commands.

## Symbols

# Symbols

**Files documented**: 1

## `system\CLI\Commands.php`

**Classes**:
- `CodeIgniter\CLI\Commands`

**Functions/Methods**:
- `__construct($logger = null)`
- `run(string $command, array $params)`
- `getCommands()`
- `discoverCommands()`
- `verifyCommand(string $command, array $commands)`
- `getCommandAlternatives(string $name, array $collection)`

