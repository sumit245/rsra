# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Util\RequestOptions.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Util\RequestOptions.php`
- Type: PHP
- Size: 5321 bytes

## Summary (from docblocks)

@var array<string> a list of headers that should be persisted across requests

@var array<string, string>

@var null|string

@var null|string

@param null|string $key
@param array<string, string> $headers
@param null|string $base

@return array<string, string>

Unpacks an options array and merges it into the existing RequestOptions
object.
@param null|array|RequestOptions|string $options a key => value array
@param bool $strict when true, forbid string form and arbitrary keys in array form
@return RequestOptions

Discards all headers that we don't want to persist across requests.

Unpacks an options array into an RequestOptions object.
@param null|array|RequestOptions|string $options a key => value array
@param bool $strict when true, forbid string form and arbitrary keys in array form
@throws \Stripe\Exception\InvalidArgumentException
@return RequestOptions

@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Util\RequestOptions.php`

**Classes**:
- `Stripe\Util\RequestOptions`

**Functions/Methods**:
- `__construct($key = null, $headers = [], $base = null)`
- `__debugInfo()`
- `merge($options, $strict = false)`
- `discardNonPersistentHeaders()`
- `parse($options, $strict = false)`
- `redactedApiKey()`

