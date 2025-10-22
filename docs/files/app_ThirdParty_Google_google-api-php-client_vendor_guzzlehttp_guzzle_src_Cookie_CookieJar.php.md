# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Cookie\CookieJar.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Cookie\CookieJar.php`
- Type: PHP
- Size: 9272 bytes

## Summary (from docblocks)

Cookie jar that stores cookies as an array

@var SetCookie[] Loaded cookie data

@var bool

@param bool $strictMode   Set to true to throw exceptions when invalid
                          cookies are added to the cookie jar.
@param array $cookieArray Array of SetCookie objects or a hash of
                          arrays that can be used with the SetCookie
                          constructor

Create a new Cookie jar from an associative array and domain.
@param array  $cookies Cookies to create the jar from
@param string $domain  Domain to set the cookies to
@return self

@deprecated

Evaluate if this cookie should be persisted to storage
that survives between requests.
@param SetCookie $cookie Being evaluated.
@param bool $allowSessionCookies If we should persist session cookies
@return bool

Finds and returns the cookie based on the name
@param string $name cookie name to search for
@return SetCookie|null cookie that was found or null if not found

Computes cookie path following RFC 6265 section 5.1.4
@link https://tools.ietf.org/html/rfc6265#section-5.1.4
@param RequestInterface $request
@return string

If a cookie already exists and the server asks to set it again with a
null value, the cookie must be deleted.
@param SetCookie $cookie

## References

**Database Tables (inferred)**
- `an`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Cookie\CookieJar.php`

**Classes**:
- `GuzzleHttp\Cookie\CookieJar implements CookieJarInterface`

**Functions/Methods**:
- `__construct($strictMode = false, $cookieArray = [])`
- `fromArray(array $cookies, $domain)`
- `getCookieValue($value)`
- `shouldPersist(SetCookie $cookie,
        $allowSessionCookies = false)`
- `getCookieByName($name)`
- `toArray()`
- `clear($domain = null, $path = null, $name = null)`
- `clearSessionCookies()`
- `setCookie(SetCookie $cookie)`
- `count()`
- `getIterator()`
- `extractCookies(RequestInterface $request,
        ResponseInterface $response)`
- `getCookiePathFromRequest(RequestInterface $request)`
- `withCookieHeader(RequestInterface $request)`
- `removeCookieIfEmpty(SetCookie $cookie)`

