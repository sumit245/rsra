# system\HTTP\IncomingRequest.php

- Path: `system\HTTP\IncomingRequest.php`
- Type: PHP
- Size: 22986 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class IncomingRequest
Represents an incoming, getServer-side HTTP request.
Per the HTTP specification, this interface includes properties for
each of the following:
- Protocol version
- HTTP method
- URI
- Headers
- Message body
Additionally, it encapsulates all data as it has arrived to the
application from the CGI and/or PHP environment, including:
- The values represented in $_SERVER.
- Any cookies provided (generally via $_COOKIE)
- Query string arguments (generally via $_GET, or as parsed via parse_str())
- Upload files, if any (as represented by $_FILES)
- Deserialized body binds (generally from $_POST)

Enable CSRF flag
Enables a CSRF cookie token to be set.
Set automatically based on Config setting.
@var bool
@deprecated Not used

The URI for this request.
Note: This WILL NOT match the actual URL in the browser since for
everything this cares about (and the router, etc) is the portion
AFTER the script name. So, if hosted in a sub-folder this will
appear different than actual URL. If you need that use getPath().
@TODO should be protected. Use getUri() instead.
@var URI

The detected path (relative to SCRIPT_NAME).
Note: current_url() uses this to build its URI,
so this becomes the source for the "current URL"
when working with the share request instance.
@var string|null

File collection
@var FileCollection|null

Negotiator
@var Negotiate|null

The default Locale this request
should operate under.
@var string

The current locale of the application.
Default value is set in Config\App.php
@var string

Stores the valid locale codes.
@var array

Configuration settings.
@var App

Holds the old data from a redirect.
@var array

The user agent this request is from.
@var UserAgent

Constructor
@param App         $config
@param URI         $uri
@param string|null $body
@param UserAgent   $userAgent

Handles setting up the locale, perhaps auto-detecting through
content negotiation.
@param App $config

Sets up our URI object based on the information we have. This is
either provided by the user in the baseURL Config setting, or
determined from the environment as needed.

Detects the relative path based on
the URIProtocol Config setting.

Will parse the REQUEST_URI and automatically detect the URI from it,
fixing the query string if necessary.
@return string The URI it found.

Parse QUERY_STRING
Will parse QUERY_STRING and automatically detect the URI from it.

Provides a convenient way to work with the Negotiate class
for content negotiation.

Determines if this request was made from the command line (CLI).

Test to see if a request contains the HTTP_X_REQUESTED_WITH header.

Attempts to detect if the current connection is secure through
a few different methods.

Sets the relative path and updates the URI object.
Note: Since current_url() accesses the shared request
instance, this can be used to change the "current URL"
for testing.
@param string $path   URI path relative to SCRIPT_NAME
@param App    $config Optional alternate config to use
@return $this

Returns the path relative to SCRIPT_NAME,
running detection as necessary.

Sets the locale string for this request.
@return IncomingRequest

Gets the current locale, with a fallback to the default
locale if none is set.

Returns the default locale as set in Config\App.php

Fetch an item from JSON input stream with fallback to $_REQUEST object. This is the simplest way
to grab data from the request object and can be used in lieu of the
other get* methods in most cases.
@param array|string|null $index
@param int|null          $filter Filter constant
@param mixed             $flags
@return mixed

A convenience method that grabs the raw input stream and decodes
the JSON into an array.
If $assoc == true, then all objects in the response will be converted
to associative arrays.
@param bool $assoc   Whether to return objects as associative arrays
@param int  $depth   How many levels deep to decode
@param int  $options Bitmask of options
@see http://php.net/manual/en/function.json-decode.php
@return mixed

Get a specific variable from a JSON input stream
@param string         $index  The variable that you want which can use dot syntax for getting specific values.
@param bool           $assoc  If true, return the result as an associative array.
@param int|null       $filter Filter Constant
@param array|int|null $flags  Option
@return mixed

A convenience method that grabs the raw input stream(send method in PUT, PATCH, DELETE) and decodes
the String into an array.
@return mixed

Fetch an item from GET data.
@param array|string|null $index  Index for item to fetch from $_GET.
@param int|null          $filter A filter name to apply.
@param mixed|null        $flags
@return mixed

Fetch an item from POST.
@param array|string|null $index  Index for item to fetch from $_POST.
@param int|null          $filter A filter name to apply
@param mixed             $flags
@return mixed

Fetch an item from POST data with fallback to GET.
@param array|string|null $index  Index for item to fetch from $_POST or $_GET
@param int|null          $filter A filter name to apply
@param mixed             $flags
@return mixed

Fetch an item from GET data with fallback to POST.
@param array|string|null $index  Index for item to be fetched from $_GET or $_POST
@param int|null          $filter A filter name to apply
@param mixed             $flags
@return mixed

Fetch an item from the COOKIE array.
@param array|string|null $index  Index for item to be fetched from $_COOKIE
@param int|null          $filter A filter name to be applied
@param mixed             $flags
@return mixed

Fetch the user agent string
@return UserAgent

Attempts to get old Input data that has been flashed to the session
with redirect_with_input(). It first checks for the data in the old
POST data, then the old GET data and finally check for dot arrays
@return mixed

Returns an array of all files that have been uploaded with this
request. Each file is represented by an UploadedFile instance.

Verify if a file exist, by the name of the input field used to upload it, in the collection
of uploaded files and if is have been uploaded with multiple option.
@return array|null

Retrieves a single file by the name of the input field used
to upload it.
@return UploadedFile|null

Remove relative directory (../) and multi slashes (///)
Do some final cleaning of the URI and return it, currently only used in static::_parse_request_uri()
@deprecated Use URI::removeDotSegments() directly

## References

**Database Tables (inferred)**
- `the`
- `a`
- `php`
- `it`
- `JSON`
- `GET`
- `POST`

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\IncomingRequest.php`

**Classes**:
- `CodeIgniter\HTTP\IncomingRequest extends Request`

**Functions/Methods**:
- `__construct($config, ?URI $uri = null, $body = 'php://input', ?UserAgent $userAgent = null)`
- `detectLocale($config)`
- `detectURI(string $protocol, string $baseURL)`
- `detectPath(string $protocol = '')`
- `parseRequestURI()`
- `parseQueryString()`
- `negotiate(string $type, array $supported, bool $strictMatch = false)`
- `isCLI()`
- `isAJAX()`
- `isSecure()`
- `setPath(string $path, ?App $config = null)`
- `getPath()`
- `setLocale(string $locale)`
- `getLocale()`
- `getDefaultLocale()`
- `getVar($index = null, $filter = null, $flags = null)`
- `getJSON(bool $assoc = false, int $depth = 512, int $options = 0)`
- `getJsonVar(string $index, bool $assoc = false, ?int $filter = null, $flags = null)`
- `getRawInput()`
- `getGet($index = null, $filter = null, $flags = null)`
- `getPost($index = null, $filter = null, $flags = null)`
- `getPostGet($index = null, $filter = null, $flags = null)`
- `getGetPost($index = null, $filter = null, $flags = null)`
- `getCookie($index = null, $filter = null, $flags = null)`
- `getUserAgent()`
- `getOldInput(string $key)`
- `getFiles()`
- `getFileMultiple(string $fileID)`
- `getFile(string $fileID)`
- `removeRelativeDirectory(string $uri)`

