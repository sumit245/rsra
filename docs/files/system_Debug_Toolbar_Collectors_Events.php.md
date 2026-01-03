# system\Debug\Toolbar\Collectors\Events.php

- Path: `system\Debug\Toolbar\Collectors\Events.php`
- Type: PHP
- Size: 3660 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Views collector

Whether this collector has data that can
be displayed in the Timeline.
@var bool

Whether this collector needs to display
content in a tab or not.
@var bool

Whether this collector has data that
should be shown in the Vars tab.
@var bool

The 'title' of this Collector.
Used to name things in the toolbar HTML.
@var string

Instance of the Renderer service
@var RendererInterface

Constructor.

Child classes should implement this to return the timeline data
formatted for correct usage.

Returns the data of this collector to be formatted in the toolbar

Gets the "badge" value for the button.

Display the icon.
Icon from https://icons8.com - 1em package

## References

**Database Tables (inferred)**
- `https`

## Symbols

# Symbols

**Files documented**: 1

## `system\Debug\Toolbar\Collectors\Events.php`

**Classes**:
- `CodeIgniter\Debug\Toolbar\Collectors\Events extends BaseCollector`

**Functions/Methods**:
- `__construct()`
- `formatTimelineData()`
- `display()`
- `getBadgeValue()`
- `icon()`

