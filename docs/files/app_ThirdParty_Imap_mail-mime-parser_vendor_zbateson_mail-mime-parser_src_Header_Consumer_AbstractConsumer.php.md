# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\AbstractConsumer.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\AbstractConsumer.php`
- Type: PHP
- Size: 11571 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Abstract base class for all header token consumers.

Defines the base parser that loops over tokens, consuming them and creating
header parts.
@author Zaahid Bateson

@var \ZBateson\MailMimeParser\Header\Consumer\ConsumerService used to
     get consumer instances for sub-consumers

@var \ZBateson\MailMimeParser\Header\Part\HeaderPartFactory used to construct
HeaderPart objects

Initializes the instance.

@param ConsumerService $consumerService
@param HeaderPartFactory $partFactory

Returns the singleton instance for the class.

@param ConsumerService $consumerService
@param HeaderPartFactory $partFactory

Invokes parsing of a header's value into header parts.

@param string $value the raw header value
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart[] the array of parsed
        parts

Called during construction to set up the list of sub-consumers that will
take control from this consumer should a token match a sub-consumer's
start token.

@return AbstractConsumer[] the array of consumers

Returns this consumer and all unique sub consumers.

Loops into the sub-consumers (and their sub-consumers, etc...) finding
all unique consumers, and returns them in an array.

@return \ZBateson\MailMimeParser\Header\AbstractConsumer[]

Called by __invoke to parse the raw header value into header parts.

Calls splitTokens to split the value into token part strings, then calls
parseParts to parse the returned array.

@param string $value
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart[] the array of parsed
        parts

Returns an array of regular expression separators specific to this
consumer.  The returned patterns are used to split the header value into
tokens for the consumer to parse into parts.

Each array element makes part of a generated regular expression that is
used in a call to preg_split().  RegEx patterns can be used, and care
should be taken to escape special characters.

@return string[] the array of patterns

Returns a list of regular expression markers for this consumer and all
sub-consumers by calling 'getTokenSeparators'..

@return string[] an array of regular expression markers

Returns a regex pattern used to split the input header string.  The
default implementation calls getAllTokenSeparators and implodes the
returned array with the regex OR '|' character as its glue.

@return string the regex pattern

Returns an array of split tokens from the input string.

The method calls preg_split using getTokenSplitPattern.  The split
array will not contain any empty parts and will contain the markers.

@param string $rawValue the raw string
@return array the array of tokens

Returns true if the passed string token marks the beginning marker for
the current consumer.

@param string $token the current token
@return bool

Returns true if the passed string token marks the end marker for the
current consumer.

@param string $token the current token
@return bool

Constructs and returns a \ZBateson\MailMimeParser\Header\Part\HeaderPart
for the passed string token.  If the token should be ignored, the
function must return null.

The default created part uses the instance's partFactory->newInstance
method.

@param string $token the token
@param bool $isLiteral set to true if the token represents a literal -
       e.g. an escaped token
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart|null the
        constructed header part or null if the token should be ignored

Iterates through this consumer's sub-consumers checking if the current
token triggers a sub-consumer's start token and passes control onto that
sub-consumer's parseTokenIntoParts.  If no sub-consumer is responsible
for the current token, calls getPartForToken and returns it in an array.

@param Iterator $tokens
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart[]|array

Returns an array of \ZBateson\MailMimeParser\Header\Part\HeaderPart for
the current token on the iterator.

If the current token is a start token from a sub-consumer, the sub-
consumer's parseTokensIntoParts method is called.

@param Iterator $tokens
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart[]|array

Determines if the iterator should be advanced to the next token after
reading tokens or finding a start token.

The default implementation will advance for a start token, but not
advance on the end token of the current consumer, allowing the end token
to be passed up to a higher-level consumer.

@param Iterator $tokens
@param bool $isStartToken

Iterates over the passed token Iterator and returns an array of parsed
\ZBateson\MailMimeParser\Header\Part\HeaderPart objects.

The method checks each token to see if the token matches a sub-consumer's
start token, or if it matches the current consumer's end token to stop
processing.

If a sub-consumer's start token is matched, the sub-consumer is invoked
and its returned parts are merged to the current consumer's header parts.

After all tokens are read and an array of Header\Parts are constructed,
the array is passed to AbstractConsumer::processParts for any final
processing.

@param Iterator $tokens an iterator over a string of tokens
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart[] an array of
        parsed parts

Performs any final processing on the array of parsed parts before
returning it to the consumer client.

The default implementation simply returns the passed array after
filtering out null/empty parts.

@param \ZBateson\MailMimeParser\Header\Part\HeaderPart[] $parts
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart[]

## References

**Database Tables (inferred)**
- `this`
- `the`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\AbstractConsumer.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Consumer\for`
- `ZBateson\MailMimeParser\Header\Consumer\AbstractConsumer`

**Functions/Methods**:
- `__construct(ConsumerService $consumerService, HeaderPartFactory $partFactory)`
- `getInstance(ConsumerService $consumerService, HeaderPartFactory $partFactory)`
- `__invoke($value)`
- `getSubConsumers()`
- `getAllConsumers()`
- `parseRawValue($value)`
- `getTokenSeparators()`
- `getAllTokenSeparators()`
- `getTokenSplitPattern()`
- `splitRawValue($rawValue)`
- `isStartToken($token)`
- `isEndToken($token)`
- `getPartForToken($token, $isLiteral)`
- `getConsumerTokenParts(Iterator $tokens)`
- `getTokenParts(Iterator $tokens)`
- `advanceToNextToken(Iterator $tokens, $isStartToken)`
- `parseTokensIntoParts(Iterator $tokens)`
- `processParts(array $parts)`

