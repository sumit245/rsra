# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Subscriber\AuthTokenSubscriber.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Subscriber\AuthTokenSubscriber.php`
- Type: PHP
- Size: 3734 bytes

## Summary (from docblocks)

AuthTokenSubscriber is a Guzzle Subscriber that adds an Authorization header
provided by an object implementing FetchAuthTokenInterface.
The FetchAuthTokenInterface#fetchAuthToken is used to obtain a hash; one of
the values value in that hash is added as the authorization header.
Requests will be accessed with the authorization header:
'authorization' 'Bearer <value of auth_token>'

@var callable

@var FetchAuthTokenInterface

@var callable

Creates a new AuthTokenSubscriber.
@param FetchAuthTokenInterface $fetcher is used to fetch the auth token
@param callable $httpHandler (optional) http client to fetch the token.
@param callable $tokenCallback (optional) function to be called when a new token is fetched.

@return array

Updates the request with an Authorization header when auth is 'fetched_auth_token'.
  use GuzzleHttp\Client;
  use Google\Auth\OAuth2;
  use Google\Auth\Subscriber\AuthTokenSubscriber;
  $config = [..<oauth config param>.];
  $oauth2 = new OAuth2($config)
  $subscriber = new AuthTokenSubscriber($oauth2);
  $client = new Client([
     'base_url' => 'https://www.googleapis.com/taskqueue/v1beta2/projects/',
     'defaults' => ['auth' => 'google_auth']
  ]);
  $client->getEmitter()->attach($subscriber);
  $res = $client->get('myproject/taskqueues/myqueue');
@param BeforeEvent $event

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Subscriber\AuthTokenSubscriber.php`

**Classes**:
- `Google\Auth\Subscriber\AuthTokenSubscriber implements SubscriberInterface`

**Functions/Methods**:
- `__construct(FetchAuthTokenInterface $fetcher,
        callable $httpHandler = null,
        callable $tokenCallback = null)`
- `getEvents()`
- `onBefore(BeforeEvent $event)`

