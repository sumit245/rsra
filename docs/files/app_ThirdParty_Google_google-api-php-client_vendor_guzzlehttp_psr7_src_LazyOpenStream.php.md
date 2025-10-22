# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\LazyOpenStream.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\LazyOpenStream.php`
- Type: PHP
- Size: 880 bytes

## Summary (from docblocks)

Lazily reads or writes to a file that is opened only after an IO operation
take place on the stream.

@var string File to open

@var string $mode

@param string $filename File to lazily open
@param string $mode     fopen mode to use when opening the stream

Creates the underlying stream lazily when required.
@return StreamInterface

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\LazyOpenStream.php`

**Classes**:
- `GuzzleHttp\Psr7\LazyOpenStream implements StreamInterface`

**Functions/Methods**:
- `__construct($filename, $mode)`
- `createStream()`

