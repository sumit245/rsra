# system\Debug\Timer.php

- Path: `system\Debug\Timer.php`
- Type: PHP
- Size: 3223 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class Timer
Provides a simple way to measure the amount of time
that elapses between two points.

List of all timers.
@var array

Starts a timer running.
Multiple calls can be made to this method so that several
execution points can be measured.
@param string $name The name of this timer.
@param float  $time Allows user to provide time.
@return Timer

Stops a running timer.
If the timer is not stopped before the timers() method is called,
it will be automatically stopped at that point.
@param string $name The name of this timer.
@return Timer

Returns the duration of a recorded timer.
@param string $name     The name of the timer.
@param int    $decimals Number of decimal places.
@return float|null Returns null if timer does not exist by that name.
                   Returns a float representing the number of
                   seconds elapsed while that timer was running.

Returns the array of timers, with the duration pre-calculated for you.
@param int $decimals Number of decimal places

Checks whether or not a timer with the specified name exists.

## Symbols

# Symbols

**Files documented**: 1

## `system\Debug\Timer.php`

**Classes**:
- `CodeIgniter\Debug\Timer`

**Functions/Methods**:
- `start(string $name, ?float $time = null)`
- `stop(string $name)`
- `getElapsedTime(string $name, int $decimals = 4)`
- `getTimers(int $decimals = 4)`
- `has(string $name)`

