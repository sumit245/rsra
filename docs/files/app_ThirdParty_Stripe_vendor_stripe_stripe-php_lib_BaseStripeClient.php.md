# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\BaseStripeClient.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\BaseStripeClient.php`
- Type: PHP
- Size: 11436 bytes

## Summary (from docblocks)

@var string default base URL for Stripe's API

@var string default base URL for Stripe's OAuth API

@var string default base URL for Stripe's Files API

@var array<string, mixed>

@var \Stripe\Util\RequestOptions

Initializes a new instance of the {@link BaseStripeClient} class.
The constructor takes a single argument. The argument can be a string, in which case it
should be the API key. It can also be an array with various configuration settings.
Configuration settings include the following options:
- api_key (null|string): the Stripe API key, to be used in regular API requests.
- client_id (null|string): the Stripe client ID, to be used in OAuth requests.
- stripe_account (null|string): a Stripe account ID. If set, all requests sent by the client
  will automatically use the {@code Stripe-Account} header with that account ID.
- stripe_version (null|string): a Stripe API verion. If set, all requests sent by the client
  will include the {@code Stripe-Version} header with that API version.
The following configuration settings are also available, though setting these should rarely be necessary
(only useful if you want to send requests to a mock server like stripe-mock):
- api_base (string): the base URL for regular API requests. Defaults to
  {@link DEFAULT_API_BASE}.
- connect_base (string): the base URL for OAuth requests. Defaults to
  {@link DEFAULT_CONNECT_BASE}.
- files_base (string): the base URL for file creation requests. Defaults to
  {@link DEFAULT_FILES_BASE}.
@param array<string, mixed>|string $config the API key as a string, or an array containing
  the client configuration settings

Gets the API key used by the client to send requests.
@return null|string the API key used by the client to send requests

Gets the client ID used by the client in OAuth requests.
@return null|string the client ID used by the client in OAuth requests

Gets the base URL for Stripe's API.
@return string the base URL for Stripe's API

Gets the base URL for Stripe's OAuth API.
@return string the base URL for Stripe's OAuth API

Gets the base URL for Stripe's Files API.
@return string the base URL for Stripe's Files API

Sends a request to Stripe's API.
@param string $method the HTTP method
@param string $path the path of the request
@param array $params the parameters of the request
@param array|\Stripe\Util\RequestOptions $opts the special modifiers of the request
@return \Stripe\StripeObject the object returned by Stripe's API

Sends a request to Stripe's API, passing chunks of the streamed response
into a user-provided $readBodyChunkCallable callback.
@param string $method the HTTP method
@param string $path the path of the request
@param callable $readBodyChunkCallable a function that will be called
@param array $params the parameters of the request
@param array|\Stripe\Util\RequestOptions $opts the special modifiers of the request
with chunks of bytes from the body if the request is successful

Sends a request to Stripe's API.
@param string $method the HTTP method
@param string $path the path of the request
@param array $params the parameters of the request
@param array|\Stripe\Util\RequestOptions $opts the special modifiers of the request
@return \Stripe\Collection of ApiResources

Sends a request to Stripe's API.
@param string $method the HTTP method
@param string $path the path of the request
@param array $params the parameters of the request
@param array|\Stripe\Util\RequestOptions $opts the special modifiers of the request
@return \Stripe\SearchResult of ApiResources

@param \Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\AuthenticationException
@return string

TODO: replace this with a private constant when we drop support for PHP < 5.
@return array<string, mixed>

@param array<string, mixed> $config
@throws \Stripe\Exception\InvalidArgumentException

## References

**Database Tables (inferred)**
- `the`
- `Stripe`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\BaseStripeClient.php`

**Classes**:
- `Stripe\BaseStripeClient implements StripeClientInterface, StripeStreamingClientInterface`

**Functions/Methods**:
- `__construct($config = [])`
- `getApiKey()`
- `getClientId()`
- `getApiBase()`
- `getConnectBase()`
- `getFilesBase()`
- `request($method, $path, $params, $opts)`
- `requestStream($method, $path, $readBodyChunkCallable, $params, $opts)`
- `requestCollection($method, $path, $params, $opts)`
- `requestSearchResult($method, $path, $params, $opts)`
- `apiKeyForRequest($opts)`
- `getDefaultConfig()`
- `validateConfig($config)`

