# system\HTTP\RequestInterface.php

- Path: `system\HTTP\RequestInterface.php`
- Type: PHP
- Size: 1547 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Expected behavior of an HTTP request
@mixin IncomingRequest
@mixin CLIRequest
@mixin CURLRequest

Gets the user's IP address.
Supplied by RequestTrait.
@return string IP address

Validate an IP address
@param string $ip    IP Address
@param string $which IP protocol: 'ipv4' or 'ipv6'
@deprecated Use Validation instead

Get the request method.
An extension of PSR-7's getMethod to allow casing.
@param bool $upper Whether to return in upper or lower case.
@deprecated The $upper functionality will be removed and this will revert to its PSR-7 equivalent

Fetch an item from the $_SERVER array.
Supplied by RequestTrait.
@param string $index  Index for item to be fetched from $_SERVER
@param null   $filter A filter name to be applied
@return mixed

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\RequestInterface.php`

**Functions/Methods**:
- `getIPAddress()`
- `isValidIP(string $ip, ?string $which = null)`
- `getMethod(bool $upper = false)`
- `getServer($index = null, $filter = null)`

