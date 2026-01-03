# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\PartFilter.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\PartFilter.php`
- Type: PHP
- Size: 12948 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Provides a way to define a filter of MessagePart for use in various calls to
add/remove MessagePart.

A PartFilter is defined as a set of properties in the class, set to either be
'included' or 'excluded'.  The filter is simplistic in that a property
defined as included must be set on a part for it to be passed, and an
excluded filter must not be set for the part to be passed.  There is no
provision for creating logical conditions.

The only property set by default is $signedpart, which defaults to
FILTER_EXCLUDE.

A PartFilter can be instantiated with an array of keys matching class
properties, and values to set them for convenience.

```php
$inlineParts = $message->getAllParts(new PartFilter([
    'multipart' => PartFilter::FILTER_INCLUDE,
    'headers' => [ 
        FILTER_EXCLUDE => [
            'Content-Disposition': 'attachment'
        ]
    ]
]));

$inlineTextPart = $message->getAllParts(PartFilter::fromInlineContentType('text/plain'));
```
@author Zaahid Bateson

@var int indicates a filter is not in use

@var int an excluded filter must not be included in a part

@var int an included filter must be included in a part

@var int filters based on whether MessagePart::hasContent is true

@var int filters based on whether MimePart::isMultiPart is true

@var int filters based on whether MessagePart::isTextPart is true

@var int filters based on whether the parent of a part is a
     multipart/signed part and this part has a content-type equal to its
     parent's 'protocol' parameter in its content-type header

@var string calculated hash of the filter

@var string[][] array of header rules.  The top-level contains keys of
FILTER_INCLUDE and/or FILTER_EXCLUDE, which contain key => value mapping
of header names => values to search for.  Note that when searching
MimePart::getHeaderValue is used (so additional parameters need not be
matched) and strcasecmp is used.

```php
$filter = new PartFilter();
$filter->headers = [ PartFilter::FILTER_INCLUDE => [ 'Content-Type' => 'text/plain' ] ];
```

Convenience method to filter for a specific mime type.

@param string $mimeType
@return PartFilter

Convenience method to look for parts of a specific mime-type, and that
do not specifically have a Content-Disposition equal to 'attachment'.

@param string $mimeType
@return PartFilter

Convenience method to search for parts with a specific
Content-Disposition, optionally including multipart parts.

@param string $disposition
@param int $multipart
@return PartFilter

Constructs a PartFilter, optionally instantiating member variables with
values in the passed array.

The passed array must use keys equal to member variable names, e.g.
'multipart', 'textpart', 'signedpart' and 'headers'.

@param array $filter

Validates an argument passed to __set to insure it's set to a value in
$valid.

@param string $name Name of the member variable
@param string $value The value to test
@param array $valid an array of valid values
@throws InvalidArgumentException

Sets the PartFilter's headers filter to the passed array after validating
it.

@param array $headers
@throws InvalidArgumentException

Sets the member variable denoted by $name to the passed $value after
validating it.

@param string $name
@param int|array $value
@throws InvalidArgumentException

Returns true if the variable denoted by $name is a member variable of
PartFilter.

@param string $name
@return bool

Returns the value of the member variable denoted by $name

@param string $name
@return mixed

Returns true if the passed MessagePart fails the filter's hascontent
filter settings.
@param MessagePart $part
@return bool

Returns true if the passed MessagePart fails the filter's multipart
filter settings.

@param MessagePart $part
@return bool

Returns true if the passed MessagePart fails the filter's textpart filter
settings.

@param MessagePart $part
@return bool

Returns true if the passed MessagePart fails the filter's signedpart
filter settings.

@param MessagePart $part
@return boolean

Tests a single header value against $part, and returns true if the test
fails.

@staticvar array $map
@param MessagePart $part
@param int $type
@param string $name
@param string $header
@return boolean

Returns true if the passed MessagePart fails the filter's header filter
settings.

@param MessagePart $part
@return boolean

Determines if the passed MessagePart should be filtered out or not.
If the MessagePart passes all filter tests, true is returned.  Otherwise
false is returned.

@param MessagePart $part
@return boolean

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\PartFilter.php`

**Classes**:
- `ZBateson\MailMimeParser\Message\PartFilter`

**Functions/Methods**:
- `fromContentType($mimeType)`
- `fromInlineContentType($mimeType)`
- `fromDisposition($disposition, $multipart = PartFilter::FILTER_OFF)`
- `__construct(array $filter = [])`
- `validateArgument($name, $value, array $valid)`
- `setHeaders(array $headers)`
- `__set($name, $value)`
- `__isset($name)`
- `__get($name)`
- `failsHasContentFilter(MessagePart $part)`
- `failsMultiPartFilter(MessagePart $part)`
- `failsTextPartFilter(MessagePart $part)`
- `failsSignedPartFilter(MessagePart $part)`
- `failsHeaderFor(MessagePart $part, $type, $name, $header)`
- `failsHeaderPartFilter(MessagePart $part)`
- `filter(MessagePart $part)`

