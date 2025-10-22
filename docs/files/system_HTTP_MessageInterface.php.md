# system\HTTP\MessageInterface.php

- Path: `system\HTTP\MessageInterface.php`
- Type: PHP
- Size: 2340 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Expected behavior of an HTTP request

Sets the body of the current message.
@param mixed $data
@return $this

Appends data to the body of the current message.
@param mixed $data
@return $this

Populates the $headers array with any headers the getServer knows about.

Returns an array containing all Headers.
@return array<string, Header> An array of the Header objects

Returns a single Header object. If multiple headers with the same
name exist, then will return an array of header objects.
@param string $name
@return array|Header|null

Sets a header and it's value.
@param array|string|null $value
@return $this

Removes a header from the list of headers we track.
@return $this

Adds an additional header value to any headers that accept
multiple values (i.e. are an array or implement ArrayAccess)
@return $this

Adds an additional header value to any headers that accept
multiple values (i.e. are an array or implement ArrayAccess)
@return $this

Sets the HTTP protocol version.
@throws HTTPException For invalid protocols
@return $this

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\MessageInterface.php`

**Functions/Methods**:
- `setBody($data)`
- `appendBody($data)`
- `populateHeaders()`
- `headers()`
- `header($name)`
- `setHeader(string $name, $value)`
- `removeHeader(string $name)`
- `appendHeader(string $name, ?string $value)`
- `prependHeader(string $name, string $value)`
- `setProtocolVersion(string $version)`

