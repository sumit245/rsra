# app\Config\Security.php

- Path: `app\Config\Security.php`
- Type: PHP
- Size: 3429 bytes

## Summary (from docblocks)

--------------------------------------------------------------------------
CSRF Protection Method
--------------------------------------------------------------------------
Protection Method for Cross Site Request Forgery protection.
@var string 'cookie' or 'session'

--------------------------------------------------------------------------
CSRF Token Randomization
--------------------------------------------------------------------------
Randomize the CSRF Token for added security.
@var bool

--------------------------------------------------------------------------
CSRF Token Name
--------------------------------------------------------------------------
Token name for Cross Site Request Forgery protection.
@var string

--------------------------------------------------------------------------
CSRF Header Name
--------------------------------------------------------------------------
Header name for Cross Site Request Forgery protection.
@var string

--------------------------------------------------------------------------
CSRF Cookie Name
--------------------------------------------------------------------------
Cookie name for Cross Site Request Forgery protection.
@var string

--------------------------------------------------------------------------
CSRF Expires
--------------------------------------------------------------------------
Expiration time for Cross Site Request Forgery protection cookie.
Defaults to two hours (in seconds).
@var int

--------------------------------------------------------------------------
CSRF Regenerate
--------------------------------------------------------------------------
Regenerate CSRF Token on every submission.
@var bool

--------------------------------------------------------------------------
CSRF Redirect
--------------------------------------------------------------------------
Redirect to previous page with error on failure.
@var bool

--------------------------------------------------------------------------
CSRF SameSite
--------------------------------------------------------------------------
Setting for CSRF SameSite cookie token.
Allowed values are: None - Lax - Strict - ''.
Defaults to `Lax` as recommended in this link:
@see https://portswigger.net/web-security/csrf/samesite-cookies
@var string
@deprecated `Config\Cookie` $samesite property is used.

## Symbols

# Symbols

**Files documented**: 1

## `app\Config\Security.php`

**Classes**:
- `Config\Security extends BaseConfig`

