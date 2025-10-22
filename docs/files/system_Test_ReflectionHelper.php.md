# system\Test\ReflectionHelper.php

- Path: `system\Test\ReflectionHelper.php`
- Type: PHP
- Size: 2474 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Testing helper.

Find a private method invoker.
@param object|string $obj    object or class name
@param string        $method method name
@throws ReflectionException
@return Closure

Find an accessible property.
@param object|string $obj
@param string        $property
@throws ReflectionException
@return ReflectionProperty

Set a private property.
@param object|string $obj      object or class name
@param string        $property property name
@param mixed         $value    value
@throws ReflectionException

Retrieve a private property.
@param object|string $obj      object or class name
@param string        $property property name
@throws ReflectionException
@return mixed value

## Symbols

# Symbols

**Files documented**: 1

## `system\Test\ReflectionHelper.php`

**Classes**:
- `CodeIgniter\Test\name`
- `CodeIgniter\Test\name`
- `CodeIgniter\Test\name`

**Functions/Methods**:
- `getPrivateMethodInvoker($obj, $method)`
- `getAccessibleRefProperty($obj, $property)`
- `setPrivateProperty($obj, $property, $value)`
- `getPrivateProperty($obj, $property)`

