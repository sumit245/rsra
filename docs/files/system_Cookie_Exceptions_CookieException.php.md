# system\Cookie\Exceptions\CookieException.php

- Path: `system\Cookie\Exceptions\CookieException.php`
- Type: PHP
- Size: 3223 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

CookieException is thrown for invalid cookies initialization and management.

Thrown for invalid type given for the "Expires" attribute.
@return static

Thrown when the value provided for "Expires" is invalid.
@return static

Thrown when the cookie name contains invalid characters per RFC 2616.
@return static

Thrown when the cookie name is empty.
@return static

Thrown when using the `__Secure-` prefix but the `Secure` attribute
is not set to true.
@return static

Thrown when using the `__Host-` prefix but the `Secure` flag is not
set, the `Domain` is set, and the `Path` is not `/`.
@return static

Thrown when the `SameSite` attribute given is not of the valid types.
@return static

Thrown when the `SameSite` attribute is set to `None` but the `Secure`
attribute is not set.
@return static

Thrown when the `CookieStore` class is filled with invalid Cookie objects.
@param array<int|string> $data
@return static

Thrown when the queried Cookie object does not exist in the cookie collection.
@param string[] $data
@return static

## Symbols

# Symbols

**Files documented**: 1

## `system\Cookie\Exceptions\CookieException.php`

**Classes**:
- `CodeIgniter\Cookie\Exceptions\CookieException extends FrameworkException`
- `CodeIgniter\Cookie\Exceptions\is`

**Functions/Methods**:
- `forInvalidExpiresTime(string $type)`
- `forInvalidExpiresValue()`
- `forInvalidCookieName(string $name)`
- `forEmptyCookieName()`
- `forInvalidSecurePrefix()`
- `forInvalidHostPrefix()`
- `forInvalidSameSite(string $sameSite)`
- `forInvalidSameSiteNone()`
- `forInvalidCookieInstance(array $data)`
- `forUnknownCookieInstance(array $data)`

