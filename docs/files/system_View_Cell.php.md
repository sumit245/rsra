# system\View\Cell.php

- Path: `system\View\Cell.php`
- Type: PHP
- Size: 6076 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class Cell
A simple class that can call any other class that can be loaded,
and echo out it's result. Intended for displaying small blocks of
content within views that can be managed by other libraries and
not require they are loaded within controller.
Used with the helper function, it's use will look like:
        viewCell('\Some\Class::method', 'limit=5 sort=asc', 60, 'cache-name');
Parameters are matched up with the callback method's arguments of the same name:
        class Class {
            function method($limit, $sort)
        }
Alternatively, the params will be passed into the callback method as a simple array
if matching params are not found.
        class Class {
            function method(array $params=null)
        }

Instance of the current Cache Instance
@var CacheInterface

Cell constructor.

Render a cell, returning its body as a string.
@param array|string|null $params
@throws ReflectionException

Parses the params attribute. If an array, returns untouched.
If a string, it should be in the format "key1=value key2=value".
It will be split and returned as an array.
@param array|string|null $params
@return array|null

Given the library string, attempts to determine the class and method
to call.

## Symbols

# Symbols

**Files documented**: 1

## `system\View\Cell.php`

**Classes**:
- `CodeIgniter\View\that`
- `CodeIgniter\View\that`
- `CodeIgniter\View\Class`
- `CodeIgniter\View\Class`
- `CodeIgniter\View\Cell`
- `CodeIgniter\View\and`

**Functions/Methods**:
- `method($limit, $sort)`
- `method(array $params=null)`
- `__construct(CacheInterface $cache)`
- `render(string $library, $params = null, int $ttl = 0, ?string $cacheName = null)`
- `prepareParams($params)`
- `determineClass(string $library)`

