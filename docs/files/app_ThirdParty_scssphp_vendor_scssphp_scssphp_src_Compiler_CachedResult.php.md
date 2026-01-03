# app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Compiler\CachedResult.php

- Path: `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Compiler\CachedResult.php`
- Type: PHP
- Size: 1582 bytes

## Summary (from docblocks)

SCSSPHP
@copyright 2012-2020 Leaf Corcoran
@license http://opensource.org/licenses/MIT MIT
@link http://scssphp.github.io/scssphp

@internal

@var CompilationResult

@var array<string, int>

@var array
@phpstan-var list<array{currentDir: string|null, path: string, filePath: string}>

@param CompilationResult  $result
@param array<string, int> $parsedFiles
@param array              $resolvedImports
@phpstan-param list<array{currentDir: string|null, path: string, filePath: string}> $resolvedImports

@return CompilationResult

@return array<string, int>

@return array
@phpstan-return list<array{currentDir: string|null, path: string, filePath: string}>

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Compiler\CachedResult.php`

**Classes**:
- `ScssPhp\ScssPhp\Compiler\CachedResult`

**Functions/Methods**:
- `__construct(CompilationResult $result, array $parsedFiles, array $resolvedImports)`
- `getResult()`
- `getParsedFiles()`
- `getResolvedImports()`

