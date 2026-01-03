# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Util\FilesUtil.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Util\FilesUtil.php`
- Type: PHP
- Size: 11816 bytes

## Summary (from docblocks)

Files util.
@internal

Is empty directory.
@param string $dir Directory

Remove recursive directory.
@param string $dir directory path

@var \SplFileInfo $fileInfo

Convert glob pattern to regex pattern.

Search files.
@return array Searched file list

Search files from glob pattern.
@return array Searched file list

@noinspection SlowArrayOperationsInLoopInspection

Search files from regex pattern.
@return array Searched file list

Convert bytes to human size.
@param int         $size Size bytes
@param string|null $unit Unit support 'GB', 'MB', 'KB'

Normalizes zip path.
@param string $path Zip path

Returns whether the file path is an absolute path.
@param string $file A file path
@see source symfony filesystem component

@noinspection PhpComposerExtensionStubsInspection

@noinspection PhpComposerExtensionStubsInspection

## References

**Database Tables (inferred)**
- `glob`
- `php`
- `regex`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Util\FilesUtil.php`

**Classes**:
- `PhpZip\Util\FilesUtil`

**Functions/Methods**:
- `isEmptyDir(string $dir)`
- `removeDir(string $dir)`
- `convertGlobToRegEx(string $globPattern)`
- `fileSearchWithIgnore(string $inputDir, bool $recursive = true, array $ignoreFiles = [])`
- `globFileSearch(string $globPattern, int $flags = 0, bool $recursive = true)`
- `regexFileSearch(string $folder, string $pattern, bool $recursive = true)`
- `humanSize(int $size, ?string $unit = null)`
- `normalizeZipPath(string $path)`
- `isAbsolutePath(string $file)`
- `symlink(string $target, string $path, bool $allowSymlink)`
- `isBadCompressionFile(string $file)`
- `isBadCompressionMimeType(string $mimeType)`
- `getMimeTypeFromFile(string $file)`
- `getMimeTypeFromString(string $contents)`

