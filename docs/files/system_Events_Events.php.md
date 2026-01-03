# system\Events\Events.php

- Path: `system\Events\Events.php`
- Type: PHP
- Size: 7215 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Events

The list of listeners.
@var array

Flag to let us know if we've read from the Config file(s)
and have all of the defined events.
@var bool

If true, events will not actually be fired.
Useful during testing.
@var bool

Stores information about the events
for display in the debug toolbar.
@var array<array<string, float|string>>

A list of found files.
@var string[]

Ensures that we have a events file ready.

@var Modules $config

Registers an action to happen on an event. The action can be any sort
of callable:
 Events::on('create', 'myFunction');               // procedural function
 Events::on('create', ['myClass', 'myMethod']);    // Class::method
 Events::on('create', [$myInstance, 'myMethod']);  // Method on an existing instance
 Events::on('create', function() {});              // Closure
@param string   $eventName
@param callable $callback
@param int      $priority

Runs through all subscribed methods running them one at a time,
until either:
 a) All subscribers have finished or
 b) a method returns false, at which point execution of subscribers stops.
@param string $eventName
@param mixed  $arguments

Returns an array of listeners for a single event. They are
sorted by priority.
@param string $eventName

Removes a single listener from an event.
If the listener couldn't be found, returns FALSE, else TRUE if
it was removed.
@param string $eventName

Removes all listeners.
If the event_name is specified, only listeners for that event will be
removed, otherwise all listeners for all events are removed.
@param string|null $eventName

Sets the path to the file that routes are read from.

Returns the files that were found/loaded during this request.
@return string[]

Turns simulation on or off. When on, events will not be triggered,
simply logged. Useful during testing when you don't actually want
the tests to run.

Getter for the performance log records.
@return array<array<string, float|string>>

## References

**Database Tables (inferred)**
- `the`
- `an`

## Symbols

# Symbols

**Files documented**: 1

## `system\Events\Events.php`

**Classes**:
- `CodeIgniter\Events\Events`

**Functions/Methods**:
- `initialize()`
- `on($eventName, $callback, $priority = self::PRIORITY_NORMAL)`
- `trigger($eventName, ...$arguments)`
- `listeners($eventName)`
- `removeListener($eventName, callable $listener)`
- `removeAllListeners($eventName = null)`
- `setFiles(array $files)`
- `getFiles()`
- `simulate(bool $choice = true)`
- `getPerformanceLogs()`

