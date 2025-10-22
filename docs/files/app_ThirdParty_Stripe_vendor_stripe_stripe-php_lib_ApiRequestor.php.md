# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ApiRequestor.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ApiRequestor.php`
- Type: PHP
- Size: 19061 bytes

## Summary (from docblocks)

Class ApiRequestor.

@var null|string

@var string

@var HttpClient\ClientInterface

@var HttpClient\StreamingClientInterface

@var RequestTelemetry

ApiRequestor constructor.
@param null|string $apiKey
@param null|string $apiBase

Creates a telemetry json blob for use in 'X-Stripe-Client-Telemetry' headers.
@static
@param RequestTelemetry $requestTelemetry
@return string

@static
@param ApiResource|array|bool|mixed $d
@return ApiResource|array|mixed|string

@param string     $method
@param string     $url
@param null|array $params
@param null|array $headers
@throws Exception\ApiErrorException
@return array tuple containing (ApiReponse, API key)

@param string     $method
@param string     $url
@param callable $readBodyChunkCallable
@param null|array $params
@param null|array $headers
@throws Exception\ApiErrorException

@param string $rbody a JSON string
@param int $rcode
@param array $rheaders
@param array $resp
@throws Exception\UnexpectedValueException
@throws Exception\ApiErrorException

@static
@param string $rbody
@param int    $rcode
@param array  $rheaders
@param array  $resp
@param array  $errorData
@return Exception\ApiErrorException

@static
@param bool|string $rbody
@param int         $rcode
@param array       $rheaders
@param array       $resp
@param string      $errorCode
@return Exception\OAuth\OAuthErrorException

@static
@param null|array $appInfo
@return null|string

@static
@param string $disableFunctionsOutput - String value of the 'disable_function' setting, as output by \ini_get('disable_functions')
@param string $functionName - Name of the function we are interesting in seeing whether or not it is disabled
@return bool

@static
@param string $apiKey
@param null   $clientInfo
@return array

@param string $method
@param string $url
@param array $params
@param array $headers
@throws Exception\AuthenticationException
@throws Exception\ApiConnectionException
@return array

@param string $method
@param string $url
@param array $params
@param array $headers
@param callable $readBodyChunkCallable
@throws Exception\AuthenticationException
@throws Exception\ApiConnectionException
@return array

@param resource $resource
@throws Exception\InvalidArgumentException
@return \CURLFile|string

@param string $rbody
@param int    $rcode
@param array  $rheaders
@throws Exception\UnexpectedValueException
@throws Exception\ApiErrorException
@return array

@static
@param HttpClient\ClientInterface $client

@static
@param HttpClient\StreamingClientInterface $client

@static
Resets any stateful telemetry data

@return HttpClient\ClientInterface

@return HttpClient\StreamingClientInterface

## References

**Database Tables (inferred)**
- `API`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ApiRequestor.php`

**Classes**:
- `Stripe\ApiRequestor`

**Functions/Methods**:
- `__construct($apiKey = null, $apiBase = null)`
- `_telemetryJson($requestTelemetry)`
- `_encodeObjects($d)`
- `request($method, $url, $params = null, $headers = null)`
- `requestStream($method, $url, $readBodyChunkCallable, $params = null, $headers = null)`
- `handleErrorResponse($rbody, $rcode, $rheaders, $resp)`
- `_specificAPIError($rbody, $rcode, $rheaders, $resp, $errorData)`
- `_specificOAuthError($rbody, $rcode, $rheaders, $resp, $errorCode)`
- `_formatAppInfo($appInfo)`
- `_isDisabled($disableFunctionsOutput, $functionName)`
- `_defaultHeaders($apiKey, $clientInfo = null)`
- `_prepareRequest($method, $url, $params, $headers)`
- `_requestRaw($method, $url, $params, $headers)`
- `_requestRawStreaming($method, $url, $params, $headers, $readBodyChunkCallable)`
- `_processResourceParam($resource)`
- `_interpretResponse($rbody, $rcode, $rheaders)`
- `setHttpClient($client)`
- `setStreamingHttpClient($client)`
- `resetTelemetry()`
- `httpClient()`
- `streamingHttpClient()`

