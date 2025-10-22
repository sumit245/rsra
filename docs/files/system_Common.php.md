# system\Common.php

- Path: `system\Common.php`
- Type: PHP
- Size: 35558 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Returns the timezone the application has been set to display
dates in. This might be different than the timezone set
at the server level, as you often want to stores dates in UTC
and convert them on the fly for the user.

A convenience method that provides access to the Cache
object. If no parameter is provided, will return the object,
otherwise, will attempt to return the cached value.
Examples:
   cache()->save('foo', 'bar');
   $foo = cache('bar');
@return CacheInterface|mixed

A convenience method to clean paths for
a nicer looking output. Useful for exception
handling, error logging, etc.

Runs a single command.
Input expected in a single string as would
be used on the command line itself:
 > command('migrate:create SomeMigration');
@return false|string

Adopted from Symfony's `StringInput::tokenize()` with few changes.
@see https://github.com/symfony/symfony/blob/master/src/Symfony/Component/Console/Input/StringInput.php

More simple way of getting config instances from Factories
@return mixed

Simpler way to create a new Cookie instance.
@param string $name    Name of the cookie
@param string $value   Value of the cookie
@param array  $options Array of options to be passed to the cookie
@throws CookieException

Fetches the global `CookieStore` instance held by `Response`.
@param Cookie[] $cookies   If `getGlobal` is false, this is passed to CookieStore's constructor
@param bool     $getGlobal If false, creates a new instance of CookieStore

Returns the CSRF token name.
Can be used in Views when building hidden inputs manually,
or used in javascript vars when using APIs.

Returns the CSRF header name.
Can be used in Views by adding it to the meta tag
or used in javascript to define a header name when using APIs.

Returns the current hash value for the CSRF protection.
Can be used in Views when building hidden inputs manually,
or used in javascript vars for API usage.

Generates a hidden input field for use within manually generated forms.

Generates a meta tag for use within javascript calls.

Generates a nonce attribute for style tag.

Generates a nonce attribute for script tag.

Grabs a database connection and returns it to the user.
This is a convenience wrapper for \Config\Database::connect()
and supports the same parameters. Namely:
When passing in $db, you may pass any of the following to connect:
- group name
- existing connection instance
- array of database configuration values
If $getShared === false then a new connection instance will be provided,
otherwise it will all calls will return the same instance.
@param array|ConnectionInterface|string|null $db
@return BaseConnection

Prints a Kint debug report and exits.
@param array ...$vars
@codeCoverageIgnore Can't be tested ... exits

Allows user to retrieve values from the environment
variables that have been set. Especially useful for
retrieving values set from the .env file for
use in config files.
@param string|null $default
@return mixed

Performs simple auto-escaping of data for security reasons.
Might consider making this more complex at a later date.
If $data is a string, then it simply escapes and returns it.
If $data is an array, then it loops over it, escaping each
'value' of the key/value pairs.
Valid context values: html, js, css, url, attr, raw
@param array|string $data
@param string       $encoding
@throws InvalidArgumentException
@return array|string

Used to force a page to be accessed in via HTTPS.
Uses a standard redirect, plus will set the HSTS header
for modern browsers that support, which gives best
protection against man-in-the-middle attacks.
@see https://en.wikipedia.org/wiki/HTTP_Strict_Transport_Security
@param int               $duration How long should the SSL header be set for? (in seconds)
                                   Defaults to 1 year.
@param RequestInterface  $request
@param ResponseInterface $response
@throws HTTPException

Function usable
Executes a function_exists() check, and if the Suhosin PHP
extension is loaded - checks whether the function that is
checked might be disabled in there as well.
This is useful as function_exists() will return FALSE for
functions disabled via the *disable_functions* php.ini
setting, but not for *suhosin.executor.func.blacklist* and
*suhosin.executor.disable_eval*. These settings will just
terminate script execution if a disabled function is executed.
The above described behavior turned out to be a bug in Suhosin,
but even though a fix was committed for 0.9.34 on 2012-02-12,
that version is yet to be released. This function will therefore
be just temporary, but would probably be kept for a few years.
@see   http://www.hardened-php.net/suhosin/
@param string $functionName Function to check for
@return bool TRUE if the function exists and is safe to call,
             FALSE otherwise.
@codeCoverageIgnore This is too exotic

Loads a helper file into memory. Supports namespaced helpers,
both in and out of the 'helpers' directory of a namespaced directory.
Will load ALL helpers of the matching name, in the following order:
  1. app/Helpers
  2. {namespace}/Helpers
  3. system/Helpers
@param array|string $filenames
@throws FileNotFoundException

Check if PHP was invoked from the command line.
@codeCoverageIgnore Cannot be tested fully as PHPUnit always run in php-cli

Tests for file writability
is_writable() returns TRUE on Windows servers when you really can't write to
the file, based on the read-only attribute. is_writable() is also unreliable
on Unix servers if safe_mode is on.
@see https://bugs.php.net/bug.php?id=54709
@throws Exception
@codeCoverageIgnore Not practical to test, as travis runs on linux

A convenience method to translate a string or array of them and format
the result with the intl extension's MessageFormatter.
@return string

A convenience/compatibility method for logging events through
the Log system.
Allowed log levels are:
 - emergency
 - alert
 - critical
 - error
 - warning
 - notice
 - info
 - debug
@return mixed

More simple way of getting model instances from Factories
@template T of Model
@param class-string<T> $name
@return T

Provides access to "old input" that was set in the session
during a redirect()->withInput().
@param null        $default
@param bool|string $escape
@return mixed|null

Convenience method that works with the current global $request and
$router instances to redirect using named/reverse-routed routes
to determine the URL to go to.
If more control is needed, you must use $response->redirect explicitly.
@param string $route

Remove Invisible Characters
This prevents sandwiching null characters
between ascii characters, like Java\0script.

Given a controller/method string and any params,
will attempt to build the relative URL to the
matching route.
NOTE: This requires the controller/method to
have a route defined in the routes Config file.
@param mixed ...$params
@return false|string

A convenience method for accessing the session instance,
or an item that has been set in the session.
Examples:
   session()->set('foo', 'bar');
   $foo = session('bar');
@param string $val
@return mixed|Session|null

Allows cleaner access to the Services Config file.
Always returns a SHARED instance of the class, so
calling the function multiple times should always
return the same instance.
These are equal:
 - $timer = service('timer')
 - $timer = \CodeIgniter\Config\Services::timer();
@param mixed ...$params
@return mixed

Always returns a new instance of the class.
@param mixed ...$params
@return mixed

Fetch a config file item with slash appended (if not empty)
@param string $item Config item name
@return string|null The configuration item or NULL if
                    the item doesn't exist

Stringify attributes for use in HTML tags.
Helper function used to convert a string, array, or object
of attributes to a string.
@param mixed $attributes string, array, object

A convenience method for working with the timer.
If no parameter is passed, it will return the timer instance,
otherwise will start or stop the timer intelligently.
@return mixed|Timer

Provides a backtrace to the current execution point, from Kint.

Grabs the current RendererInterface-compatible class
and tells it to render the specified view. Simply provides
a convenience method that can be used in Controllers,
libraries, and routed closures.
NOTE: Does not provide any escaping of the data, so that must
all be handled manually by the developer.
@param array $options Unused - reserved for third-party extensions.

@var CodeIgniter\View\View $renderer

View cells are used within views to insert HTML chunks that are managed
by other classes.
@param array|string|null $params
@throws ReflectionException

These helpers come from Laravel so will not be
re-tested and can be ignored safely.
@see https://github.com/laravel/framework/blob/8.x/src/Illuminate/Support/helpers.php

Get the class "basename" of the given object / class.
@param object|string $class
@return string
@codeCoverageIgnore

Returns all traits used by a class, its parent classes and trait of their traits.
@param object|string $class
@return array
@codeCoverageIgnore

Returns all traits used by a trait and its traits.
@param string $trait
@return array
@codeCoverageIgnore

## References

**Database Tables (inferred)**
- `Symfony`
- `Factories`
- `the`
- `Kint`
- `Laravel`

## Symbols

# Symbols

**Files documented**: 1

## `system\Common.php`

**Functions/Methods**:
- `app_timezone()`
- `cache(?string $key = null)`
- `clean_path(string $path)`
- `command(string $command)`
- `config(string $name, bool $getShared = true)`
- `cookie(string $name, string $value = '', array $options = [])`
- `cookies(array $cookies = [], bool $getGlobal = true)`
- `csrf_token()`
- `csrf_header()`
- `csrf_hash()`
- `csrf_field(?string $id = null)`
- `csrf_meta(?string $id = null)`
- `csp_style_nonce()`
- `csp_script_nonce()`
- `db_connect($db = null, bool $getShared = true)`
- `dd(...$vars)`
- `env(string $key, $default = null)`
- `esc($data, string $context = 'html', ?string $encoding = null)`
- `force_https(int $duration = 31_536_000, ?RequestInterface $request = null, ?ResponseInterface $response = null)`
- `function_usable(string $functionName)`
- `helper($filenames)`
- `is_cli()`
- `is_really_writable(string $file)`
- `lang(string $line, array $args = [], ?string $locale = null)`
- `log_message(string $level, string $message, array $context = [])`
- `model(string $name, bool $getShared = true, ?ConnectionInterface &$conn = null)`
- `old(string $key, $default = null, $escape = 'html')`
- `redirect(?string $route = null)`
- `remove_invisible_characters(string $str, bool $urlEncoded = true)`
- `route_to(string $method, ...$params)`
- `session(?string $val = null)`
- `service(string $name, ...$params)`
- `single_service(string $name, ...$params)`
- `slash_item(string $item)`
- `stringify_attributes($attributes, bool $js = false)`
- `timer(?string $name = null)`
- `trace()`
- `view(string $name, array $data = [], array $options = [])`
- `view_cell(string $library, $params = null, int $ttl = 0, ?string $cacheName = null)`
- `class_basename($class)`
- `class_uses_recursive($class)`
- `trait_uses_recursive($trait)`

