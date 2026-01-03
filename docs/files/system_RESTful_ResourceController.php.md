# system\RESTful\ResourceController.php

- Path: `system\RESTful\ResourceController.php`
- Type: PHP
- Size: 2449 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

An extendable controller to provide a RESTful API for a resource.

Return an array of resource objects, themselves in array format
@return mixed

Return the properties of a resource object
@param mixed $id
@return mixed

Return a new resource object, with default properties
@return mixed

Create a new resource object, from "posted" parameters
@return mixed

Return the editable properties of a resource object
@param mixed $id
@return mixed

Add or update a model resource, from "posted" properties
@param mixed $id
@return mixed

Delete the designated resource object from the model
@param mixed $id
@return mixed

Set/change the expected response representation for returned objects

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\RESTful\ResourceController.php`

**Classes**:
- `CodeIgniter\RESTful\ResourceController extends BaseResource`

**Functions/Methods**:
- `index()`
- `show($id = null)`
- `new()`
- `create()`
- `edit($id = null)`
- `update($id = null)`
- `delete($id = null)`
- `setFormat(string $format = 'json')`

