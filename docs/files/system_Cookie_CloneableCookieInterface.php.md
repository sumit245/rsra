# system\Cookie\CloneableCookieInterface.php

- Path: `system\Cookie\CloneableCookieInterface.php`
- Type: PHP
- Size: 2417 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Interface for a fresh Cookie instance with selected attribute(s)
only changed from the original instance.

Creates a new Cookie with a new cookie prefix.
@return static

Creates a new Cookie with a new name.
@return static

Creates a new Cookie with new value.
@return static

Creates a new Cookie with a new cookie expires time.
@param DateTimeInterface|int|string $expires
@return static

Creates a new Cookie that will expire the cookie from the browser.
@return static

Creates a new Cookie that will virtually never expire from the browser.
@return static

Creates a new Cookie with a new path on the server the cookie is available.
@return static

Creates a new Cookie with a new domain the cookie is available.
@return static

Creates a new Cookie with a new "Secure" attribute.
@return static

Creates a new Cookie with a new "HttpOnly" attribute
@return static

Creates a new Cookie with a new "SameSite" attribute.
@return static

Creates a new Cookie with URL encoding option updated.
@return static

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Cookie\CloneableCookieInterface.php`

**Functions/Methods**:
- `withPrefix(string $prefix = '')`
- `withName(string $name)`
- `withValue(string $value)`
- `withExpires($expires)`
- `withExpired()`
- `withNeverExpiring()`
- `withPath(?string $path)`
- `withDomain(?string $domain)`
- `withSecure(bool $secure = true)`
- `withHTTPOnly(bool $httponly = true)`
- `withSameSite(string $samesite)`
- `withRaw(bool $raw = true)`

