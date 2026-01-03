# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Exception\Crc32Exception.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Exception\Crc32Exception.php`
- Type: PHP
- Size: 1375 bytes

## Summary (from docblocks)

Thrown to indicate a CRC32 mismatch between the declared value in the
Central File Header and the Data Descriptor or between the declared value
and the computed value from the decompressed data.
The exception detail message is the name of the ZIP entry.

Expected crc.

Actual crc.

Returns expected crc.

Returns actual crc.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Exception\Crc32Exception.php`

**Classes**:
- `PhpZip\Exception\Crc32Exception extends ZipException`

**Functions/Methods**:
- `__construct(string $name, int $expected, int $actual)`
- `getExpectedCrc()`
- `getActualCrc()`

