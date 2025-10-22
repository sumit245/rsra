# system\CLI\BaseCommand.php

- Path: `system\CLI\BaseCommand.php`
- Type: PHP
- Size: 5175 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

BaseCommand is the base class used in creating CLI commands.
@property array           $arguments
@property Commands        $commands
@property string          $description
@property string          $group
@property LoggerInterface $logger
@property string          $name
@property array           $options
@property string          $usage

The group the command is lumped under
when listing commands.
@var string

The Command's name
@var string

the Command's usage description
@var string

the Command's short description
@var string

the Command's options description
@var array

the Command's Arguments description
@var array

The Logger to use for a command
@var LoggerInterface

Instance of Commands so
commands can call other commands.
@var Commands

Actually execute a command.
@param array<int|string, string|null> $params

Can be used by a command to run other commands.
@throws ReflectionException
@return mixed

A simple method to display an error with line/file, in child commands.

Show Help includes (Usage, Arguments, Description, Options).

Pads our string out so that all titles are the same length to nicely line up descriptions.
@param int $extra How many extra spaces to add at the end

Get pad for $key => $value array output
@deprecated Use setPad() instead.
@codeCoverageIgnore

Makes it simple to access our protected properties.
@return mixed

Makes it simple to check our protected properties.

## Symbols

# Symbols

**Files documented**: 1

## `system\CLI\BaseCommand.php`

**Classes**:
- `CodeIgniter\CLI\used`
- `CodeIgniter\CLI\BaseCommand`

**Functions/Methods**:
- `__construct(LoggerInterface $logger, Commands $commands)`
- `run(array $params)`
- `call(string $command, array $params = [])`
- `showError(Throwable $e)`
- `showHelp()`
- `setPad(string $item, int $max, int $extra = 2, int $indent = 0)`
- `getPad(array $array, int $pad)`
- `__get(string $key)`
- `__isset(string $key)`

