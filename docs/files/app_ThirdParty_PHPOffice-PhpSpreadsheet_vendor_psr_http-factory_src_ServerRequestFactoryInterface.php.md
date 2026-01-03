# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\psr\http-factory\src\ServerRequestFactoryInterface.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\psr\http-factory\src\ServerRequestFactoryInterface.php`
- Type: PHP
- Size: 927 bytes

## Summary (from docblocks)

Create a new server request.
Note that server-params are taken precisely as given - no parsing/processing
of the given values is performed, and, in particular, no attempt is made to
determine the HTTP method or URI, which must be provided explicitly.
@param string $method The HTTP method associated with the request.
@param UriInterface|string $uri The URI associated with the request. If
    the value is a string, the factory MUST create a UriInterface
    instance based on it.
@param array $serverParams Array of SAPI parameters with which to seed
    the generated request instance.
@return ServerRequestInterface

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\psr\http-factory\src\ServerRequestFactoryInterface.php`

**Functions/Methods**:
- `createServerRequest(string $method, $uri, array $serverParams = [])`

