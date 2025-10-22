# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\ChaCha20\Ctx.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\ChaCha20\Ctx.php`
- Type: PHP
- Size: 4792 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core32_ChaCha20_Ctx

@var SplFixedArray internally, <int, ParagonIE_Sodium_Core32_Int32>

ParagonIE_Sodium_Core_ChaCha20_Ctx constructor.
@internal You should not use this directly from another application
@param string $key     ChaCha20 key.
@param string $iv      Initialization Vector (a.k.a. nonce).
@param string $counter The initial counter value.
                       Defaults to 8 0x00 bytes.
@throws InvalidArgumentException
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param int $offset
@param int|ParagonIE_Sodium_Core32_Int32 $value
@return void

@internal You should not use this directly from another application
@param int $offset
@return bool
@psalm-suppress MixedArrayOffset

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

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\ChaCha20\Ctx.php`

**Classes**:
- `ParagonIE_Sodium_Core32_ChaCha20_Ctx extends ParagonIE_Sodium_Core32_Util implements ArrayAccess`

**Functions/Methods**:
- `__construct($key = '', $iv = '', $counter = '')`
- `offsetSet($offset, $value)`
- `offsetExists($offset)`
- `offsetUnset($offset)`
- `offsetGet($offset)`

