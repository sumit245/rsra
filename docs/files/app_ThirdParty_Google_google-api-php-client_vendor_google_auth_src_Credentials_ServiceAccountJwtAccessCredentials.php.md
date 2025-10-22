# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Credentials\ServiceAccountJwtAccessCredentials.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Credentials\ServiceAccountJwtAccessCredentials.php`
- Type: PHP
- Size: 3847 bytes

## Summary (from docblocks)

Authenticates requests using Google's Service Account credentials via
JWT Access.
This class allows authorizing requests for service accounts directly
from credentials from a json key file downloaded from the developer
console (via 'Generate new Json Key').  It is not part of any OAuth2
flow, rather it creates a JWT and sends that as a credential.

The OAuth2 instance used to conduct authorization.
@var OAuth2

Create a new ServiceAccountJwtAccessCredentials.
@param string|array $jsonKey JSON credential file path or JSON credentials
  as an associative array

Updates metadata with the authorization token.
@param array $metadata metadata hashmap
@param string $authUri optional auth uri
@param callable $httpHandler callback which delivers psr7 request
@return array updated metadata hashmap

Implements FetchAuthTokenInterface#fetchAuthToken.
@param callable $httpHandler
@return array|void

@return string

@return array

## References

**Database Tables (inferred)**
- `credentials`
- `a`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Credentials\ServiceAccountJwtAccessCredentials.php`

**Classes**:
- `Google\Auth\Credentials\allows`
- `Google\Auth\Credentials\ServiceAccountJwtAccessCredentials extends CredentialsLoader`

**Functions/Methods**:
- `__construct($jsonKey)`
- `updateMetadata($metadata,
        $authUri = null,
        callable $httpHandler = null)`
- `fetchAuthToken(callable $httpHandler = null)`
- `getCacheKey()`
- `getLastReceivedToken()`

