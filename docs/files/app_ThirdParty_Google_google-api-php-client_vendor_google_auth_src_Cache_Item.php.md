# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Cache\Item.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Cache\Item.php`
- Type: PHP
- Size: 4103 bytes

## Summary (from docblocks)

A cache item.

@var string

@var mixed

@var \DateTime

@var bool

@param string $key

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

Handles an error.
@param string $error
@throws \TypeError

Determines if an expiration is valid based on the rules defined by PSR6.
@param mixed $expiration
@return bool

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Cache\Item.php`

**Classes**:
- `Google\Auth\Cache\Item implements CacheItemInterface`

**Functions/Methods**:
- `__construct($key)`
- `getKey()`
- `get()`
- `isHit()`
- `set($value)`
- `expiresAt($expiration)`
- `expiresAfter($time)`
- `handleError($error)`
- `isValidExpiration($expiration)`

