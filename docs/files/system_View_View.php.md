# system\View\View.php

- Path: `system\View\View.php`
- Type: PHP
- Size: 13281 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class View

Data that is made available to the Views.
@var array

Merge savedData and userData

The base directory to look in for our Views.
@var string

The render variables
@var array

Instance of FileLocator for when
we need to attempt to find a view
that's not in standard place.
@var FileLocator

Logger instance.
@var LoggerInterface

Should we store performance info?
@var bool

Cache stats about our performance here,
when CI_DEBUG = true
@var array

@var ViewConfig

Whether data should be saved between renders.
@var bool

Number of loaded views
@var int

The name of the layout being used, if any.
Set by the `extend` method used within views.
@var string|null

Holds the sections and their data.
@var array

The name of the current section being rendered,
if any.
@var string|null
@deprecated

The name of the current section being rendered,
if any.
@var array<string>

Builds the output based upon a file name and any
data that has already been set.
Valid $options:
 - cache      Number of seconds to cache for
 - cache_name Name to use for cache
@param string     $view     File name of the view source
@param array|null $options  Reserved for 3rd-party uses since
                            it might be needed to pass additional info
                            to other template engines.
@param bool|null  $saveData If true, saves data for subsequent calls,
                            if false, cleans the data after displaying,
                            if null, uses the config setting.

Builds the output based upon a string and any
data that has already been set.
Cache does not apply, because there is no "key".
@param string     $view     The view contents
@param array|null $options  Reserved for 3rd-party uses since
                            it might be needed to pass additional info
                            to other template engines.
@param bool|null  $saveData If true, saves data for subsequent calls,
                            if false, cleans the data after displaying,
                            if null, uses the config setting.

Extract first bit of a long string and add ellipsis

Sets several pieces of view data at once.
@param string $context The context to escape it for: html, css, js, url
                       If null, no escaping will happen

Sets a single piece of view data.
@param mixed       $value
@param string|null $context The context to escape it for: html, css, js, url
                            If null, no escaping will happen

Removes all of the view data from the system.

Returns the current data that will be displayed in the view.

Specifies that the current view should extend an existing layout.

Starts holds content for a section within the layout.
@param string $name Section name

Captures the last section
@throws RuntimeException

Renders a section's contents.

Used within layout views to include additional views.
@param bool $saveData

Returns the performance data that might have been collected
during the execution. Used primarily in the Debug Toolbar.

Logs performance data for rendering a view.

## References

**Database Tables (inferred)**
- `CI3`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\View\View.php`

**Classes**:
- `CodeIgniter\View\View implements RendererInterface`

**Functions/Methods**:
- `__construct(ViewConfig $config, ?string $viewPath = null, ?FileLocator $loader = null, ?bool $debug = null, ?LoggerInterface $logger = null)`
- `render(string $view, ?array $options = null, ?bool $saveData = null)`
- `renderString(string $view, ?array $options = null, ?bool $saveData = null)`
- `excerpt(string $string, int $length = 20)`
- `setData(array $data = [], ?string $context = null)`
- `setVar(string $name, $value = null, ?string $context = null)`
- `resetData()`
- `getData()`
- `extend(string $layout)`
- `section(string $name)`
- `endSection()`
- `renderSection(string $sectionName)`
- `include(string $view, ?array $options = null, $saveData = true)`
- `getPerformanceData()`
- `logPerformance(float $start, float $end, string $view)`
- `prepareTemplateData(bool $saveData)`

