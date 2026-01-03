# system\HTTP\Message.php

- Path: `system\HTTP\Message.php`
- Type: PHP
- Size: 2732 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

An HTTP message

Protocol version
@var string

List of valid protocol versions
@var array

Message body
@var mixed

Returns the Message's body.
@return mixed

Returns an array containing all headers.
@return array<string, Header> An array of the request headers
@deprecated Use Message::headers() to make room for PSR-7
@codeCoverageIgnore

Returns a single header object. If multiple headers with the same
name exist, then will return an array of header objects.
@return array|Header|null
@deprecated Use Message::header() to make room for PSR-7
@codeCoverageIgnore

Determines whether a header exists.

Retrieves a comma-separated string of the values for a single header.
This method returns all of the header values of the given
case-insensitive header name as a string concatenated together using
a comma.
NOTE: Not all header values may be appropriately represented using
comma concatenation. For such headers, use getHeader() instead
and supply your own delimiter when concatenating.

Returns the HTTP Protocol Version.

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\Message.php`

**Classes**:
- `CodeIgniter\HTTP\Message implements MessageInterface`

**Functions/Methods**:
- `getBody()`
- `getHeaders()`
- `getHeader(string $name)`
- `hasHeader(string $name)`
- `getHeaderLine(string $name)`
- `getProtocolVersion()`

