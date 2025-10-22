# system\HTTP\Exceptions\HTTPException.php

- Path: `system\HTTP\Exceptions\HTTPException.php`
- Type: PHP
- Size: 4720 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Things that can go wrong with HTTP

For CurlRequest
@return HTTPException
@codeCoverageIgnore

For CurlRequest
@return HTTPException

For CurlRequest
@return HTTPException

For CurlRequest
@return HTTPException
@codeCoverageIgnore

For IncomingRequest
@return HTTPException

For Message
@return HTTPException

For Negotiate
@return HTTPException

For RedirectResponse
@return HTTPException

For Response
@return HTTPException

For Response
@return HTTPException

For Response
@return HTTPException

For URI
@return HTTPException

For URI
@return HTTPException

For URI
@return HTTPException

For URI
@return HTTPException

For Uploaded file move
@return HTTPException

For Uploaded file move
@return HTTPException

For Uploaded file move
@return HTTPException

For Invalid SameSite attribute setting
@return HTTPException
@deprecated Use `CookieException::forInvalidSameSite()` instead.
@codeCoverageIgnore

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\Exceptions\HTTPException.php`

**Classes**:
- `CodeIgniter\HTTP\Exceptions\HTTPException extends FrameworkException`

**Functions/Methods**:
- `forMissingCurl()`
- `forSSLCertNotFound(string $cert)`
- `forInvalidSSLKey(string $key)`
- `forCurlError(string $errorNum, string $error)`
- `forInvalidNegotiationType(string $type)`
- `forInvalidHTTPProtocol(string $protocols)`
- `forEmptySupportedNegotiations()`
- `forInvalidRedirectRoute(string $route)`
- `forMissingResponseStatus()`
- `forInvalidStatusCode(int $code)`
- `forUnkownStatusCode(int $code)`
- `forUnableToParseURI(string $uri)`
- `forURISegmentOutOfRange(int $segment)`
- `forInvalidPort(int $port)`
- `forMalformedQueryString()`
- `forAlreadyMoved()`
- `forInvalidFile(?string $path = null)`
- `forMoveFailed(string $source, string $target, string $error)`
- `forInvalidSameSiteSetting(string $samesite)`

