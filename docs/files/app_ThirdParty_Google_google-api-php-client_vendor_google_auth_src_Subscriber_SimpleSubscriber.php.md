# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Subscriber\SimpleSubscriber.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Subscriber\SimpleSubscriber.php`
- Type: PHP
- Size: 2603 bytes

## Summary (from docblocks)

SimpleSubscriber is a Guzzle Subscriber that implements Google's Simple API
access.
Requests are accessed using the Simple API access developer key.

@var array

Create a new Simple plugin.
The configuration array expects one option
- key: required, otherwise InvalidArgumentException is thrown
@param array $config Configuration array

@return array

Updates the request query with the developer key if auth is set to simple.
  use Google\Auth\Subscriber\SimpleSubscriber;
  use GuzzleHttp\Client;
  $my_key = 'is not the same as yours';
  $subscriber = new SimpleSubscriber(['key' => $my_key]);
  $client = new Client([
     'base_url' => 'https://www.googleapis.com/discovery/v1/',
     'defaults' => ['auth' => 'simple']
  ]);
  $client->getEmitter()->attach($subscriber);
  $res = $client->get('drive/v2/rest');
@param BeforeEvent $event

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Subscriber\SimpleSubscriber.php`

**Classes**:
- `Google\Auth\Subscriber\SimpleSubscriber implements SubscriberInterface`

**Functions/Methods**:
- `__construct(array $config)`
- `getEvents()`
- `onBefore(BeforeEvent $event)`

