# system\Commands\Utilities\Environment.php

- Path: `system\Commands\Utilities\Environment.php`
- Type: PHP
- Size: 4301 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Command to display the current environment,
or set a new one in the `.env` file.

The group the command is lumped under
when listing commands.
@var string

The Command's name
@var string

The Command's short description
@var string

The Command's usage
@var string

The Command's arguments
@var array<string, string>

The Command's options
@var array

Allowed values for environment. `testing` is excluded
since spark won't work on it.
@var array<int, string>

{@inheritDoc}

@see https://regex101.com/r/4sSORp/1 for the regex in action

## Symbols

# Symbols

**Files documented**: 1

## `system\Commands\Utilities\Environment.php`

**Classes**:
- `CodeIgniter\Commands\Utilities\Environment extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`
- `writeNewEnvironmentToEnvFile(string $newEnv)`

