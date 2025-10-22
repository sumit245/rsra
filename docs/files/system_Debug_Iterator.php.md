# system\Debug\Iterator.php

- Path: `system\Debug\Iterator.php`
- Type: PHP
- Size: 2781 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Iterator for debugging.

Stores the tests that we are to run.
@var array

Stores the results of each of the tests.
@var array

Adds a test to run.
Tests are simply closures that the user can define any sequence of
things to happen during the test.
@return $this

Runs through all of the tests that have been added, recording
time to execute the desired number of iterations, and the approximate
memory usage used during those iterations.
@return string|null

Get results.

## Symbols

# Symbols

**Files documented**: 1

## `system\Debug\Iterator.php`

**Classes**:
- `CodeIgniter\Debug\Iterator`

**Functions/Methods**:
- `add(string $name, Closure $closure)`
- `run(int $iterations = 1000, bool $output = true)`
- `getReport()`

