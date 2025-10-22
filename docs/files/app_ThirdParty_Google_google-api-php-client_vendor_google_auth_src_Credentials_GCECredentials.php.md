# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Credentials\GCECredentials.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Credentials\GCECredentials.php`
- Type: PHP
- Size: 6545 bytes

## Summary (from docblocks)

GCECredentials supports authorization on Google Compute Engine.
It can be used to authorize requests using the AuthTokenMiddleware, but will
only succeed if being run on GCE:
  use Google\Auth\Credentials\GCECredentials;
  use Google\Auth\Middleware\AuthTokenMiddleware;
  use GuzzleHttp\Client;
  use GuzzleHttp\HandlerStack;
  $gce = new GCECredentials();
  $middleware = new AuthTokenMiddleware($gce);
  $stack = HandlerStack::create();
  $stack->push($middleware);
  $client = new Client([
     'handler' => $stack,
     'base_uri' => 'https://www.googleapis.com/taskqueue/v1beta2/projects/',
     'auth' => 'google_auth'
  ]);
  $res = $client->get('myproject/taskqueues/myqueue');

The metadata IP address on appengine instances.
The IP is used instead of the domain 'metadata' to avoid slow responses
when not on Compute Engine.

The metadata path of the default token.

The header whose presence indicates GCE presence.

Flag used to ensure that the onGCE test is only done once;.
@var bool

Flag that stores the value of the onGCE check.
@var bool

Result of fetchAuthToken.

The full uri for accessing the default token.
@return string

Determines if this an App Engine Flexible instance, by accessing the
GAE_INSTANCE environment variable.
@return true if this an App Engine Flexible Instance, false otherwise

Determines if this a GCE instance, by accessing the expected metadata
host.
If $httpHandler is not specified a the default HttpHandler is used.
@param callable $httpHandler callback which delivers psr7 request
@return true if this a GCEInstance false otherwise

Implements FetchAuthTokenInterface#fetchAuthToken.
Fetches the auth tokens from the GCE metadata host if it is available.
If $httpHandler is not specified a the default HttpHandler is used.
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

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Credentials\GCECredentials.php`

**Classes**:
- `Google\Auth\Credentials\GCECredentials extends CredentialsLoader`

**Functions/Methods**:
- `getTokenUri()`
- `onAppEngineFlexible()`
- `onGce(callable $httpHandler = null)`
- `fetchAuthToken(callable $httpHandler = null)`
- `getCacheKey()`
- `getLastReceivedToken()`

