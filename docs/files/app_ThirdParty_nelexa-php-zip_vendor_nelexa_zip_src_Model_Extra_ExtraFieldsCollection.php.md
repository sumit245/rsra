# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\ExtraFieldsCollection.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\ExtraFieldsCollection.php`
- Type: PHP
- Size: 6769 bytes

## Summary (from docblocks)

Represents a collection of Extra Fields as they may
be present at several locations in ZIP files.

The map of Extra Fields.
Maps from Header ID to Extra Field.
Must not be null, but may be empty if no Extra Fields are used.
The map is sorted by Header IDs in ascending order.
@var ZipExtraField[]

Returns the number of Extra Fields in this collection.

Returns the Extra Field with the given Header ID or null
if no such Extra Field exists.
@param int $headerId the requested Header ID
@return ZipExtraField|null the Extra Field with the given Header ID or
                           if no such Extra Field exists

Stores the given Extra Field in this collection.
@param ZipExtraField $extraField the Extra Field to store in this collection
@return ZipExtraField the Extra Field previously associated with the Header ID of
                      of the given Extra Field or null if no such Extra Field existed

@param ZipExtraField[] $extraFields

@param ExtraFieldsCollection $collection

@return ZipExtraField[]

Returns Extra Field exists.
@param int $headerId the requested Header ID

Removes the Extra Field with the given Header ID.
@param int $headerId the requested Header ID
@return ZipExtraField|null the Extra Field with the given Header ID or null
                           if no such Extra Field exists

Whether a offset exists.
@see http://php.net/manual/en/arrayaccess.offsetexists.php
@param mixed $offset an offset to check for
@return bool true on success or false on failure

Offset to retrieve.
@see http://php.net/manual/en/arrayaccess.offsetget.php
@param mixed $offset the offset to retrieve

Offset to set.
@see http://php.net/manual/en/arrayaccess.offsetset.php
@param mixed $offset the offset to assign the value to
@param mixed $value  the value to set

Offset to unset.
@see http://php.net/manual/en/arrayaccess.offsetunset.php
@param mixed $offset the offset to unset

Return the current element.
@see http://php.net/manual/en/iterator.current.php

Move forward to next element.
@see http://php.net/manual/en/iterator.next.php

Return the key of the current element.
@see http://php.net/manual/en/iterator.key.php
@return int scalar on success, or null on failure

Checks if current position is valid.
@see http://php.net/manual/en/iterator.valid.php
@return bool The return value will be casted to boolean and then evaluated.
             Returns true on success or false on failure.

Rewind the Iterator to the first element.
@see http://php.net/manual/en/iterator.rewind.php

If clone extra fields.

## References

**Database Tables (inferred)**
- `Header`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\ExtraFieldsCollection.php`

**Classes**:
- `PhpZip\Model\Extra\ExtraFieldsCollection implements \ArrayAccess, \Countable, \Iterator`

**Functions/Methods**:
- `count()`
- `get(int $headerId)`
- `validateHeaderId(int $headerId)`
- `add(ZipExtraField $extraField)`
- `addAll(array $extraFields)`
- `addCollection(self $collection)`
- `getAll()`
- `has(int $headerId)`
- `remove(int $headerId)`
- `offsetExists($offset)`
- `offsetGet($offset)`
- `offsetSet($offset, $value)`
- `offsetUnset($offset)`
- `current()`
- `next()`
- `key()`
- `valid()`
- `rewind()`
- `clear()`
- `__toString()`
- `__clone()`

