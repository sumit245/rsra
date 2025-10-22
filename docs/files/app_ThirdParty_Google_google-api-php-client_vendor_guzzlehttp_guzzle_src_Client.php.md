# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Client.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Client.php`
- Type: PHP
- Size: 16574 bytes

## Summary (from docblocks)

@method ResponseInterface get(string|UriInterface $uri, array $options = [])
@method ResponseInterface head(string|UriInterface $uri, array $options = [])
@method ResponseInterface put(string|UriInterface $uri, array $options = [])
@method ResponseInterface post(string|UriInterface $uri, array $options = [])
@method ResponseInterface patch(string|UriInterface $uri, array $options = [])
@method ResponseInterface delete(string|UriInterface $uri, array $options = [])
@method Promise\PromiseInterface getAsync(string|UriInterface $uri, array $options = [])
@method Promise\PromiseInterface headAsync(string|UriInterface $uri, array $options = [])
@method Promise\PromiseInterface putAsync(string|UriInterface $uri, array $options = [])
@method Promise\PromiseInterface postAsync(string|UriInterface $uri, array $options = [])
@method Promise\PromiseInterface patchAsync(string|UriInterface $uri, array $options = [])
@method Promise\PromiseInterface deleteAsync(string|UriInterface $uri, array $options = [])

@var array Default request options

Clients accept an array of constructor parameters.
Here's an example of creating a client using a base_uri and an array of
default request options to apply to each request:
    $client = new Client([
        'base_uri'        => 'http://www.foo.com/1.0/',
        'timeout'         => 0,
        'allow_redirects' => false,
        'proxy'           => '192.168.16.1:10'
    ]);
Client configuration settings include the following options:
- handler: (callable) Function that transfers HTTP requests over the
  wire. The function is called with a Psr7\Http\Message\RequestInterface
  and array of transfer options, and must return a
  GuzzleHttp\Promise\PromiseInterface that is fulfilled with a
  Psr7\Http\Message\ResponseInterface on success. "handler" is a
  constructor only option that cannot be overridden in per/request
  options. If no handler is provided, a default handler will be created
  that enables all of the request options below by attaching all of the
  default middleware to the handler.
- base_uri: (string|UriInterface) Base URI of the client that is merged
  into relative URIs. Can be a string or instance of UriInterface.
- **: any request option
@param array $config Client configuration settings.
@see \GuzzleHttp\RequestOptions for a list of available request options.

Configures the default options for a client.
@param array $config

Merges default options into the array.
@param array $options Options to modify by reference
@return array

Transfers the given request and applies request options.
The URI of the request is not modified and the request options are used
as-is without merging in default options.
@param RequestInterface $request
@param array            $options
@return Promise\PromiseInterface

Applies the array of request options to a request.
@param RequestInterface $request
@param array            $options
@return RequestInterface

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Client.php`

**Classes**:
- `GuzzleHttp\Client implements ClientInterface`

**Functions/Methods**:
- `__construct(array $config = [])`
- `__call($method, $args)`
- `sendAsync(RequestInterface $request, array $options = [])`
- `send(RequestInterface $request, array $options = [])`
- `requestAsync($method, $uri = '', array $options = [])`
- `request($method, $uri = '', array $options = [])`
- `getConfig($option = null)`
- `buildUri($uri, array $config)`
- `configureDefaults(array $config)`
- `prepareDefaults($options)`
- `transfer(RequestInterface $request, array $options)`
- `applyOptions(RequestInterface $request, array &$options)`
- `invalidBody()`

