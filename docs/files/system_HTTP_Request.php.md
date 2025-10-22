# system\HTTP\Request.php

- Path: `system\HTTP\Request.php`
- Type: PHP
- Size: 2928 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Representation of an HTTP request.

Proxy IPs
@var array|string
@deprecated Check the App config directly

Request method.
@var string

A URI instance.
@var URI

Constructor.
@param object $config
@deprecated The $config is no longer needed and will be removed in a future version

@deprecated $this->proxyIps property will be removed in the future

Validate an IP address
@param string $ip    IP Address
@param string $which IP protocol: 'ipv4' or 'ipv6'
@deprecated Use Validation instead
@codeCoverageIgnore

Get the request method.
@param bool $upper Whether to return in upper or lower case.
@deprecated The $upper functionality will be removed and this will revert to its PSR-7 equivalent
@codeCoverageIgnore

Sets the request method. Used when spoofing the request.
@return Request
@deprecated Use withMethod() instead for immutability
@codeCoverageIgnore

Returns an instance with the specified method.
@param string $method
@return static

Retrieves the URI instance.
@return URI

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\Request.php`

**Classes**:
- `CodeIgniter\HTTP\Request extends Message implements MessageInterface, RequestInterface`

**Functions/Methods**:
- `__construct($config = null)`
- `isValidIP(?string $ip = null, ?string $which = null)`
- `getMethod(bool $upper = false)`
- `setMethod(string $method)`
- `withMethod($method)`
- `getUri()`

