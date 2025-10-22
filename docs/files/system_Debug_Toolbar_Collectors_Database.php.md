# system\Debug\Toolbar\Collectors\Database.php

- Path: `system\Debug\Toolbar\Collectors\Database.php`
- Type: PHP
- Size: 7688 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Collector for the Database tab of the Debug Toolbar.

Whether this collector has timeline data.
@var bool

Whether this collector should display its own tab.
@var bool

Whether this collector has data for the Vars tab.
@var bool

The name used to reference this collector in the toolbar.
@var string

Array of database connections.
@var array

The query instances that have been collected
through the DBQuery Event.
@var array

Constructor

The static method used during Events to collect
data.
@internal param $ array \CodeIgniter\Database\Query

Returns timeline data formatted for the toolbar.
@return array The formatted data or an empty array.

Returns the data of this collector to be formatted in the toolbar

Gets the "badge" value for the button.

Information to be displayed next to the title.
@return string The number of queries (in parentheses) or an empty string.

Does this collector have any data collected?

Display the icon.
Icon from https://icons8.com - 1em package

Gets the connections from the database config

## References

**Database Tables (inferred)**
- `the`
- `https`

## Symbols

# Symbols

**Files documented**: 1

## `system\Debug\Toolbar\Collectors\Database.php`

**Classes**:
- `CodeIgniter\Debug\Toolbar\Collectors\Database extends BaseCollector`

**Functions/Methods**:
- `__construct()`
- `collect(Query $query)`
- `formatTimelineData()`
- `display()`
- `getBadgeValue()`
- `getTitleDetails()`
- `isEmpty()`
- `icon()`
- `getConnections()`

