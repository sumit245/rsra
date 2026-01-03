# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\ApplicationDefaultCredentials.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\ApplicationDefaultCredentials.php`
- Type: PHP
- Size: 6402 bytes

## Summary (from docblocks)

ApplicationDefaultCredentials obtains the default credentials for
authorizing a request to a Google service.
Application Default Credentials are described here:
https://developers.google.com/accounts/docs/application-default-credentials
This class implements the search for the application default credentials as
described in the link.
It provides three factory methods:
- #get returns the computed credentials object
- #getSubscriber returns an AuthTokenSubscriber built from the credentials object
- #getMiddleware returns an AuthTokenMiddleware built from the credentials object
This allows it to be used as follows with GuzzleHttp\Client:
  use Google\Auth\ApplicationDefaultCredentials;
  use GuzzleHttp\Client;
  use GuzzleHttp\HandlerStack;
  $middleware = ApplicationDefaultCredentials::getMiddleware(
      'https://www.googleapis.com/auth/taskqueue'
  );
  $stack = HandlerStack::create();
  $stack->push($middleware);
  $client = new Client([
      'handler' => $stack,
      'base_uri' => 'https://www.googleapis.com/taskqueue/v1beta2/projects/',
      'auth' => 'google_auth' // authorize all requests
  ]);
  $res = $client->get('myproject/taskqueues/myqueue');

Obtains an AuthTokenSubscriber that uses the default FetchAuthTokenInterface
implementation to use in this environment.
If supplied, $scope is used to in creating the credentials instance if
this does not fallback to the compute engine defaults.
@param string|array scope the scope of the access request, expressed
  either as an Array or as a space-delimited String.
@param callable $httpHandler callback which delivers psr7 request
@param array $cacheConfig configuration for the cache when it's present
@param CacheItemPoolInterface $cache an implementation of CacheItemPoolInterface
@return AuthTokenSubscriber
@throws DomainException if no implementation can be obtained.

Obtains an AuthTokenMiddleware that uses the default FetchAuthTokenInterface
implementation to use in this environment.
If supplied, $scope is used to in creating the credentials instance if
this does not fallback to the compute engine defaults.
@param string|array scope the scope of the access request, expressed
  either as an Array or as a space-delimited String.
@param callable $httpHandler callback which delivers psr7 request
@param array $cacheConfig configuration for the cache when it's present
@param CacheItemPoolInterface $cache
@return AuthTokenMiddleware
@throws DomainException if no implementation can be obtained.

Obtains the default FetchAuthTokenInterface implementation to use
in this environment.
If supplied, $scope is used to in creating the credentials instance if
this does not fallback to the Compute Engine defaults.
@param string|array scope the scope of the access request, expressed
  either as an Array or as a space-delimited String.
@param callable $httpHandler callback which delivers psr7 request
@param array $cacheConfig configuration for the cache when it's present
@param CacheItemPoolInterface $cache
@return CredentialsLoader
@throws DomainException if no implementation can be obtained.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\ApplicationDefaultCredentials.php`

**Classes**:
- `Google\Auth\implements`
- `Google\Auth\ApplicationDefaultCredentials`

**Functions/Methods**:
- `getSubscriber($scope = null,
        callable $httpHandler = null,
        array $cacheConfig = null,
        CacheItemPoolInterface $cache = null)`
- `getMiddleware($scope = null,
        callable $httpHandler = null,
        array $cacheConfig = null,
        CacheItemPoolInterface $cache = null)`
- `getCredentials($scope = null,
        callable $httpHandler = null,
        array $cacheConfig = null,
        CacheItemPoolInterface $cache = null)`
- `notFound()`

