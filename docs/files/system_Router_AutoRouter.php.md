# system\Router\AutoRouter.php

- Path: `system\Router\AutoRouter.php`
- Type: PHP
- Size: 9212 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Router for Auto-Routing

List of controllers registered for the CLI verb that should not be accessed in the web.
@var class-string[]

Sub-directory that contains the requested controller class.
Primarily used by 'autoRoute'.

The name of the controller class.

The name of the method to use.

Whether dashes in URI's should be converted
to underscores when determining method names.

HTTP verb for the request.

Default namespace for controllers.

Attempts to match a URI path against Controllers and directories
found in APPPATH/Controllers, to find a matching route.
@return array [directory_name, controller_name, controller_method, params]

@var array $params An array of params to the controller method.

Tells the system whether we should translate URI dashes or not
in the URI from a dash to an underscore.
@deprecated This method should be removed.

Scans the controller directory, attempting to locate a controller matching the supplied uri $segments
@param array $segments URI segments
@return array returns an array of remaining uri segments that don't map onto a directory

Returns true if the supplied $segment string represents a valid PSR-4 compliant namespace/directory segment
regex comes from https://www.php.net/manual/en/language.variables.basics.php

Sets the sub-directory that the controller is in.
@param bool $validate if true, checks to make sure $dir consists of only PSR4 compliant segments
@deprecated This method should be removed.

Returns the name of the sub-directory the controller is in,
if any. Relative to APPPATH.'Controllers'.
@deprecated This method should be removed.

## References

**Database Tables (inferred)**
- `a`
- `https`

## Symbols

# Symbols

**Files documented**: 1

## `system\Router\AutoRouter.php`

**Classes**:
- `CodeIgniter\Router\AutoRouter implements AutoRouterInterface`
- `CodeIgniter\Router\name`

**Functions/Methods**:
- `__construct(array $protectedControllers,
        string $defaultNamespace,
        string $defaultController,
        string $defaultMethod,
        bool $translateURIDashes,
        string $httpVerb)`
- `getRoute(string $uri)`
- `setTranslateURIDashes(bool $val = false)`
- `scanControllers(array $segments)`
- `isValidSegment(string $segment)`
- `setDirectory(?string $dir = null, bool $append = false, bool $validate = true)`
- `directory()`
- `controllerName()`
- `methodName()`

