# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\PHP52\SplFixedArray.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\PHP52\SplFixedArray.php`
- Type: PHP
- Size: 4012 bytes

## Summary (from docblocks)

The SplFixedArray class provides the main functionalities of array. The
main differences between a SplFixedArray and a normal PHP array is that
the SplFixedArray is of fixed length and allows only integers within
the range as indexes. The advantage is that it allows a faster array
implementation.

@var array<int, mixed>

@var int $size

SplFixedArray constructor.
@param int $size

@return int

@return array

@param array $array
@param bool $save_indexes
@return SplFixedArray
@psalm-suppress MixedAssignment

@return int

@param int $size
@return bool

@param string|int $index
@return bool

@param string|int $index
@return mixed

@param string|int $index
@param mixed $newval
@psalm-suppress MixedAssignment

@param string|int $index

Rewind iterator back to the start
@link https://php.net/manual/en/splfixedarray.rewind.php
@return void
@since 5.3.0

Return current array entry
@link https://php.net/manual/en/splfixedarray.current.php
@return mixed The current element value.
@since 5.3.0

Return current array index
@return int The current array index.

@return void

Check whether the array contains more elements
@link https://php.net/manual/en/splfixedarray.valid.php
@return bool true if the array contains any more elements, false otherwise.

Do nothing.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\PHP52\SplFixedArray.php`

**Classes**:
- `provides`
- `SplFixedArray implements Iterator, ArrayAccess, Countable`

**Functions/Methods**:
- `__construct($size = 0)`
- `count()`
- `toArray()`
- `fromArray(array $array, $save_indexes = true)`
- `getSize()`
- `setSize($size)`
- `offsetExists($index)`
- `offsetGet($index)`
- `offsetSet($index, $newval)`
- `offsetUnset($index)`
- `rewind()`
- `current()`
- `key()`
- `next()`
- `valid()`
- `__wakeup()`

