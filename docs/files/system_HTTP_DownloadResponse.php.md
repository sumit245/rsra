# system\HTTP\DownloadResponse.php

- Path: `system\HTTP\DownloadResponse.php`
- Type: PHP
- Size: 7623 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

HTTP response when a download is requested.

Download file name

Download for file

mime set flag

Download for binary

Download charset

Download reason
@var string

The current status code for this response.
@var int

Constructor.

set download for binary string.

set download for file.

set name for the download.
@return $this

get content length.

Set content type by guessing mime type from file extension

get download filename.

get Content-Disposition Header string.

Disallows status changing.
@throws DownloadException

Sets the Content Type header for this response with the mime type
and, optionally, the charset.
@return ResponseInterface

Sets the appropriate headers to ensure this response
is not cached by the browsers.

Disables cache configuration.
@throws DownloadException

{@inheritDoc}
@todo Do downloads need CSP or Cookies? Compare with ResponseTrait::send()

set header for file download.

output download file text.
@throws DownloadException
@return DownloadResponse

output download text by file.
@return DownloadResponse

output download text by binary
@return DownloadResponse

## References

**Database Tables (inferred)**
- `file`

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\DownloadResponse.php`

**Classes**:
- `CodeIgniter\HTTP\DownloadResponse extends Response`

**Functions/Methods**:
- `__construct(string $filename, bool $setMime)`
- `setBinary(string $binary)`
- `setFilePath(string $filepath)`
- `setFileName(string $filename)`
- `getContentLength()`
- `setContentTypeByMimeType()`
- `getDownloadFileName()`
- `getContentDisposition()`
- `setStatusCode(int $code, string $reason = '')`
- `setContentType(string $mime, string $charset = 'UTF-8')`
- `noCache()`
- `setCache(array $options = [])`
- `send()`
- `buildHeaders()`
- `sendBody()`
- `sendBodyByFilePath()`
- `sendBodyByBinary()`

