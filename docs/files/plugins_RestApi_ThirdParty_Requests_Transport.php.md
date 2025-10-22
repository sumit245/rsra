# plugins\RestApi\ThirdParty\Requests\Transport.php

- Path: `plugins\RestApi\ThirdParty\Requests\Transport.php`
- Type: PHP
- Size: 1221 bytes

## Summary (from docblocks)

Base HTTP transport
@package Requests
@subpackage Transport

Base HTTP transport
@package Requests
@subpackage Transport

Perform a request
@param string $url URL to request
@param array $headers Associative array of request headers
@param string|array $data Data to send either as the POST body, or as parameters in the URL for a GET/HEAD
@param array $options Request options, see {@see Requests::response()} for documentation
@return string Raw HTTP result

Send multiple requests simultaneously
@param array $requests Request data (array of 'url', 'headers', 'data', 'options') as per {@see Requests_Transport::request}
@param array $options Global options, see {@see Requests::response()} for documentation
@return array Array of Requests_Response objects (may contain Requests_Exception or string responses as well)

Self-test whether the transport can be used
@return bool

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\ThirdParty\Requests\Transport.php`

**Functions/Methods**:
- `request($url, $headers = array()`
- `request_multiple($requests, $options)`
- `test()`

