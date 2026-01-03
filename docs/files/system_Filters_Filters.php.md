# system\Filters\Filters.php

- Path: `system\Filters\Filters.php`
- Type: PHP
- Size: 15563 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Filters

The original config file
@var FiltersConfig

The active IncomingRequest or CLIRequest
@var RequestInterface

The active Response instance
@var ResponseInterface

Handle to the modules config.
@var Modules

Whether we've done initial processing
on the filter lists.
@var bool

The processed filters that will
be used to check against.
@var array

The collection of filters' class names that will
be used to execute in each position.
@var array

Any arguments to be passed to filters.
@var array

Any arguments to be passed to filtersClass.
@var array

Constructor.
@param FiltersConfig $config

If discoverFilters is enabled in Config then system will try to
auto-discover custom filters files in Namespaces and allow access to
the config object via the variable $filters as with the routes file
Sample :
$filters->aliases['custom-auth'] = \Acme\Blob\Filters\BlobAuth::class;

Set the response explicity.

Runs through all of the filters for the specified
uri and position.
@throws FilterException
@return mixed|RequestInterface|ResponseInterface

Runs through our list of filters provided by the configuration
object to get them ready for use, including getting uri masks
to proper regex, removing those we can from the possibilities
based on HTTP method, etc.
The resulting $this->filters is an array of only filters
that should be applied to this request.
We go ahead and process the entire tree because we'll need to
run through both a before and after and don't want to double
process the rows.
@return Filters

Restores instance to its pre-initialized state.
Most useful for testing so the service can be
re-initialized to a different path.

Returns the processed filters array.

Returns the filtersClass array.

Adds a new alias to the config file.
MUST be called prior to initialize();
Intended for use within routes files.
@return $this

Ensures that a specific filter is on and enabled for the current request.
Filters can have "arguments". This is done by placing a colon immediately
after the filter name, followed by a comma-separated list of arguments that
are passed to the filter when executed.
@return Filters
@deprecated Use enableFilters(). This method will be private.

Ensures that specific filters are on and enabled for the current request.
Filters can have "arguments". This is done by placing a colon immediately
after the filter name, followed by a comma-separated list of arguments that
are passed to the filter when executed.
@return Filters

Returns the arguments for a specified key, or all.
@return mixed

Add any applicable (not excluded) global filter settings to the mix.
@param string $uri

Add any method-specific filters to the mix.

Add any applicable configured filters to the mix.
@param string $uri

Maps filter aliases to the equivalent filter classes
@throws FilterException

Check paths for match for URI
@param string $uri   URI to test against
@param mixed  $paths The path patterns to test
@return bool True if any of the paths apply to the URI

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Filters\Filters.php`

**Classes**:
- `CodeIgniter\Filters\Filters`
- `CodeIgniter\Filters\names`
- `CodeIgniter\Filters\instanceof`
- `CodeIgniter\Filters\name`

**Functions/Methods**:
- `__construct($config, RequestInterface $request, ResponseInterface $response, ?Modules $modules = null)`
- `discoverFilters()`
- `setResponse(ResponseInterface $response)`
- `run(string $uri, string $position = 'before')`
- `initialize(?string $uri = null)`
- `reset()`
- `getFilters()`
- `getFiltersClass()`
- `addFilter(string $class, ?string $alias = null, string $when = 'before', string $section = 'globals')`
- `enableFilter(string $name, string $when = 'before')`
- `enableFilters(array $names, string $when = 'before')`
- `getArguments(?string $key = null)`
- `processGlobals(?string $uri = null)`
- `processMethods()`
- `processFilters(?string $uri = null)`
- `processAliasesToClass(string $position)`
- `pathApplies(string $uri, $paths)`

