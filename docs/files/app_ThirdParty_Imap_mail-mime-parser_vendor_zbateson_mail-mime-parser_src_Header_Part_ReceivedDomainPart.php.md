# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\ReceivedDomainPart.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\ReceivedDomainPart.php`
- Type: PHP
- Size: 2906 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Holds extra information about a parsed Received header part, for FROM and BY
parts, namely: ehlo name, hostname, and address.
The parsed parts would be mapped as follows:
FROM ehlo name (hostname [address]), for example: FROM computer (domain.com
[1.2.3.4]) would contain "computer" for getEhloName(), domain.com for
getHostname and 1.2.3.4 for getAddress().
This doesn't change if the ehlo name is an address, it is still returned in
getEhloName(), and not in getAddress().  Additionally square brackets are not
stripped from getEhloName() if its an address.  For example: "FROM [1.2.3.4]"
would return "[1.2.3.4]" in a call to getEhloName().
For further information on how the header's parsed, check the documentation
for {@see \ZBateson\MailMimeParser\Header\Consumer\Received\DomainConsumer}.
@author Zaahid Bateson

@var string The name used to identify the server in the EHLO line.

@var string The hostname.

@var string The address.

@param MbWrapper $charsetConverter
@param string $name
@param string $value
@param string $ehloName
@param string $hostname
@param string $address

Returns the name used to identify the server in the first part of the
extended-domain line.  Note that this is not necessarily the name used in
the EHLO line to an SMTP server, since implementations differ so much,
not much can be guaranteed except the position it was parsed in.
@return string

Returns the hostname of the server, or whatever string in the hostname
position when parsing (but never an address).
@return string

Returns the address of the server, or whatever string that looks like an
address in the address position when parsing (but never a hostname).
@return string

## References

**Database Tables (inferred)**
- `and`
- `ehlo`
- `computer`
- `getEhloName`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\ReceivedDomainPart.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Part\ReceivedDomainPart extends ReceivedPart`

**Functions/Methods**:
- `__construct(MbWrapper $charsetConverter, $name, $value, $ehloName = null, $hostname = null, $address = null)`
- `getEhloName()`
- `getHostname()`
- `getAddress()`

