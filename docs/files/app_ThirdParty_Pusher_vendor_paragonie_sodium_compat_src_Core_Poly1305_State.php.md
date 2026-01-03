# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\Poly1305\State.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\Poly1305\State.php`
- Type: PHP
- Size: 12912 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core_Poly1305_State

@var array<int, int>

@var bool

@var array<int, int>

@var int

@var int[]

@var int[]

ParagonIE_Sodium_Core_Poly1305_State constructor.
@internal You should not use this directly from another application
@param string $key
@throws InvalidArgumentException
@throws TypeError

Zero internal buffer upon destruction

@internal You should not use this directly from another application
@param string $message
@return self
@throws SodiumException
@throws TypeError

@var int $want

@internal You should not use this directly from another application
@param string $message
@param int $bytes
@return self
@throws TypeError

@var int $hibit

@var int $c

@var int $h0

@var int $c

@var int $h1

@var int $c

@var int $h2

@var int $c

@var int $h3

@var int $c

@var int $h4

@var int $c

@var int $h0

@internal You should not use this directly from another application
@return string
@throws TypeError

@var int $c

@var int $h1

@var int $h2

@var int $c

@var int $h2

@var int $c

@var int $c

@var int $h0

@var int $c

@var int $h0

@var int $h1

@var int $g0

@var int $c

@var int $g0

@var int $g1

@var int $c

@var int $g2

@var int $c

@var int $g2

@var int $g3

@var int $c

@var int $g3

@var int $g4

@var int $mask

@var int $mask

@var int $h0

@var int $h1

@var int $h2

@var int $h3

@var int $h4

@var int $h0

@var int $h1

@var int $h2

@var int $h3

## References

**Database Tables (inferred)**
- `another`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\Poly1305\State.php`

**Classes**:
- `ParagonIE_Sodium_Core_Poly1305_State extends ParagonIE_Sodium_Core_Util`

**Functions/Methods**:
- `__construct($key = '')`
- `__destruct()`
- `update($message = '')`
- `blocks($message, $bytes)`
- `finish()`

