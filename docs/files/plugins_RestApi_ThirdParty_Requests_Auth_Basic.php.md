# plugins\RestApi\ThirdParty\Requests\Auth\Basic.php

- Path: `plugins\RestApi\ThirdParty\Requests\Auth\Basic.php`
- Type: PHP
- Size: 1939 bytes

## Summary (from docblocks)

Basic Authentication provider
@package Requests
@subpackage Authentication

Basic Authentication provider
Provides a handler for Basic HTTP authentication via the Authorization
header.
@package Requests
@subpackage Authentication

Username
@var string

Password
@var string

Constructor
@throws Requests_Exception On incorrect number of arguments (`authbasicbadargs`)
@param array|null $args Array of user and password. Must have exactly two elements

Register the necessary callbacks
@see curl_before_send
@see fsockopen_header
@param Requests_Hooks $hooks Hook system

Set cURL parameters before the data is sent
@param resource $handle cURL resource

Add extra headers to the request before sending
@param string $out HTTP header string

Get the authentication string (user:pass)
@return string

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\ThirdParty\Requests\Auth\Basic.php`

**Classes**:
- `Requests_Auth_Basic implements Requests_Auth`

**Functions/Methods**:
- `__construct($args = null)`
- `register(Requests_Hooks $hooks)`
- `curl_before_send(&$handle)`
- `fsockopen_header(&$out)`
- `getAuthString()`

