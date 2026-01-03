# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\HeaderContainer.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\HeaderContainer.php`
- Type: PHP
- Size: 8684 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Maintains a collection of headers for a part.
@author Zaahid Bateson

@var HeaderFactory the HeaderFactory object used for created headers

@var string[][] Each element in the array is an array with its first
element set to the header's name, and the second its value.

@var \ZBateson\MailMimeParser\Header\AbstractHeader[] Each element is an
     AbstractHeader representing the header at the same index in the
     $headers array.  If an AbstractHeader has not been constructed for
     the header at that index, the element would be set to null.

@var array Maps header names by their "normalized" (lower-cased,
     non-alphanumeric characters stripped) name to an array of indexes in
     the $headers array.  For example:
     $headerMap['contenttype] = [ 1, 4 ]
     would indicate that the headers in $headers[1] and $headers[4] are
     both headers with the name 'Content-Type' or 'contENTtype'.

@var int the next index to use for $headers and $headerObjects.

Constructor
@param HeaderFactory $headerFactory

Returns true if the passed header exists in this collection.
@param string $name
@param int $offset
@return boolean

Returns an array of header indexes with names that more closely match
the passed $name if available: for instance if there are two headers in
an email, "Content-Type" and "ContentType", and the query is for a header
with the name "Content-Type", only headers that match exactly
"Content-Type" would be returned.
@param string $name
@return int[]

Returns the AbstractHeader object for the header with the given $name and
at the optional offset (defaulting to the first header in the collection
where more than one header with the same name exists).
Note that mime headers aren't case sensitive.
@param string $name
@param int $offset
@return \ZBateson\MailMimeParser\Header\AbstractHeader

Returns all headers with the passed name.
@param string $name
@return \ZBateson\MailMimeParser\Header\AbstractHeader[]

Returns the header in the headers array at the passed 0-based integer
index.
@param int $index
@return \ZBateson\MailMimeParser\Header\AbstractHeader

Removes the header from the collection with the passed name.  Defaults to
removing the first instance of the header for a collection that contains
more than one with the same passed name.
@param string $name
@param int $offset
@return boolean

Removes all headers that match the passed name.
@param string $name
@return boolean

Adds the header to the collection.
@param string $name
@param string $value

If a header exists with the passed name, and at the passed offset if more
than one exists, its value is updated.
If a header with the passed name doesn't exist at the passed offset, it
is created at the next available offset (offset is ignored when adding).
@param string $name
@param string $value
@param int $offset

Returns an array of AbstractHeader objects representing all headers in
this collection.
@return AbstractHeader

Returns an array of headers in this collection.  Each returned element in
the array is an array with the first element set to the name, and the
second its value:
[
    [ 'Header-Name', 'Header Value' ],
    [ 'Second-Header-Name', 'Second-Header-Value' ],
    // etc...
]
@return string[][]

Returns an iterator to the headers in this collection.  Each returned
element is an array with its first element set to the header's name, and
the second to its value:
[ 'Header-Name', 'Header Value' ]
@return ArrayIterator

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\HeaderContainer.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\HeaderContainer implements IteratorAggregate`

**Functions/Methods**:
- `__construct(HeaderFactory $headerFactory)`
- `exists($name, $offset = 0)`
- `getAllWithOriginalHeaderNameIfSet($name)`
- `get($name, $offset = 0)`
- `getAll($name)`
- `getByIndex($index)`
- `remove($name, $offset = 0)`
- `removeAll($name)`
- `add($name, $value)`
- `set($name, $value, $offset = 0)`
- `getHeaderObjects()`
- `getHeaders()`
- `getIterator()`

