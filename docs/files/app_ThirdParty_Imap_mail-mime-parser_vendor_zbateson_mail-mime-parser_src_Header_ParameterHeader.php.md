# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\ParameterHeader.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\ParameterHeader.php`
- Type: PHP
- Size: 2269 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Represents a header containing a primary value part and subsequent name/value
parts using a ParameterConsumer.

@author Zaahid Bateson

@var \ZBateson\MailMimeParser\Header\Part\ParameterPart[] key map of
lower-case parameter names and associated ParameterParts.

Returns a ParameterConsumer.

@param ConsumerService $consumerService
@return \ZBateson\MailMimeParser\Header\Consumer\AbstractConsumer

Overridden to assign ParameterParts to a map of lower-case parameter
names to ParameterParts.

@param AbstractConsumer $consumer

Returns true if a parameter exists with the passed name.

@param string $name
@return boolean

Returns the value of the parameter with the given name, or $defaultValue
if not set.

@param string $name
@param string $defaultValue
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\ParameterHeader.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\ParameterHeader extends AbstractHeader`

**Functions/Methods**:
- `getConsumer(ConsumerService $consumerService)`
- `setParseHeaderValue(AbstractConsumer $consumer)`
- `hasParameter($name)`
- `getValueFor($name, $defaultValue = null)`

