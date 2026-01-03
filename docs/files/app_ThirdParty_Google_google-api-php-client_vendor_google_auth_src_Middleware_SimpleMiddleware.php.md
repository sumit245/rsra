# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Middleware\SimpleMiddleware.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Middleware\SimpleMiddleware.php`
- Type: PHP
- Size: 2848 bytes

## Summary (from docblocks)

SimpleMiddleware is a Guzzle Middleware that implements Google's Simple API
access.
Requests are accessed using the Simple API access developer key.

@var array

Create a new Simple plugin.
The configuration array expects one option
- key: required, otherwise InvalidArgumentException is thrown
@param array $config Configuration array

Updates the request query with the developer key if auth is set to simple.
  use Google\Auth\Middleware\SimpleMiddleware;
  use GuzzleHttp\Client;
  use GuzzleHttp\HandlerStack;
  $my_key = 'is not the same as yours';
  $middleware = new SimpleMiddleware(['key' => $my_key]);
  $stack = HandlerStack::create();
  $stack->push($middleware);
  $client = new Client([
      'handler' => $stack,
      'base_uri' => 'https://www.googleapis.com/discovery/v1/',
      'auth' => 'simple'
  ]);
  $res = $client->get('drive/v2/rest');
@param callable $handler
@return \Closure

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Middleware\SimpleMiddleware.php`

**Classes**:
- `Google\Auth\Middleware\SimpleMiddleware`

**Functions/Methods**:
- `__construct(array $config)`
- `__invoke(callable $handler)`

