# system\HTTP\URI.php

- Path: `system\HTTP\URI.php`
- Type: PHP
- Size: 27043 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Abstraction for a uniform resource identifier (URI).

Sub-delimiters used in query strings and fragments.

Unreserved characters used in paths, query strings, and fragments.

Current URI string
@var string

List of URI segments.
Starts at 1 instead of 0
@var array

The URI Scheme.
@var string

URI User Info
@var string

URI User Password
@var string

URI Host
@var string

URI Port
@var int

URI path.
@var string

The name of any fragment.
@var string

The query string.
@var array

Default schemes/ports.
@var array

Whether passwords should be shown in userInfo/authority calls.
Default to false because URIs often show up in logs
@var bool

If true, will continue instead of throwing exceptions.
@var bool

If true, will use raw query string.
@var bool

Builds a representation of the string from the component parts.
@param string $scheme
@param string $authority
@param string $path
@param string $query
@param string $fragment

Used when resolving and merging paths to correctly interpret and
remove single and double dot segments from the path per
RFC 3986 Section 5.2.4
@see http://tools.ietf.org/html/rfc3986#section-5.2.4
@internal

Constructor.
@param string $uri
@throws InvalidArgumentException

If $silent == true, then will not throw exceptions and will
attempt to continue gracefully.
@return URI

If $raw == true, then will use parseStr() method
instead of native parse_str() function.
@return URI

Sets and overwrites any current URI information.
@return URI

Retrieve the scheme component of the URI.
If no scheme is present, this method MUST return an empty string.
The value returned MUST be normalized to lowercase, per RFC 3986
Section 3.1.
The trailing ":" character is not part of the scheme and MUST NOT be
added.
@see    https://tools.ietf.org/html/rfc3986#section-3.1
@return string The URI scheme.

Retrieve the authority component of the URI.
If no authority information is present, this method MUST return an empty
string.
The authority syntax of the URI is:
<pre>
[user-info@]host[:port]
</pre>
If the port component is not set or is the standard port for the current
scheme, it SHOULD NOT be included.
@see https://tools.ietf.org/html/rfc3986#section-3.2
@return string The URI authority, in "[user-info@]host[:port]" format.

Retrieve the user information component of the URI.
If no user information is present, this method MUST return an empty
string.
If a user is present in the URI, this will return that value;
additionally, if the password is also present, it will be appended to the
user value, with a colon (":") separating the values.
NOTE that be default, the password, if available, will NOT be shown
as a security measure as discussed in RFC 3986, Section 7.5. If you know
the password is not a security issue, you can force it to be shown
with $this->showPassword();
The trailing "@" character is not part of the user information and MUST
NOT be added.
@return string|null The URI user information, in "username[:password]" format.

Temporarily sets the URI to show a password in userInfo. Will
reset itself after the first call to authority().
@return URI

Retrieve the host component of the URI.
If no host is present, this method MUST return an empty string.
The value returned MUST be normalized to lowercase, per RFC 3986
Section 3.2.2.
@see    http://tools.ietf.org/html/rfc3986#section-3.2.2
@return string The URI host.

Retrieve the port component of the URI.
If a port is present, and it is non-standard for the current scheme,
this method MUST return it as an integer. If the port is the standard port
used with the current scheme, this method SHOULD return null.
If no port is present, and no scheme is present, this method MUST return
a null value.
If no port is present, but a scheme is present, this method MAY return
the standard port for that scheme, but SHOULD return null.
@return int|null The URI port.

Retrieve the path component of the URI.
The path can either be empty or absolute (starting with a slash) or
rootless (not starting with a slash). Implementations MUST support all
three syntaxes.
Normally, the empty path "" and absolute path "/" are considered equal as
defined in RFC 7230 Section 2.7.3. But this method MUST NOT automatically
do this normalization because in contexts with a trimmed base path, e.g.
the front controller, this difference becomes significant. It's the task
of the user to handle both "" and "/".
The value returned MUST be percent-encoded, but MUST NOT double-encode
any characters. To determine what characters to encode, please refer to
RFC 3986, Sections 2 and 3.3.
As an example, if the value should include a slash ("/") not intended as
delimiter between path segments, that value MUST be passed in encoded
form (e.g., "%2F") to the instance.
@see    https://tools.ietf.org/html/rfc3986#section-2
@see    https://tools.ietf.org/html/rfc3986#section-3.3
@return string The URI path.

Retrieve the query string

Retrieve a URI fragment

Returns the segments of the path as an array.

Returns the value of a specific segment of the URI path.
@param int    $number  Segment number
@param string $default Default value
@return string The value of the segment. If no segment is found,
               throws InvalidArgumentError

Set the value of a specific segment of the URI path.
Allows to set only existing segments or add new one.
@param mixed $value (string or int)
@return $this

Returns the total number of segments.

Formats the URI as a string.
Warning: For backwards-compatability this method
assumes URIs with the same host as baseURL should
be relative to the project's configuration.
This aspect of __toString() is deprecated and should be avoided.

Change the path (and scheme) assuming URIs with the same host as baseURL
should be relative to the project's configuration.
@deprecated This method will be deleted.

Parses the given string and saves the appropriate authority pieces.
@return $this

Sets the scheme for this URI.
Because of the large number of valid schemes we cannot limit this
to only http or https.
@see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
@return $this

Sets the userInfo/Authority portion of the URI.
@param string $user The user's username
@param string $pass The user's password
@return $this

Sets the host name to use.
@return $this

Sets the port portion of the URI.
@param int $port
@return $this

Sets the path portion of the URI.
@return $this

Sets the path portion of the URI based on segments.
@return $this

Sets the query portion of the URI, while attempting
to clean the various parts of the query keys and values.
@return $this

A convenience method to pass an array of items in as the Query
portion of the URI.
@return URI

Adds a single new element to the query vars.
@param mixed $value
@return $this

Removes one or more query vars from the URI.
@param string ...$params
@return $this

Filters the query variables so that only the keys passed in
are kept. The rest are removed from the object.
@param string ...$params
@return $this

Sets the fragment portion of the URI.
@see https://tools.ietf.org/html/rfc3986#section-3.5
@return $this

Encodes any dangerous characters, and removes dot segments.
While dot segments have valid uses according to the spec,
this URI class does not allow them.

Saves our parts from a parse_url call.

Combines one URI string with this one based on the rules set out in
RFC 3986 Section 2
@see http://tools.ietf.org/html/rfc3986#section-5.2
@return URI

Given 2 paths, will merge them according to rules set out in RFC 2986,
Section 5.2
@see http://tools.ietf.org/html/rfc3986#section-5.2.3

This is equivalent to the native PHP parse_str() function.
This version allows the dot to be used as a key of the query string.

## References

**Database Tables (inferred)**
- `the`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\URI.php`

**Classes**:
- `CodeIgniter\HTTP\URI`
- `CodeIgniter\HTTP\does`

**Functions/Methods**:
- `createURIString(?string $scheme = null, ?string $authority = null, ?string $path = null, ?string $query = null, ?string $fragment = null)`
- `removeDotSegments(string $path)`
- `__construct(?string $uri = null)`
- `setSilent(bool $silent = true)`
- `useRawQueryString(bool $raw = true)`
- `setURI(?string $uri = null)`
- `getScheme()`
- `getAuthority(bool $ignorePort = false)`
- `getUserInfo()`
- `showPassword(bool $val = true)`
- `getHost()`
- `getPort()`
- `getPath()`
- `getQuery(array $options = [])`
- `getFragment()`
- `getSegments()`
- `getSegment(int $number, string $default = '')`
- `setSegment(int $number, $value)`
- `getTotalSegments()`
- `__toString()`
- `changeSchemeAndPath(string $scheme, string $path)`
- `setAuthority(string $str)`
- `setScheme(string $str)`
- `setUserInfo(string $user, string $pass)`
- `setHost(string $str)`
- `setPort(?int $port = null)`
- `setPath(string $path)`
- `refreshPath()`
- `setQuery(string $query)`
- `setQueryArray(array $query)`
- `addQuery(string $key, $value = null)`
- `stripQuery(...$params)`
- `keepQuery(...$params)`
- `setFragment(string $string)`
- `filterPath(?string $path = null)`
- `applyParts(array $parts)`
- `resolveRelativeURI(string $uri)`
- `mergePaths(self $base, self $reference)`
- `parseStr(string $query)`

