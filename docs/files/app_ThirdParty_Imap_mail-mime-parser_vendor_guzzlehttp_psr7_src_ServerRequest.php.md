# app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\ServerRequest.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\ServerRequest.php`
- Type: PHP
- Size: 9823 bytes

## Summary (from docblocks)

Server-side HTTP request
Extends the Request definition to add methods for accessing incoming data,
specifically server parameters, cookies, matched path parameters, query
string arguments, body parameters, and upload file information.
"Attributes" are discovered via decomposing the request (and usually
specifically the URI path), and typically will be injected by the application.
Requests are considered immutable; all methods that might change state are
implemented such that they retain the internal state of the current
message and return a new instance that contains the changed state.

@var array

@var array

@var null|array|object

@var array

@var array

@var array

@param string                               $method       HTTP method
@param string|UriInterface                  $uri          URI
@param array                                $headers      Request headers
@param string|null|resource|StreamInterface $body         Request body
@param string                               $version      Protocol version
@param array                                $serverParams Typically the $_SERVER superglobal

Return an UploadedFile instance array.
@param array $files A array which respect $_FILES structure
@throws InvalidArgumentException for unrecognized values
@return array

Create and return an UploadedFile instance from a $_FILES specification.
If the specification represents an array of values, this method will
delegate to normalizeNestedFileSpec() and return that return value.
@param array $value $_FILES struct
@return array|UploadedFileInterface

Normalize an array of file specifications.
Loops through all nested files and returns a normalized array of
UploadedFileInterface instances.
@param array $files
@return UploadedFileInterface[]

Return a ServerRequest populated with superglobals:
$_GET
$_POST
$_COOKIE
$_FILES
$_SERVER
@return ServerRequestInterface

Get a Uri populated with values from $_SERVER.
@return UriInterface

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\ServerRequest.php`

**Classes**:
- `GuzzleHttp\Psr7\ServerRequest extends Request implements ServerRequestInterface`

**Functions/Methods**:
- `__construct($method,
        $uri,
        array $headers = [],
        $body = null,
        $version = '1.1',
        array $serverParams = [])`
- `normalizeFiles(array $files)`
- `createUploadedFileFromSpec(array $value)`
- `normalizeNestedFileSpec(array $files = [])`
- `fromGlobals()`
- `extractHostAndPortFromAuthority($authority)`
- `getUriFromGlobals()`
- `getServerParams()`
- `getUploadedFiles()`
- `withUploadedFiles(array $uploadedFiles)`
- `getCookieParams()`
- `withCookieParams(array $cookies)`
- `getQueryParams()`
- `withQueryParams(array $query)`
- `getParsedBody()`
- `withParsedBody($data)`
- `getAttributes()`
- `getAttribute($attribute, $default = null)`
- `withAttribute($attribute, $value)`
- `withoutAttribute($attribute)`

