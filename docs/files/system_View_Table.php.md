# system\View\Table.php

- Path: `system\View\Table.php`
- Type: PHP
- Size: 12603 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

HTML Table Generating Class
Lets you create tables manually or from database result objects, or arrays.

Data for table rows
@var array

Data for table heading
@var array

Data for table footing
@var array

Whether or not to automatically create the table header
@var bool

Table caption
@var string|null

Table layout template
@var array

Newline setting
@var string

Contents of empty cells
@var string

Callback for custom table layout
@var callable|null

Set the template from the table config file if it exists
@param array $config (default: array())

Set the template
@param array $template
@return bool

Set the table heading
Can be passed as an array or discreet params
@return Table

Set the table footing
Can be passed as an array or discreet params
@return Table

Set columns. Takes a one-dimensional array as input and creates
a multi-dimensional array with a depth equal to the number of
columns. This allows a single array with many elements to be
displayed in a table that has a fixed column count.
@param array $array
@param int   $columnLimit
@return array|false

Set "empty" cells
Can be passed as an array or discreet params
@param mixed $value
@return Table

Add a table row
Can be passed as an array or discreet params
@return Table

Prep Args
Ensures a standard associative array format for all cell data
@return array

Add a table caption
@param string $caption
@return Table

Generate the table
@param mixed $tableData
@return string

Clears the table arrays.  Useful if multiple tables are being generated
@return Table

Set table data from a database result object
@param BaseResult $object Database result object

Set table data from an array
@param array $data

Compile Template

Default Template
@return array

## References

**Database Tables (inferred)**
- `database`
- `the`
- `a`
- `an`

## Symbols

# Symbols

**Files documented**: 1

## `system\View\Table.php`

**Classes**:
- `CodeIgniter\View\Table`
- `CodeIgniter\View\properties`

**Functions/Methods**:
- `__construct($config = [])`
- `setTemplate($template)`
- `setHeading()`
- `setFooting()`
- `makeColumns($array = [], $columnLimit = 0)`
- `setEmpty($value)`
- `addRow()`
- `_prepArgs(array $args)`
- `setCaption($caption)`
- `generate($tableData = null)`
- `if(isset($this->function)`
- `clear()`
- `_setFromDBResult($object)`
- `_setFromArray($data)`
- `_compileTemplate()`
- `_defaultTemplate()`

