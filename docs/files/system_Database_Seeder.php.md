# system\Database\Seeder.php

- Path: `system\Database\Seeder.php`
- Type: PHP
- Size: 4202 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class Seeder

The name of the database group to use.
@var string

Where we can find the Seed files.
@var string

An instance of the main Database configuration
@var Database

Database Connection instance
@var BaseConnection

Database Forge instance.
@var Forge

If true, will not display CLI messages.
@var bool

Faker Generator instance.
@deprecated

Seeder constructor.

Gets the Faker Generator instance.
@deprecated

Loads the specified seeder and runs it.
@throws InvalidArgumentException

@var Seeder $seeder

Sets the location of the directory that seed files can be located in.
@return $this

Sets the silent treatment.
@return $this

Run the database seeds. This is where the magic happens.
Child classes must implement this method and take care
of inserting their data here.
@return mixed
@codeCoverageIgnore

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\Seeder.php`

**Classes**:
- `CodeIgniter\Database\Seeder`
- `CodeIgniter\Database\has`

**Functions/Methods**:
- `__construct(Database $config, ?BaseConnection $db = null)`
- `faker()`
- `call(string $class)`
- `setPath(string $path)`
- `setSilent(bool $silent)`
- `run()`

