# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\AddressBaseConsumer.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\AddressBaseConsumer.php`
- Type: PHP
- Size: 2670 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Serves as a base-consumer for recipient/sender email address headers (like
From and To).

AddressBaseConsumer passes on token processing to its sub-consumer, an
AddressConsumer, and collects Part\AddressPart objects processed and returned
by AddressConsumer.
@author Zaahid Bateson

Returns \ZBateson\MailMimeParser\Header\Consumer\AddressConsumer as a
sub-consumer.

@return AbstractConsumer[] the sub-consumers

Returns an empty array.

@return string[] an array of regex pattern matchers

Disables advancing for start tokens.

The start token for AddressBaseConsumer is part of an AddressPart (or a
sub-consumer) and so must be passed on.

@param Iterator $tokens
@param bool $isStartToken

AddressBaseConsumer doesn't have start/end tokens, and so always returns
false.

@param string $token
@return boolean false

AddressBaseConsumer doesn't have start/end tokens, and so always returns
false.

@codeCoverageIgnore
@param string $token
@return boolean false

Never reached by AddressBaseConsumer. Overridden to satisfy
AbstractConsumer.

@codeCoverageIgnore
@param string $token the token
@param bool $isLiteral set to true if the token represents a literal -
       e.g. an escaped token
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart the constructed header
        part or null if the token should be ignored

## References

**Database Tables (inferred)**
- `and`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\AddressBaseConsumer.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Consumer\AddressBaseConsumer extends AbstractConsumer`

**Functions/Methods**:
- `getSubConsumers()`
- `getTokenSeparators()`
- `advanceToNextToken(Iterator $tokens, $isStartToken)`
- `isEndToken($token)`
- `isStartToken($token)`
- `getPartForToken($token, $isLiteral)`

