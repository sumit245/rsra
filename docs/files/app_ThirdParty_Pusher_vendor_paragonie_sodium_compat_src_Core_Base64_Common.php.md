# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\Base64\Common.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\Base64\Common.php`
- Type: PHP
- Size: 6679 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core_Base64
 Copyright (c) 2016 - 2018 Paragon Initiative Enterprises.
 Copyright (c) 2014 Steve "Sc00bz" Thomas (steve at tobtu dot com)
We have to copy/paste the contents into the variant files because PHP 5.2
doesn't support late static binding, and we have no better workaround
available that won't break PHP 7+. Therefore, we're forced to duplicate code.

Encode into Base64
Base64 character set "[A-Z][a-z][0-9]+/"
@param string $src
@return string
@throws TypeError

Encode into Base64, no = padding
Base64 character set "[A-Z][a-z][0-9]+/"
@param string $src
@return string
@throws TypeError

@param string $src
@param bool $pad   Include = padding?
@return string
@throws TypeError

@var array<int, int> $chunk

@var array<int, int> $chunk

decode from base64 into binary
Base64 character set "./[A-Z][a-z][0-9]"
@param string $src
@param bool $strictPadding
@return string
@throws RangeException
@throws TypeError
@psalm-suppress RedundantCondition

@var array<int, int> $chunk

@var array<int, int> $chunk

@var bool $check

Uses bitwise operators instead of table-lookups to turn 6-bit integers
into 8-bit integers.
Base64 character set:
[A-Z]      [a-z]      [0-9]      +     /
0x41-0x5a, 0x61-0x7a, 0x30-0x39, 0x2b, 0x2f
@param int $src
@return int

Uses bitwise operators instead of table-lookups to turn 8-bit integers
into 6-bit integers.
@param int $src
@return string

## References

**Database Tables (inferred)**
- `base64`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\Base64\Common.php`

**Classes**:
- `ParagonIE_Sodium_Core_Base64_Common`

**Functions/Methods**:
- `encode($src)`
- `encodeUnpadded($src)`
- `doEncode($src, $pad = true)`
- `decode($src, $strictPadding = false)`
- `decode6Bits($src)`
- `encode6Bits($src)`

