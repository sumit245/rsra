# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Data\ZipNewData.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Data\ZipNewData.php`
- Type: PHP
- Size: 3693 bytes

## Summary (from docblocks)

The class contains a streaming resource with new content added to the ZIP archive.

A static variable allows closing the stream in the destructor
only if it is its sole holder.
@var array<int, int> array of resource ids and the number of class clones

@var resource

@param string|resource $data Raw string data or resource
@noinspection PhpMissingParamTypeInspection

@return resource returns stream data

@return string returns data as string

@param resource $outStream

@see https://php.net/manual/en/language.oop5.cloning.php

The stream will be closed when closing the zip archive.
The method implements protection against closing the stream of the cloned object.
@see ZipFile::close()

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Data\ZipNewData.php`

**Classes**:
- `PhpZip\Model\Data\contains`
- `PhpZip\Model\Data\ZipNewData implements ZipData`
- `PhpZip\Model\Data\clones`

**Functions/Methods**:
- `__construct(ZipEntry $zipEntry, $data)`
- `getDataAsStream()`
- `getDataAsString()`
- `copyDataToStream($outStream)`
- `__clone()`
- `__destruct()`

