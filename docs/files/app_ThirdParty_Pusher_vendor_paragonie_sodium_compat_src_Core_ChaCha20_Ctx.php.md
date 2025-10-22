# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\ChaCha20\Ctx.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\ChaCha20\Ctx.php`
- Type: PHP
- Size: 3830 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core_ChaCha20_Ctx

@var SplFixedArray internally, <int, int>

ParagonIE_Sodium_Core_ChaCha20_Ctx constructor.
@internal You should not use this directly from another application
@param string $key     ChaCha20 key.
@param string $iv      Initialization Vector (a.k.a. nonce).
@param string $counter The initial counter value.
                       Defaults to 8 0x00 bytes.
@throws InvalidArgumentException
@throws TypeError

@internal You should not use this directly from another application
@param int $offset
@param int $value
@return void
@psalm-suppress MixedArrayOffset

@internal You should not use this directly from another application
@param int $offset
@return bool

@internal You should not use this directly from another application
@param int $offset
@return void
@psalm-suppress MixedArrayOffset

@internal You should not use this directly from another application
@param int $offset
@return mixed|null
@psalm-suppress MixedArrayOffset

## References

**Database Tables (inferred)**
- `another`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\ChaCha20\Ctx.php`

**Classes**:
- `ParagonIE_Sodium_Core_ChaCha20_Ctx extends ParagonIE_Sodium_Core_Util implements ArrayAccess`

**Functions/Methods**:
- `__construct($key = '', $iv = '', $counter = '')`
- `offsetSet($offset, $value)`
- `offsetExists($offset)`
- `offsetUnset($offset)`
- `offsetGet($offset)`

