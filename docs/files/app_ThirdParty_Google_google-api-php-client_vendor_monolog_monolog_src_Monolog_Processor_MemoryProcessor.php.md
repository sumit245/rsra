# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Processor\MemoryProcessor.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Processor\MemoryProcessor.php`
- Type: PHP
- Size: 1809 bytes

## Summary (from docblocks)

Some methods that are common for all memory processors
@author Rob Jensen

@var bool If true, get the real size of memory allocated from system. Else, only the memory used by emalloc() is reported.

@var bool If true, then format memory size to human readable string (MB, KB, B depending on size)

@param bool $realUsage     Set this to true to get the real size of memory allocated from system.
@param bool $useFormatting If true, then format memory size to human readable string (MB, KB, B depending on size)

Formats bytes into a human readable string if $this->useFormatting is true, otherwise return $bytes as is
@param  int        $bytes
@return string|int Formatted string if $this->useFormatting is true, otherwise return $bytes as is

## References

**Database Tables (inferred)**
- `system`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Processor\MemoryProcessor.php`

**Classes**:
- `Monolog\Processor\MemoryProcessor`

**Functions/Methods**:
- `__construct($realUsage = true, $useFormatting = true)`
- `formatBytes($bytes)`

