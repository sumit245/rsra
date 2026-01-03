# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\PartFilterFactory.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\PartFilterFactory.php`
- Type: PHP
- Size: 2284 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Injectable factory class used by MimePart to construct PartFilter instances
in a testable way.

Users are expected to use the static PartFilter methods directly -- this 
class simply encapsulates them in an object:
 o PartFilter::fromContentType
 o PartFilter::fromInlineContentType
 o PartFilter::fromDisposition
@see PartFilter
@author Zaahid Bateson

Creates a filter for the passed mime content-type.

This method just calls PartFilter::fromContentType.

@see PartFilter::fromContentType
@param string $mimeType
@return PartFilter

Creates an 'inline' filter for the passed mime content-type.

This method just calls PartFilter::fromInlineContentType.

@see PartFilter::fromInlineContentType
@param string $mimeType
@return PartFilter

Creates a filter for the passed disposition and optional multipart
filter.

This method just calls PartFilter::newFilterFromDisposition.

@see PartFilter::fromDisposition
@param string $disposition
@param int $multipart one of PartFilter::FILTER_OFF,
     PartFilter::FILTER_INCLUDE or PartFilter::FILTER_EXCLUDE
@return PartFilter

Constructs a PartFilter from the passed array of options and returns it.

@see PartFilter::__construct
@param array $init
@return PartFilter

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\PartFilterFactory.php`

**Classes**:
- `ZBateson\MailMimeParser\Message\used`
- `ZBateson\MailMimeParser\Message\simply`
- `ZBateson\MailMimeParser\Message\PartFilterFactory`

**Functions/Methods**:
- `newFilterFromContentType($mimeType)`
- `newFilterFromInlineContentType($mimeType)`
- `newFilterFromDisposition($disposition, $multipart = PartFilter::FILTER_OFF)`
- `newFilterFromArray(array $init)`

