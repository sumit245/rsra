# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\SubjectConsumer.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\SubjectConsumer.php`
- Type: PHP
- Size: 2133 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Extends GenericConsumer to remove its sub consumers.
Prior to this, subject headers were parsed using the GenericConsumer which
meant if the subject contained text within parentheses, it would not be
included as part of the returned value in a getHeaderValue.  Mime-encoded
parts within quotes would be ignored, and backslash characters denoted an
escaped character.
From testing in ThunderBird and Outlook web mail it seems quoting parts
doesn't have an effect (e.g. quoting a "mime-literal" encoded part still
comes out decoded), and parts in parentheses (comments) are displayed
normally.

@author Zaahid Bateson

Returns an empty array

@return AbstractConsumer[] the sub-consumers

Returns an array of \ZBateson\MailMimeParser\Header\Part\HeaderPart for
the current token on the iterator.

Overridden from AbstractConsumer to remove special filtering for
backslash escaping, which also seems to not apply to Subject headers at
least in ThunderBird's implementation.

@param Iterator $tokens
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart[]|array

Overridden to not split out backslash characters and its next character
as a special case defined in AbastractConsumer

@return string the regex pattern

## References

**Database Tables (inferred)**
- `testing`
- `AbstractConsumer`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\SubjectConsumer.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Consumer\SubjectConsumer extends GenericConsumer`

**Functions/Methods**:
- `getSubConsumers()`
- `getTokenParts(Iterator $tokens)`
- `getTokenSplitPattern()`

