# system\HTTP\Files\UploadedFile.php

- Path: `system\HTTP\Files\UploadedFile.php`
- Type: PHP
- Size: 10978 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Value object representing a single file uploaded through an
HTTP request. Used by the IncomingRequest class to
provide files.
Typically, implementors will extend the SplFileInfo class.

The path to the temporary file.
@var string

The original filename as provided by the client.
@var string

The filename given to a file during a move.
@var string

The type of file as provided by PHP
@var string

The error constant of the upload
(one of PHP's UPLOADERRXXX constants)
@var int

Whether the file has been moved already or not.
@var bool

Accepts the file information as would be filled in from the $_FILES array.
@param string $path         The temporary location of the uploaded file.
@param string $originalName The client-provided filename.
@param string $mimeType     The type of file as provided by PHP
@param int    $size         The size of the file, in bytes
@param int    $error        The error constant of the upload (one of PHP's UPLOADERRXXX constants)

Move the uploaded file to a new location.
$targetPath may be an absolute path, or a relative path. If it is a
relative path, resolution should be the same as used by PHP's rename()
function.
The original file MUST be removed on completion.
If this method is called more than once, any subsequent calls MUST raise
an exception.
When used in an SAPI environment where $_FILES is populated, when writing
files via moveTo(), is_uploaded_file() and move_uploaded_file() SHOULD be
used to ensure permissions and upload status are verified correctly.
If you wish to move to a stream, use getStream(), as SAPI operations
cannot guarantee writing to stream destinations.
@see http://php.net/is_uploaded_file
@see http://php.net/move_uploaded_file
@param string $targetPath Path to which to move the uploaded file.
@param string $name       the name to rename the file to.
@param bool   $overwrite  State for indicating whether to overwrite the previously generated file with the same
                          name or not.
@throws InvalidArgumentException if the $path specified is invalid.
@throws RuntimeException         on any error during the move operation.
@throws RuntimeException         on the second or subsequent call to the method.
@return bool

create file target path if
the set path does not exist
@return string The path set or created.

Returns whether the file has been moved or not. If it has,
the move() method will not work and certain properties, like
the tempName, will no longer be available.

Retrieve the error associated with the uploaded file.
The return value MUST be one of PHP's UPLOAD_ERR_XXX constants.
If the file was uploaded successfully, this method MUST return
UPLOAD_ERR_OK.
Implementations SHOULD return the value stored in the "error" key of
the file in the $_FILES array.
@see    http://php.net/manual/en/features.file-upload.errors.php
@return int One of PHP's UPLOAD_ERR_XXX constants.

Get error string

Returns the mime type as provided by the client.
This is NOT a trusted value.
For a trusted version, use getMimeType() instead.
@return string The media type sent by the client or null if none was provided.

Retrieve the filename. This will typically be the filename sent
by the client, and should not be trusted. If the file has been
moved, this will return the final name of the moved file.
@return string The filename sent by the client or null if none was provided.

Returns the name of the file as provided by the client during upload.

Gets the temporary filename where the file was uploaded to.

Overrides SPLFileInfo's to work with uploaded files, since
the temp file that's been uploaded doesn't have an extension.
This method tries to guess the extension from the files mime
type but will return the clientExtension if it fails to do so.
This method will always return a more or less helpfull extension
but might be insecure if the mime type is not machted. Consider
using guessExtension for a more safe version.

Attempts to determine the best file extension from the file's
mime type. In contrast to getExtension, this method will return
an empty string if it fails to determine an extension instead of
falling back to the unsecure clientExtension.

Returns the original file extension, based on the file name that
was uploaded. This is NOT a trusted source.
For a trusted version, use guessExtension() instead.

Returns whether the file was uploaded successfully, based on whether
it was uploaded via HTTP and has no errors.

Save the uploaded file to a new location.
By default, upload files are saved in writable/uploads directory. The YYYYMMDD folder
and random file name will be created.
@param string $folderName the folder name to writable/uploads directory.
@param string $fileName   the name to rename the file to.
@return string file full path

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\Files\UploadedFile.php`

**Classes**:
- `CodeIgniter\HTTP\Files\to`
- `CodeIgniter\HTTP\Files\UploadedFile extends File implements UploadedFileInterface`

**Functions/Methods**:
- `__construct(string $path, string $originalName, ?string $mimeType = null, ?int $size = null, ?int $error = null)`
- `move(string $targetPath, ?string $name = null, bool $overwrite = false)`
- `setPath(string $path)`
- `hasMoved()`
- `getError()`
- `getErrorString()`
- `getClientMimeType()`
- `getName()`
- `getClientName()`
- `getTempName()`
- `getExtension()`
- `guessExtension()`
- `getClientExtension()`
- `isValid()`
- `store(?string $folderName = null, ?string $fileName = null)`

