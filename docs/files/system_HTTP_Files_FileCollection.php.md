# system\HTTP\Files\FileCollection.php

- Path: `system\HTTP\Files\FileCollection.php`
- Type: PHP
- Size: 7284 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class FileCollection
Provides easy access to uploaded files for a request.

An array of UploadedFile instances for any files
uploaded as part of this request.
Populated the first time either files(), file(), or hasFile()
is called.
@var array|null

Returns an array of all uploaded files that were found.
Each element in the array will be an instance of UploadedFile.
The key of each element will be the client filename.
@return array|null

Attempts to get a single file from the collection of uploaded files.
@return UploadedFile|null

Verify if a file exist in the collection of uploaded files and is have been uploaded with multiple option.
@return array|null

Checks whether an uploaded file with name $fileID exists in
this request.
@param string $fileID The name of the uploaded file (from the input)

Taking information from the $_FILES array, it creates an instance
of UploadedFile for each one, saving the results to this->files.
Called by files(), file(), and hasFile()

Given a file array, will create UploadedFile instances. Will
loop over an array and create objects for each.
@return array|UploadedFile

Reformats the odd $_FILES array into something much more like
we would expect, with each object having its own array.
Thanks to Jack Sleight on the PHP Manual page for the basis
of this method.
@see http://php.net/manual/en/reserved.variables.files.php#118294

Navigate through an array looking for a particular index
@param array $index The index sequence we are navigating down
@param array $value The portion of the array to process
@return mixed

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\Files\FileCollection.php`

**Classes**:
- `CodeIgniter\HTTP\Files\FileCollection`

**Functions/Methods**:
- `all()`
- `getFile(string $name)`
- `getFileMultiple(string $name)`
- `hasFile(string $fileID)`
- `populateFiles()`
- `createFileObject(array $array)`
- `fixFilesArray(array $data)`
- `getValueDotNotationSyntax(array $index, array $value)`

