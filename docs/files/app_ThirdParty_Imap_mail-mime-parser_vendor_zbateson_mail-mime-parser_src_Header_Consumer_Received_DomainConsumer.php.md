# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\Received\DomainConsumer.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\Received\DomainConsumer.php`
- Type: PHP
- Size: 4614 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Parses a so-called "extended-domain" (from and by) part of a Received header.
Looks for and extracts the following fields from an extended-domain part:
Name, Hostname and Address.
The Name part is always the portion of the extended-domain part existing on
its own, outside of the parenthesized hostname and address part.  This is
true regardless of whether an address is used as the name, as its assumed to
be the string used to identify the server, whatever it may be.
The parenthesized part normally (but not necessarily) following a name must
"look like" a tcp-info section of an extended domain as defined by RFC5321.
The validation is very purposefully very loose to be accommodating to many
erroneous implementations.  Strictly speaking, a domain part, if it exists,
must start with an alphanumeric character.  There must be at least one '.' in
the domain part, followed by any number of more alphanumeric, '.', and '-'
characters.  The address part must be within square brackets, '[]'...
although an address outside of square brackets could be matched by the domain
matcher if it exists alone within the parentheses.  The address, strictly
speaking, is any number of '.', numbers, ':' and letters a-f.  This allows it
to match ipv6 addresses as well.  In addition, the address may start with the
string "ipv6", and may be followed by a port number as some implementations
seem to do.
Strings in parentheses not matching the aforementioned 'domain/address'
pattern will be considered comments, and will be returned as a separate
CommentPart.
@see https://tools.ietf.org/html/rfc5321#section-4.4
@see https://github.com/Te-k/pyreceived/blob/master/test.py
@author Zaahid Bateson

Overridden to return true if the passed token is a closing parenthesis.
@param string $token
@return bool

Attempts to match a parenthesized expression to find a hostname and an
address.  Returns true if the expression matched, and either hostname or
address were found.
@param string $value
@param string $hostname
@param string $address
@return boolean

Creates a single ReceivedDomainPart out of matched parts.  If an
unmatched parenthesized expression was found, it's returned as a
CommentPart.
@param \ZBateson\MailMimeParser\Header\Part\HeaderPart[] $parts
@return \ZBateson\MailMimeParser\Header\Part\ReceivedDomainPart[]|
        \ZBateson\MailMimeParser\Header\Part\CommentPart[]array

## References

**Database Tables (inferred)**
- `and`
- `an`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\Received\DomainConsumer.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Consumer\Received\DomainConsumer extends GenericReceivedConsumer`

**Functions/Methods**:
- `isEndToken($token)`
- `matchHostPart($value, &$hostname, &$address)`
- `processParts(array $parts)`

