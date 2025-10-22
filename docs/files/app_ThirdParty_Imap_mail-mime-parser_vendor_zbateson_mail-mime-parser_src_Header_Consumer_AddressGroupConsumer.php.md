# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\AddressGroupConsumer.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\AddressGroupConsumer.php`
- Type: PHP
- Size: 2481 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Parses a single group of addresses (as a named-group part of an address
header).

Finds addresses using its AddressConsumer sub-consumer separated by commas,
and ends processing once a semi-colon is found.

Prior to returning to its calling client, AddressGroupConsumer constructs a
single Part\AddressGroupPart object filling it with all located addresses, and
returns it.

The AddressGroupConsumer extends AddressBaseConsumer to define start/end
tokens, token separators, and construct a Part\AddressGroupPart for returning to
clients.

@author Zaahid Bateson

Overridden to return patterns matching the beginning and end markers of a
group address: colon and semi-colon (":" and ";") characters.

@return string[] the patterns

AddressGroupConsumer returns true if the passed token is a semi-colon.

@param string $token
@return boolean false

AddressGroupConsumer returns true if the passed token is a colon.

@param string $token
@return boolean false

Performs post-processing on parsed parts.

AddressGroupConsumer returns an array with a single Part\AddressGroupPart
element with all email addresses from this and any sub-groups.

@param \ZBateson\MailMimeParser\Header\Part\HeaderPart[] $parts
@return AddressGroupPart[]|array

## References

**Database Tables (inferred)**
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\AddressGroupConsumer.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Consumer\AddressGroupConsumer extends AddressBaseConsumer`

**Functions/Methods**:
- `getTokenSeparators()`
- `isEndToken($token)`
- `isStartToken($token)`
- `processParts(array $parts)`

