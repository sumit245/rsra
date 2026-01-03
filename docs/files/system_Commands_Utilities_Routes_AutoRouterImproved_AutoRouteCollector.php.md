# system\Commands\Utilities\Routes\AutoRouterImproved\AutoRouteCollector.php

- Path: `system\Commands\Utilities\Routes\AutoRouterImproved\AutoRouteCollector.php`
- Type: PHP
- Size: 4120 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Collects data for Auto Routing Improved.

@var string namespace to search

List of controllers in Defined Routes that should not be accessed via Auto-Routing.
@var class-string[]

@param string $namespace namespace to search

@return array<int, array<int, string>>
@phpstan-return list<list<string>>

## Symbols

# Symbols

**Files documented**: 1

## `system\Commands\Utilities\Routes\AutoRouterImproved\AutoRouteCollector.php`

**Classes**:
- `CodeIgniter\Commands\Utilities\Routes\AutoRouterImproved\AutoRouteCollector`

**Functions/Methods**:
- `__construct(string $namespace,
        string $defaultController,
        string $defaultMethod,
        array $httpMethods,
        array $protectedControllers)`
- `get()`
- `addFilters($routes)`
- `generateSampleUri(array $route, bool $longest = true)`

