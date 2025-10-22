# system\Security\Security.php

- Path: `system\Security\Security.php`
- Type: PHP
- Size: 15294 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class Security
Provides methods that help protect your site against
Cross-Site Request Forgery attacks.

CSRF Protection Method
Protection Method for Cross Site Request Forgery protection.
@var string 'cookie' or 'session'

CSRF Token Randomization
@var bool

CSRF Hash
Random hash for Cross Site Request Forgery protection.
@var string|null

CSRF Token Name
Token name for Cross Site Request Forgery protection.
@var string

CSRF Header Name
Header name for Cross Site Request Forgery protection.
@var string

The CSRF Cookie instance.
@var Cookie

CSRF Cookie Name
Cookie name for Cross Site Request Forgery protection.
@var string

CSRF Expires
Expiration time for Cross Site Request Forgery protection cookie.
Defaults to two hours (in seconds).
@var int

CSRF Regenerate
Regenerate CSRF Token on every request.
@var bool

CSRF Redirect
Redirect to previous page with error on failure.
@var bool

CSRF SameSite
Setting for CSRF SameSite cookie token.
Allowed values are: None - Lax - Strict - ''.
Defaults to `Lax` as recommended in this link:
@see https://portswigger.net/web-security/csrf/samesite-cookies
@var string
@deprecated `Config\Cookie` $samesite property is used.

CSRF Cookie Name without Prefix

Session instance.

Constructor.
Stores our configuration and fires off the init() method to setup
initial state.

@var SecurityConfig|null $security

@var CookieConfig|null $cookie

CSRF Verify
@throws SecurityException
@return $this|false
@deprecated Use `CodeIgniter\Security\Security::verify()` instead of using this method.
@codeCoverageIgnore

Returns the CSRF Hash.
@deprecated Use `CodeIgniter\Security\Security::getHash()` instead of using this method.
@codeCoverageIgnore

Returns the CSRF Token Name.
@deprecated Use `CodeIgniter\Security\Security::getTokenName()` instead of using this method.
@codeCoverageIgnore

CSRF Verify
@throws SecurityException
@return $this

Returns the CSRF Hash.

Randomize hash to avoid BREACH attacks.

Derandomize the token.

Returns the CSRF Token Name.

Returns the CSRF Header Name.

Returns the CSRF Cookie Name.

Check if CSRF cookie is expired.
@deprecated
@codeCoverageIgnore

Check if request should be redirect on failure.

Sanitize Filename
Tries to sanitize filenames in order to prevent directory traversal attempts
and other security threats, which is particularly useful for files that
were supplied via user input.
If it is acceptable for the user input to include relative paths,
e.g. file/in/some/approved/folder.txt, you can set the second optional
parameter, $relative_path to TRUE.
@param string $str          Input file name
@param bool   $relativePath Whether to preserve paths

Generates the CSRF Hash.

@var Response $response

CSRF Send Cookie
@return false|Security
@deprecated Set cookies to Response object instead.

Actual dispatching of cookies.
Extracted for this to be unit tested.
@codeCoverageIgnore
@deprecated Set cookies to Response object instead.

## Symbols

# Symbols

**Files documented**: 1

## `system\Security\Security.php`

**Classes**:
- `CodeIgniter\Security\Security implements SecurityInterface`

**Functions/Methods**:
- `__construct(App $config)`
- `isCSRFCookie()`
- `configureSession()`
- `configureCookie(App $config)`
- `CSRFVerify(RequestInterface $request)`
- `getCSRFHash()`
- `getCSRFTokenName()`
- `verify(RequestInterface $request)`
- `getPostedToken(RequestInterface $request)`
- `getHash()`
- `randomize(string $hash)`
- `derandomize(string $token)`
- `getTokenName()`
- `getHeaderName()`
- `getCookieName()`
- `isExpired()`
- `shouldRedirect()`
- `sanitizeFilename(string $str, bool $relativePath = false)`
- `generateHash()`
- `isHashInCookie()`
- `saveHashInCookie()`
- `sendCookie(RequestInterface $request)`
- `doSendCookie()`
- `saveHashInSession()`

