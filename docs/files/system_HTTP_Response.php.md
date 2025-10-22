# system\HTTP\Response.php

- Path: `system\HTTP\Response.php`
- Type: PHP
- Size: 9208 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Representation of an outgoing, getServer-side response.
Per the HTTP specification, this interface includes properties for
each of the following:
- Protocol version
- Status code and reason phrase
- Headers
- Message body

HTTP status codes
@var array

The current reason phrase for this response.
If empty string, will use the default provided for the status code.
@var string

The current status code for this response.
The status code is a 3-digit integer result code of the server's attempt
to understand and satisfy the request.
@var int

If true, will not write output. Useful during testing.
@var bool
@internal Used for framework testing, should not be relied on otherwise

Constructor
@param App $config
@todo Recommend removing reliance on config injection

Turns "pretend" mode on or off to aid in testing.
Note that this is not a part of the interface so
should not be relied on outside of internal testing.
@return $this

Gets the response status code.
The status code is a 3-digit integer result code of the getServer's attempt
to understand and satisfy the request.
@return int Status code.

Gets the response response phrase associated with the status code.
@see http://tools.ietf.org/html/rfc7231#section-6
@see http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml
@deprecated Use getReasonPhrase()
@codeCoverageIgnore

Gets the response reason phrase associated with the status code.
Because a reason phrase is not a required element in a response
status line, the reason phrase value MAY be null. Implementations MAY
choose to return the default RFC 7231 recommended reason phrase (or those
listed in the IANA HTTP Status Code Registry) for the response's
status code.
@see http://tools.ietf.org/html/rfc7231#section-6
@see http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml
@return string Reason phrase; must return an empty string if none present.

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\Response.php`

**Classes**:
- `CodeIgniter\HTTP\Response extends Message implements MessageInterface, ResponseInterface`

**Functions/Methods**:
- `__construct($config)`
- `pretend(bool $pretend = true)`
- `getStatusCode()`
- `getReason()`
- `getReasonPhrase()`

