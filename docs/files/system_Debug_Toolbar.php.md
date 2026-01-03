# system\Debug\Toolbar.php

- Path: `system\Debug\Toolbar.php`
- Type: PHP
- Size: 18359 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Displays a toolbar with bits of stats to aid a developer in debugging.
Inspiration: http://prophiler.fabfuel.de

Toolbar configuration settings.
@var ToolbarConfig

Collectors to be used and displayed.
@var BaseCollector[]

Returns all the data required by Debug Bar
@param float           $startTime App start time
@param IncomingRequest $request
@param Response        $response
@return string JSON encoded data

Called within the view to display the timeline itself.

Recursively renders timeline elements and their children.

Returns a sorted array of timeline data arrays from the collectors.
@param array $collectors

Arranges the already sorted timeline data into a parent => child structure.

Returns an array of data from all of the modules
that should be displayed in the 'Vars' tab.

Rounds a number to the nearest incremental value.

Prepare for debugging..
@param RequestInterface  $request
@param ResponseInterface $response
@global \CodeIgniter\CodeIgniter $app

@var IncomingRequest|null $request
@var Response|null        $response

Inject debug toolbar into the response.
@codeCoverageIgnore

Format output

## References

**Database Tables (inferred)**
- `the`
- `all`

## Symbols

# Symbols

**Files documented**: 1

## `system\Debug\Toolbar.php`

**Classes**:
- `CodeIgniter\Debug\Toolbar`

**Functions/Methods**:
- `__construct(ToolbarConfig $config)`
- `run(float $startTime, float $totalTime, RequestInterface $request, ResponseInterface $response)`
- `renderTimeline(array $collectors, float $startTime, int $segmentCount, int $segmentDuration, array &$styles)`
- `renderTimelineRecursive(array $rows, float $startTime, int $segmentCount, int $segmentDuration, array &$styles, int &$styleCount, int $level = 0, bool $isChild = false)`
- `collectTimelineData($collectors)`
- `structureTimelineData(array $elements)`
- `collectVarData()`
- `roundTo(float $number, int $increments = 5)`
- `prepare(?RequestInterface $request = null, ?ResponseInterface $response = null)`
- `respond()`
- `format(string $data, string $format = 'html')`

