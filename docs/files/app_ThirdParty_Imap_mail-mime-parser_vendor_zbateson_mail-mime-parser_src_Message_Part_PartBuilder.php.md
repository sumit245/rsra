# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\PartBuilder.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\PartBuilder.php`
- Type: PHP
- Size: 11759 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Used by MessageParser to keep information about a parsed message as an
intermediary before creating a Message object and its MessagePart children.
@author Zaahid Bateson

@var int The offset read start position for this part (beginning of
headers) in the message's stream.

@var int The offset read end position for this part.  If the part is a
multipart mime part, the end position is after all of this parts
children.

@var int The offset read start position in the message's stream for the
beginning of this part's content (body).

@var int The offset read end position in the message's stream for the
end of this part's content (body).

@var MessagePartFactory the factory
     needed for creating the Message or MessagePart for the parsed part.

@var boolean set to true once the end boundary of the currently-parsed
     part is found.

@var boolean set to true once a boundary belonging to this parent's part
     is found.

@var boolean|null|string false if not queried for in the content-type
     header of this part, null if the current part does not have a
     boundary, or the value of the boundary parameter of the content-type
     header if the part contains one.

@var HeaderContainer a container for found and parsed headers.

@var PartBuilder[] an array of children found below this part for a mime
     email

@var PartBuilder the parent part.

@var string[] key => value pairs of properties passed on to the 
     $messagePartFactory when constructing the Message and its children.

Sets up class dependencies.
@param MessagePartFactory $mpf
@param HeaderContainer $headerContainer

Adds a header with the given $name and $value to the headers array.
Removes non-alphanumeric characters from $name, and sets it to lower-case
to use as a key in the private headers array.  Sets the original $name
and $value as elements in the headers' array value for the calculated
key.
@param string $name
@param string $value

Returns the HeaderContainer object containing parsed headers.

@return HeaderContainer

Sets the specified property denoted by $name to $value.

@param string $name
@param mixed $value

Returns the value of the property with the given $name.

@param string $name
@return mixed

Registers the passed PartBuilder as a child of the current PartBuilder.

@param \ZBateson\MailMimeParser\Message\PartBuilder $partBuilder

Returns all children PartBuilder objects.

@return \ZBateson\MailMimeParser\Message\PartBuilder[]

Returns this PartBuilder's parent.

@return PartBuilder

Returns true if either a Content-Type or Mime-Version header are defined
in this PartBuilder's headers.

@return boolean

Returns a ParameterHeader representing the parsed Content-Type header for
this PartBuilder.

@return \ZBateson\MailMimeParser\Header\ParameterHeader

Returns the parsed boundary parameter of the Content-Type header if set
for a multipart message part.

@return string

Returns true if this part's content-type is multipart/*
@return boolean

Returns true if the passed $line of read input matches this PartBuilder's
mime boundary, or any of its parent's mime boundaries for a multipart
message.

If the passed $line is the ending boundary for the current PartBuilder,
$this->isEndBoundaryFound will return true after.

@param string $line
@return boolean

Returns true if MessageParser passed an input line to setEndBoundary that
matches a parent's mime boundary, and the following input belongs to a
new part under its parent.

@return boolean

Called once EOF is reached while reading content.  The method sets the
flag used by PartBuilder::isParentBoundaryFound to true on this part and
all parent PartBuilders.

Returns false if this part has a parent part in which endBoundaryFound is
set to true (i.e. this isn't a discardable part following the parent's
end boundary line).

@return boolean

Returns the offset for this part's stream within its parent stream.
@return int

Returns the length of this part's stream.
@return int

Returns the offset for this part's content within its part stream.
@return int

Returns the length of this part's content stream.
@return int

Sets the start position of the part in the input stream.

@param int $streamPartStartPos

Sets the end position of the part in the input stream, and also calls
parent->setParentStreamPartEndPos to expand to parent parts.

@param int $streamPartEndPos

Sets the start position of the content in the input stream.

@param int $streamContentStartPos

Sets the end position of the content and part in the input stream.

@param int $streamContentEndPos

Creates a MessagePart and returns it using the PartBuilder's
MessagePartFactory passed in during construction.

@param StreamInterface $stream
@return MessagePart

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\PartBuilder.php`

**Classes**:
- `ZBateson\MailMimeParser\Message\Part\PartBuilder`
- `ZBateson\MailMimeParser\Message\Part\dependencies`

**Functions/Methods**:
- `__construct(MessagePartFactory $mpf,
        HeaderContainer $headerContainer)`
- `addHeader($name, $value)`
- `getHeaderContainer()`
- `setProperty($name, $value)`
- `getProperty($name)`
- `addChild(PartBuilder $partBuilder)`
- `getChildren()`
- `getParent()`
- `isMime()`
- `getContentType()`
- `getMimeBoundary()`
- `isMultiPart()`
- `setEndBoundaryFound($line)`
- `isParentBoundaryFound()`
- `setEof()`
- `canHaveHeaders()`
- `getStreamPartStartOffset()`
- `getStreamPartLength()`
- `getStreamContentStartOffset()`
- `getStreamContentLength()`
- `setStreamPartStartPos($streamPartStartPos)`
- `setStreamPartEndPos($streamPartEndPos)`
- `setStreamContentStartPos($streamContentStartPos)`
- `setStreamPartAndContentEndPos($streamContentEndPos)`
- `createMessagePart(StreamInterface $stream = null)`

