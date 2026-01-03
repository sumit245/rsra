# system\Debug\Toolbar\Collectors\History.php

- Path: `system\Debug\Toolbar\Collectors\History.php`
- Type: PHP
- Size: 4451 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

History collector

Whether this collector has data that can
be displayed in the Timeline.
@var bool

Whether this collector needs to display
content in a tab or not.
@var bool

Whether this collector needs to display
a label or not.
@var bool

The 'title' of this Collector.
Used to name things in the toolbar HTML.
@var string

@var array History files

Specify time limit & file count for debug history.
@param string $current Current history time
@param int    $limit   Max history files

Returns the data of this collector to be formatted in the toolbar

Displays the number of included files as a badge in the tab button.

Return true if there are no history files.

Display the icon.
Icon from https://icons8.com - 1em package

## References

**Database Tables (inferred)**
- `https`

## Symbols

# Symbols

**Files documented**: 1

## `system\Debug\Toolbar\Collectors\History.php`

**Classes**:
- `CodeIgniter\Debug\Toolbar\Collectors\History extends BaseCollector`

**Functions/Methods**:
- `setFiles(string $current, int $limit = 20)`
- `display()`
- `getBadgeValue()`
- `isEmpty()`
- `icon()`

