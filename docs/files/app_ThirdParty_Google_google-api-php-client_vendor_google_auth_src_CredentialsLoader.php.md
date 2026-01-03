# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\CredentialsLoader.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\CredentialsLoader.php`
- Type: PHP
- Size: 6988 bytes

## Summary (from docblocks)

CredentialsLoader contains the behaviour used to locate and find default
credentials files on the file system.

@param string $cause
@return string

@return bool

Load a JSON key from the path specified in the environment.
Load a JSON key from the path specified in the environment
variable GOOGLE_APPLICATION_CREDENTIALS. Return null if
GOOGLE_APPLICATION_CREDENTIALS is not specified.
@return array JSON key | null

Load a JSON key from a well known path.
The well known path is OS dependent:
- windows: %APPDATA%/gcloud/application_default_credentials.json
- others: $HOME/.config/gcloud/application_default_credentials.json
If the file does not exists, this returns null.
@return array JSON key | null

Create a new Credentials instance.
@param string|array $scope the scope of the access request, expressed
  either as an Array or as a space-delimited String.
@param array $jsonKey the JSON credentials.
@return ServiceAccountCredentials|UserRefreshCredentials

Create an authorized HTTP Client from an instance of FetchAuthTokenInterface.
@param FetchAuthTokenInterface $fetcher is used to fetch the auth token
@param array $httpClientOptoins (optional) Array of request options to apply.
@param callable $httpHandler (optional) http client to fetch the token.
@param callable $tokenCallback (optional) function to be called when a new token is fetched.
@return \GuzzleHttp\Client

export a callback function which updates runtime metadata.
@return array updateMetadata function

Updates metadata with the authorization token.
@param array $metadata metadata hashmap
@param string $authUri optional auth uri
@param callable $httpHandler callback which delivers psr7 request
@return array updated metadata hashmap

## References

**Database Tables (inferred)**
- `the`
- `a`
- `an`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\CredentialsLoader.php`

**Classes**:
- `Google\Auth\CredentialsLoader implements FetchAuthTokenInterface`

**Functions/Methods**:
- `unableToReadEnv($cause)`
- `isOnWindows()`
- `fromEnv()`
- `fromWellKnownFile()`
- `makeCredentials($scope, array $jsonKey)`
- `makeHttpClient(FetchAuthTokenInterface $fetcher,
        array $httpClientOptions = [],
        callable $httpHandler = null,
        callable $tokenCallback = null)`
- `getUpdateMetadataFunc()`
- `updateMetadata($metadata,
        $authUri = null,
        callable $httpHandler = null)`

