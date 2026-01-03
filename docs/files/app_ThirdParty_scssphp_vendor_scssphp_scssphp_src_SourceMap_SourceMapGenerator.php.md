# app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\SourceMap\SourceMapGenerator.php

- Path: `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\SourceMap\SourceMapGenerator.php`
- Type: PHP
- Size: 11964 bytes

## Summary (from docblocks)

SCSSPHP
@copyright 2012-2020 Leaf Corcoran
@license http://opensource.org/licenses/MIT MIT
@link http://scssphp.github.io/scssphp

Source Map Generator
{@internal Derivative of oyejorge/less.php's lib/SourceMap/Generator.php, relicensed with permission. }}
@author Josh Schmidt <oyejorge@gmail.com>
@author Nicolas FRANÇOIS <nicolas.francois@frog-labs.com>
@internal

What version of source map does the generator generate?

Array of default options
@var array
@phpstan-var array{sourceRoot: string, sourceMapFilename: string|null, sourceMapURL: string|null, sourceMapWriteTo: string|null, outputSourceFiles: bool, sourceMapRootpath: string, sourceMapBasepath: string}

The base64 VLQ encoder
@var \ScssPhp\ScssPhp\SourceMap\Base64VLQ

Array of mappings
@var array
@phpstan-var list<array{generated_line: int, generated_column: int, original_line: int, original_column: int, source_file: string}>

Array of contents map
@var array

File to content map
@var array<string, string>

@var array<string, int>

@var array
@phpstan-var array{sourceRoot: string, sourceMapFilename: string|null, sourceMapURL: string|null, sourceMapWriteTo: string|null, outputSourceFiles: bool, sourceMapRootpath: string, sourceMapBasepath: string}

@phpstan-param array{sourceRoot?: string, sourceMapFilename?: string|null, sourceMapURL?: string|null, sourceMapWriteTo?: string|null, outputSourceFiles?: bool, sourceMapRootpath?: string, sourceMapBasepath?: string} $options

Adds a mapping
@param int    $generatedLine   The line number in generated file
@param int    $generatedColumn The column number in generated file
@param int    $originalLine    The line number in original file
@param int    $originalColumn  The column number in original file
@param string $sourceFile      The original source file
@return void

Saves the source map to a file
@param string $content The content to write
@return string|null
@throws \ScssPhp\ScssPhp\Exception\CompilerException If the file could not be saved
@deprecated

Generates the JSON source map
@param string $prefix A prefix added in the output file, which needs to shift mappings
@return string
@see https://docs.google.com/document/d/1U1RGAehQwRypUTovF1KRlpiOFze0b-_2gc6fAH0KY0k/edit#

Returns the sources contents
@return string[]|null

Generates the mappings string
@param string $prefix A prefix added in the output file, which needs to shift mappings
@return string

Finds the index for the filename
@param string $filename
@return int|false

Normalize filename
@param string $filename
@return string

Fix windows paths
@param string $path
@param bool   $addEndSlash
@return string

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\SourceMap\SourceMapGenerator.php`

**Classes**:
- `ScssPhp\ScssPhp\SourceMap\SourceMapGenerator`

**Functions/Methods**:
- `__construct(array $options = [])`
- `addMapping($generatedLine, $generatedColumn, $originalLine, $originalColumn, $sourceFile)`
- `saveMap($content)`
- `generateJson($prefix = '')`
- `getSourcesContent()`
- `generateMappings($prefix = '')`
- `findFileIndex($filename)`
- `normalizeFilename($filename)`
- `fixWindowsPath($path, $addEndSlash = false)`

