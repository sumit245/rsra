# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Credentials\UserRefreshCredentials.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Credentials\UserRefreshCredentials.php`
- Type: PHP
- Size: 3396 bytes

## Summary (from docblocks)

Authenticates requests using User Refresh credentials.
This class allows authorizing requests from user refresh tokens.
This the end of the result of a 3LO flow.  E.g, the end result of
'gcloud auth login' saves a file with these contents in well known
location
@see [Application Default Credentials](http://goo.gl/mkAHpZ)

The OAuth2 instance used to conduct authorization.
@var OAuth2

Create a new UserRefreshCredentials.
@param string|array $scope the scope of the access request, expressed
  either as an Array or as a space-delimited String.
@param string|array $jsonKey JSON credential file path or JSON credentials
  as an associative array

@param callable $httpHandler
@return array

@return string

@return array

## References

**Database Tables (inferred)**
- `user`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Credentials\UserRefreshCredentials.php`

**Classes**:
- `Google\Auth\Credentials\allows`
- `Google\Auth\Credentials\UserRefreshCredentials extends CredentialsLoader`

**Functions/Methods**:
- `__construct($scope,
        $jsonKey)`
- `fetchAuthToken(callable $httpHandler = null)`
- `getCacheKey()`
- `getLastReceivedToken()`

