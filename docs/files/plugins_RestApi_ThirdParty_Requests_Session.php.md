# plugins\RestApi\ThirdParty\Requests\Session.php

- Path: `plugins\RestApi\ThirdParty\Requests\Session.php`
- Type: PHP
- Size: 7168 bytes

## Summary (from docblocks)

Session handler for persistent requests and default parameters
@package Requests
@subpackage Session Handler

Session handler for persistent requests and default parameters
Allows various options to be set as default values, and merges both the
options and URL properties together. A base URL can be set for all requests,
with all subrequests resolved from this. Base options can be set (including
a shared cookie jar), then overridden for individual requests.
@package Requests
@subpackage Session Handler

Base URL for requests
URLs will be made absolute using this as the base
@var string|null

Base headers for requests
@var array

Base data for requests
If both the base data and the per-request data are arrays, the data will
be merged before sending the request.
@var array

Base options for requests
The base options are merged with the per-request data for each request.
The only default option is a shared cookie jar between requests.
Values here can also be set directly via properties on the Session
object, e.g. `$session->useragent = 'X';`
@var array

Create a new session
@param string|null $url Base URL for requests
@param array $headers Default headers for requests
@param array $data Default data for requests
@param array $options Default options for requests

Get a property's value
@param string $key Property key
@return mixed|null Property value, null if none found

Set a property's value
@param string $key Property key
@param mixed $value Property value

Remove a property's value
@param string $key Property key

Remove a property's value
@param string $key Property key

#@+
@see request()
@param string $url
@param array $headers
@param array $options
@return Requests_Response

Send a GET request

Send a HEAD request

Send a DELETE request

#@-

#@+
@see request()
@param string $url
@param array $headers
@param array $data
@param array $options
@return Requests_Response

Send a POST request

Send a PUT request

Send a PATCH request
Note: Unlike {@see post} and {@see put}, `$headers` is required, as the
specification recommends that should send an ETag
@link https://tools.ietf.org/html/rfc5789

#@-

Main interface for HTTP requests
This method initiates a request and sends it via a transport before
parsing.
@see Requests::request()
@throws Requests_Exception On invalid URLs (`nonhttp`)
@param string $url URL to request
@param array $headers Extra headers to send with the request
@param array|null $data Data to send either as a query string for GET/HEAD requests, or in the body for POST requests
@param string $type HTTP request type (use Requests constants)
@param array $options Options for the request (see {@see Requests::request})
@return Requests_Response

Send multiple HTTP requests simultaneously
@see Requests::request_multiple()
@param array $requests Requests data (see {@see Requests::request_multiple})
@param array $options Global and default options (see {@see Requests::request})
@return array Responses (either Requests_Response or a Requests_Exception object)

Merge a request's data with the default data
@param array $request Request data (same form as {@see request_multiple})
@param boolean $merge_options Should we merge options as well?
@return array Request data

## References

**Database Tables (inferred)**
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\ThirdParty\Requests\Session.php`

**Classes**:
- `Requests_Session`

**Functions/Methods**:
- `__construct($url = null, $headers = array()`
- `__get($key)`
- `__set($key, $value)`
- `__isset($key)`
- `__unset($key)`
- `get($url, $headers = array()`
- `head($url, $headers = array()`
- `delete($url, $headers = array()`
- `post($url, $headers = array()`
- `put($url, $headers = array()`
- `patch($url, $headers, $data = array()`
- `request($url, $headers = array()`
- `request_multiple($requests, $options = array()`
- `merge_request($request, $merge_options = true)`

