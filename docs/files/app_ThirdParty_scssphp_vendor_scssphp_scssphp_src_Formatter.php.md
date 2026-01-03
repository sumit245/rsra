# app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Formatter.php

- Path: `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Formatter.php`
- Type: PHP
- Size: 8752 bytes

## Summary (from docblocks)

SCSSPHP
@copyright 2012-2020 Leaf Corcoran
@license http://opensource.org/licenses/MIT MIT
@link http://scssphp.github.io/scssphp

Base formatter
@author Leaf Corcoran <leafot@gmail.com>
@internal

@var int

@var string

@var string

@var string

@var string

@var string

@var string

@var bool

@var \ScssPhp\ScssPhp\Formatter\OutputBlock

@var int

@var int

@var \ScssPhp\ScssPhp\SourceMap\SourceMapGenerator|null

@var string

Initialize formatter
@api

Return indentation (whitespace)
@return string

Return property assignment
@api
@param string $name
@param mixed  $value
@return string

Return custom property assignment
differs in that you have to keep spaces in the value as is
@api
@param string $name
@param mixed  $value
@return string

Output lines inside a block
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $block
@return void

Output block selectors
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $block
@return void

Output block children
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $block
@return void

Output non-empty block
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $block
@return void

Test and clean safely empty children
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $block
@return bool

Entry point to formatting a block
@api
@param \ScssPhp\ScssPhp\Formatter\OutputBlock             $block              An abstract syntax tree
@param \ScssPhp\ScssPhp\SourceMap\SourceMapGenerator|null $sourceMapGenerator Optional source map generator
@return string

Output content
@param string $str
@return void

## References

**Database Tables (inferred)**
- `parser`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Formatter.php`

**Classes**:
- `ScssPhp\ScssPhp\Formatter`

**Functions/Methods**:
- `__construct()`
- `indentStr()`
- `property($name, $value)`
- `customProperty($name, $value)`
- `blockLines(OutputBlock $block)`
- `blockSelectors(OutputBlock $block)`
- `blockChildren(OutputBlock $block)`
- `block(OutputBlock $block)`
- `testEmptyChildren($block)`
- `format(OutputBlock $block, SourceMapGenerator $sourceMapGenerator = null)`
- `write($str)`

