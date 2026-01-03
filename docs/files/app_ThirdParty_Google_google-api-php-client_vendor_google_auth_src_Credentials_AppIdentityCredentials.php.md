# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Credentials\AppIdentityCredentials.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Credentials\AppIdentityCredentials.php`
- Type: PHP
- Size: 4840 bytes

## Summary (from docblocks)

AppIdentityCredentials supports authorization on Google App Engine.
It can be used to authorize requests using the AuthTokenMiddleware or
AuthTokenSubscriber, but will only succeed if being run on App Engine:
  use Google\Auth\Credentials\AppIdentityCredentials;
  use Google\Auth\Middleware\AuthTokenMiddleware;
  use GuzzleHttp\Client;
  use GuzzleHttp\HandlerStack;
  $gae = new AppIdentityCredentials('https://www.googleapis.com/auth/books');
  $middleware = new AuthTokenMiddleware($gae);
  $stack = HandlerStack::create();
  $stack->push($middleware);
  $client = new Client([
      'handler' => $stack,
      'base_uri' => 'https://www.googleapis.com/books/v1',
      'auth' => 'google_auth'
  ]);
  $res = $client->get('volumes?q=Henry+David+Thoreau&country=US');

Result of fetchAuthToken.
@array

Array of OAuth2 scopes to be requested.

Determines if this an App Engine instance, by accessing the
SERVER_SOFTWARE environment variable (prod) or the APPENGINE_RUNTIME
environment variable (dev).
@return true if this an App Engine Instance, false otherwise

Implements FetchAuthTokenInterface#fetchAuthToken.
Fetches the auth tokens using the AppIdentityService if available.
As the AppIdentityService uses protobufs to fetch the access token,
the GuzzleHttp\ClientInterface instance passed in will not be used.
@param callable $httpHandler callback which delivers psr7 request
@return array the auth metadata:
 array(2) {
  ["access_token"]=>
  string(3) "xyz"
  ["expiration_time"]=>
  string(10) "1444339905"
 }
@throws \Exception

@return array|null

Caching is handled by the underlying AppIdentityService, return empty string
to prevent caching.
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Credentials\AppIdentityCredentials.php`

**Classes**:
- `Google\Auth\Credentials\is`
- `Google\Auth\Credentials\AppIdentityCredentials extends CredentialsLoader`
- `Google\Auth\Credentials\must`
- `Google\Auth\Credentials\defined`

**Functions/Methods**:
- `__construct($scope = array()`
- `onAppEngine()`
- `fetchAuthToken(callable $httpHandler = null)`
- `getLastReceivedToken()`
- `getCacheKey()`

