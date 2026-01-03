# system\Config\BaseService.php

- Path: `system\Config\BaseService.php`
- Type: PHP
- Size: 12954 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Services Configuration file.
Services are simply other classes/libraries that the system uses
to do its job. This is used by CodeIgniter to allow the core of the
framework to be swapped out easily without affecting the usage within
the rest of your application.
This is used in place of a Dependency Injection container primarily
due to its simplicity, which allows a better long-term maintenance
of the applications built on top of CodeIgniter. A bonus side-effect
is that IDEs are able to determine what class you are calling
whereas with DI Containers there usually isn't a way for them to do this.
Warning: To allow overrides by service providers do not use static calls,
instead call out to \Config\Services (imported as AppServices).
@see http://blog.ircmaxell.com/2015/11/simple-easy-risk-and-change.html
@see http://www.infoq.com/presentations/Simple-Made-Easy
@method static CacheInterface cache(Cache $config = null, $getShared = true)
@method static CLIRequest clirequest(App $config = null, $getShared = true)
@method static CodeIgniter codeigniter(App $config = null, $getShared = true)
@method static Commands commands($getShared = true)
@method static ContentSecurityPolicy csp(CSPConfig $config = null, $getShared = true)
@method static CURLRequest curlrequest($options = [], ResponseInterface $response = null, App $config = null, $getShared = true)
@method static Email email($config = null, $getShared = true)
@method static EncrypterInterface encrypter(Encryption $config = null, $getShared = false)
@method static Exceptions exceptions(ConfigExceptions $config = null, IncomingRequest $request = null, Response $response = null, $getShared = true)
@method static Filters filters(ConfigFilters $config = null, $getShared = true)
@method static Format format(ConfigFormat $config = null, $getShared = true)
@method static Honeypot honeypot(ConfigHoneyPot $config = null, $getShared = true)
@method static BaseHandler image($handler = null, Images $config = null, $getShared = true)
@method static Iterator iterator($getShared = true)
@method static Language language($locale = null, $getShared = true)
@method static Logger logger($getShared = true)
@method static MigrationRunner migrations(Migrations $config = null, ConnectionInterface $db = null, $getShared = true)
@method static Negotiate negotiator(RequestInterface $request = null, $getShared = true)
@method static Pager pager(ConfigPager $config = null, RendererInterface $view = null, $getShared = true)
@method static Parser parser($viewPath = null, ConfigView $config = null, $getShared = true)
@method static RedirectResponse redirectresponse(App $config = null, $getShared = true)
@method static View renderer($viewPath = null, ConfigView $config = null, $getShared = true)
@method static IncomingRequest request(App $config = null, $getShared = true)
@method static Response response(App $config = null, $getShared = true)
@method static Router router(RouteCollectionInterface $routes = null, Request $request = null, $getShared = true)
@method static RouteCollection routes($getShared = true)
@method static Security security(App $config = null, $getShared = true)
@method static Session session(App $config = null, $getShared = true)
@method static Throttler throttler($getShared = true)
@method static Timer timer($getShared = true)
@method static Toolbar toolbar(ConfigToolbar $config = null, $getShared = true)
@method static Typography typography($getShared = true)
@method static URI uri($uri = null, $getShared = true)
@method static Validation validation(ConfigValidation $config = null, $getShared = true)
@method static Cell viewcell($getShared = true)

Cache for instance of any services that
have been requested as a "shared" instance.
Keys should be lowercase service names.
@var array

Mock objects for testing which are returned if exist.
@var array

Have we already discovered other Services?
@var bool

A cache of other service classes we've found.
@var array

A cache of the names of services classes found.
@var array<string>

Returns a shared instance of any of the class' services.
$key must be a name matching a service.
@param mixed ...$params
@return mixed

The Autoloader class is the central class that handles our
spl_autoload_register method, and helper methods.
@return Autoloader

The file locator provides utility methods for looking for non-classes
within namespaced folders, as well as convenience methods for
loading 'helpers', and 'libraries'.
@return FileLocator

Provides the ability to perform case-insensitive calling of service
names.
@return mixed

Check if the requested service is defined and return the declaring
class. Return null if not found.

Reset shared instances and mocks for testing.

Resets any mock and shared instances for a single service.

Inject mock object for testing.
@param mixed $mock

Will scan all psr4 namespaces registered with system to look
for new Config\Services files. Caches a copy of each one, then
looks for the service method in each, returning an instance of
the service, if available.
@return mixed
@deprecated
@codeCoverageIgnore

## Symbols

# Symbols

**Files documented**: 1

## `system\Config\BaseService.php`

**Classes**:
- `CodeIgniter\Config\you`
- `CodeIgniter\Config\BaseService`
- `CodeIgniter\Config\is`
- `CodeIgniter\Config\that`

**Functions/Methods**:
- `getSharedInstance(string $key, ...$params)`
- `autoloader(bool $getShared = true)`
- `locator(bool $getShared = true)`
- `__callStatic(string $name, array $arguments)`
- `serviceExists(string $name)`
- `reset(bool $initAutoloader = true)`
- `resetSingle(string $name)`
- `injectMock(string $name, $mock)`
- `discoverServices(string $name, array $arguments)`
- `buildServicesCache()`

