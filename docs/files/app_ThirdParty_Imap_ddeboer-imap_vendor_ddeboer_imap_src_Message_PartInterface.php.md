# app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Message\PartInterface.php

- Path: `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Message\PartInterface.php`
- Type: PHP
- Size: 2472 bytes

## Summary (from docblocks)

A message part.

Get message number (from headers).
@return int

Part charset.
@return null|string

Part type.
@return null|string

Part subtype.
@return null|string

Part encoding.
@return null|string

Part disposition.
@return null|string

Part bytes.
@return null|int|string

Part lines.
@return null|string

Part parameters.
@return Parameters

Get raw part content.
@return string

Get decoded part content.
@return string

Part structure.
@return \stdClass

Get part number.
@return string

Get an array of all parts for this message.
@return PartInterface[]

## References

**Database Tables (inferred)**
- `headers`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Message\PartInterface.php`

**Functions/Methods**:
- `getNumber()`
- `getCharset()`
- `getType()`
- `getSubtype()`
- `getEncoding()`
- `getDisposition()`
- `getBytes()`
- `getLines()`
- `getParameters()`
- `getContent()`
- `getDecodedContent()`
- `getStructure()`
- `getPartNumber()`
- `getParts()`

