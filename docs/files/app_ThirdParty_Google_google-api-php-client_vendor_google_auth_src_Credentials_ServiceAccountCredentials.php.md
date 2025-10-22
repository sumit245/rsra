# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Credentials\ServiceAccountCredentials.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Credentials\ServiceAccountCredentials.php`
- Type: PHP
- Size: 5585 bytes

## Summary (from docblocks)

ServiceAccountCredentials supports authorization using a Google service
account.
(cf https://developers.google.com/accounts/docs/OAuth2ServiceAccount)
It's initialized using the json key file that's downloadable from developer
console, which should contain a private_key and client_email fields that it
uses.
Use it with AuthTokenMiddleware to authorize http requests:
  use Google\Auth\Credentials\ServiceAccountCredentials;
  use Google\Auth\Middleware\AuthTokenMiddleware;
  use GuzzleHttp\Client;
  use GuzzleHttp\HandlerStack;
  $sa = new ServiceAccountCredentials(
      'https://www.googleapis.com/auth/taskqueue',
      '/path/to/your/json/key_file.json'
  );
  $middleware = new AuthTokenMiddleware($sa);
  $stack = HandlerStack::create();
  $stack->push($middleware);
  $client = new Client([
      'handler' => $stack,
      'base_uri' => 'https://www.googleapis.com/taskqueue/v1beta2/projects/',
      'auth' => 'google_auth' // authorize all requests
  ]);
  $res = $client->get('myproject/taskqueues/myqueue');

The OAuth2 instance used to conduct authorization.
@var OAuth2

Create a new ServiceAccountCredentials.
@param string|array $scope the scope of the access request, expressed
  either as an Array or as a space-delimited String.
@param string|array $jsonKey JSON credential file path or JSON credentials
  as an associative array
@param string $sub an email address account to impersonate, in situations when
  the service account has been delegated domain wide access.

@param callable $httpHandler
@return array

@return string

@return array

Updates metadata with the authorization token.
@param array $metadata metadata hashmap
@param string $authUri optional auth uri
@param callable $httpHandler callback which delivers psr7 request
@return array updated metadata hashmap

@param string $sub an email address account to impersonate, in situations when
  the service account has been delegated domain wide access.

## References

**Database Tables (inferred)**
- `developer`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Credentials\ServiceAccountCredentials.php`

**Classes**:
- `Google\Auth\Credentials\ServiceAccountCredentials extends CredentialsLoader`

**Functions/Methods**:
- `__construct($scope,
        $jsonKey,
        $sub = null)`
- `fetchAuthToken(callable $httpHandler = null)`
- `getCacheKey()`
- `getLastReceivedToken()`
- `updateMetadata($metadata,
        $authUri = null,
        callable $httpHandler = null)`
- `setSub($sub)`

