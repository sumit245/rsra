# system\Router\Exceptions\RouterException.php

- Path: `system\Router\Exceptions\RouterException.php`
- Type: PHP
- Size: 1947 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

RouterException

Thrown when the actual parameter type does not match
the expected types.
@return RouterException

Thrown when a default route is not set.
@return RouterException

Throw when controller or its method is not found.
@return RouterException

Throw when route is not valid.
@return RouterException

Throw when dynamic controller.
@return RouterException

Throw when controller name has `/`.
@return RouterException

## Symbols

# Symbols

**Files documented**: 1

## `system\Router\Exceptions\RouterException.php`

**Classes**:
- `CodeIgniter\Router\Exceptions\RouterException extends FrameworkException`

**Functions/Methods**:
- `forInvalidParameterType()`
- `forMissingDefaultRoute()`
- `forControllerNotFound(string $controller, string $method)`
- `forInvalidRoute(string $route)`
- `forDynamicController(string $handler)`
- `forInvalidControllerName(string $handler)`

