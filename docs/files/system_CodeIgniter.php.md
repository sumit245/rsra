# system\CodeIgniter.php

- Path: `system\CodeIgniter.php`
- Type: PHP
- Size: 33306 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

This class is the core of the framework, and will analyse the
request, route it to a controller, and send back the response.
Of course, there are variations to that flow, but this is the brains.

The current version of CodeIgniter Framework

App startup time.
@var mixed

Total app execution time
@var float

Main application configuration
@var App

Timer instance.
@var Timer

Current request.
@var CLIRequest|IncomingRequest|Request|null

Current response.
@var ResponseInterface

Router to use.
@var Router

Controller to use.
@var Closure|string

Controller method to invoke.
@var string

Output handler to use.
@var string

Cache expiration time
@var int

Request path to use.
@var string

Should the Response instance "pretend"
to keep from setting headers/cookies/etc
@var bool

Context
 web:     Invoked by HTTP request
 php-cli: Invoked by CLI via `php public/index.php`
 spark:   Invoked by CLI via the `spark` command
@phpstan-var 'php-cli'|'spark'|'web'

Constructor.

Handles some basic app and environment setup.

Checks system for missing required PHP extensions.
@throws FrameworkException
@codeCoverageIgnore

Initializes Kint

@var \Config\Kint $config

Launch the application!
This is "the loop" if you will. The main entry point into the script
that gets the required class instances, fires off the filters,
tries to route the response, loads the controller and generally
makes all of the pieces work together.
@throws Exception
@throws RedirectException
@return bool|mixed|RequestInterface|ResponseInterface|void

Set our Response instance to "pretend" mode so that things like
cookies and headers are not actually sent, allowing PHP 7.2+ to
not complain when ini_set() function is used.
@return $this

Invoked via spark command?

Invoked via php-cli command?

Web access?

Handles the main request logic and fires the controller.
@throws PageNotFoundException
@throws RedirectException
@return mixed|RequestInterface|ResponseInterface

You can load different configurations depending on your
current environment. Setting the environment also influences
things like logging and error reporting.
This can be set to anything, but default usage is:
    development
    testing
    production
@codeCoverageIgnore

Load any custom boot files based upon the current environment.
If no boot file exists, we shouldn't continue because something
is wrong. At the very least, they should have error reporting setup.

Start the Benchmark
The timer is used to display total script execution both in the
debug toolbar, and potentially on the displayed page.

Sets a Request object to be used for this request.
Used when running certain tests.
@return $this

Get our Request object, (either IncomingRequest or CLIRequest)
and set the server protocol based on the information provided
by the server.

Get our Response object, and set some default values, including
the HTTP protocol version and a default successful response.

Force Secure Site Access? If the config value 'forceGlobalSecureRequests'
is true, will enforce that all requests to this site are made through
HTTPS. Will redirect the user to the current page with HTTPS, as well
as set the HTTP Strict Transport Security header for those browsers
that support it.
@param int $duration How long the Strict Transport Security
                     should be enforced for this URL.

Determines if a response has been cached for the given URI.
@throws Exception
@return bool|ResponseInterface

Tells the app that the final output should be cached.

Caches the full response from the current request. Used for
full-page caching for very high performance.
@return mixed

Returns an array with our basic performance stats collected.

Generates the cache name to use for our full-page caching.

Replaces the elapsed_time tag.

Try to Route It - As it sounds like, works with the router to
match a route against the current URI. If the route is a
"redirect route", will also handle the redirect.
@param RouteCollectionInterface|null $routes An collection interface to use in place
                                             of the config file.
@throws RedirectException
@return string|string[]|null Route filters, that is, the filters specified in the routes file

Determines the path to use for us to try to route to, based
on user input (setPath), or the CLI/IncomingRequest path.
@return string

Allows the request path to be set from outside the class,
instead of relying on CLIRequest or IncomingRequest for the path.
This is primarily used by the Console.
@return $this

Now that everything has been setup, this method attempts to run the
controller method and make the script go. If it's not able to, will
show the appropriate Page Not Found error.
@return ResponseInterface|string|void

Instantiates the controller class.
@return Controller

Runs the controller, allowing for _remap methods to function.
CI4 supports three types of requests:
 1. Web: URI segments become parameters, sent to Controllers via Routes,
     output controlled by Headers to browser
 2. Spark: accessed by CLI via the spark command, arguments are Command arguments,
     sent to Commands by CommandRunner, output controlled by CLI class
 3. PHP CLI: accessed by CLI via php public/index.php, arguments become URI segments,
     sent to Controllers via Routes, output varies
@param mixed $class
@return false|ResponseInterface|string|void

@var CLIRequest $request

Displays a 404 Page Not Found error. If set, will try to
call the 404Override controller/method that was set in routing config.

Gathers the script output from the buffer, replaces some execution
time tag in the output and displays the debug toolbar, if required.
@param ResponseInterface|string|null $returned

If we have a session object to use, store the current URI
as the previous URI. This is called just prior to sending the
response to the client, and will make it available next request.
This helps provider safer, more reliable previous_url() detection.
@param string|URI $uri

Modifies the Request Object to use a different method if a POST
variable called _method is found.

Sends the output of this request back to the client.
This is what they've been waiting for!

Exits the application, setting the exit code for CLI-based applications
that might be watching.
Made into a separate method so that it can be mocked during testing
without actually stopping script execution.
@param int $code

Sets the app context.
@phpstan-param 'php-cli'|'spark'|'web' $context
@return $this

## References

**Database Tables (inferred)**
- `setting`
- `4`
- `the`
- `outside`
- `it`

## Symbols

# Symbols

**Files documented**: 1

## `system\CodeIgniter.php`

**Classes**:
- `CodeIgniter\is`
- `CodeIgniter\CodeIgniter`
- `CodeIgniter\instances`
- `CodeIgniter\if`

**Functions/Methods**:
- `__construct(App $config)`
- `initialize()`
- `resolvePlatformExtensions()`
- `initializeKint()`
- `run(?RouteCollectionInterface $routes = null, bool $returnResponse = false)`
- `useSafeOutput(bool $safe = true)`
- `isSparked()`
- `isPhpCli()`
- `isWeb()`
- `handleRequest(?RouteCollectionInterface $routes, Cache $cacheConfig, bool $returnResponse = false)`
- `detectEnvironment()`
- `bootstrapEnvironment()`
- `startBenchmark()`
- `setRequest(Request $request)`
- `getRequestObject()`
- `getResponseObject()`
- `forceSecureAccess($duration = 31_536_000)`
- `displayCache(Cache $config)`
- `cache(int $time)`
- `cachePage(Cache $config)`
- `getPerformanceStats()`
- `generateCacheName(Cache $config)`
- `displayPerformanceMetrics(string $output)`
- `tryToRouteIt(?RouteCollectionInterface $routes = null)`
- `determinePath()`
- `setPath(string $path)`
- `startController()`
- `createController()`
- `runController($class)`
- `display404errors(PageNotFoundException $e)`
- `gatherOutput(?Cache $cacheConfig = null, $returned = null)`
- `storePreviousURL($uri)`
- `spoofRequestMethod()`
- `sendResponse()`
- `callExit($code)`
- `setContext(string $context)`

