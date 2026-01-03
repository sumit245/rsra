# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Zipper.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Zipper.php`
- Type: PHP
- Size: 4442 bytes

## Summary (from docblocks)

A zipper is a purely-functional data structure which contains
a focus that can be efficiently manipulated.  It is known as
a "one-hole context".  This mutable variant implements a zipper
for a list as a pair of two arrays, laid out as follows:
     Base list: 1 2 3 4 [ ] 6 7 8 9
     Front list: 1 2 3 4
     Back list: 9 8 7 6
User is expected to keep track of the "current element" and properly
fill it back in as necessary.  (ToDo: Maybe it's more user friendly
to implicitly track the current element?)
Nota bene: the current class gets confused if you try to store NULLs
in the list.

Creates a zipper from an array, with a hole in the
0-index position.
@param Array to zipper-ify.
@return Tuple of zipper and element of first position.

Convert zipper back into a normal array, optionally filling in
the hole with a value. (Usually you should supply a $t, unless you
are at the end of the array.)

Move hole to the next element.
@param $t Element to fill hole with
@return Original contents of new hole.

Iterated hole advancement.
@param $t Element to fill hole with
@param $i How many forward to advance hole
@return Original contents of new hole, i away

Move hole to the previous element
@param $t Element to fill hole with
@return Original contents of new hole.

Delete contents of current hole, shifting hole to
next element.
@return Original contents of new hole.

Returns true if we are at the end of the list.
@return bool

Insert element before hole.
@param Element to insert

Insert element after hole.
@param Element to insert

Splice in multiple elements at hole.  Functional specification
in terms of array_splice:
     $arr1 = $arr;
     $old1 = array_splice($arr1, $i, $delete, $replacement);
     list($z, $t) = HTMLPurifier_Zipper::fromArray($arr);
     $t = $z->advance($t, $i);
     list($old2, $t) = $z->splice($t, $delete, $replacement);
     $arr2 = $z->toArray($t);
     assert($old1 === $old2);
     assert($arr1 === $arr2);
NB: the absolute index location after this operation is
*unchanged!*
@param Current contents of hole.

## References

**Database Tables (inferred)**
- `an`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Zipper.php`

**Classes**:
- `gets`
- `HTMLPurifier_Zipper`

**Functions/Methods**:
- `__construct($front, $back)`
- `fromArray($array)`
- `toArray($t = NULL)`
- `next($t)`
- `advance($t, $n)`
- `prev($t)`
- `delete()`
- `done()`
- `insertBefore($t)`
- `insertAfter($t)`
- `splice($t, $delete, $replacement)`

