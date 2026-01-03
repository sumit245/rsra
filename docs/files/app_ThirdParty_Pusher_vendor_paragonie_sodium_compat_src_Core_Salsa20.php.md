# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\Salsa20.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\Salsa20.php`
- Type: PHP
- Size: 8233 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core_Salsa20

Calculate an salsa20 hash of a single block
@internal You should not use this directly from another application
@param string $in
@param string $k
@param string|null $c
@return string
@throws TypeError

@internal You should not use this directly from another application
@param int $len
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param string $m
@param string $n
@param int $ic
@param string $k
@return string
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param string $message
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param int $u
@param int $c
@return int

## References

**Database Tables (inferred)**
- `another`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\Salsa20.php`

**Classes**:
- `ParagonIE_Sodium_Core_Salsa20 extends ParagonIE_Sodium_Core_Util`

**Functions/Methods**:
- `core_salsa20($in, $k, $c = null)`
- `salsa20($len, $nonce, $key)`
- `salsa20_xor_ic($m, $n, $ic, $k)`
- `salsa20_xor($message, $nonce, $key)`
- `rotate($u, $c)`

