# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\ParentPart.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\ParentPart.php`
- Type: PHP
- Size: 8810 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

A MessagePart that contains children.
@author Zaahid Bateson

@var PartFilterFactory factory object responsible for create PartFilters

@var MessagePart[] array of child parts

Constructor

@param PartStreamFilterManager $partStreamFilterManager
@param StreamFactory $streamFactory
@param PartFilterFactory $partFilterFactory
@param PartBuilder $partBuilder
@param StreamInterface $stream
@param StreamInterface $contentStream

Returns all parts, including the current object, and all children below
it (including children of children, etc...)
@return MessagePart[]

Returns the part at the given 0-based index, or null if none is set.
Note that the first part returned is the current part itself.  This is
often desirable for queries with a PartFilter, e.g. looking for a
MessagePart with a specific Content-Type that may be satisfied by the
current part.
@param int $index
@param PartFilter $filter
@return MessagePart

Returns the current part, all child parts, and child parts of all
children optionally filtering them with the provided PartFilter.
The first part returned is always the current MimePart.  This is often
desirable as it may be a valid MimePart for the provided PartFilter.
@param PartFilter $filter an optional filter
@return MessagePart[]

Returns the total number of parts in this and all children.
Note that the current part is considered, so the minimum getPartCount is
1 without a filter.
@param PartFilter $filter
@return int

Returns the direct child at the given 0-based index, or null if none is
set.
@param int $index
@param PartFilter $filter
@return MessagePart

Returns all direct child parts.
If a PartFilter is provided, the PartFilter is applied before returning.
@param PartFilter $filter
@return MessagePart[]

Returns the number of direct children under this part.
@param PartFilter $filter
@return int

Returns the part associated with the passed mime type, at the passed
index, if it exists.
@param string $mimeType
@param int $index
@return MessagePart|null

Returns an array of all parts associated with the passed mime type if any
exist or null otherwise.
@param string $mimeType
@return MessagePart[] or null

Returns the number of parts matching the passed $mimeType
@param string $mimeType
@return int

Registers the passed part as a child of the current part.
If the $position parameter is non-null, adds the part at the passed
position index.
@param MessagePart $part
@param int $position

Removes the child part from this part and returns its position or
null if it wasn't found.
Note that if the part is not a direct child of this part, the returned
position is its index within its parent (calls removePart on its direct
parent).
@param MessagePart $part
@return int or null if not found

Removes all parts that are matched by the passed PartFilter.
Note: the current part will not be removed.  Although the function naming
matches getAllParts, which returns the current part, it also doesn't only
remove direct children like getChildParts.  Internally this function uses
getAllParts but the current part is filtered out if returned.
@param \ZBateson\MailMimeParser\Message\PartFilter $filter

## References

**Database Tables (inferred)**
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\ParentPart.php`

**Classes**:
- `ZBateson\MailMimeParser\Message\Part\ParentPart extends MessagePart`

**Functions/Methods**:
- `__construct(PartStreamFilterManager $partStreamFilterManager,
        StreamFactory $streamFactory,
        PartFilterFactory $partFilterFactory,
        PartBuilder $partBuilder,
        StreamInterface $stream = null,
        StreamInterface $contentStream = null)`
- `getAllNonFilteredParts()`
- `getPart($index, PartFilter $filter = null)`
- `getAllParts(PartFilter $filter = null)`
- `getPartCount(PartFilter $filter = null)`
- `getChild($index, PartFilter $filter = null)`
- `getChildParts(PartFilter $filter = null)`
- `getChildCount(PartFilter $filter = null)`
- `getPartByMimeType($mimeType, $index = 0)`
- `getAllPartsByMimeType($mimeType)`
- `getCountOfPartsByMimeType($mimeType)`
- `addChild(MessagePart $part, $position = null)`
- `removePart(MessagePart $part)`
- `removeAllParts(PartFilter $filter = null)`

