# system\Helpers\array_helper.php

- Path: `system\Helpers\array_helper.php`
- Type: PHP
- Size: 6502 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Searches an array through dot syntax. Supports
wildcard searches, like foo.*.bar
@return mixed

Used by `dot_array_search` to recursively search the
array with wildcards.
@internal This should not be used on its own.
@return mixed

Returns the value of an element at a key in an array of uncertain depth.
@param mixed $key
@return mixed|null

Sorts a multidimensional array by its elements values. The array
columns to be used for sorting are passed as an associative
array of key names and sorting flags.
Both arrays of objects and arrays of array can be sorted.
Example:
    array_sort_by_multiple_keys($players, [
        'team.hierarchy' => SORT_ASC,
        'position'       => SORT_ASC,
        'name'           => SORT_STRING,
    ]);
The '.' dot operator in the column name indicates a deeper array or
object level. In principle, any number of sublevels could be used,
as long as the level and column exist in every array element.
For information on multi-level array sorting, refer to Example #3 here:
https://www.php.net/manual/de/function.array-multisort.php
@param array $array       the reference of the array to be sorted
@param array $sortColumns an associative array of columns to sort
                          after and their sorting flags

Flatten a multidimensional array using dots as separators.
@param iterable $array The multi-dimensional array
@param string   $id    Something to initially prepend to the flattened keys
@return array The flattened array

## Symbols

# Symbols

**Files documented**: 1

## `system\Helpers\array_helper.php`

**Functions/Methods**:
- `dot_array_search(string $index, array $array)`
- `_array_search_dot(array $indexes, array $array)`
- `array_deep_search($key, array $array)`
- `array_sort_by_multiple_keys(array &$array, array $sortColumns)`
- `array_flatten_with_dots(iterable $array, string $id = '')`

