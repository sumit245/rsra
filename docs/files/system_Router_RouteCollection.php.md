# system\Router\RouteCollection.php

- Path: `system\Router\RouteCollection.php`
- Type: PHP
- Size: 45191 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

@todo Implement nested resource routing (See CakePHP)

The namespace to be added to any Controllers.
Defaults to the global namespaces (\)
@var string

The name of the default controller to use
when no other controller is specified.
Not used here. Pass-thru value for Router class.
@var string

The name of the default method to use
when no other method has been specified.
Not used here. Pass-thru value for Router class.
@var string

The placeholder used when routing 'resources'
when no other placeholder has been specified.
@var string

Whether to convert dashes to underscores in URI.
Not used here. Pass-thru value for Router class.
@var bool

Whether to match URI against Controllers
when it doesn't match defined routes.
Not used here. Pass-thru value for Router class.
@var bool

A callable that will be shown
when the route cannot be matched.
@var Closure|string

Defined placeholders that can be used
within the
@var array<string, string>

An array of all routes and their mappings.
@var array
[
    verb => [
        routeName => [
            'route' => [
                routeKey => handler,
            ]
        ]
    ],
]

Array of routes options
@var array

The current method that the script is being called by.
@var string

The default list of HTTP methods (and CLI for command line usage)
that is allowed if no other method is provided.
@var array

The name of the current group, if any.
@var string|null

The current subdomain.
@var string|null

Stores copy of current options being
applied during creation.
@var array|null

A little performance booster.
@var bool

Handle to the file locator to use.
@var FileLocator

Handle to the modules config.
@var Modules

Flag for sorting routes by priority.
@var bool

Route priority detection flag.
@var bool

The current hostname from $_SERVER['HTTP_HOST']

Constructor

Registers a new constraint with the system. Constraints are used
by the routes as placeholders for regular expressions to make defining
the routes more human-friendly.
You can pass an associative array as $placeholder, and have
multiple placeholders added at once.
@param array|string $placeholder

For `spark routes`
@return array<string, string>
@internal

Sets the default namespace to use for Controllers when no other
namespace has been specified.

Sets the default controller to use when no other controller has been
specified.

Sets the default method to call on the controller when no other
method has been set in the route.

Tells the system whether to convert dashes in URI strings into
underscores. In some search engines, including Google, dashes
create more meaning and make it easier for the search engine to
find words and meaning in the URI for better SEO. But it
doesn't work well with PHP method names....

If TRUE, the system will attempt to match the URI against
Controllers by matching each segment against folders/files
in APPPATH/Controllers, when a match wasn't found against
defined routes.
If FALSE, will stop searching and do NO automatic routing.

Sets the class/method that should be called if routing doesn't
find a match. It can be either a closure or the controller/method
name exactly like a route is defined: Users::index
This setting is passed to the Router class and handled there.
@param callable|null $callable

Returns the 404 Override setting, which can be null, a closure
or the controller/string.
@return Closure|string|null

Will attempt to discover any additional routes, either through
the local PSR4 namespaces, or through selected Composer packages.

Sets the default constraint to be used in the system. Typically
for use with the 'resource' method.

Returns the name of the default controller. With Namespace.

Returns the name of the default method to use within the controller.

Returns the default namespace as set in the Routes config file.

Returns the current value of the translateURIDashes setting.

Returns the flag that tells whether to autoRoute URI against Controllers.

Returns the raw array of available routes.

Returns one or all routes options

Returns the current HTTP Verb being used.

Sets the current HTTP verb.
Used primarily for testing.
@return $this

A shortcut method to add a number of routes at a single time.
It does not allow any options to be set on the route, or to
define the method used.

Adds a single route to the collection.
Example:
     $routes->add('news', 'Posts::index');
@param array|Closure|string $to

Adds a temporary redirect from one route to another. Used for
redirecting traffic from old, non-existing routes to the new
moved routes.
@param string $from   The pattern to match against
@param string $to     Either a route name or a URI to redirect to
@param int    $status The HTTP status code that should be returned with this redirect
@return RouteCollection

Determines if the route is a redirecting route.

Grabs the HTTP status code from a redirecting Route.

Group a series of routes under a single URL segment. This is handy
for grouping items into an admin area, like:
Example:
    // Creates route: admin/users
    $route->group('admin', function() {
           $route->resource('users');
    });
@param string         $name      The name to group/prefix the routes with.
@param array|callable ...$params

Creates a collections of HTTP-verb based routes for a controller.
Possible Options:
     'controller'    - Customize the name of the controller used in the 'to' route
     'placeholder'   - The regex used by the Router. Defaults to '(:any)'
     'websafe'   -	- '1' if only GET and POST HTTP verbs are supported
Example:
     $route->resource('photos');
     // Generates the following routes:
     HTTP Verb | Path        | Action        | Used for...
     ----------+-------------+---------------+-----------------
     GET         /photos             index           an array of photo objects
     GET         /photos/new         new             an empty photo object, with default properties
     GET         /photos/{id}/edit   edit            a specific photo object, editable properties
     GET         /photos/{id}        show            a specific photo object, all properties
     POST        /photos             create          a new photo object, to add to the resource
     DELETE      /photos/{id}        delete          deletes the specified photo object
     PUT/PATCH   /photos/{id}        update          replacement properties for existing photo
 If 'websafe' option is present, the following paths are also available:
     POST		/photos/{id}/delete delete
     POST        /photos/{id}        update
@param string     $name    The name of the resource/controller to route to.
@param array|null $options An list of possible ways to customize the routing.

Creates a collections of HTTP-verb based routes for a presenter controller.
Possible Options:
     'controller'    - Customize the name of the controller used in the 'to' route
     'placeholder'   - The regex used by the Router. Defaults to '(:any)'
Example:
     $route->presenter('photos');
     // Generates the following routes:
     HTTP Verb | Path        | Action        | Used for...
     ----------+-------------+---------------+-----------------
     GET         /photos             index           showing all array of photo objects
     GET         /photos/show/{id}   show            showing a specific photo object, all properties
     GET         /photos/new         new             showing a form for an empty photo object, with default properties
     POST        /photos/create      create          processing the form for a new photo
     GET         /photos/edit/{id}   edit            show an editing form for a specific photo object, editable properties
     POST        /photos/update/{id} update          process the editing form data
     GET         /photos/remove/{id} remove          show a form to confirm deletion of a specific photo object
     POST        /photos/delete/{id} delete          deleting the specified photo object
@param string     $name    The name of the controller to route to.
@param array|null $options An list of possible ways to customize the routing.

Specifies a single route to match for multiple HTTP Verbs.
Example:
 $route->match( ['get', 'post'], 'users/(:num)', 'users/$1);
@param array|Closure|string $to

Specifies a route that is only available to GET requests.
@param array|Closure|string $to

Specifies a route that is only available to POST requests.
@param array|Closure|string $to

Specifies a route that is only available to PUT requests.
@param array|Closure|string $to

Specifies a route that is only available to DELETE requests.
@param array|Closure|string $to

Specifies a route that is only available to HEAD requests.
@param array|Closure|string $to

Specifies a route that is only available to PATCH requests.
@param array|Closure|string $to

Specifies a route that is only available to OPTIONS requests.
@param array|Closure|string $to

Specifies a route that is only available to command-line requests.
@param array|Closure|string $to

Limits the routes to a specified ENVIRONMENT or they won't run.

Attempts to look up a route based on its destination.
If a route exists:
     'path/(:any)/(:any)' => 'Controller::method/$1/$2'
This method allows you to know the Controller and method
and get the route that leads to it.
     // Equals 'path/$param1/$param2'
     reverseRoute('Controller::method', $param1, $param2);
@param mixed ...$params
@return false|string

Replaces the {locale} tag with the current application locale

Checks a route (using the "from") to see if it's filtered or not.

Returns the filter that should be applied for a single route, along
with any parameters it might have. Parameters are found by splitting
the parameter name on a colon to separate the filter name from the parameter list,
and the splitting the result on commas. So:
   'role:admin,manager'
has a filter of "role", with parameters of ['admin', 'manager'].
@deprecated Use getFiltersForRoute()

Returns the filters that should be applied for a single route, along
with any parameters it might have. Parameters are found by splitting
the parameter name on a colon to separate the filter name from the parameter list,
and the splitting the result on commas. So:
   'role:admin,manager'
has a filter of "role", with parameters of ['admin', 'manager'].

Given a
@throws RouterException

Does the heavy lifting of creating an actual route. You must specify
the request method(s) that this route will work for. They can be separated
by a pipe character "|" if there is more than one.
@param array|Closure|string $to

Returns the method param string like `/$1/$2` for placeholders

Compares the subdomain(s) passed in against the current subdomain
on this page request.
@param string|string[] $subdomains

Examines the HTTP_HOST to get a best match for the subdomain. It
won't be perfect, but should work for our needs.
It's especially not perfect since it's possible to register a domain
with a period (.) as part of the domain name.
@return false|string the subdomain

Reset the routes, so that a test case can provide the
explicit ones needed for it.

Load routes options based on verb

Enable or Disable sorting routes by priority
@param bool $enabled The value status
@return $this

Get all controllers in Route Handlers
@param string|null $verb HTTP verb. `'*'` returns all controllers in any verb.

## References

**Database Tables (inferred)**
- `one`
- `old`
- `The`
- `a`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Router\RouteCollection.php`

**Classes**:
- `CodeIgniter\Router\RouteCollection implements RouteCollectionInterface`
- `CodeIgniter\Router\and`

**Functions/Methods**:
- `__construct(FileLocator $locator, Modules $moduleConfig)`
- `addPlaceholder($placeholder, ?string $pattern = null)`
- `getPlaceholders()`
- `setDefaultNamespace(string $value)`
- `setDefaultController(string $value)`
- `setDefaultMethod(string $value)`
- `setTranslateURIDashes(bool $value)`
- `setAutoRoute(bool $value)`
- `set404Override($callable = null)`
- `get404Override()`
- `discoverRoutes()`
- `setDefaultConstraint(string $placeholder)`
- `getDefaultController()`
- `getDefaultMethod()`
- `getDefaultNamespace()`
- `shouldTranslateURIDashes()`
- `shouldAutoRoute()`
- `getRoutes(?string $verb = null)`
- `getRoutesOptions(?string $from = null, ?string $verb = null)`
- `getHTTPVerb()`
- `setHTTPVerb(string $verb)`
- `map(array $routes = [], ?array $options = null)`
- `add(string $from, $to, ?array $options = null)`
- `addRedirect(string $from, string $to, int $status = 302)`
- `isRedirect(string $from)`
- `getRedirectCode(string $from)`
- `group(string $name, ...$params)`
- `resource(string $name, ?array $options = null)`
- `presenter(string $name, ?array $options = null)`
- `match(array $verbs = [], string $from = '', $to = '', ?array $options = null)`
- `get(string $from, $to, ?array $options = null)`
- `post(string $from, $to, ?array $options = null)`
- `put(string $from, $to, ?array $options = null)`
- `delete(string $from, $to, ?array $options = null)`
- `head(string $from, $to, ?array $options = null)`
- `patch(string $from, $to, ?array $options = null)`
- `options(string $from, $to, ?array $options = null)`
- `cli(string $from, $to, ?array $options = null)`
- `environment(string $env, Closure $callback)`
- `reverseRoute(string $search, ...$params)`
- `localizeRoute(string $route)`
- `isFiltered(string $search, ?string $verb = null)`
- `getFilterForRoute(string $search, ?string $verb = null)`
- `getFiltersForRoute(string $search, ?string $verb = null)`
- `fillRouteParams(string $from, ?array $params = null)`
- `create(string $verb, string $from, $to, ?array $options = null)`
- `processArrayCallableSyntax(string $from, array $to)`
- `getMethodParams(string $from)`
- `checkSubdomains($subdomains)`
- `determineCurrentSubdomain()`
- `resetRoutes()`
- `loadRoutesOptions(?string $verb = null)`
- `setPrioritize(bool $enabled = true)`
- `getRegisteredControllers(?string $verb = '*')`

