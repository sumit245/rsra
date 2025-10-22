# plugins\RestApi\ThirdParty\Requests\Proxy\HTTP.php

- Path: `plugins\RestApi\ThirdParty\Requests\Proxy\HTTP.php`
- Type: PHP
- Size: 3488 bytes

## Summary (from docblocks)

HTTP Proxy connection interface
@package Requests
@subpackage Proxy
@since 1.6

HTTP Proxy connection interface
Provides a handler for connection via an HTTP proxy
@package Requests
@subpackage Proxy
@since 1.6

Proxy host and port
Notation: "host:port" (eg 127.0.0.1:8080 or someproxy.com:3128)
@var string

Username
@var string

Password
@var string

Do we need to authenticate? (ie username & password have been provided)
@var boolean

Constructor
@since 1.6
@throws Requests_Exception On incorrect number of arguments (`authbasicbadargs`)
@param array|null $args Array of user and password. Must have exactly two elements

Register the necessary callbacks
@since 1.6
@see curl_before_send
@see fsockopen_remote_socket
@see fsockopen_remote_host_path
@see fsockopen_header
@param Requests_Hooks $hooks Hook system

Set cURL parameters before the data is sent
@since 1.6
@param resource $handle cURL resource

Alter remote socket information before opening socket connection
@since 1.6
@param string $remote_socket Socket connection string

Alter remote path before getting stream data
@since 1.6
@param string $path Path to send in HTTP request string ("GET ...")
@param string $url Full URL we're requesting

Add extra headers to the request before sending
@since 1.6
@param string $out HTTP header string

Get the authentication string (user:pass)
@since 1.6
@return string

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\ThirdParty\Requests\Proxy\HTTP.php`

**Classes**:
- `Requests_Proxy_HTTP implements Requests_Proxy`

**Functions/Methods**:
- `__construct($args = null)`
- `register(Requests_Hooks $hooks)`
- `curl_before_send(&$handle)`
- `fsockopen_remote_socket(&$remote_socket)`
- `fsockopen_remote_host_path(&$path, $url)`
- `fsockopen_header(&$out)`
- `get_auth_string()`

