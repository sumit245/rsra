# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\ReceivedHeader.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\ReceivedHeader.php`
- Type: PHP
- Size: 9176 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Represents a Received header.

The returned header value (as returned by a call to {@see
ReceivedHeader::getValue()}) for a
ReceivedHeader is the same as the raw value (as returned by a call to
{@see ReceivedHeader::getRawValue()}) since the header doesn't have a single
'value' to extract.
The parsed parts of a Received header can be accessed as parameters.  To
check if a part exists, call {@see ReceivedHeader::hasParameter()} with the
name of the part, for example: ``` $header->hasParameter('from') ``` or
``` $header->hasParameter('id') ```.  The value of the part can be obtained
by calling {@see ReceivedHeader::getValueFor()}, for example
``` $header->getValueFor('with'); ```.
Additional parsing is performed on the "FROM" and "BY" parts of a received
header in an attempt to extract the self-identified name of the server, its
hostname, and its address (depending on what's included).  These can be
accessed directly from the ReceivedHeader object by calling one of the
following methods:
o {@see ReceivedHeader::getFromName()} -- the name portion of the FROM part
o {@see ReceivedHeader::getFromHostname()} -- the hostname of the FROM part
o {@see ReceivedHeader::getFromAddress()} -- the adddress portion of the FROM
  part
o {@see ReceivedHeader::getByName()} -- same as getFromName, but for the BY
  part, and etc... below
o {@see ReceivedHeader::getByHostname()}
o {@see ReceivedHeader::getByAddress()}
The parsed parts of the FROM and BY parts are determined as follows:
o Anything outside and before a parenthesized expression is considered "the
  name", for example "FROM AlainDeBotton", "AlainDeBotton" would be the name,
  but also if the name is an address, but exists outside the parenthesized
  expression, it's still considered "the name".  For example:
  "From [1.2.3.4]", getFromName would return "[1.2.3.4]".
o A parenthesized expression MUST match what looks like either a domain name
  on its own, or a domain name and an address.  Otherwise the parenthesized
  expression is considered a comment, and not parsed into hostname and
  address.  The rules are defined loosely because many implementations differ
  in how strictly they follow the standard.  For a domain, it's enough that
  the expression starts with any alphanumeric character and contains at least
  one '.', followed by any number of '.', '-' and alphanumeric characters.
  The address portion must be surrounded in square brackets, and contain any
  sequence of '.', ':', numbers, and characters 'a' through 'f'.  In addition
  the string 'ipv6' may start the expression (for instance, '[ipv6:::1]'
  would be valid).  A port number may also be considered valid as part of the
  address, for example: [1.2.3.4:3231].  No additional validation on the
  address is done, and so an invalid address such as '....' could be
  returned, so users using the 'address' header are encouraged to validate it
  before using it.  The square brackets are parsed out of the returned
  address, so the value returned by getFromAddress() would be "2.2.2.2", not
  "[2.2.2.2]".
The date/time stamp can be accessed as a DateTime object by calling
{@see ReceivedHeader::getDateTime()}.
Parsed comments can be accessed by calling {@see
ReceivedHeader::getComments()}.  Some implementations may include connection
encryption information or other details in non-standardized comments.
@author Zaahid Bateson

@var string[] an array of comments in the header.

@var DateTime the date/time stamp in the header.

Returns a ReceivedConsumer.

@param ConsumerService $consumerService
@return \ZBateson\MailMimeParser\Header\Consumer\AbstractConsumer

Overridden to assign comments to $this->comments, and the DateTime to
$this->date.

@param AbstractConsumer $consumer

Returns the raw, unparsed header value, same as {@see
ReceivedHeader::getRawValue()}.
@return string

Returns the name identified in the FROM part of the header.
The returned value may either be a name or an address in the form
"[1.2.3.4]".  Validation is not performed on this value, and so whatever
exists in this position is returned -- be it contains spaces, or invalid
characters, etc...
@return string

Returns the hostname part of a parenthesized FROM part.
For example, "FROM name (host.name)" would return the string "host.name".
Validation of the hostname is not performed, and the returned value may
not be valid.  More details on how the value is parsed and extracted can
be found in the class description for {@see ReceivedHeader}.
@return string

Returns the address part of a parenthesized FROM part.
For example, "FROM name ([1.2.3.4])" would return the string "1.2.3.4".
Validation of the address is not performed, and the returned value may
not be valid.  More details on how the value is parsed and extracted can
be found in the class description for {@see ReceivedHeader}.
@return string

Returns the name identified in the BY part of the header.
The returned value may either be a name or an address in the form
"[1.2.3.4]".  Validation is not performed on this value, and so whatever
exists in this position is returned -- be it contains spaces, or invalid
characters, etc...
@return string

Returns the hostname part of a parenthesized BY part.
For example, "BY name (host.name)" would return the string "host.name".
Validation of the hostname is not performed, and the returned value may
not be valid.  More details on how the value is parsed and extracted can
be found in the class description for {@see ReceivedHeader}.
@return string

Returns the address part of a parenthesized BY part.
For example, "BY name ([1.2.3.4])" would return the string "1.2.3.4".
Validation of the address is not performed, and the returned value may
not be valid.  More details on how the value is parsed and extracted can
be found in the class description for {@see ReceivedHeader}.
@return string

Returns an array of comments parsed from the header.  If there are no
comments in the header, an empty array is returned.
@return string[]

Returns the date/time stamp for the received header.
@return \DateTime

## References

**Database Tables (inferred)**
- `the`
- `part`
- `and`
- `AlainDeBotton`
- `name`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\ReceivedHeader.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\ReceivedHeader extends ParameterHeader`
- `ZBateson\MailMimeParser\Header\description`
- `ZBateson\MailMimeParser\Header\description`
- `ZBateson\MailMimeParser\Header\description`
- `ZBateson\MailMimeParser\Header\description`

**Functions/Methods**:
- `getConsumer(ConsumerService $consumerService)`
- `setParseHeaderValue(AbstractConsumer $consumer)`
- `getValue()`
- `getFromName()`
- `getFromHostname()`
- `getFromAddress()`
- `getByName()`
- `getByHostname()`
- `getByAddress()`
- `getComments()`
- `getDateTime()`

