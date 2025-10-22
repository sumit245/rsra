# system\Test\FilterTestTrait.php

- Path: `system\Test\FilterTestTrait.php`
- Type: PHP
- Size: 7809 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Filter Test Trait
Provides functionality for testing
filters and their route associations.
@mixin CIUnitTestCase

Have the one-time classes been instantiated?
@var bool

The active IncomingRequest or CLIRequest
@var RequestInterface

The active Response instance
@var ResponseInterface

The Filters configuration to use.
Extracted for access to aliases
during Filters::discoverFilters().
@var FiltersConfig|null

The prepared Filters library.
@var Filters|null

The default App and discovered
routes to check for filters.
@var RouteCollection|null

Initializes dependencies once.

Returns a callable method for a filter position
using the local HTTP instances.
@param FilterInterface|string $filter   The filter instance, class, or alias
@param string                 $position "before" or "after"

Gets an array of filter aliases enabled
for the given route at position.
@param string $route    The route to test
@param string $position "before" or "after"
@return string[] The filter aliases

Asserts that the given route at position uses
the filter (by its alias).
@param string $route    The route to test
@param string $position "before" or "after"
@param string $alias    Alias for the anticipated filter

Asserts that the given route at position does not
use the filter (by its alias).
@param string $route    The route to test
@param string $position "before" or "after"
@param string $alias    Alias for the anticipated filter

Asserts that the given route at position has
at least one filter set.
@param string $route    The route to test
@param string $position "before" or "after"

Asserts that the given route at position has
no filters set.
@param string $route    The route to test
@param string $position "before" or "after"

## References

**Database Tables (inferred)**
- `outside`
- `Config`

## Symbols

# Symbols

**Files documented**: 1

## `system\Test\FilterTestTrait.php`

**Functions/Methods**:
- `setUpFilterTestTrait()`
- `getFilterCaller($filter, string $position)`
- `getFiltersForRoute(string $route, string $position)`
- `assertFilter(string $route, string $position, string $alias)`
- `assertNotFilter(string $route, string $position, string $alias)`
- `assertHasFilters(string $route, string $position)`
- `assertNotHasFilters(string $route, string $position)`

