# system\Commands\Utilities\Routes\AutoRouterImproved\ControllerMethodReader.php

- Path: `system\Commands\Utilities\Routes\AutoRouterImproved\ControllerMethodReader.php`
- Type: PHP
- Size: 5857 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Reads a controller and returns a list of auto route listing.

@var string the default namespace

@param string $namespace the default namespace

Returns found route info in the controller.
@phpstan-param class-string $class
@return array<int, array<string, array|string>>
@phpstan-return list<array<string, string|array>>

@phpstan-param class-string $classname
@return string URI path part from the folder(s) and controller

Gets a route without default controller.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Commands\Utilities\Routes\AutoRouterImproved\ControllerMethodReader.php`

**Classes**:
- `CodeIgniter\Commands\Utilities\Routes\AutoRouterImproved\ControllerMethodReader`

**Functions/Methods**:
- `__construct(string $namespace, array $httpMethods)`
- `read(string $class, string $defaultController = 'Home', string $defaultMethod = 'index')`
- `getUriByClass(string $classname)`
- `getRouteWithoutController(string $classShortname,
        string $defaultController,
        string $uriByClass,
        string $classname,
        string $methodName,
        string $httpVerb)`

