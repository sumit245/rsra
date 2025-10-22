# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Middleware\AuthTokenMiddleware.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Middleware\AuthTokenMiddleware.php`
- Type: PHP
- Size: 3930 bytes

## Summary (from docblocks)

AuthTokenMiddleware is a Guzzle Middleware that adds an Authorization header
provided by an object implementing FetchAuthTokenInterface.
The FetchAuthTokenInterface#fetchAuthToken is used to obtain a hash; one of
the values value in that hash is added as the authorization header.
Requests will be accessed with the authorization header:
'authorization' 'Bearer <value of auth_token>'

@var callback

@var FetchAuthTokenInterface

@var callable

Creates a new AuthTokenMiddleware.
@param FetchAuthTokenInterface $fetcher is used to fetch the auth token
@param callable $httpHandler (optional) callback which delivers psr7 request
@param callable $tokenCallback (optional) function to be called when a new token is fetched.

Updates the request with an Authorization header when auth is 'google_auth'.
  use Google\Auth\Middleware\AuthTokenMiddleware;
  use Google\Auth\OAuth2;
  use GuzzleHttp\Client;
  use GuzzleHttp\HandlerStack;
  $config = [..<oauth config param>.];
  $oauth2 = new OAuth2($config)
  $middleware = new AuthTokenMiddleware($oauth2);
  $stack = HandlerStack::create();
  $stack->push($middleware);
  $client = new Client([
      'handler' => $stack,
      'base_uri' => 'https://www.googleapis.com/taskqueue/v1beta2/projects/',
      'auth' => 'google_auth' // authorize all requests
  ]);
  $res = $client->get('myproject/taskqueues/myqueue');
@param callable $handler
@return \Closure

Call fetcher to fetch the token.
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Middleware\AuthTokenMiddleware.php`

**Classes**:
- `Google\Auth\Middleware\AuthTokenMiddleware`

**Functions/Methods**:
- `__construct(FetchAuthTokenInterface $fetcher,
        callable $httpHandler = null,
        callable $tokenCallback = null)`
- `__invoke(callable $handler)`
- `fetchToken()`

