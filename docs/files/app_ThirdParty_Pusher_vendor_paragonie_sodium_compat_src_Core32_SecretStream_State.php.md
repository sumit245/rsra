# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\SecretStream\State.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\SecretStream\State.php`
- Type: PHP
- Size: 3656 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core32_SecretStream_State

@var string $key

@var int $counter

@var string $nonce

@var string $_pad

ParagonIE_Sodium_Core32_SecretStream_State constructor.
@param string $key
@param string|null $nonce

@return self

@return string

@return string

@return string

@return string

@return self

@return bool

@param string $newKeyAndNonce
@return self

@param string $str
@return self

@param string $string
@return self

@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\SecretStream\State.php`

**Classes**:
- `ParagonIE_Sodium_Core32_SecretStream_State`

**Functions/Methods**:
- `__construct($key, $nonce = null)`
- `counterReset()`
- `getKey()`
- `getCounter()`
- `getNonce()`
- `getCombinedNonce()`
- `incrementCounter()`
- `needsRekey()`
- `rekey($newKeyAndNonce)`
- `xorNonce($str)`
- `fromString($string)`
- `toString()`

