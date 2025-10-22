# plugins\RestApi\ThirdParty\Requests\Transport\cURL.php

- Path: `plugins\RestApi\ThirdParty\Requests\Transport\cURL.php`
- Type: PHP
- Size: 15860 bytes

## Summary (from docblocks)

cURL HTTP transport
@package Requests
@subpackage Transport

cURL HTTP transport
@package Requests
@subpackage Transport

Raw HTTP data
@var string

Raw body data
@var string

Information on the current request
@var array cURL information array, see {@see https://secure.php.net/curl_getinfo}

cURL version number
@var int

cURL handle
@var resource

Hook dispatcher instance
@var Requests_Hooks

Have we finished the headers yet?
@var boolean

If streaming to a file, keep the file pointer
@var resource

How many bytes are in the response body?
@var int

What's the maximum number of bytes we should keep?
@var int|bool Byte count, or false if no limit.

Constructor

Destructor

Perform a request
@throws Requests_Exception On a cURL error (`curlerror`)
@param string $url URL to request
@param array $headers Associative array of request headers
@param string|array $data Data to send either as the POST body, or as parameters in the URL for a GET/HEAD
@param array $options Request options, see {@see Requests::response()} for documentation
@return string Raw HTTP result

Send multiple requests simultaneously
@param array $requests Request data
@param array $options Global options
@return array Array of Requests_Response objects (may contain Requests_Exception or string responses as well)

Get the cURL handle for use in a multi-request
@param string $url URL to request
@param array $headers Associative array of request headers
@param string|array $data Data to send either as the POST body, or as parameters in the URL for a GET/HEAD
@param array $options Request options, see {@see Requests::response()} for documentation
@return resource Subrequest's cURL handle

Setup the cURL handle for the given data
@param string $url URL to request
@param array $headers Associative array of request headers
@param string|array $data Data to send either as the POST body, or as parameters in the URL for a GET/HEAD
@param array $options Request options, see {@see Requests::response()} for documentation

Process a response
@param string $response Response data from the body
@param array $options Request options
@return string|false HTTP response data including headers. False if non-blocking.
@throws Requests_Exception

Collect the headers as they are received
@param resource $handle cURL resource
@param string $headers Header string
@return integer Length of provided header

Collect data as it's received
@since 1.6.1
@param resource $handle cURL resource
@param string $data Body data
@return integer Length of provided data

Format a URL given GET data
@param string $url
@param array|object $data Data to build query using, see {@see https://secure.php.net/http_build_query}
@return string URL with data

Whether this transport is valid
@codeCoverageIgnore
@return boolean True if the transport is valid, false otherwise.

## References

**Database Tables (inferred)**
- `the`
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\ThirdParty\Requests\Transport\cURL.php`

**Classes**:
- `Requests_Transport_cURL implements Requests_Transport`

**Functions/Methods**:
- `__construct()`
- `__destruct()`
- `request($url, $headers = array()`
- `request_multiple($requests, $options)`
- `setup_handle($url, $headers, $data, $options)`
- `process_response($response, $options)`
- `stream_headers($handle, $headers)`
- `stream_body($handle, $data)`
- `format_get($url, $data)`
- `test($capabilities = array()`

