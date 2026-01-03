# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\AddressGroupPart.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\AddressGroupPart.php`
- Type: PHP
- Size: 1887 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Holds a group of addresses, and an optional group name.

Because AddressGroupConsumer is only called once a colon (":") character is
found, an AddressGroupPart is initially constructed without a $name.  Once it is
returned to AddressConsumer, a new AddressGroupPart is created out of
AddressGroupConsumer's AddressGroupPart.
@author Zaahid Bateson

@var AddressPart[] an array of AddressParts

Creates an AddressGroupPart out of the passed array of AddressParts and an
optional name (which may be mime-encoded).

@param MbWrapper $charsetConverter
@param AddressPart[] $addresses
@param string $name

Return the AddressGroupPart's array of addresses.

@return AddressPart[]

Returns the AddressPart at the passed index or null.

@param int $index
@return Address

Returns the name of the group

@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\AddressGroupPart.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Part\AddressGroupPart extends MimeLiteralPart`

**Functions/Methods**:
- `__construct(MbWrapper $charsetConverter, array $addresses, $name = '')`
- `getAddresses()`
- `getAddress($index)`
- `getName()`

