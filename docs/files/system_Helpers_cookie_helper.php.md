# system\Helpers\cookie_helper.php

- Path: `system\Helpers\cookie_helper.php`
- Type: PHP
- Size: 3699 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Set cookie
Accepts seven parameters, or you can submit an associative
array in the first parameter containing all the values.
@param array|string $name     Cookie name or array containing binds
@param string       $value    The value of the cookie
@param string       $expire   The number of seconds until expiration
@param string       $domain   For site-wide cookie. Usually: .yourdomain.com
@param string       $path     The cookie path
@param string       $prefix   The cookie prefix ('': the default prefix)
@param bool         $secure   True makes the cookie secure
@param bool         $httpOnly True makes the cookie accessible via http(s) only (no javascript)
@param string|null  $sameSite The cookie SameSite value
@see \CodeIgniter\HTTP\Response::setCookie()

Fetch an item from the $_COOKIE array
@param string      $index
@param string|null $prefix Cookie name prefix.
                           '': the prefix in Config\Cookie
                           null: no prefix
@return array|string|null
@see \CodeIgniter\HTTP\IncomingRequest::getCookie()

@var Cookie|null $cookie

Delete a cookie
@param mixed  $name
@param string $domain the cookie domain. Usually: .yourdomain.com
@param string $path   the cookie path
@param string $prefix the cookie prefix
@see \CodeIgniter\HTTP\Response::deleteCookie()

Checks if a cookie exists by name.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Helpers\cookie_helper.php`

**Functions/Methods**:
- `set_cookie($name,
        string $value = '',
        string $expire = '',
        string $domain = '',
        string $path = '/',
        string $prefix = '',
        bool $secure = false,
        bool $httpOnly = false,
        ?string $sameSite = null)`
- `get_cookie($index, bool $xssClean = false, ?string $prefix = '')`
- `delete_cookie($name, string $domain = '', string $path = '/', string $prefix = '')`
- `has_cookie(string $name, ?string $value = null, string $prefix = '')`

