# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Middleware\ScopedAccessTokenMiddleware.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Middleware\ScopedAccessTokenMiddleware.php`
- Type: PHP
- Size: 5081 bytes

## Summary (from docblocks)

ScopedAccessTokenMiddleware is a Guzzle Middleware that adds an Authorization
header provided by a closure.
The closure returns an access token, taking the scope, either a single
string or an array of strings, as its value.  If provided, a cache will be
used to preserve the access token for a given lifetime.
Requests will be accessed with the authorization header:
'authorization' 'Bearer <value of auth_token>'

@var CacheItemPoolInterface

@var array configuration

@var callable

@var array|string

Creates a new ScopedAccessTokenMiddleware.
@param callable $tokenFunc a token generator function
@param array|string $scopes the token authentication scopes
@param array $cacheConfig configuration for the cache when it's present
@param CacheItemPoolInterface $cache an implementation of CacheItemPoolInterface

Updates the request with an Authorization header when auth is 'scoped'.
  E.g this could be used to authenticate using the AppEngine
  AppIdentityService.
  use google\appengine\api\app_identity\AppIdentityService;
  use Google\Auth\Middleware\ScopedAccessTokenMiddleware;
  use GuzzleHttp\Client;
  use GuzzleHttp\HandlerStack;
  $scope = 'https://www.googleapis.com/auth/taskqueue'
  $middleware = new ScopedAccessTokenMiddleware(
      'AppIdentityService::getAccessToken',
      $scope,
      [ 'prefix' => 'Google\Auth\ScopedAccessToken::' ],
      $cache = new Memcache()
  );
  $stack = HandlerStack::create();
  $stack->push($middleware);
  $client = new Client([
      'handler' => $stack,
      'base_url' => 'https://www.googleapis.com/taskqueue/v1beta2/projects/',
      'auth' => 'scoped' // authorize all requests
  ]);
  $res = $client->get('myproject/taskqueues/myqueue');
@param callable $handler
@return \Closure

@return string

Determine if token is available in the cache, if not call tokenFunc to
fetch it.
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Middleware\ScopedAccessTokenMiddleware.php`

**Classes**:
- `Google\Auth\Middleware\ScopedAccessTokenMiddleware`

**Functions/Methods**:
- `__construct(callable $tokenFunc,
        $scopes,
        array $cacheConfig = null,
        CacheItemPoolInterface $cache = null)`
- `__invoke(callable $handler)`
- `getCacheKey()`
- `fetchToken()`

