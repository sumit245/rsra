# system\Router\RouterInterface.php

- Path: `system\Router\RouterInterface.php`
- Type: PHP
- Size: 1732 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Expected behavior of a Router.

Stores a reference to the RouteCollection object.

Finds the controller method corresponding to the URI.
@param string $uri
@return Closure|string Controller classname or Closure

Returns the name of the matched controller.
@return Closure|string Controller classname or Closure

Returns the name of the method in the controller to run.
@return string

Returns the binds that have been matched and collected
during the parsing process as an array, ready to send to
instance->method(...$params).
@return array

Sets the value that should be used to match the index.php file. Defaults
to index.php but this allows you to modify it in case you are using
something like mod_rewrite to remove the page. This allows you to set
it a blank.
@param string $page
@return RouterInterface

## Symbols

# Symbols

**Files documented**: 1

## `system\Router\RouterInterface.php`

**Functions/Methods**:
- `__construct(RouteCollectionInterface $routes, ?Request $request = null)`
- `handle(?string $uri = null)`
- `controllerName()`
- `methodName()`
- `params()`
- `setIndexPage($page)`

