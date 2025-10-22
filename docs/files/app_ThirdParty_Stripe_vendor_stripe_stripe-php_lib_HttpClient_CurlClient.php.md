# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\HttpClient\CurlClient.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\HttpClient\CurlClient.php`
- Type: PHP
- Size: 24722 bytes

## Summary (from docblocks)

@var \Stripe\Util\RandomGenerator

CurlClient constructor.
Pass in a callable to $defaultOptions that returns an array of CURLOPT_* values to start
off a request with, or an flat array with the same format used by curl_setopt_array() to
provide a static set of options. Note that many options are overridden later in the request
call, including timeouts, which can be set via setTimeout() and setConnectTimeout().
Note that request() will silently ignore a non-callable, non-array $defaultOptions, and will
throw an exception if $defaultOptions returns a non-array value.
@param null|array|callable $defaultOptions
@param null|\Stripe\Util\RandomGenerator $randomGenerator

@return bool

@param bool $enable

@return bool

@param bool $enable

@return null|callable

Sets a callback that is called after each request. The callback will
receive the following parameters:
<ol>
  <li>string $rbody The response body</li>
  <li>integer $rcode The response status code</li>
  <li>\Stripe\Util\CaseInsensitiveArray $rheaders The response headers</li>
  <li>integer $errno The curl error number</li>
  <li>string|null $message The curl error message</li>
  <li>boolean $shouldRetry Whether the request will be retried</li>
  <li>integer $numRetries The number of the retry attempt</li>
</ol>.
@param null|callable $requestStatusCallback

Curl permits sending \CURLOPT_HEADERFUNCTION, which is called with lines
from the header and \CURLOPT_WRITEFUNCTION, which is called with bytes
from the body. You usually want to handle the body differently depending
on what was in the header.
This function makes it easier to specify different callbacks depending
on the contents of the heeder. After the header has been completely read
and the body begins to stream, it will call $determineWriteCallback with
the array of headers. $determineWriteCallback should, based on the
headers it receives, return a "writeCallback" that describes what to do
with the incoming HTTP response body.
@param array $opts
@param callable $determineWriteCallback
@return array

Like `executeRequestWithRetries` except:
  1. Does not buffer the body of a successful (status code < 300)
     response into memory -- instead, calls the caller-provided
     $readBodyChunk with each chunk of incoming data.
  2. Does not retry if a network error occurs while streaming the
     body of a successful response.
@param array $opts cURL options
@param string $absUrl
@param callable $readBodyChunk
@return array

@var bool

@var int

@var null|string

@var null|bool

@var null|array

@param array $opts cURL options
@param string $absUrl

@param string $url
@param int $errno
@param string $message
@param int $numRetries
@throws Exception\ApiConnectionException

Checks if an error is a problem that we should retry on. This includes both
socket errors that may represent an intermittent problem and some special
HTTP statuses.
@param int $errno
@param int $rcode
@param array|\Stripe\Util\CaseInsensitiveArray $rheaders
@param int $numRetries
@return bool

Provides the number of seconds to wait before retrying a request.
@param int $numRetries
@param array|\Stripe\Util\CaseInsensitiveArray $rheaders
@return int

Initializes the curl handle. If already initialized, the handle is closed first.

Closes the curl handle if initialized. Do nothing if already closed.

Resets the curl handle. If the handle is not already initialized, or if persistent
connections are disabled, the handle is reinitialized instead.

Indicates whether it is safe to use HTTP/2 or not.
@return bool

Checks if a list of headers contains a specific header name.
@param string[] $headers
@param string $name
@return bool

## References

**Database Tables (inferred)**
- `their`
- `array`
- `being`
- `the`
- `an`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\HttpClient\CurlClient.php`

**Classes**:
- `Stripe\HttpClient\CurlClient implements ClientInterface, StreamingClientInterface`

**Functions/Methods**:
- `instance()`
- `__construct($defaultOptions = null, $randomGenerator = null)`
- `__destruct()`
- `initUserAgentInfo()`
- `getDefaultOptions()`
- `getUserAgentInfo()`
- `getEnablePersistentConnections()`
- `setEnablePersistentConnections($enable)`
- `getEnableHttp2()`
- `setEnableHttp2($enable)`
- `getRequestStatusCallback()`
- `setRequestStatusCallback($requestStatusCallback)`
- `setTimeout($seconds)`
- `setConnectTimeout($seconds)`
- `getTimeout()`
- `getConnectTimeout()`
- `constructRequest($method, $absUrl, $headers, $params, $hasFile)`
- `request($method, $absUrl, $headers, $params, $hasFile)`
- `requestStream($method, $absUrl, $headers, $params, $hasFile, $readBodyChunk)`
- `useHeadersToDetermineWriteCallback($opts, $determineWriteCallback)`
- `parseLineIntoHeaderArray($line, &$headers)`
- `executeStreamingRequestWithRetries($opts, $absUrl, $readBodyChunk)`
- `executeRequestWithRetries($opts, $absUrl)`
- `handleCurlError($url, $errno, $message, $numRetries)`
- `shouldRetry($errno, $rcode, $rheaders, $numRetries)`
- `sleepTime($numRetries, $rheaders)`
- `initCurlHandle()`
- `closeCurlHandle()`
- `resetCurlHandle()`
- `canSafelyUseHttp2()`
- `hasHeader($headers, $name)`

