# system\Cookie\CookieInterface.php

- Path: `system\Cookie\CookieInterface.php`
- Type: PHP
- Size: 4285 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Interface for a value object representation of an HTTP cookie.
@see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie

Cookies will be sent in all contexts, i.e in responses to both
first-party and cross-origin requests. If `SameSite=None` is set,
the cookie `Secure` attribute must also be set (or the cookie will be blocked).

Cookies are not sent on normal cross-site subrequests (for example to
load images or frames into a third party site), but are sent when a
user is navigating to the origin site (i.e. when following a link).

Cookies will only be sent in a first-party context and not be sent
along with requests initiated by third party websites.

RFC 6265 allowed values for the "SameSite" attribute.
@see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie/SameSite

Expires date format.
@see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Date
@see https://tools.ietf.org/html/rfc7231#section-7.1.1.2

Returns a unique identifier for the cookie consisting
of its prefixed name, path, and domain.

Gets the cookie prefix.

Gets the cookie name.

Gets the cookie name prepended with the prefix, if any.

Gets the cookie value.

Gets the time in Unix timestamp the cookie expires.

Gets the formatted expires time.

Checks if the cookie is expired.

Gets the "Max-Age" cookie attribute.

Gets the "Path" cookie attribute.

Gets the "Domain" cookie attribute.

Gets the "Secure" cookie attribute.
Checks if the cookie is only sent to the server when a request is made
with the `https:` scheme (except on `localhost`), and therefore is more
resistent to man-in-the-middle attacks.

Gets the "HttpOnly" cookie attribute.
Checks if JavaScript is forbidden from accessing the cookie.

Gets the "SameSite" cookie attribute.

Checks if the cookie should be sent with no URL encoding.

Gets the options that are passable to the `setcookie` variant
available on PHP 7.3+
@return array<string, mixed>

Returns the Cookie as a header value.

Returns the string representation of the Cookie object.
@return string

Returns the array representation of the Cookie object.
@return array<string, mixed>

## References

**Database Tables (inferred)**
- `accessing`

## Symbols

# Symbols

**Files documented**: 1

## `system\Cookie\CookieInterface.php`

**Functions/Methods**:
- `getId()`
- `getPrefix()`
- `getName()`
- `getPrefixedName()`
- `getValue()`
- `getExpiresTimestamp()`
- `getExpiresString()`
- `isExpired()`
- `getMaxAge()`
- `getPath()`
- `getDomain()`
- `isSecure()`
- `isHTTPOnly()`
- `getSameSite()`
- `isRaw()`
- `getOptions()`
- `toHeaderString()`
- `__toString()`
- `toArray()`

