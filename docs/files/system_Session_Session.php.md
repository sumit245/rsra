# system\Session\Session.php

- Path: `system\Session\Session.php`
- Type: PHP
- Size: 26574 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Implementation of CodeIgniter session container.
Session configuration is done through session variables and cookie related
variables in app/config/App.php

Instance of the driver to use.
@var SessionHandlerInterface

The storage driver to use: files, database, redis, memcached
@var string

The session cookie name, must contain only [0-9a-z_-] characters.
@var string

The number of SECONDS you want the session to last.
Setting it to 0 (zero) means expire when the browser is closed.
@var int

The location to save sessions to, driver dependent..
For the 'files' driver, it's a path to a writable directory.
WARNING: Only absolute paths are supported!
For the 'database' driver, it's a table name.
@todo address memcache & redis needs
IMPORTANT: You are REQUIRED to set a valid save path!
@var string

Whether to match the user's IP address when reading the session data.
WARNING: If you're using the database driver, don't forget to update
your session table's PRIMARY KEY when changing this setting.
@var bool

How many seconds between CI regenerating the session ID.
@var int

Whether to destroy session data associated with the old session ID
when auto-regenerating the session ID. When set to FALSE, the data
will be later deleted by the garbage collector.
@var bool

The session cookie instance.
@var Cookie

The domain name to use for cookies.
Set to .your-domain.com for site-wide cookies.
@var string
@deprecated

Path used for storing cookies.
Typically will be a forward slash.
@var string
@deprecated

Cookie will only be set if a secure HTTPS connection exists.
@var bool
@deprecated

Cookie SameSite setting as described in RFC6265
Must be 'None', 'Lax' or 'Strict'.
@var string
@deprecated

sid regex expression
@var string

Logger instance to record error messages and warnings.
@var LoggerInterface

Constructor.
Extract configuration settings and save them here.

@var CookieConfig $cookie

Initialize the session container and starts up the session.
@return mixed

Does a full stop of the session:
- destroys the session
- unsets the session id
- destroys the session cookie

Configuration.
Handle input binds and configuration defaults.

Configure session ID length
To make life easier, we used to force SHA-1 and 4 bits per
character on everyone. And of course, someone was unhappy.
Then PHP 7.1 broke backwards-compatibility because ext/session
is such a mess that nobody wants to touch it with a pole stick,
and the one guy who does, nobody has the energy to argue with.
So we were forced to make changes, and OF COURSE something was
going to break and now we have this pile of shit. -- Narf

Handle temporary variables
Clears old "flash" data, marks the new one for deletion and handles
"temp" data deletion.

Regenerates the session ID.
@param bool $destroy Should old session data be destroyed?

Destroys the current session.

Sets user data into the session.
If $data is a string, then it is interpreted as a session property
key, and  $value is expected to be non-null.
If $data is an array, it is expected to be an array of key/value pairs
to be set as session properties.
@param array|string $data  Property name or associative array of properties
@param mixed        $value Property value if single key provided

Get user data that has been set in the session.
If the property exists as "normal", returns it.
Otherwise, returns an array of any temp or flash data values with the
property key.
Replaces the legacy method $session->userdata();
@param string|null $key Identifier of the session property to retrieve
@return mixed The property value(s)

Returns whether an index exists in the session array.
@param string $key Identifier of the session property we are interested in.

Push new value onto session value that is array.
@param string $key  Identifier of the session property we are interested in.
@param array  $data value to be pushed to existing session key.

Remove one or more session properties.
If $key is an array, it is interpreted as an array of string property
identifiers to remove. Otherwise, it is interpreted as the identifier
of a specific session property to remove.
@param array|string $key Identifier of the session property or properties to remove.

Magic method to set variables in the session by simply calling
 $session->foo = bar;
@param string       $key   Identifier of the session property to set.
@param array|string $value

Magic method to get session variables by simply calling
 $foo = $session->foo;
@param string $key Identifier of the session property to remove.
@return string|null

Magic method to check for session variables.
Different from has() in that it will validate 'session_id' as well.
Mostly used by internal PHP functions, users should stick to has()
@param string $key Identifier of the session property to remove.

Sets data into the session that will only last for a single request.
Perfect for use with single-use status update messages.
If $data is an array, it is interpreted as an associative array of
key/value pairs for flashdata properties.
Otherwise, it is interpreted as the identifier of a specific
flashdata property, with $value containing the property value.
@param array|string $data  Property identifier or associative array of properties
@param array|string $value Property value if $data is a scalar

Retrieve one or more items of flash data from the session.
If the item key is null, return all flashdata.
@param string $key Property identifier
@return array|null The requested property value, or an associative array  of them

Keeps a single piece of flash data alive for one more request.
@param array|string $key Property identifier or array of them

Mark a session property or properties as flashdata.
@param array|string $key Property identifier or array of them
@return bool False if any of the properties are not already set

Unmark data in the session as flashdata.
@param mixed $key Property identifier or array of them

Retrieve all of the keys for session data marked as flashdata.
@return array The property names of all flashdata

Sets new data into the session, and marks it as temporary data
with a set lifespan.
@param array|string $data  Session data key or associative array of items
@param null         $value Value to store
@param int          $ttl   Time-to-live in seconds

Returns either a single piece of tempdata, or all temp data currently
in the session.
@param string $key Session data key
@return mixed Session data value or null if not found.

Removes a single piece of temporary data from the session.
@param string $key Session data key

Mark one of more pieces of data as being temporary, meaning that
it has a set lifespan within the session.
@param array|string $key Property identifier or array of them
@param int          $ttl Time to live, in seconds
@return bool False if any of the properties were not set

Unmarks temporary data in the session, effectively removing its
lifespan and allowing it to live as long as the session does.
@param array|string $key Property identifier or array of them

Retrieve the keys of all session data that have been marked as temporary data.

Sets the driver as the session handler in PHP.
Extracted for easier testing.

Starts the session.
Extracted for testing reasons.

Takes care of setting the cookie on the client side.
@codeCoverageIgnore

@var Response $response

## References

**Database Tables (inferred)**
- `has`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Session\Session.php`

**Classes**:
- `CodeIgniter\Session\Session implements SessionInterface`

**Functions/Methods**:
- `__construct(SessionHandlerInterface $driver, App $config)`
- `start()`
- `stop()`
- `configure()`
- `configureSidLength()`
- `initVars()`
- `regenerate(bool $destroy = false)`
- `destroy()`
- `set($data, $value = null)`
- `get(?string $key = null)`
- `has(string $key)`
- `push(string $key, array $data)`
- `remove($key)`
- `__set(string $key, $value)`
- `__get(string $key)`
- `__isset(string $key)`
- `setFlashdata($data, $value = null)`
- `getFlashdata(?string $key = null)`
- `keepFlashdata($key)`
- `markAsFlashdata($key)`
- `unmarkFlashdata($key)`
- `getFlashKeys()`
- `setTempdata($data, $value = null, int $ttl = 300)`
- `getTempdata(?string $key = null)`
- `removeTempdata(string $key)`
- `markAsTempdata($key, int $ttl = 300)`
- `unmarkTempdata($key)`
- `getTempKeys()`
- `setSaveHandler()`
- `startSession()`
- `setCookie()`

