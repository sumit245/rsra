# system\Debug\Toolbar\Collectors\Views.php

- Path: `system\Debug\Toolbar\Collectors\Views.php`
- Type: PHP
- Size: 3481 bytes

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

Whether this collector needs to display
a label or not.
@var bool

Whether this collector has data that
should be shown in the Vars tab.
@var bool

The 'title' of this Collector.
Used to name things in the toolbar HTML.
@var string

Instance of the Renderer service
@var RendererInterface

Views counter
@var array

Constructor.

Child classes should implement this to return the timeline data
formatted for correct usage.

Gets a collection of data that should be shown in the 'Vars' tab.
The format is an array of sections, each with their own array
of key/value pairs:
 $data = [
     'section 1' => [
         'foo' => 'bar,
         'bar' => 'baz'
     ],
     'section 2' => [
         'foo' => 'bar,
         'bar' => 'baz'
     ],
 ];

Returns a count of all views.

Display the icon.
Icon from https://icons8.com - 1em package

## References

**Database Tables (inferred)**
- `https`

## Symbols

# Symbols

**Files documented**: 1

## `system\Debug\Toolbar\Collectors\Views.php`

**Classes**:
- `CodeIgniter\Debug\Toolbar\Collectors\Views extends BaseCollector`

**Functions/Methods**:
- `__construct()`
- `formatTimelineData()`
- `getVarData()`
- `getBadgeValue()`
- `icon()`

