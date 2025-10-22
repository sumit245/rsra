# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\functions.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\functions.php`
- Type: PHP
- Size: 9880 bytes

## Summary (from docblocks)

Expands a URI template
@param string $template  URI template
@param array  $variables Template variables
@return string

Debug function used to describe the provided value type and class.
@param mixed $input
@return string Returns a string containing the type of the variable and
               if a class is provided, the class name.

Parses an array of header lines into an associative array of headers.
@param array $lines Header lines array of strings in the following
                    format: "Name: Value"
@return array

Returns a debug stream based on the provided variable.
@param mixed $value Optional value
@return resource

Chooses and creates a default handler to use based on the environment.
The returned handler is not wrapped by any default middlewares.
@throws \RuntimeException if no viable Handler is available.
@return callable Returns the best handler for the given system.

Get the default User-Agent string to use with Guzzle
@return string

Returns the default cacert bundle for the current system.
First, the openssl.cafile and curl.cainfo php.ini settings are checked.
If those settings are not configured, then the common locations for
bundles found on Red Hat, CentOS, Fedora, Ubuntu, Debian, FreeBSD, OS X
and Windows are checked. If any of these file locations are found on
disk, they will be utilized.
Note: the result of this function is cached for subsequent calls.
@return string
@throws \RuntimeException if no bundle can be found.

Creates an associative array of lowercase header names to the actual
header casing.
@param array $headers
@return array

Returns true if the provided host matches any of the no proxy areas.
This method will strip a port from the host if it is present. Each pattern
can be matched with an exact match (e.g., "foo.com" == "foo.com") or a
partial match: (e.g., "foo.com" == "baz.foo.com" and ".foo.com" ==
"baz.foo.com", but ".foo.com" != "foo.com").
Areas are matched in the following cases:
1. "*" (without quotes) always matches any hosts.
2. An exact match.
3. The area starts with "." and the area is the last part of the host. e.g.
   '.mit.edu' will match any host that ends with '.mit.edu'.
@param string $host         Host to check against the patterns.
@param array  $noProxyArray An array of host patterns.
@return bool

Wrapper for json_decode that throws when an error occurs.
@param string $json    JSON data to parse
@param bool $assoc     When true, returned objects will be converted
                       into associative arrays.
@param int    $depth   User specified recursion depth.
@param int    $options Bitmask of JSON decode options.
@return mixed
@throws \InvalidArgumentException if the JSON cannot be decoded.
@link http://www.php.net/manual/en/function.json-decode.php

Wrapper for JSON encoding that throws when an error occurs.
@param mixed $value   The value being encoded
@param int    $options JSON encode option bitmask
@param int    $depth   Set the maximum depth. Must be greater than zero.
@return string
@throws \InvalidArgumentException if the JSON cannot be encoded.
@link http://www.php.net/manual/en/function.json-encode.php

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\functions.php`

**Classes**:
- `GuzzleHttp\is`
- `GuzzleHttp\name`

**Functions/Methods**:
- `uri_template($template, array $variables)`
- `describe_type($input)`
- `headers_from_lines($lines)`
- `debug_resource($value = null)`
- `choose_handler()`
- `default_user_agent()`
- `default_ca_bundle()`
- `normalize_header_keys(array $headers)`
- `is_host_in_noproxy($host, array $noProxyArray)`
- `json_decode($json, $assoc = false, $depth = 512, $options = 0)`
- `json_encode($value, $options = 0, $depth = 512)`

