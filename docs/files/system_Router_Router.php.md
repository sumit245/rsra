# system\Router\Router.php

- Path: `system\Router\Router.php`
- Type: PHP
- Size: 19420 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Request router.

A RouteCollection instance.
@var RouteCollectionInterface

Sub-directory that contains the requested controller class.
Primarily used by 'autoRoute'.
@var string|null

The name of the controller class.
@var Closure|string

The name of the method to use.
@var string

An array of binds that were collected
so they can be sent to closure routes.
@var array

The name of the front controller.
@var string

Whether dashes in URI's should be converted
to underscores when determining method names.
@var bool

The route that was matched for this request.
@var array|null

The options set for the matched route.
@var array|null

The locale that was detected in a route.
@var string

The filter info from Route Collection
if the matched route should be filtered.
@var string|null
@deprecated Use $filtersInfo

The filter info from Route Collection
if the matched route should be filtered.
@var string[]

Stores a reference to the RouteCollection object.

@throws PageNotFoundException
@throws RedirectException
@return Closure|string Controller classname or Closure

Returns the filter info for the matched route, if any.
@return string|null
@deprecated Use getFilters()

Returns the filter info for the matched route, if any.
@return string[]

Returns the name of the matched controller.
@return Closure|string Controller classname or Closure

Returns the name of the method to run in the
chosen container.

Returns the 404 Override settings from the Collection.
If the override is a string, will split to controller/index array.

Returns the binds that have been matched and collected
during the parsing process as an array, ready to send to
instance->method(...$params).

Returns the name of the sub-directory the controller is in,
if any. Relative to APPPATH.'Controllers'.
Only used when auto-routing is turned on.

Returns the routing information that was matched for this
request, if a route was defined.
@return array|null

Returns all options set for the matched route
@return array|null

Sets the value that should be used to match the index.php file. Defaults
to index.php but this allows you to modify it in case your are using
something like mod_rewrite to remove the page. This allows you to set
it a blank.
@param string $page

Tells the system whether we should translate URI dashes or not
in the URI from a dash to an underscore.
@deprecated This method should be removed.

Returns true/false based on whether the current route contained
a {locale} placeholder.
@return bool

Returns the detected locale, if any, or null.
@return string

Checks Defined Routs.
Compares the uri string against the routes that the
RouteCollection class defined for us, attempting to find a match.
This method will modify $this->controller, etal as needed.
@param string $uri The URI path to compare against the routes
@throws RedirectException
@return bool Whether the route was matched or not.

Checks Auto Routs.
Attempts to match a URI path against Controllers and directories
found in APPPATH/Controllers, to find a matching route.

Scans the controller directory, attempting to locate a controller matching the supplied uri $segments
@param array $segments URI segments
@return array returns an array of remaining uri segments that don't map onto a directory
@deprecated this function name does not properly describe its behavior so it has been deprecated
@codeCoverageIgnore

Scans the controller directory, attempting to locate a controller matching the supplied uri $segments
@param array $segments URI segments
@return array returns an array of remaining uri segments that don't map onto a directory
@deprecated Not used. Moved to AutoRouter class.

Sets the sub-directory that the controller is in.
@param bool $validate if true, checks to make sure $dir consists of only PSR4 compliant segments
@deprecated This method should be removed.

Returns true if the supplied $segment string represents a valid PSR-4 compliant namespace/directory segment
regex comes from https://www.php.net/manual/en/language.variables.basics.php
@deprecated Moved to AutoRouter class.

Set request route
Takes an array of URI segments as input and sets the class/method
to be called.
@param array $segments URI segments

Sets the default controller based on the info set in the RouteCollection.
@deprecated This was an unnecessary method, so it is no longer used.

@param callable|string $handler

## References

**Database Tables (inferred)**
- `Route`
- `the`
- `a`
- `https`

## Symbols

# Symbols

**Files documented**: 1

## `system\Router\Router.php`

**Classes**:
- `CodeIgniter\Router\Router implements RouterInterface`
- `CodeIgniter\Router\defined`

**Functions/Methods**:
- `__construct(RouteCollectionInterface $routes, ?Request $request = null)`
- `handle(?string $uri = null)`
- `getFilter()`
- `getFilters()`
- `controllerName()`
- `methodName()`
- `get404Override()`
- `params()`
- `directory()`
- `getMatchedRoute()`
- `getMatchedRouteOptions()`
- `setIndexPage($page)`
- `setTranslateURIDashes(bool $val = false)`
- `hasLocale()`
- `getLocale()`
- `checkRoutes(string $uri)`
- `autoRoute(string $uri)`
- `validateRequest(array $segments)`
- `scanControllers(array $segments)`
- `setDirectory(?string $dir = null, bool $append = false, bool $validate = true)`
- `isValidSegment(string $segment)`
- `setRequest(array $segments = [])`
- `setDefaultController()`
- `setMatchedRoute(string $route, $handler)`

