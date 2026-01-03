# system\Debug\Toolbar\Collectors\BaseCollector.php

- Path: `system\Debug\Toolbar\Collectors\BaseCollector.php`
- Type: PHP
- Size: 5234 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Base Toolbar collector

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

Gets the Collector's title.

Returns any information that should be shown next to the title.

Does this collector need it's own tab?

Does this collector have a label?

Does this collector have information for the timeline?

Grabs the data for the timeline, properly formatted,
or returns an empty array.

Does this Collector have data that should be shown in the
'Vars' tab?

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

Child classes should implement this to return the timeline data
formatted for correct usage.
Timeline data should be formatted into arrays that look like:
 [
     'name'      => 'Database::Query',
     'component' => 'Database',
     'start'     => 10       // milliseconds
     'duration'  => 15       // milliseconds
 ]

Returns the data of this collector to be formatted in the toolbar
@return array|string

This makes nicer looking paths for the error output.
@deprecated Use the dedicated `clean_path()` function.

Gets the "badge" value for the button.

Does this collector have any data collected?
If not, then the toolbar button won't get shown.

Returns the HTML to display the icon. Should either
be SVG, or a base-64 encoded.
Recommended dimensions are 24px x 24px

Return settings as an array.

## Symbols

# Symbols

**Files documented**: 1

## `system\Debug\Toolbar\Collectors\BaseCollector.php`

**Classes**:
- `CodeIgniter\Debug\Toolbar\Collectors\BaseCollector`

**Functions/Methods**:
- `getTitle(bool $safe = false)`
- `getTitleDetails()`
- `hasTabContent()`
- `hasLabel()`
- `hasTimelineData()`
- `timelineData()`
- `hasVarData()`
- `getVarData()`
- `formatTimelineData()`
- `display()`
- `cleanPath(string $file)`
- `getBadgeValue()`
- `isEmpty()`
- `icon()`
- `getAsArray()`

