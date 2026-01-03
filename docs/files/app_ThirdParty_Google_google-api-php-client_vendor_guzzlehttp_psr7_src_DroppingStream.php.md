# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\DroppingStream.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\DroppingStream.php`
- Type: PHP
- Size: 1080 bytes

## Summary (from docblocks)

Stream decorator that begins dropping data once the size of the underlying
stream becomes too full.

@param StreamInterface $stream    Underlying stream to decorate.
@param int             $maxLength Maximum size before dropping data.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\DroppingStream.php`

**Classes**:
- `GuzzleHttp\Psr7\DroppingStream implements StreamInterface`

**Functions/Methods**:
- `__construct(StreamInterface $stream, $maxLength)`
- `write($string)`

