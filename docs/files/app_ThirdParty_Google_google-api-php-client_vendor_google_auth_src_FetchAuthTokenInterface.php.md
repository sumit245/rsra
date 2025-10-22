# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\FetchAuthTokenInterface.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\FetchAuthTokenInterface.php`
- Type: PHP
- Size: 1651 bytes

## Summary (from docblocks)

An interface implemented by objects that can fetch auth tokens.

Fetches the auth tokens based on the current state.
@param callable $httpHandler callback which delivers psr7 request
@return array a hash of auth tokens

Obtains a key that can used to cache the results of #fetchAuthToken.
If the value is empty, the auth token is not cached.
@return string a key that may be used to cache the auth token.

Returns an associative array with the token and
expiration time.
@return null|array {
     The last received access token.
@var string $access_token The access token string.
@var int $expires_at The time the token expires as a UNIX timestamp.
}

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\FetchAuthTokenInterface.php`

**Functions/Methods**:
- `fetchAuthToken(callable $httpHandler = null)`
- `getCacheKey()`
- `getLastReceivedToken()`

