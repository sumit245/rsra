# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Subscriber\ScopedAccessTokenSubscriber.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Subscriber\ScopedAccessTokenSubscriber.php`
- Type: PHP
- Size: 5124 bytes

## Summary (from docblocks)

ScopedAccessTokenSubscriber is a Guzzle Subscriber that adds an Authorization
header provided by a closure.
The closure returns an access token, taking the scope, either a single
string or an array of strings, as its value.  If provided, a cache will be
used to preserve the access token for a given lifetime.
Requests will be accessed with the authorization header:
'authorization' 'Bearer <access token obtained from the closure>'

@var CacheItemPoolInterface

@var callable The access token generator function

@var array|string The scopes used to generate the token

@var array

Creates a new ScopedAccessTokenSubscriber.
@param callable $tokenFunc a token generator function
@param array|string $scopes the token authentication scopes
@param array $cacheConfig configuration for the cache when it's present
@param CacheItemPoolInterface $cache an implementation of CacheItemPoolInterface

@return array

Updates the request with an Authorization header when auth is 'scoped'.
  E.g this could be used to authenticate using the AppEngine
  AppIdentityService.
  use google\appengine\api\app_identity\AppIdentityService;
  use Google\Auth\Subscriber\ScopedAccessTokenSubscriber;
  use GuzzleHttp\Client;
  $scope = 'https://www.googleapis.com/auth/taskqueue'
  $subscriber = new ScopedAccessToken(
      'AppIdentityService::getAccessToken',
      $scope,
      ['prefix' => 'Google\Auth\ScopedAccessToken::'],
      $cache = new Memcache()
  );
  $client = new Client([
      'base_url' => 'https://www.googleapis.com/taskqueue/v1beta2/projects/',
      'defaults' => ['auth' => 'scoped']
  ]);
  $client->getEmitter()->attach($subscriber);
  $res = $client->get('myproject/taskqueues/myqueue');
@param BeforeEvent $event

@return string

Determine if token is available in the cache, if not call tokenFunc to
fetch it.
@return string

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Subscriber\ScopedAccessTokenSubscriber.php`

**Classes**:
- `Google\Auth\Subscriber\ScopedAccessTokenSubscriber implements SubscriberInterface`

**Functions/Methods**:
- `__construct(callable $tokenFunc,
        $scopes,
        array $cacheConfig = null,
        CacheItemPoolInterface $cache = null)`
- `getEvents()`
- `onBefore(BeforeEvent $event)`
- `getCacheKey()`
- `fetchToken()`

