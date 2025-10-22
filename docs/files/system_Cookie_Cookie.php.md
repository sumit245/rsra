# system\Cookie\Cookie.php

- Path: `system\Cookie\Cookie.php`
- Type: PHP
- Size: 19403 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

A `Cookie` class represents an immutable HTTP cookie value object.
Being immutable, modifying one or more of its attributes will return
a new `Cookie` instance, rather than modifying itself. Users should
reassign this new instance to a new variable to capture it.
```php
$cookie = new Cookie('test_cookie', 'test_value');
$cookie->getName(); // test_cookie
$cookie->withName('prod_cookie');
$cookie->getName(); // test_cookie
$cookie2 = $cookie->withName('prod_cookie');
$cookie2->getName(); // prod_cookie
```

@var string

@var string

@var string

@var int

@var string

@var string

@var bool

@var bool

@var string

@var bool

Default attributes for a Cookie object. The keys here are the
lowercase attribute names. Do not camelCase!
@var array<string, mixed>

A cookie name can be any US-ASCII characters, except control characters,
spaces, tabs, or separator characters.
@see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#attributes
@see https://tools.ietf.org/html/rfc2616#section-2.2

Set the default attributes to a Cookie instance by injecting
the values from the `CookieConfig` config or an array.
This method is called from Response::__construct().
@param array<string, mixed>|CookieConfig $config
@return array<string, mixed> The old defaults array. Useful for resetting.

Create a new Cookie instance from a `Set-Cookie` header.
@throws CookieException
@return static

Construct a new Cookie instance.
@param string               $name    The cookie's name
@param string               $value   The cookie's value
@param array<string, mixed> $options The cookie's options
@throws CookieException

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

Whether an offset exists.
@param mixed $offset

Offset to retrieve.
@param mixed $offset
@throws InvalidArgumentException
@return mixed

Offset to set.
@param mixed $offset
@param mixed $value
@throws LogicException

Offset to unset.
@param mixed $offset
@throws LogicException

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

Converts expires time to Unix format.
@param DateTimeInterface|int|string $expires

Validates the cookie name per RFC 2616.
If `$raw` is true, names should not contain invalid characters
as `setrawcookie()` will reject this.
@throws CookieException

Validates the special prefixes if some attribute requirements are met.
@throws CookieException

Validates the `SameSite` to be within the allowed types.
@throws CookieException
@see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie/SameSite

## References

**Database Tables (inferred)**
- `the`
- `Response`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `system\Cookie\Cookie.php`

**Classes**:
- `CodeIgniter\Cookie\represents`
- `CodeIgniter\Cookie\Cookie implements ArrayAccess, CloneableCookieInterface`

**Functions/Methods**:
- `setDefaults($config = [])`
- `fromHeaderString(string $cookie, bool $raw = false)`
- `__construct(string $name, string $value = '', array $options = [])`
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
- `offsetExists($offset)`
- `offsetGet($offset)`
- `offsetSet($offset, $value)`
- `offsetUnset($offset)`
- `toHeaderString()`
- `__toString()`
- `toArray()`
- `convertExpiresTimestamp($expires = 0)`
- `validateName(string $name, bool $raw)`
- `validatePrefix(string $prefix, bool $secure, string $path, string $domain)`
- `validateSameSite(string $samesite, bool $secure)`

