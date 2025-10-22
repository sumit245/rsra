# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Cookie\SetCookie.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Cookie\SetCookie.php`
- Type: PHP
- Size: 10435 bytes

## Summary (from docblocks)

Set-Cookie object

@var array

@var array Cookie data

Create a new SetCookie object from a string
@param string $cookie Set-Cookie header string
@return self

@param array $data Array of cookie data provided by a Cookie parser

Get the cookie name
@return string

Set the cookie name
@param string $name Cookie name

Get the cookie value
@return string

Set the cookie value
@param string $value Cookie value

Get the domain
@return string|null

Set the domain of the cookie
@param string $domain

Get the path
@return string

Set the path of the cookie
@param string $path Path of the cookie

Maximum lifetime of the cookie in seconds
@return int|null

Set the max-age of the cookie
@param int $maxAge Max age of the cookie in seconds

The UNIX timestamp when the cookie Expires
@return mixed

Set the unix timestamp for which the cookie will expire
@param int $timestamp Unix timestamp

Get whether or not this is a secure cookie
@return null|bool

Set whether or not the cookie is secure
@param bool $secure Set to true or false if secure

Get whether or not this is a session cookie
@return null|bool

Set whether or not this is a session cookie
@param bool $discard Set to true or false if this is a session cookie

Get whether or not this is an HTTP only cookie
@return bool

Set whether or not this is an HTTP only cookie
@param bool $httpOnly Set to true or false if this is HTTP only

Check if the cookie matches a path value.
A request-path path-matches a given cookie-path if at least one of
the following conditions holds:
- The cookie-path and the request-path are identical.
- The cookie-path is a prefix of the request-path, and the last
  character of the cookie-path is %x2F ("/").
- The cookie-path is a prefix of the request-path, and the first
  character of the request-path that is not included in the cookie-
  path is a %x2F ("/") character.
@param string $requestPath Path to check against
@return bool

Check if the cookie matches a domain value
@param string $domain Domain to check against
@return bool

Check if the cookie is expired
@return bool

Check if the cookie is valid according to RFC 6265
@return bool|string Returns true if valid or an error message if invalid

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Cookie\SetCookie.php`

**Classes**:
- `GuzzleHttp\Cookie\SetCookie`

**Functions/Methods**:
- `fromString($cookie)`
- `__construct(array $data = [])`
- `__toString()`
- `toArray()`
- `getName()`
- `setName($name)`
- `getValue()`
- `setValue($value)`
- `getDomain()`
- `setDomain($domain)`
- `getPath()`
- `setPath($path)`
- `getMaxAge()`
- `setMaxAge($maxAge)`
- `getExpires()`
- `setExpires($timestamp)`
- `getSecure()`
- `setSecure($secure)`
- `getDiscard()`
- `setDiscard($discard)`
- `getHttpOnly()`
- `setHttpOnly($httpOnly)`
- `matchesPath($requestPath)`
- `matchesDomain($domain)`
- `isExpired()`
- `validate()`

