# app\ThirdParty\Google\google-api-php-client\src\Google\AccessToken\Verify.php

- Path: `app\ThirdParty\Google\google-api-php-client\src\Google\AccessToken\Verify.php`
- Type: PHP
- Size: 7425 bytes

## Summary (from docblocks)

Wrapper around Google Access Tokens which provides convenience functions

@var GuzzleHttp\ClientInterface The http client

@var Psr\Cache\CacheItemPoolInterface cache class

Instantiates the class, but does not initiate the login flow, leaving it
to the discretion of the caller.

Verifies an id token and returns the authenticated apiLoginTicket.
Throws an exception if the id token is not valid.
The audience parameter can be used to control which id tokens are
accepted.  By default, the id token must have been issued to this OAuth2 client.
@param $audience
@return array the token payload, if successful

Retrieve and cache a certificates file.
@param $url string location
@throws Google_Exception
@return array certificates

phpseclib calls "phpinfo" by default, which requires special
whitelisting in the AppEngine VM environment. This function
sets constants to bypass the need for phpseclib to check phpinfo
@see phpseclib/Math/BigInteger
@see https://github.com/GoogleCloudPlatform/getting-started-php/issues/85

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\src\Google\AccessToken\Verify.php`

**Classes**:
- `Google_AccessToken_Verify`

**Functions/Methods**:
- `__construct(ClientInterface $http = null,
      CacheItemPoolInterface $cache = null,
      $jwt = null)`
- `verifyIdToken($idToken, $audience = null)`
- `getCache()`
- `retrieveCertsFromLocation($url)`
- `getFederatedSignOnCerts()`
- `getJwtService()`
- `getRsaClass()`
- `getBigIntClass()`
- `getOpenSslConstant()`
- `setPhpsecConstants()`

