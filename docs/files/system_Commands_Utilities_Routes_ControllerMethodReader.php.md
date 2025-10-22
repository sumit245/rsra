# system\Commands\Utilities\Routes\ControllerMethodReader.php

- Path: `system\Commands\Utilities\Routes\ControllerMethodReader.php`
- Type: PHP
- Size: 5091 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Reads a controller and returns a list of auto route listing.

@var string the default namespace

@param string $namespace the default namespace

@phpstan-param class-string $class
@return array<int, array{route: string, handler: string}>
@phpstan-return list<array{route: string, handler: string}>

Whether the class has a _remap() method.

@phpstan-param class-string $classname
@return string URI path part from the folder(s) and controller

Gets a route without default controller.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Commands\Utilities\Routes\ControllerMethodReader.php`

**Classes**:
- `CodeIgniter\Commands\Utilities\Routes\ControllerMethodReader`
- `CodeIgniter\Commands\Utilities\Routes\has`

**Functions/Methods**:
- `__construct(string $namespace)`
- `read(string $class, string $defaultController = 'Home', string $defaultMethod = 'index')`
- `hasRemap(ReflectionClass $class)`
- `getUriByClass(string $classname)`
- `getRouteWithoutController(string $classShortname,
        string $defaultController,
        string $uriByClass,
        string $classname,
        string $methodName)`

