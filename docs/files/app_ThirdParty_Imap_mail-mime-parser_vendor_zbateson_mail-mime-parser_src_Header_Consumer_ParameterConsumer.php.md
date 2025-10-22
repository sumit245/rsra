# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\ParameterConsumer.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\ParameterConsumer.php`
- Type: PHP
- Size: 7165 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Reads headers separated into parameters consisting of a main value, and
subsequent name/value pairs - for example text/html; charset=utf-8.

A ParameterConsumer's parts are separated by a semi-colon.  Its name/value
pairs are separated with an '=' character.

Parts may be mime-encoded entities.  Additionally, a value can be quoted and
comments may exist.

@author Zaahid Bateson

Returns semi-colon and equals char as token separators.

@return string[]

Overridden to use a specialized regex for finding mime-encoded parts
(RFC 2047).
Some implementations seem to place mime-encoded parts within quoted
parameters, and split the mime-encoded parts across multiple split
parameters.  The specialized regex doesn't allow double quotes inside a
mime encoded part, so it can be "continued" in another parameter.
@return string the regex pattern

Creates and returns a \ZBateson\MailMimeParser\Header\Part\Token out of
the passed string token and returns it, unless the token is an escaped
literal, in which case a LiteralPart is returned.

@param string $token
@param bool $isLiteral
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart

Adds the passed parameter with the given name and value to a
SplitParameterToken, at the passed index. If one with the given name
doesn't exist, it is created.

@param ArrayObject $splitParts
@param string $name
@param string $value
@param int $index
@param boolean $isEncoded

Instantiates and returns either a MimeLiteralPart if $strName is empty,
a SplitParameterToken if the parameter is a split parameter and is the
first in a series, null if it's a split parameter but is not the first
part in its series, or a ParameterPart is returned otherwise.

If the part is a SplitParameterToken, it's added to the passed
$splitParts as well with its name as a key.

@param string $strName
@param string $strValue
@param ArrayObject $splitParts
@return \ZBateson\MailMimeParser\Header\Part\MimeLiteralPart
        |SplitParameterToken|\ZBateson\MailMimeParser\Header\Part\ParameterPart

Handles parameter separator tokens during final processing.

If the end token is found, a new HeaderPart is assigned to the passed
$combined array.  If an '=' character is found, $strCat is assigned to
$strName and emptied.

Returns true if the token was processed, and false otherwise.

@param string $tokenValue
@param ArrayObject $combined
@param ArrayObject $splitParts
@param string $strName
@param string $strCat
@return boolean

Loops over parts in the passed array, creating ParameterParts out of any
parsed SplitParameterTokens, replacing them in the array.

The method then calls filterIgnoreSpaces to filter out empty elements in
the combined array and returns an array.

@param ArrayObject $combined
@return HeaderPart[]|array

Post processing involves creating Part\LiteralPart or Part\ParameterPart
objects out of created Token and LiteralParts.

@param HeaderPart[] $parts
@return HeaderPart[]|array

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\ParameterConsumer.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Consumer\ParameterConsumer extends GenericConsumer`

**Functions/Methods**:
- `getTokenSeparators()`
- `getTokenSplitPattern()`
- `getPartForToken($token, $isLiteral)`
- `addToSplitPart(ArrayObject $splitParts, $name, $value, $index, $isEncoded)`
- `getPartFor($strName, $strValue, ArrayObject $splitParts)`
- `processTokenPart($tokenValue,
        ArrayObject $combined,
        ArrayObject $splitParts,
        &$strName,
        &$strCat)`
- `finalizeParameterParts(ArrayObject $combined)`
- `processParts(array $parts)`

