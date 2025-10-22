# app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\Response.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\Response.php`
- Type: PHP
- Size: 4793 bytes

## Summary (from docblocks)

PSR-7 response implementation.

@var array Map of standard HTTP status code/reason phrases

@var string

@var int

@param int                                  $status  Status code
@param array                                $headers Response headers
@param string|null|resource|StreamInterface $body    Response body
@param string                               $version Protocol version
@param string|null                          $reason  Reason phrase (when empty a default will be used based on the status code)

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\Response.php`

**Classes**:
- `GuzzleHttp\Psr7\Response implements ResponseInterface`

**Functions/Methods**:
- `__construct($status = 200,
        array $headers = [],
        $body = null,
        $version = '1.1',
        $reason = null)`
- `getStatusCode()`
- `getReasonPhrase()`
- `withStatus($code, $reasonPhrase = '')`
- `assertStatusCodeIsInteger($statusCode)`
- `assertStatusCodeRange($statusCode)`

