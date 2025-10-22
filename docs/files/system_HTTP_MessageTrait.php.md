# system\HTTP\MessageTrait.php

- Path: `system\HTTP\MessageTrait.php`
- Type: PHP
- Size: 6356 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Message Trait
Additional methods to make a PSR-7 Message class
compliant with the framework's own MessageInterface.
@see https://github.com/php-fig/http-message/blob/master/src/MessageInterface.php

List of all HTTP request headers.
@var array<string, Header>

Holds a map of lower-case header names
and their normal-case key as it is in $headers.
Used for case-insensitive header access.
@var array

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

Takes a header name in any case, and returns the
normal-case version of the header.

Sets the HTTP protocol version.
@throws HTTPException For invalid protocols
@return $this

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\MessageTrait.php`

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
- `getHeaderName(string $name)`
- `setProtocolVersion(string $version)`

