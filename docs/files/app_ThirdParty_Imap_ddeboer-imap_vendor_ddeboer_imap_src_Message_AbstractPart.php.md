# app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Message\AbstractPart.php

- Path: `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Message\AbstractPart.php`
- Type: PHP
- Size: 12922 bytes

## Summary (from docblocks)

A message part.

@var ImapResourceInterface

@var bool

@var array

@var string

@var int

@var \stdClass

@var Parameters

@var null|string

@var null|string

@var null|string

@var null|string

@var null|string

@var null|string

@var null|string

@var null|string

@var int

@var array

@var array

@var array

Constructor.
@param ImapResourceInterface $resource      IMAP resource
@param int                   $messageNumber Message number
@param string                $partNumber    Part number
@param \stdClass             $structure     Part structure

Get message number (from headers).
@return int

Ensure message exists.
@param int $messageNumber

@param \stdClass $structure Part structure

Part structure.
@return \stdClass

Lazy load structure.

Part parameters.
@return Parameters

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

Get raw part content.
@return string

Get content part number.
@return string

Get part number.
@return string

Get decoded part content.
@return string

Get raw message content.
@param string $partNumber
@return string

Get an array of all parts for this message.
@return PartInterface[]

Get current child part.
@return mixed

Get current child part.
@return mixed

Get current child part.
@return bool

Get current part key.
@return int

Move to next part.
@return int

Reset part key.
@return int

Check if current part is a valid one.
@return bool

Parse part structure.

Check if the given part is an attachment.
@param \stdClass $part
@return bool

## References

**Database Tables (inferred)**
- `headers`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Message\AbstractPart.php`

**Classes**:
- `Ddeboer\Imap\Message\AbstractPart implements PartInterface`

**Functions/Methods**:
- `__construct(ImapResourceInterface $resource,
        int $messageNumber,
        string $partNumber,
        \stdClass $structure)`
- `getNumber()`
- `assertMessageExists(int $messageNumber)`
- `setStructure(\stdClass $structure)`
- `getStructure()`
- `lazyLoadStructure()`
- `getParameters()`
- `getCharset()`
- `getType()`
- `getSubtype()`
- `getEncoding()`
- `getDisposition()`
- `getBytes()`
- `getLines()`
- `getContent()`
- `getContentPartNumber()`
- `getPartNumber()`
- `getDecodedContent()`
- `doGetContent(string $partNumber)`
- `getParts()`
- `current()`
- `getChildren()`
- `hasChildren()`
- `key()`
- `next()`
- `rewind()`
- `valid()`
- `lazyParseStructure()`
- `isAttachment(\stdClass $part)`

