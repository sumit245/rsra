# system\Throttle\Throttler.php

- Path: `system\Throttle\Throttler.php`
- Type: PHP
- Size: 5058 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class Throttler
Uses an implementation of the Token Bucket algorithm to implement a
"rolling window" type of throttling that can be used for rate limiting
an API or any other request.
Each "token" in the "bucket" is equivalent to a single request
for the purposes of this implementation.
@see https://en.wikipedia.org/wiki/Token_bucket

Container for throttle counters.
@var CacheInterface

The number of seconds until the next token is available.
@var int

The prefix applied to all keys to
minimize potential conflicts.
@var string

Timestamp to use (during testing)
@var int

Constructor.

Returns the number of seconds until the next available token will
be released for usage.

Restricts the number of requests made by a single IP address within
a set number of seconds.
Example:
 if (! $throttler->check($request->ipAddress(), 60, MINUTE)) {
     die('You submitted over 60 requests within a minute.');
 }
@param string $key      The name to use as the "bucket" name.
@param int    $capacity The number of requests the "bucket" can hold
@param int    $seconds  The time it takes the "bucket" to completely refill
@param int    $cost     The number of tokens this action uses.
@internal param int $maxRequests

@param string $key The name of the bucket

Used during testing to set the current timestamp to use.
@return $this

Return the test time, defaulting to current.
@TODO should be private

## Symbols

# Symbols

**Files documented**: 1

## `system\Throttle\Throttler.php`

**Classes**:
- `CodeIgniter\Throttle\Throttler implements ThrottlerInterface`

**Functions/Methods**:
- `__construct(CacheInterface $cache)`
- `getTokenTime()`
- `check(string $key, int $capacity, int $seconds, int $cost = 1)`
- `remove(string $key)`
- `setTestTime(int $time)`
- `time()`

