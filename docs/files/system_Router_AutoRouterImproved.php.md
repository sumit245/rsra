# system\Router\AutoRouterImproved.php

- Path: `system\Router\AutoRouterImproved.php`
- Type: PHP
- Size: 10173 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

New Secure Router for Auto-Routing

List of controllers in Defined Routes that should not be accessed via this Auto-Routing.
@var class-string[]

Sub-directory that contains the requested controller class.

Sub-namespace that contains the requested controller class.

The name of the controller class.

The name of the method to use.

An array of params to the controller method.

Whether dashes in URI's should be converted
to underscores when determining method names.

HTTP verb for the request.

The namespace for controllers.

The name of the default controller class.

The name of the default method

@param class-string[] $protectedControllers
@param string         $defaultController    Short classname

Finds controller, method and params from the URI.
@return array [directory_name, controller_name, controller_method, params]

Scans the controller directory, attempting to locate a controller matching the supplied uri $segments
@param array $segments URI segments
@return array returns an array of remaining uri segments that don't map onto a directory

Returns true if the supplied $segment string represents a valid PSR-4 compliant namespace/directory segment
regex comes from https://www.php.net/manual/en/language.variables.basics.php

Sets the sub-namespace that the controller is in.
@param bool $validate if true, checks to make sure $dir consists of only PSR4 compliant segments

## References

**Database Tables (inferred)**
- `the`
- `https`

## Symbols

# Symbols

**Files documented**: 1

## `system\Router\AutoRouterImproved.php`

**Classes**:
- `CodeIgniter\Router\AutoRouterImproved implements AutoRouterInterface`
- `CodeIgniter\Router\name`

**Functions/Methods**:
- `__construct(array $protectedControllers,
        string $namespace,
        string $defaultController,
        string $defaultMethod,
        bool $translateURIDashes,
        string $httpVerb)`
- `getRoute(string $uri)`
- `protectDefinedRoutes()`
- `checkParameters(string $uri)`
- `checkRemap()`
- `scanControllers(array $segments)`
- `isValidSegment(string $segment)`
- `setSubNamespace(?string $namespace = null, bool $append = false, bool $validate = true)`
- `translateURIDashes(string $classname)`

