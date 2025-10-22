# app\ThirdParty\Google\google-api-php-client\src\Google\AccessToken\Revoke.php

- Path: `app\ThirdParty\Google\google-api-php-client\src\Google\AccessToken\Revoke.php`
- Type: PHP
- Size: 2186 bytes

## Summary (from docblocks)

Wrapper around Google Access Tokens which provides convenience functions

@var GuzzleHttp\ClientInterface The http client

Instantiates the class, but does not initiate the login flow, leaving it
to the discretion of the caller.

Revoke an OAuth2 access token or refresh token. This method will revoke the current access
token, if a token isn't provided.
@param string|array $token The token (access token or a refresh token) that should be revoked.
@return boolean Returns True if the revocation was successful, otherwise False.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\src\Google\AccessToken\Revoke.php`

**Classes**:
- `Google_AccessToken_Revoke`

**Functions/Methods**:
- `__construct(ClientInterface $http = null)`
- `revokeToken($token)`

