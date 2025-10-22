# system\HTTP\CURLRequest.php

- Path: `system\HTTP\CURLRequest.php`
- Type: PHP
- Size: 19354 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

A lightweight HTTP client for sending synchronous HTTP requests via cURL.

The response object associated with this request
@var ResponseInterface|null

The URI associated with this request
@var URI

The setting values
@var array

The default setting values
@var array

Default values for when 'allow_redirects'
option is true.
@var array

The number of milliseconds to delay before
sending the request.
@var float

The default options from the constructor. Applied to all requests.

Whether share options between requests or not.
If true, all the options won't be reset between requests.
It may cause an error request with unnecessary headers.

Takes an array of options to set the following possible class properties:
 - baseURI
 - timeout
 - any other request options to use as defaults.
@param ResponseInterface $response

@var ConfigCURLRequest|null $configCURLRequest

Sends an HTTP request to the specified $url. If this is a relative
URL, it will be merged with $this->baseURI to form a complete URL.
@param string $method

Reset all options to default.

Convenience method for sending a GET request.

Convenience method for sending a DELETE request.

Convenience method for sending a HEAD request.

Convenience method for sending an OPTIONS request.

Convenience method for sending a PATCH request.

Convenience method for sending a POST request.

Convenience method for sending a PUT request.

Set the HTTP Authentication.
@param string $type basic or digest
@return $this

Set form data to be sent.
@param bool $multipart Set TRUE if you are sending CURLFiles
@return $this

Set JSON data to be sent.
@param mixed $data
@return $this

Sets the correct settings based on the options array
passed in.

If the $url is a relative URL, will attempt to create
a full URL by prepending $this->baseURI to it.

Get the request method. Overrides the Request class' method
since users expect a different answer here.
@param bool|false $upper Whether to return in upper or lower case.

Fires the actual cURL request.
@return ResponseInterface

Adds $this->headers to the cURL request.

Apply method

Apply body

Parses the header retrieved from the cURL response into
our Response object.

Set CURL options
@throws InvalidArgumentException
@return array

Does the actual work of initializing cURL, setting the options,
and grabbing the output.
@codeCoverageIgnore

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\CURLRequest.php`

**Classes**:
- `CodeIgniter\HTTP\CURLRequest extends Request`
- `CodeIgniter\HTTP\properties`

**Functions/Methods**:
- `__construct(App $config, URI $uri, ?ResponseInterface $response = null, array $options = [])`
- `request($method, string $url, array $options = [])`
- `resetOptions()`
- `get(string $url, array $options = [])`
- `delete(string $url, array $options = [])`
- `head(string $url, array $options = [])`
- `options(string $url, array $options = [])`
- `patch(string $url, array $options = [])`
- `post(string $url, array $options = [])`
- `put(string $url, array $options = [])`
- `setAuth(string $username, string $password, string $type = 'basic')`
- `setForm(array $params, bool $multipart = false)`
- `setJSON($data)`
- `parseOptions(array $options)`
- `prepareURL(string $url)`
- `getMethod(bool $upper = false)`
- `send(string $method, string $url)`
- `applyRequestHeaders(array $curlOptions = [])`
- `applyMethod(string $method, array $curlOptions)`
- `applyBody(array $curlOptions = [])`
- `setResponseHeaders(array $headers = [])`
- `setCURLOptions(array $curlOptions = [], array $config = [])`
- `sendRequest(array $curlOptions = [])`

