# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Cookie\FileCookieJar.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Cookie\FileCookieJar.php`
- Type: PHP
- Size: 2617 bytes

## Summary (from docblocks)

Persists non-session cookies using a JSON formatted file

@var string filename

@var bool Control whether to persist session cookies or not.

Create a new FileCookieJar object
@param string $cookieFile        File to store the cookie data
@param bool $storeSessionCookies Set to true to store session cookies
                                 in the cookie jar.
@throws \RuntimeException if the file cannot be found or created

Saves the file when shutting down

Saves the cookies to a file.
@param string $filename File to save
@throws \RuntimeException if the file cannot be found or created

@var SetCookie $cookie

Load cookies from a JSON formatted file.
Old cookies are kept unless overwritten by newly loaded ones.
@param string $filename Cookie file to load.
@throws \RuntimeException if the file cannot be loaded.

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Cookie\FileCookieJar.php`

**Classes**:
- `GuzzleHttp\Cookie\FileCookieJar extends CookieJar`

**Functions/Methods**:
- `__construct($cookieFile, $storeSessionCookies = false)`
- `__destruct()`
- `save($filename)`
- `load($filename)`

