# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\AbstractService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\AbstractService.php`
- Type: PHP
- Size: 2795 bytes

## Summary (from docblocks)

Abstract base class for all services.

@var \Stripe\StripeClientInterface

@var \Stripe\StripeStreamingClientInterface

Initializes a new instance of the {@link AbstractService} class.
@param \Stripe\StripeClientInterface $client

Gets the client used by this service to send requests.
@return \Stripe\StripeClientInterface

Gets the client used by this service to send requests.
@return \Stripe\StripeStreamingClientInterface

Translate null values to empty strings. For service methods,
we interpret null as a request to unset the field, which
corresponds to sending an empty string for the field to the
API.
@param null|array $params

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\AbstractService.php`

**Classes**:
- `Stripe\Service\for`
- `Stripe\Service\AbstractService`

**Functions/Methods**:
- `__construct($client)`
- `getClient()`
- `getStreamingClient()`
- `formatParams($params)`
- `request($method, $path, $params, $opts)`
- `requestStream($method, $path, $readBodyChunkCallable, $params, $opts)`
- `requestCollection($method, $path, $params, $opts)`
- `requestSearchResult($method, $path, $params, $opts)`
- `buildPath($basePath, ...$ids)`

