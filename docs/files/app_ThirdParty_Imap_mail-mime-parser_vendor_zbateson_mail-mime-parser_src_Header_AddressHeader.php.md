# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\AddressHeader.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\AddressHeader.php`
- Type: PHP
- Size: 3451 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Reads an address list header using the AddressBaseConsumer.

An address list may consist of one or more addresses and address groups.
Each address separated by a comma, and each group separated by a semi-colon.

For full specifications, see https://www.ietf.org/rfc/rfc2822.txt
@author Zaahid Bateson

@var \ZBateson\MailMimeParser\Header\Part\AddressPart[] array of
addresses

@var \ZBateson\MailMimeParser\Header\Part\AddressGroupPart[] array of
address groups

Returns an AddressBaseConsumer.

@param ConsumerService $consumerService
@return \ZBateson\MailMimeParser\Header\Consumer\AbstractConsumer

Overridden to extract all addresses into addresses array.

@param AbstractConsumer $consumer

Returns all address parts in the header including all addresses that are
in groups.

@return \ZBateson\MailMimeParser\Header\Part\AddressPart[]

Returns all group parts in the header.

@return \ZBateson\MailMimeParser\Header\Part\AddressGroupPart[]

Returns true if an address exists with the passed email address.

Comparison is done case insensitively.

@param string $email
@return boolean

Same as getValue, but for clarity to match AddressPart.
@return string

Returns the name associated with the first email address to complement
getValue().

@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\AddressHeader.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\AddressHeader extends AbstractHeader`

**Functions/Methods**:
- `getConsumer(ConsumerService $consumerService)`
- `setParseHeaderValue(AbstractConsumer $consumer)`
- `getAddresses()`
- `getGroups()`
- `hasAddress($email)`
- `getEmail()`
- `getPersonName()`

