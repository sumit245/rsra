# system\HTTP\Header.php

- Path: `system\HTTP\Header.php`
- Type: PHP
- Size: 4287 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class Header
Represents a single HTTP header.

The name of the header.
@var string

The value of the header. May have more than one
value. If so, will be an array of strings.
@var array|string

Header constructor. name is mandatory, if a value is provided, it will be set.
@param array|string|null $value

Returns the name of the header, in the same case it was set.

Gets the raw value of the header. This may return either a string
of an array, depending on whether the header has multiple values or not.
@return array|string

Sets the name of the header, overwriting any previous value.
@return $this

Sets the value of the header, overwriting any previous value(s).
@param array|string|null $value
@return $this

Appends a value to the list of values for this header. If the
header is a single value string, it will be converted to an array.
@param array|string|null $value
@return $this

Prepends a value to the list of values for this header. If the
header is a single value string, it will be converted to an array.
@param array|string|null $value
@return $this

Retrieves a comma-separated string of the values for a single header.
NOTE: Not all header values may be appropriately represented using
comma concatenation. For such headers, use getHeader() instead
and supply your own delimiter when concatenating.
@see https://www.w3.org/Protocols/rfc2616/rfc2616-sec4.html#sec4.2

Returns a representation of the entire header string, including
the header name and all values converted to the proper format.

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\Header.php`

**Classes**:
- `CodeIgniter\HTTP\Header`

**Functions/Methods**:
- `__construct(string $name, $value = null)`
- `getName()`
- `getValue()`
- `setName(string $name)`
- `setValue($value = null)`
- `appendValue($value = null)`
- `prependValue($value = null)`
- `getValueLine()`
- `__toString()`

