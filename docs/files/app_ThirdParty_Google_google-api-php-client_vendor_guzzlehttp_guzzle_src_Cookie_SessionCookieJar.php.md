# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Cookie\SessionCookieJar.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Cookie\SessionCookieJar.php`
- Type: PHP
- Size: 1919 bytes

## Summary (from docblocks)

Persists cookies in the client session

@var string session key

@var bool Control whether to persist session cookies or not.

Create a new SessionCookieJar object
@param string $sessionKey        Session key name to store the cookie
                                 data in session
@param bool $storeSessionCookies Set to true to store session cookies
                                 in the cookie jar.

Saves cookies to session when shutting down

Save cookies to the client session

@var SetCookie $cookie

Load the contents of the client session into the data array

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Cookie\SessionCookieJar.php`

**Classes**:
- `GuzzleHttp\Cookie\SessionCookieJar extends CookieJar`

**Functions/Methods**:
- `__construct($sessionKey, $storeSessionCookies = false)`
- `__destruct()`
- `save()`
- `load()`

