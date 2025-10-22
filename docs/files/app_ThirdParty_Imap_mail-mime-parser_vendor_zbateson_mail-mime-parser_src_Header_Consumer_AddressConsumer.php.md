# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\AddressConsumer.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\AddressConsumer.php`
- Type: PHP
- Size: 4894 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Parses a single part of an address header.

Represents a single part of a list of addresses.  A part could be one email
address, or one 'group' containing multiple addresses.  The consumer ends on
finding either a comma token, representing a separation between addresses, or
a semi-colon token representing the end of a group.

A single email address may consist of just an email, or a name and an email
address.  Both of these are valid examples of a From header:
 - From: jonsnow@winterfell.com
 - From: Jon Snow <jonsnow@winterfell.com>

Groups must be named, for example:
 - To: Winterfell: jonsnow@winterfell.com, Arya Stark <arya@winterfell.com>;
Addresses may contain quoted parts and comments, and names may be mime-header
encoded.

@author Zaahid Bateson

Returns the following as sub-consumers:
 - \ZBateson\MailMimeParser\Header\Consumer\AddressGroupConsumer
 - \ZBateson\MailMimeParser\Header\Consumer\CommentConsumer
 - \ZBateson\MailMimeParser\Header\Consumer\QuotedStringConsumer

@return AbstractConsumer[] the sub-consumers

Overridden to return patterns matching the beginning part of an address
in a name/address part ("<" and ">" chars), end tokens ("," and ";"), and
whitespace.

@return string[] the patterns

Returns true for commas and semi-colons.

Although the semi-colon is not strictly the end token of an
AddressConsumer, it could end a parent AddressGroupConsumer. I can't
think of a valid scenario where this would be an issue, but additional
thought may be needed (and documented here).

@param string $token
@return boolean false

AddressConsumer is "greedy", so this always returns true.

@param string $token
@return boolean false

Checks if the passed part represents the beginning or end of an address
part (less than/greater than characters) and either appends the value of
the part to the passed $strValue, or sets up $strName

@param HeaderPart $part
@param string $strName
@param string $strValue

Performs final processing on parsed parts.

AddressConsumer's implementation looks for tokens representing the
beginning of an address part, to create a Part\AddressPart out of a
name/address pair, or assign the name part to a parsed Part\AddressGroupPart
returned from its AddressGroupConsumer sub-consumer.

The returned array consists of a single element - either a
Part\AddressPart or a Part\AddressGroupPart.

@param \ZBateson\MailMimeParser\Header\Part\HeaderPart[] $parts
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart[]|array

## References

**Database Tables (inferred)**
- `header`
- `its`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\AddressConsumer.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Consumer\AddressConsumer extends AbstractConsumer`

**Functions/Methods**:
- `getSubConsumers()`
- `getTokenSeparators()`
- `isEndToken($token)`
- `isStartToken($token)`
- `processSinglePart(HeaderPart $part, &$strName, &$strValue)`
- `processParts(array $parts)`

