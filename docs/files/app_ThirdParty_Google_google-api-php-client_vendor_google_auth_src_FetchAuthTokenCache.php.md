# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\FetchAuthTokenCache.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\FetchAuthTokenCache.php`
- Type: PHP
- Size: 2853 bytes

## Summary (from docblocks)

A class to implement caching for any object implementing
FetchAuthTokenInterface

@var FetchAuthTokenInterface

@var array

@var CacheItemPoolInterface

Implements FetchAuthTokenInterface#fetchAuthToken.
Checks the cache for a valid auth token and fetches the auth tokens
from the supplied fetcher.
@param callable $httpHandler callback which delivers psr7 request
@return array the response
@throws \Exception

@return string

@return array|null

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\FetchAuthTokenCache.php`

**Classes**:
- `Google\Auth\to`
- `Google\Auth\FetchAuthTokenCache implements FetchAuthTokenInterface`

**Functions/Methods**:
- `__construct(FetchAuthTokenInterface $fetcher,
        array $cacheConfig = null,
        CacheItemPoolInterface $cache)`
- `fetchAuthToken(callable $httpHandler = null)`
- `getCacheKey()`
- `getLastReceivedToken()`

