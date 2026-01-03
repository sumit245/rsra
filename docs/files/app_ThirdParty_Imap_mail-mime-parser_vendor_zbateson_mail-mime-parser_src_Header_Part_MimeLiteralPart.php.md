# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\MimeLiteralPart.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\MimeLiteralPart.php`
- Type: PHP
- Size: 6171 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Represents a single mime header part token, with the possibility of it being
MIME-Encoded as per RFC-2047.

MimeLiteralPart automatically decodes the value if it's encoded.
@author Zaahid Bateson

@var string regex pattern matching a mime-encoded part

@var string regex pattern used when parsing parameterized headers

@var bool set to true to ignore spaces before this part

@var bool set to true to ignore spaces after this part

@var array maintains an array mapping rfc1766 language tags to parts of
text in the value.

Each array element is an array containing two elements, one with key
'lang', and another with key 'value'.

Decoding the passed token value if it's mime-encoded and assigns the
decoded value to a member variable. Sets canIgnoreSpacesBefore and
canIgnoreSpacesAfter.

@param MbWrapper $charsetConverter
@param string $token

Finds and replaces mime parts with their values.

The method splits the token value into an array on mime-part-patterns,
either replacing a mime part with its value by calling iconv_mime_decode
or converts the encoding on the text part by calling convertEncoding.

@param string $value
@return string

Decodes a matched mime entity part into a string and returns it, after
adding the string into the languages array.

@param string[] $matches
@return string

Decodes a single mime-encoded entity.

Unfortunately, mb_decode_header fails for many charsets on PHP 5.4 and
PHP 5.5 (even if they're listed as supported).  iconv_mime_decode doesn't
support all charsets.

Parsing out the charset and body of the encoded entity seems to be the
way to go to support the most charsets.

@param string $entity
@return string

Returns true if spaces before this part should be ignored.

Overridden to return $this->canIgnoreSpacesBefore which is setup in the
constructor.

@return bool

Returns true if spaces before this part should be ignored.

Overridden to return $this->canIgnoreSpacesAfter which is setup in the
constructor.

@return bool

Adds the passed part into the languages array with the given language.

@param string $part
@param string|null $language

Returns an array of parts mapped to languages in the header value, for
instance the string:

'Hello and =?UTF-8*fr-be?Q?bonjour_?= =?UTF-8*it?Q?mi amici?=. Welcome!'

Would be mapped in the returned array as follows:

```php
[
    0 => [ 'lang' => null, 'value' => 'Hello and ' ],
    1 => [ 'lang' => 'fr-be', 'value' => 'bonjour ' ],
    3 => [ 'lang' => 'it', 'value' => 'mi amici' ],
    4 => [ 'lang' => null, 'value' => ' Welcome!' ]
]
```

@return string[][]

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\MimeLiteralPart.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Part\MimeLiteralPart extends LiteralPart`

**Functions/Methods**:
- `__construct(MbWrapper $charsetConverter, $token)`
- `decodeMime($value)`
- `decodeMatchedEntity($matches)`
- `decodeSplitPart($entity)`
- `ignoreSpacesBefore()`
- `ignoreSpacesAfter()`
- `addToLanguage($part, $language = null)`
- `getLanguageArray()`

