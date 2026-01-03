# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\InflateStream.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\InflateStream.php`
- Type: PHP
- Size: 1758 bytes

## Summary (from docblocks)

Uses PHP's zlib.inflate filter to inflate deflate or gzipped content.
This stream decorator skips the first 10 bytes of the given stream to remove
the gzip header, converts the provided stream to a PHP stream resource,
then appends the zlib.inflate filter. The stream is then converted back
to a Guzzle stream resource to be used as a Guzzle stream.
@link http://tools.ietf.org/html/rfc1952
@link http://php.net/manual/en/filters.compression.php

@param StreamInterface $stream
@param $header
@return int

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\InflateStream.php`

**Classes**:
- `GuzzleHttp\Psr7\InflateStream implements StreamInterface`

**Functions/Methods**:
- `__construct(StreamInterface $stream)`
- `getLengthOfPossibleFilenameHeader(StreamInterface $stream, $header)`

