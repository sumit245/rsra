# system\Commands\Utilities\Routes\FilterCollector.php

- Path: `system\Commands\Utilities\Routes\FilterCollector.php`
- Type: PHP
- Size: 1907 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Collects filters for a route.

Whether to reset Defined Routes.
If set to true, route filters are not found.

@param string $method HTTP method
@param string $uri    URI path to find filters for
@return array{before: list<string>, after: list<string>} array of filter alias or classname

## Symbols

# Symbols

**Files documented**: 1

## `system\Commands\Utilities\Routes\FilterCollector.php`

**Classes**:
- `CodeIgniter\Commands\Utilities\Routes\FilterCollector`

**Functions/Methods**:
- `__construct(bool $resetRoutes = false)`
- `get(string $method, string $uri)`
- `createRouter(Request $request)`
- `createFilters(Request $request)`

