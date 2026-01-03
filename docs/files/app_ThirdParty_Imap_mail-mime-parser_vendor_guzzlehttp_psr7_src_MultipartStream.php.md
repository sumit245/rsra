# app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\MultipartStream.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\MultipartStream.php`
- Type: PHP
- Size: 4693 bytes

## Summary (from docblocks)

Stream that when read returns bytes for a streaming multipart or
multipart/form-data stream.

@param array  $elements Array of associative arrays, each containing a
                        required "name" key mapping to the form field,
                        name, a required "contents" key mapping to a
                        StreamInterface/resource/string, an optional
                        "headers" associative array of custom headers,
                        and an optional "filename" key mapping to a
                        string to send as the filename in the part.
@param string $boundary You can optionally provide a specific boundary
@throws \InvalidArgumentException

Get the boundary
@return string

Get the headers needed before transferring the content of a POST file

Create the aggregate stream that will be used to upload the POST data

@return array

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\MultipartStream.php`

**Classes**:
- `GuzzleHttp\Psr7\MultipartStream implements StreamInterface`

**Functions/Methods**:
- `__construct(array $elements = [], $boundary = null)`
- `getBoundary()`
- `isWritable()`
- `getHeaders(array $headers)`
- `createStream(array $elements)`
- `addElement(AppendStream $stream, array $element)`
- `createElement($name, StreamInterface $stream, $filename, array $headers)`
- `getHeader(array $headers, $key)`

