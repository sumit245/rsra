# system\Test\Constraints\SeeInDatabase.php

- Path: `system\Test\Constraints\SeeInDatabase.php`
- Type: PHP
- Size: 2901 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

The number of results that will show in the database
in case of failure.
@var int

@var ConnectionInterface

Data used to compare results against.
@var array

SeeInDatabase constructor.

Check if data is found in the table
@param mixed $table

Get the description of the failure
@param mixed $table

Gets additional records similar to $data.

Gets a string representation of the constraint
@param int $options

## Symbols

# Symbols

**Files documented**: 1

## `system\Test\Constraints\SeeInDatabase.php`

**Classes**:
- `CodeIgniter\Test\Constraints\SeeInDatabase extends Constraint`

**Functions/Methods**:
- `__construct(ConnectionInterface $db, array $data)`
- `matches($table)`
- `failureDescription($table)`
- `getAdditionalInfo(string $table)`
- `toString($options = 0)`

