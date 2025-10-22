# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\Uri.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\Uri.php`
- Type: PHP
- Size: 19811 bytes

## Summary (from docblocks)

PSR-7 URI implementation.
@author Michael Dowling
@author Tobias Schultze
@author Matthew Weier O'Phinney

Absolute http and https URIs require a host per RFC 7230 Section 2.7
but in generic URIs the host can be empty. So for http(s) URIs
we apply this default host when no host is given yet to form a
valid URI.

@var string Uri scheme.

@var string Uri user info.

@var string Uri host.

@var int|null Uri port.

@var string Uri path.

@var string Uri query string.

@var string Uri fragment.

@param string $uri URI to parse

Composes a URI reference string from its various components.
Usually this method does not need to be called manually but instead is used indirectly via
`Psr\Http\Message\UriInterface::__toString`.
PSR-7 UriInterface treats an empty component the same as a missing component as
getQuery(), getFragment() etc. always return a string. This explains the slight
difference to RFC 3986 Section 5.3.
Another adjustment is that the authority separator is added even when the authority is missing/empty
for the "file" scheme. This is because PHP stream functions like `file_get_contents` only work with
`file:///myfile` but not with `file:/myfile` although they are equivalent according to RFC 3986. But
`file:///` is the more common syntax for the file scheme anyway (Chrome for example redirects to
that format).
@param string $scheme
@param string $authority
@param string $path
@param string $query
@param string $fragment
@return string
@link https://tools.ietf.org/html/rfc3986#section-5.3

Whether the URI has the default port of the current scheme.
`Psr\Http\Message\UriInterface::getPort` may return null or the standard port. This method can be used
independently of the implementation.
@param UriInterface $uri
@return bool

Whether the URI is absolute, i.e. it has a scheme.
An instance of UriInterface can either be an absolute URI or a relative reference. This method returns true
if it is the former. An absolute URI has a scheme. A relative reference is used to express a URI relative
to another URI, the base URI. Relative references can be divided into several forms:
- network-path references, e.g. '//example.com/path'
- absolute-path references, e.g. '/path'
- relative-path references, e.g. 'subpath'
@param UriInterface $uri
@return bool
@see Uri::isNetworkPathReference
@see Uri::isAbsolutePathReference
@see Uri::isRelativePathReference
@link https://tools.ietf.org/html/rfc3986#section-4

Whether the URI is a network-path reference.
A relative reference that begins with two slash characters is termed an network-path reference.
@param UriInterface $uri
@return bool
@link https://tools.ietf.org/html/rfc3986#section-4.2

Whether the URI is a absolute-path reference.
A relative reference that begins with a single slash character is termed an absolute-path reference.
@param UriInterface $uri
@return bool
@link https://tools.ietf.org/html/rfc3986#section-4.2

Whether the URI is a relative-path reference.
A relative reference that does not begin with a slash character is termed a relative-path reference.
@param UriInterface $uri
@return bool
@link https://tools.ietf.org/html/rfc3986#section-4.2

Whether the URI is a same-document reference.
A same-document reference refers to a URI that is, aside from its fragment
component, identical to the base URI. When no base URI is given, only an empty
URI reference (apart from its fragment) is considered a same-document reference.
@param UriInterface      $uri  The URI to check
@param UriInterface|null $base An optional base URI to compare against
@return bool
@link https://tools.ietf.org/html/rfc3986#section-4.4

Removes dot segments from a path and returns the new path.
@param string $path
@return string
@deprecated since version 1.4. Use UriResolver::removeDotSegments instead.
@see UriResolver::removeDotSegments

Converts the relative URI into a new URI that is resolved against the base URI.
@param UriInterface        $base Base URI
@param string|UriInterface $rel  Relative URI
@return UriInterface
@deprecated since version 1.4. Use UriResolver::resolve instead.
@see UriResolver::resolve

Creates a new URI with a specific query string value removed.
Any existing query string values that exactly match the provided key are
removed.
@param UriInterface $uri URI to use as a base.
@param string       $key Query string key to remove.
@return UriInterface

Creates a new URI with a specific query string value.
Any existing query string values that exactly match the provided key are
removed and replaced with the given key value pair.
A value of null will set the query string key without a value, e.g. "key"
instead of "key=value".
@param UriInterface $uri   URI to use as a base.
@param string       $key   Key to set.
@param string|null  $value Value to set
@return UriInterface

Creates a URI from a hash of `parse_url` components.
@param array $parts
@return UriInterface
@link http://php.net/manual/en/function.parse-url.php
@throws \InvalidArgumentException If the components do not form a valid URI.

Apply parse_url parts to a URI.
@param array $parts Array of parse_url parts to apply.

@param string $scheme
@return string
@throws \InvalidArgumentException If the scheme is invalid.

@param string $host
@return string
@throws \InvalidArgumentException If the host is invalid.

@param int|null $port
@return int|null
@throws \InvalidArgumentException If the port is invalid.

Filters the path of a URI
@param string $path
@return string
@throws \InvalidArgumentException If the path is invalid.

Filters the query string or fragment of a URI.
@param string $str
@return string
@throws \InvalidArgumentException If the query or fragment is invalid.

## References

**Database Tables (inferred)**
- `its`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\Uri.php`

**Classes**:
- `GuzzleHttp\Psr7\Uri implements UriInterface`

**Functions/Methods**:
- `__construct($uri = '')`
- `__toString()`
- `composeComponents($scheme, $authority, $path, $query, $fragment)`
- `isDefaultPort(UriInterface $uri)`
- `isAbsolute(UriInterface $uri)`
- `isNetworkPathReference(UriInterface $uri)`
- `isAbsolutePathReference(UriInterface $uri)`
- `isRelativePathReference(UriInterface $uri)`
- `isSameDocumentReference(UriInterface $uri, UriInterface $base = null)`
- `removeDotSegments($path)`
- `resolve(UriInterface $base, $rel)`
- `withoutQueryValue(UriInterface $uri, $key)`
- `withQueryValue(UriInterface $uri, $key, $value)`
- `fromParts(array $parts)`
- `getScheme()`
- `getAuthority()`
- `getUserInfo()`
- `getHost()`
- `getPort()`
- `getPath()`
- `getQuery()`
- `getFragment()`
- `withScheme($scheme)`
- `withUserInfo($user, $password = null)`
- `withHost($host)`
- `withPort($port)`
- `withPath($path)`
- `withQuery($query)`
- `withFragment($fragment)`
- `applyParts(array $parts)`
- `filterScheme($scheme)`
- `filterHost($host)`
- `filterPort($port)`
- `removeDefaultPort()`
- `filterPath($path)`
- `filterQueryAndFragment($str)`
- `rawurlencodeMatchZero(array $match)`
- `validateState()`

