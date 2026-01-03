# app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\UploadedFile.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\UploadedFile.php`
- Type: PHP
- Size: 7543 bytes

## Summary (from docblocks)

@var int[]

@var string

@var string

@var int

@var null|string

@var bool

@var int

@var StreamInterface|null

@param StreamInterface|string|resource $streamOrFile
@param int $size
@param int $errorStatus
@param string|null $clientFilename
@param string|null $clientMediaType

Depending on the value set file or stream variable
@param mixed $streamOrFile
@throws InvalidArgumentException

@param int $error
@throws InvalidArgumentException

@param int $size
@throws InvalidArgumentException

@param mixed $param
@return boolean

@param mixed $param
@return boolean

@param string|null $clientFilename
@throws InvalidArgumentException

@param string|null $clientMediaType
@throws InvalidArgumentException

Return true if there is no upload error
@return boolean

@return boolean

@throws RuntimeException if is moved or not ok

{@inheritdoc}
@throws RuntimeException if the upload was not successful.

{@inheritdoc}
@see http://php.net/is_uploaded_file
@see http://php.net/move_uploaded_file
@param string $targetPath Path to which to move the uploaded file.
@throws RuntimeException if the upload was not successful.
@throws InvalidArgumentException if the $path specified is invalid.
@throws RuntimeException on any error during the move operation, or on
    the second or subsequent call to the method.

{@inheritdoc}
@return int|null The file size in bytes or null if unknown.

{@inheritdoc}
@see http://php.net/manual/en/features.file-upload.errors.php
@return int One of PHP's UPLOAD_ERR_XXX constants.

{@inheritdoc}
@return string|null The filename sent by the client or null if none
    was provided.

{@inheritdoc}

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\UploadedFile.php`

**Classes**:
- `GuzzleHttp\Psr7\UploadedFile implements UploadedFileInterface`

**Functions/Methods**:
- `__construct($streamOrFile,
        $size,
        $errorStatus,
        $clientFilename = null,
        $clientMediaType = null)`
- `setStreamOrFile($streamOrFile)`
- `setError($error)`
- `setSize($size)`
- `isStringOrNull($param)`
- `isStringNotEmpty($param)`
- `setClientFilename($clientFilename)`
- `setClientMediaType($clientMediaType)`
- `isOk()`
- `isMoved()`
- `validateActive()`
- `getStream()`
- `moveTo($targetPath)`
- `getSize()`
- `getError()`
- `getClientFilename()`
- `getClientMediaType()`

