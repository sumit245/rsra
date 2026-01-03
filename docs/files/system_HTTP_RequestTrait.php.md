# system\HTTP\RequestTrait.php

- Path: `system\HTTP\RequestTrait.php`
- Type: PHP
- Size: 10557 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Request Trait
Additional methods to make a PSR-7 Request class
compliant with the framework's own RequestInterface.
@see https://github.com/php-fig/http-message/blob/master/src/RequestInterface.php

IP address of the current user.
@var string
@deprecated Will become private in a future release

Stores values we've retrieved from
PHP globals.
@var array

Gets the user's IP address.
@return string IP address

@deprecated $this->proxyIPs property will be removed in the future

Fetch an item from the $_SERVER array.
@param array|string|null $index  Index for item to be fetched from $_SERVER
@param int|null          $filter A filter name to be applied
@param null              $flags
@return mixed

Fetch an item from the $_ENV array.
@param null $index  Index for item to be fetched from $_ENV
@param null $filter A filter name to be applied
@param null $flags
@return mixed

Allows manually setting the value of PHP global, like $_GET, $_POST, etc.
@param mixed $value
@return $this

Fetches one or more items from a global, like cookies, get, post, etc.
Can optionally filter the input when you retrieve it by passing in
a filter.
If $type is an array, it must conform to the input allowed by the
filter_input_array method.
http://php.net/manual/en/filter.filters.sanitize.php
@param string            $method Input filter constant
@param array|string|null $index
@param int|null          $filter Filter constant
@param array|int|null    $flags  Options
@return mixed

Saves a copy of the current state of one of several PHP globals
so we can retrieve them later.

## References

**Database Tables (inferred)**
- `the`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\RequestTrait.php`

**Functions/Methods**:
- `getIPAddress()`
- `getServer($index = null, $filter = null, $flags = null)`
- `getEnv($index = null, $filter = null, $flags = null)`
- `setGlobal(string $method, $value)`
- `fetchGlobal(string $method, $index = null, ?int $filter = null, $flags = null)`
- `populateGlobals(string $method)`

