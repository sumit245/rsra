# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\ZipFile.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\ZipFile.php`
- Type: PHP
- Size: 59506 bytes

## Summary (from docblocks)

Create, open .ZIP files, modify, get info and extract files.
Implemented support traditional PKWARE encryption and WinZip AES encryption.
Implemented support ZIP64.
@see https://pkware.cachefly.net/webdocs/casestudies/APPNOTE.TXT .ZIP File Format Specification

@var array default mime types

@param resource $inputStream

Open zip archive from file.
@throws ZipException if can't open file
@return ZipFile

@psalm-suppress InvalidArgument

Open zip archive from raw string data.
@throws ZipException if can't open temp stream
@return ZipFile

Open zip archive from stream resource.
@param resource $handle
@throws ZipException
@return ZipFile

@return string[] returns the list files

@return int returns the number of entries in this ZIP file

Returns the file comment.
@return string|null the file comment

Set archive comment.
@param ?string $comment
@return ZipFile

Checks if there is an entry in the archive.

Returns ZipEntry object.
@throws ZipEntryNotFoundException

Checks that the entry in the archive is a directory.
Returns true if and only if this ZIP entry represents a directory entry
(i.e. end with '/').
@throws ZipEntryNotFoundException

Returns entry comment.
@throws ZipEntryNotFoundException
@throws ZipException

Set entry comment.
@param ?string $comment
@throws ZipEntryNotFoundException
@throws ZipException
@return ZipFile

Returns the entry contents.
@throws ZipException
@throws ZipEntryNotFoundException

@throws ZipEntryNotFoundException
@throws ZipException
@return resource

Returns an array of zip records (ex. for modify time).
@return ZipEntry[] array of raw zip entries

Extract the archive contents (unzip).
Extract the complete archive or the given files to the specified destination.
@param string     $destDir          location where to extract the files
@param mixed      $entries          entries to extract (array, string or null)
@param array      $options          extract options
@param array|null $extractedEntries if the extractedEntries argument is present,
                                    then the specified array will be filled with
                                    information about the extracted entries
@throws ZipException
@return ZipFile

@noinspection AdditionOperationOnArraysInspection

@var int[] $lastModDirs

@psalm-suppress InvalidArgument

@noinspection PotentialMalwareInspection

Add entry from the string.
@param string   $entryName         zip entry name
@param string   $contents          string contents
@param int|null $compressionMethod Compression method.
                                   Use {@see ZipCompressionMethod::STORED},
                                   {@see ZipCompressionMethod::DEFLATED} or
                                   {@see ZipCompressionMethod::BZIP2}.
                                   If null, then auto choosing method.
@throws ZipException
@return ZipFile

@throws ZipException
@return ZipEntry[]

@noinspection AdditionOperationOnArraysInspection

@param ?string $entryName
@throws ZipException

@noinspection AdditionOperationOnArraysInspection

Add entry from the file.
@param string      $filename          destination file
@param string|null $entryName         zip Entry name
@param int|null    $compressionMethod Compression method.
                                      Use {@see ZipCompressionMethod::STORED},
                                      {@see ZipCompressionMethod::DEFLATED} or
                                      {@see ZipCompressionMethod::BZIP2}.
                                      If null, then auto choosing method.
@throws ZipException
@return ZipFile

Add entry from the stream.
@param resource $stream            stream resource
@param string   $entryName         zip Entry name
@param int|null $compressionMethod Compression method.
                                   Use {@see ZipCompressionMethod::STORED},
                                   {@see ZipCompressionMethod::DEFLATED} or
                                   {@see ZipCompressionMethod::BZIP2}.
                                   If null, then auto choosing method.
@throws ZipException
@return ZipFile

Add an empty directory in the zip archive.
@throws ZipException
@return ZipFile

Add directory not recursively to the zip archive.
@param string   $inputDir          Input directory
@param string   $localPath         add files to this directory, or the root
@param int|null $compressionMethod Compression method.
                                   Use {@see ZipCompressionMethod::STORED},
                                   {@see ZipCompressionMethod::DEFLATED} or
                                   {@see ZipCompressionMethod::BZIP2}.
                                   If null, then auto choosing method.
@throws ZipException
@return ZipFile

Add recursive directory to the zip archive.
@param string   $inputDir          Input directory
@param string   $localPath         add files to this directory, or the root
@param int|null $compressionMethod Compression method.
                                   Use {@see ZipCompressionMethod::STORED}, {@see
                                   ZipCompressionMethod::DEFLATED} or
                                   {@see ZipCompressionMethod::BZIP2}.
                                   If null, then auto choosing method.
@throws ZipException
@return ZipFile
@see ZipCompressionMethod::STORED
@see ZipCompressionMethod::DEFLATED
@see ZipCompressionMethod::BZIP2

Add directories from directory iterator.
@param \Iterator $iterator          directory iterator
@param string    $localPath         add files to this directory, or the root
@param int|null  $compressionMethod Compression method.
                                    Use {@see ZipCompressionMethod::STORED}, {@see
                                    ZipCompressionMethod::DEFLATED} or
                                    {@see ZipCompressionMethod::BZIP2}.
                                    If null, then auto choosing method.
@throws ZipException
@return ZipFile
@see ZipCompressionMethod::STORED
@see ZipCompressionMethod::DEFLATED
@see ZipCompressionMethod::BZIP2

@var string[] $files
@var string   $path

Add files from glob pattern.
@param string   $inputDir          Input directory
@param string   $globPattern       glob pattern
@param string   $localPath         add files to this directory, or the root
@param int|null $compressionMethod Compression method.
                                   Use {@see ZipCompressionMethod::STORED},
                                   {@see ZipCompressionMethod::DEFLATED} or
                                   {@see ZipCompressionMethod::BZIP2}.
                                   If null, then auto choosing method.
@throws ZipException
@return ZipFile
@sse https://en.wikipedia.org/wiki/Glob_(programming) Glob pattern syntax

Add files from glob pattern.
@param string   $inputDir          Input directory
@param string   $globPattern       glob pattern
@param string   $localPath         add files to this directory, or the root
@param bool     $recursive         recursive search
@param int|null $compressionMethod Compression method.
                                   Use {@see ZipCompressionMethod::STORED},
                                   {@see ZipCompressionMethod::DEFLATED} or
                                   {@see ZipCompressionMethod::BZIP2}.
                                   If null, then auto choosing method.
@throws ZipException
@return ZipFile
@sse https://en.wikipedia.org/wiki/Glob_(programming) Glob pattern syntax

Add files recursively from glob pattern.
@param string   $inputDir          Input directory
@param string   $globPattern       glob pattern
@param string   $localPath         add files to this directory, or the root
@param int|null $compressionMethod Compression method.
                                   Use {@see ZipCompressionMethod::STORED},
                                   {@see ZipCompressionMethod::DEFLATED} or
                                   {@see ZipCompressionMethod::BZIP2}.
                                   If null, then auto choosing method.
@throws ZipException
@return ZipFile
@sse https://en.wikipedia.org/wiki/Glob_(programming) Glob pattern syntax

Add files from regex pattern.
@param string   $inputDir          search files in this directory
@param string   $regexPattern      regex pattern
@param string   $localPath         add files to this directory, or the root
@param int|null $compressionMethod Compression method.
                                   Use {@see ZipCompressionMethod::STORED},
                                   {@see ZipCompressionMethod::DEFLATED} or
                                   {@see ZipCompressionMethod::BZIP2}.
                                   If null, then auto choosing method.
@throws ZipException
@return ZipFile
@internal param bool $recursive Recursive search

Add files from regex pattern.
@param string   $inputDir          search files in this directory
@param string   $regexPattern      regex pattern
@param string   $localPath         add files to this directory, or the root
@param bool     $recursive         recursive search
@param int|null $compressionMethod Compression method.
                                   Use {@see ZipCompressionMethod::STORED},
                                   {@see ZipCompressionMethod::DEFLATED} or
                                   {@see ZipCompressionMethod::BZIP2}.
                                   If null, then auto choosing method.
@throws ZipException
@return ZipFile

@param ?int $compressionMethod
@throws ZipException

@var string $file

Add files recursively from regex pattern.
@param string   $inputDir          search files in this directory
@param string   $regexPattern      regex pattern
@param string   $localPath         add files to this directory, or the root
@param int|null $compressionMethod Compression method.
                                   Use {@see ZipCompressionMethod::STORED},
                                   {@see ZipCompressionMethod::DEFLATED} or
                                   {@see ZipCompressionMethod::BZIP2}.
                                   If null, then auto choosing method.
@throws ZipException
@return ZipFile
@internal param bool $recursive Recursive search

Add array data to archive.
Keys is local names.
Values is contents.
@param array $mapData associative array for added to zip

Rename the entry.
@param string $oldName old entry name
@param string $newName new entry name
@throws ZipException
@return ZipFile

Delete entry by name.
@param string $entryName zip Entry name
@throws ZipEntryNotFoundException if entry not found
@return ZipFile

Delete entries by glob pattern.
@param string $globPattern Glob pattern
@return ZipFile
@sse https://en.wikipedia.org/wiki/Glob_(programming) Glob pattern syntax

Delete entries by regex pattern.
@param string $regexPattern Regex pattern
@return ZipFile

Delete all entries.
@return ZipFile

Set compression level for new entries.
@return ZipFile
@see ZipCompressionLevel::NORMAL
@see ZipCompressionLevel::SUPER_FAST
@see ZipCompressionLevel::FAST
@see ZipCompressionLevel::MAXIMUM

@throws ZipException
@return ZipFile
@see ZipCompressionLevel::NORMAL
@see ZipCompressionLevel::SUPER_FAST
@see ZipCompressionLevel::FAST
@see ZipCompressionLevel::MAXIMUM

@param int $compressionMethod Compression method.
                              Use {@see ZipCompressionMethod::STORED},
                              {@see ZipCompressionMethod::DEFLATED} or
                              {@see ZipCompressionMethod::BZIP2}.
                              If null, then auto choosing method.
@throws ZipException
@return ZipFile
@see ZipCompressionMethod::STORED
@see ZipCompressionMethod::DEFLATED
@see ZipCompressionMethod::BZIP2

Set password to all input encrypted entries.
@param string $password Password
@return ZipFile

Set password to concrete input entry.
@param string $password Password
@throws ZipException
@return ZipFile

Sets a new password for all files in the archive.
@param string   $password         Password
@param int|null $encryptionMethod Encryption method
@throws ZipEntryNotFoundException
@return ZipFile

Sets a new password of an entry defined by its name.
@param ?int $encryptionMethod
@throws ZipException
@return ZipFile

Disable encryption for all entries that are already in the archive.
@throws ZipEntryNotFoundException
@return ZipFile

Disable encryption of an entry defined by its name.
@throws ZipEntryNotFoundException
@return ZipFile

Undo all changes done in the archive.
@return ZipFile

Undo change archive comment.
@return ZipFile

Revert all changes done to an entry with the given name.
@param string|ZipEntry $entry Entry name or ZipEntry
@return ZipFile

Save as file.
@param string $filename Output filename
@throws ZipException
@return ZipFile

@psalm-suppress InvalidArgument

Save as stream.
@param resource $handle Output stream resource
@throws ZipException
@return ZipFile

Output .ZIP archive as attachment.
Die after output.
@param string      $outputFilename Output filename
@param string|null $mimeType       Mime-Type
@param bool        $attachment     Http Header 'Content-Disposition' if true then attachment otherwise inline
@throws ZipException

@param ?string $mimeType
@throws ZipException

Output .ZIP archive as PSR-7 Response.
@param ResponseInterface $response       Instance PSR-7 Response
@param string            $outputFilename Output filename
@param string|null       $mimeType       Mime-Type
@param bool              $attachment     Http Header 'Content-Disposition' if true then attachment otherwise inline
@throws ZipException
@deprecated deprecated since version 2.0, replace to {@see ZipFile::outputAsPsr7Response}

Output .ZIP archive as PSR-7 Response.
@param ResponseInterface $response       Instance PSR-7 Response
@param string            $outputFilename Output filename
@param string|null       $mimeType       Mime-Type
@param bool              $attachment     Http Header 'Content-Disposition' if true then attachment otherwise inline
@throws ZipException
@since 4.0.0

@noinspection CallableParameterUseCaseInTypeContextInspection

Output .ZIP archive as Symfony Response.
@param string      $outputFilename Output filename
@param string|null $mimeType       Mime-Type
@param bool        $attachment     Http Header 'Content-Disposition' if true then attachment otherwise inline
@throws ZipException
@since 4.0.0

@param resource $handle
@throws ZipException

Returns the zip archive as a string.
@throws ZipException

Event before save or output.

Close zip archive and release input stream.

Save and reopen zip archive.
@throws ZipException
@return ZipFile

Release all resources.

Offset to set.
@see http://php.net/manual/en/arrayaccess.offsetset.php
@param mixed                                           $offset the offset to assign the value to
@param string|\DirectoryIterator|\SplFileInfo|resource $value  the value to set
@throws ZipException
@see ZipFile::addFromString
@see ZipFile::addEmptyDir
@see ZipFile::addFile
@see ZipFile::addFilesFromIterator

Offset to unset.
@see http://php.net/manual/en/arrayaccess.offsetunset.php
@param mixed $offset zip entry name
@throws ZipEntryNotFoundException

Return the current element.
@see http://php.net/manual/en/iterator.current.php
@throws ZipException

Offset to retrieve.
@see http://php.net/manual/en/arrayaccess.offsetget.php
@param mixed $offset zip entry name
@throws ZipException

Return the key of the current element.
@see http://php.net/manual/en/iterator.key.php
@return string|null scalar on success, or null on failure

Move forward to next element.
@see http://php.net/manual/en/iterator.next.php

Checks if current position is valid.
@see http://php.net/manual/en/iterator.valid.php
@return bool The return value will be casted to boolean and then evaluated.
             Returns true on success or false on failure.

Whether a offset exists.
@see http://php.net/manual/en/arrayaccess.offsetexists.php
@param mixed $offset an offset to check for
@return bool true on success or false on failure.
             The return value will be casted to boolean if non-boolean was returned.

Rewind the Iterator to the first element.
@see http://php.net/manual/en/iterator.rewind.php

## References

**Database Tables (inferred)**
- `file`
- `raw`
- `stream`
- `the`
- `directory`
- `glob`
- `regex`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\ZipFile.php`

**Classes**:
- `PhpZip\ZipFile implements \Countable, \ArrayAccess, \Iterator`

**Functions/Methods**:
- `__construct()`
- `createZipReader($inputStream, array $options = [])`
- `createZipWriter()`
- `createZipContainer(?ImmutableZipContainer $sourceContainer = null)`
- `openFile(string $filename, array $options = [])`
- `openFromString(string $data, array $options = [])`
- `openFromStream($handle, array $options = [])`
- `getListFiles()`
- `count()`
- `getArchiveComment()`
- `setArchiveComment(?string $comment = null)`
- `hasEntry(string $entryName)`
- `getEntry(string $entryName)`
- `isDirectory(string $entryName)`
- `getEntryComment(string $entryName)`
- `setEntryComment(string $entryName, ?string $comment = null)`
- `getEntryContents(string $entryName)`
- `getEntryStream(string $entryName)`
- `matcher()`
- `getEntries()`
- `extractTo(string $destDir,
        $entries = null,
        array $options = [],
        ?array &$extractedEntries = [])`
- `addFromString(string $entryName, string $contents, ?int $compressionMethod = null)`
- `normalizeEntryName(string $entryName)`
- `addFromFinder(Finder $finder, array $options = [])`
- `addSplFile(\SplFileInfo $file, ?string $entryName = null, array $options = [])`
- `addZipEntry(ZipEntry $zipEntry)`
- `addFile(string $filename, ?string $entryName = null, ?int $compressionMethod = null)`
- `addFromStream($stream, string $entryName, ?int $compressionMethod = null)`
- `addEmptyDir(string $dirName)`
- `addDir(string $inputDir, string $localPath = '/', ?int $compressionMethod = null)`
- `addDirRecursive(string $inputDir, string $localPath = '/', ?int $compressionMethod = null)`
- `addFilesFromIterator(\Iterator $iterator,
        string $localPath = '/',
        ?int $compressionMethod = null)`
- `addFilesFromGlob(string $inputDir,
        string $globPattern,
        string $localPath = '/',
        ?int $compressionMethod = null)`
- `addGlob(string $inputDir,
        string $globPattern,
        string $localPath = '/',
        bool $recursive = true,
        ?int $compressionMethod = null)`
- `addFilesFromGlobRecursive(string $inputDir,
        string $globPattern,
        string $localPath = '/',
        ?int $compressionMethod = null)`
- `addFilesFromRegex(string $inputDir,
        string $regexPattern,
        string $localPath = '/',
        ?int $compressionMethod = null)`
- `addRegex(string $inputDir,
        string $regexPattern,
        string $localPath = '/',
        bool $recursive = true,
        ?int $compressionMethod = null)`
- `doAddFiles(string $fileSystemDir,
        array $files,
        string $zipPath,
        ?int $compressionMethod = null)`
- `addFilesFromRegexRecursive(string $inputDir,
        string $regexPattern,
        string $localPath = '/',
        ?int $compressionMethod = null)`
- `addAll(array $mapData)`
- `rename(string $oldName, string $newName)`
- `deleteFromName(string $entryName)`
- `deleteFromGlob(string $globPattern)`
- `deleteFromRegex(string $regexPattern)`
- `deleteAll()`
- `setCompressionLevel(int $compressionLevel = ZipCompressionLevel::NORMAL)`
- `setCompressionLevelEntry(string $entryName, int $compressionLevel)`
- `setCompressionMethodEntry(string $entryName, int $compressionMethod)`
- `setReadPassword(string $password)`
- `setReadPasswordEntry(string $entryName, string $password)`
- `setPassword(string $password, ?int $encryptionMethod = ZipEncryptionMethod::WINZIP_AES_256)`
- `setPasswordEntry(string $entryName, string $password, ?int $encryptionMethod = null)`
- `disableEncryption()`
- `disableEncryptionEntry(string $entryName)`
- `unchangeAll()`
- `unchangeArchiveComment()`
- `unchangeEntry($entry)`
- `saveAsFile(string $filename)`
- `saveAsStream($handle)`
- `outputAsAttachment(string $outputFilename, ?string $mimeType = null, bool $attachment = true)`
- `getOutputData(string $outputFilename, ?string $mimeType = null, bool $attachment = true)`
- `getMimeTypeByFilename(string $outputFilename)`
- `outputAsResponse(ResponseInterface $response,
        string $outputFilename,
        ?string $mimeType = null,
        bool $attachment = true)`
- `outputAsPsr7Response(ResponseInterface $response,
        string $outputFilename,
        ?string $mimeType = null,
        bool $attachment = true)`
- `outputAsSymfonyResponse(string $outputFilename,
        ?string $mimeType = null,
        bool $attachment = true)`
- `writeZipToStream($handle)`
- `outputAsString()`
- `onBeforeSave()`
- `close()`
- `rewrite()`
- `__destruct()`
- `offsetSet($offset, $value)`
- `offsetUnset($offset)`
- `current()`
- `offsetGet($offset)`
- `key()`
- `next()`
- `valid()`
- `offsetExists($offset)`
- `rewind()`

